<?php
/**
 * Blog Database Layer (PDO)
 * Handles all database connections and queries for the blog system
 */

/**
 * Get PDO connection instance
 * @return PDO|null
 */
function mc_blog_pdo() {
    static $pdo = null;
    if ($pdo !== null) return $pdo;

    // Check if pdo_mysql extension is available
    if (!extension_loaded('pdo_mysql')) {
        error_log('Blog DB: pdo_mysql extension not loaded');
        return null;
    }

    // Try environment variables first
    $envDsn  = getenv('MC_BLOG_DB_DSN');
    $envUser = getenv('MC_BLOG_DB_USER');
    $envPass = getenv('MC_BLOG_DB_PASS');

    if ($envDsn && $envUser !== false) {
        try {
            $pdo = new PDO($envDsn, $envUser, $envPass, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
            return $pdo;
        } catch (PDOException $e) {
            error_log('Blog DB env connection failed: ' . $e->getMessage());
        }
    }

    // Try config file
    $configPath = __DIR__ . '/blog_db_config.php';
    if (!file_exists($configPath)) {
        error_log('Blog DB: config file not found at ' . $configPath);
        return null;
    }

    $config = require $configPath;
    if (!is_array($config)) {
        error_log('Blog DB: config file must return an array');
        return null;
    }

    // Build DSN from config
    $dsnVariants = [];
    
    if (!empty($config['dsn'])) {
        $dsnVariants[] = $config['dsn'];
    }
    
    if (!empty($config['unix_socket']) && !empty($config['database'])) {
        $dsnVariants[] = sprintf(
            'mysql:unix_socket=%s;dbname=%s;charset=utf8mb4',
            $config['unix_socket'],
            $config['database']
        );
    }
    
    if (!empty($config['host']) && !empty($config['database'])) {
        $dsnVariants[] = sprintf(
            'mysql:host=%s;dbname=%s;charset=utf8mb4',
            $config['host'],
            $config['database']
        );
        // Try with port 3306 explicitly
        $dsnVariants[] = sprintf(
            'mysql:host=%s;port=3306;dbname=%s;charset=utf8mb4',
            $config['host'],
            $config['database']
        );
        // Try localhost if 127.0.0.1 was specified
        if ($config['host'] === '127.0.0.1') {
            $dsnVariants[] = sprintf(
                'mysql:host=localhost;dbname=%s;charset=utf8mb4',
                $config['database']
            );
        }
    }

    $username = $config['username'] ?? 'root';
    $password = $config['password'] ?? '';

    // Try each DSN variant
    foreach ($dsnVariants as $dsn) {
        try {
            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
            return $pdo;
        } catch (PDOException $e) {
            error_log('Blog DB connection attempt failed: ' . $e->getMessage());
            continue;
        }
    }

    return null;
}

/**
 * Check if database is available
 * @return bool
 */
function mc_blog_db_available() {
    $pdo = mc_blog_pdo();
    if (!$pdo) return false;
    
    try {
        $pdo->query('SELECT 1');
        return true;
    } catch (PDOException $e) {
        return false;
    }
}

/**
 * Get diagnostic message for database connection
 * @return string
 */
function mc_blog_db_diagnostic_message() {
    if (!extension_loaded('pdo_mysql')) {
        return 'PDO MySQL extension is not enabled. Enable it in php.ini and restart your web server.';
    }

    $configPath = __DIR__ . '/blog_db_config.php';
    if (!file_exists($configPath)) {
        return 'Database config file not found. Copy includes/blog_db_config.example.php to includes/blog_db_config.php and fill in your credentials.';
    }

    $pdo = mc_blog_pdo();
    if (!$pdo) {
        return 'Could not connect to database. Check your credentials in includes/blog_db_config.php and ensure MySQL is running.';
    }

    return 'Database connected successfully.';
}

/**
 * Fetch all published posts
 * @return array
 */
function mc_blog_fetch_published_posts() {
    $pdo = mc_blog_pdo();
    if (!$pdo) return [];

    try {
        $stmt = $pdo->query("
            SELECT * FROM mc_blog_posts 
            WHERE status = 'published' 
            ORDER BY published_at DESC, created_at DESC
        ");
        return array_map('mc_blog_row_to_post', $stmt->fetchAll());
    } catch (PDOException $e) {
        error_log('Blog DB fetch published posts error: ' . $e->getMessage());
        return [];
    }
}

/**
 * Find post by slug
 * @param string $slug
 * @param bool $publishedOnly
 * @return array|null
 */
function mc_blog_find_post_by_slug($slug, $publishedOnly = true) {
    $pdo = mc_blog_pdo();
    if (!$pdo) return null;

    try {
        $sql = "SELECT * FROM mc_blog_posts WHERE slug = ?";
        if ($publishedOnly) {
            $sql .= " AND status = 'published'";
        }
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$slug]);
        $row = $stmt->fetch();
        
        return $row ? mc_blog_row_to_post($row) : null;
    } catch (PDOException $e) {
        error_log('Blog DB find by slug error: ' . $e->getMessage());
        return null;
    }
}

/**
 * Admin: List all posts
 * @return array
 */
function mc_blog_admin_list_posts() {
    $pdo = mc_blog_pdo();
    if (!$pdo) return [];

    try {
        $stmt = $pdo->query("
            SELECT * FROM mc_blog_posts 
            ORDER BY created_at DESC
        ");
        return array_map('mc_blog_row_to_post', $stmt->fetchAll());
    } catch (PDOException $e) {
        error_log('Blog DB admin list posts error: ' . $e->getMessage());
        return [];
    }
}

/**
 * Admin: Get post by ID
 * @param int $id
 * @return array|null
 */
function mc_blog_admin_get_by_id($id) {
    $pdo = mc_blog_pdo();
    if (!$pdo) return null;

    try {
        $stmt = $pdo->prepare("SELECT * FROM mc_blog_posts WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        
        if (!$row) return null;
        
        $post = mc_blog_row_to_post($row);
        
        // Fetch categories
        $stmt = $pdo->prepare("
            SELECT category_id FROM mc_blog_post_categories WHERE post_id = ?
        ");
        $stmt->execute([$id]);
        $post['category_ids'] = array_map('intval', $stmt->fetchAll(PDO::FETCH_COLUMN));
        
        return $post;
    } catch (PDOException $e) {
        error_log('Blog DB admin get by id error: ' . $e->getMessage());
        return null;
    }
}

/**
 * Admin: Save post (create or update)
 * @param int $id (0 for new post)
 * @param array $data
 * @param array $categoryIds
 * @return int Post ID
 */
function mc_blog_admin_save($id, $data, $categoryIds = []) {
    $pdo = mc_blog_pdo();
    if (!$pdo) throw new Exception('Database not available');

    try {
        $pdo->beginTransaction();

        if ($id > 0) {
            // Update existing post
            $stmt = $pdo->prepare("
                UPDATE mc_blog_posts SET
                    slug = ?, title = ?, excerpt = ?, body_html = ?,
                    image_url = ?, image_alt = ?, category_label = ?, badge = ?,
                    accent = ?, layout_flip = ?, author = ?,
                    meta_title = ?, meta_description = ?, meta_keywords = ?,
                    status = ?, published_at = ?
                WHERE id = ?
            ");
            $stmt->execute([
                $data['slug'], $data['title'], $data['excerpt'], $data['body_html'],
                $data['image_url'], $data['image_alt'], $data['category_label'], $data['badge'],
                $data['accent'], $data['layout_flip'], $data['author'],
                $data['meta_title'], $data['meta_description'], $data['meta_keywords'],
                $data['status'], $data['published_at'],
                $id
            ]);
        } else {
            // Create new post
            $publicId = bin2hex(random_bytes(16));
            $stmt = $pdo->prepare("
                INSERT INTO mc_blog_posts (
                    public_id, slug, title, excerpt, body_html,
                    image_url, image_alt, category_label, badge,
                    accent, layout_flip, author,
                    meta_title, meta_description, meta_keywords,
                    status, published_at
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([
                $publicId, $data['slug'], $data['title'], $data['excerpt'], $data['body_html'],
                $data['image_url'], $data['image_alt'], $data['category_label'], $data['badge'],
                $data['accent'], $data['layout_flip'], $data['author'],
                $data['meta_title'], $data['meta_description'], $data['meta_keywords'],
                $data['status'], $data['published_at']
            ]);
            $id = (int)$pdo->lastInsertId();
        }

        // Update categories
        $pdo->prepare("DELETE FROM mc_blog_post_categories WHERE post_id = ?")->execute([$id]);
        if (!empty($categoryIds)) {
            $stmt = $pdo->prepare("INSERT INTO mc_blog_post_categories (post_id, category_id) VALUES (?, ?)");
            foreach ($categoryIds as $catId) {
                $stmt->execute([$id, $catId]);
            }
        }

        $pdo->commit();
        return $id;
    } catch (PDOException $e) {
        $pdo->rollBack();
        error_log('Blog DB save error: ' . $e->getMessage());
        throw new Exception('Failed to save post: ' . $e->getMessage());
    }
}

/**
 * Admin: Delete post
 * @param int $id
 * @return bool
 */
function mc_blog_admin_delete($id) {
    $pdo = mc_blog_pdo();
    if (!$pdo) return false;

    try {
        $stmt = $pdo->prepare("DELETE FROM mc_blog_posts WHERE id = ?");
        $stmt->execute([$id]);
        return true;
    } catch (PDOException $e) {
        error_log('Blog DB delete error: ' . $e->getMessage());
        return false;
    }
}

/**
 * Fetch all categories
 * @return array
 */
function mc_blog_fetch_all_categories() {
    $pdo = mc_blog_pdo();
    if (!$pdo) return [];

    try {
        $stmt = $pdo->query("SELECT * FROM mc_blog_categories ORDER BY label ASC");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log('Blog DB fetch categories error: ' . $e->getMessage());
        return [];
    }
}

/**
 * Convert database row to post array
 * @param array $row
 * @return array
 */
function mc_blog_row_to_post($row) {
    return [
        'id'               => (int)$row['id'],
        'public_id'        => $row['public_id'],
        'slug'             => $row['slug'],
        'title'            => $row['title'],
        'excerpt'          => $row['excerpt'],
        'body'             => $row['body_html'],
        'image_url'        => $row['image_url'],
        'image_alt'        => $row['image_alt'],
        'category_label'   => $row['category_label'],
        'badge'            => $row['badge'],
        'accent'           => $row['accent'],
        'layout_flip'      => (bool)$row['layout_flip'],
        'author'           => $row['author'],
        'meta_title'       => $row['meta_title'],
        'meta_description' => $row['meta_description'],
        'meta_keywords'    => $row['meta_keywords'],
        'status'           => $row['status'],
        'published_at'     => $row['published_at'],
        'created_at'       => $row['created_at'],
        'updated_at'       => $row['updated_at'],
    ];
}
