<?php
require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/../includes/blog_repository.php';

mc_admin_require_login();

$csrf       = mc_csrf_token();
$dbOk       = mc_blog_db_available();
$posts      = $dbOk ? mc_blog_admin_list_posts() : [];
$categories = $dbOk ? mc_blog_fetch_all_categories() : [];

$totalPosts = count($posts);
$published  = count(array_filter($posts, fn($p) => $p['status'] === 'published'));
$drafts     = $totalPosts - $published;

// Handle edit mode
$editPost  = null;
$editId    = (int)($_GET['edit'] ?? 0);
if ($editId > 0) $editPost = mc_blog_admin_get_by_id($editId);

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (!mc_csrf_validate($_POST['csrf'] ?? '')) {
        die('Invalid CSRF token');
    }

    $action = $_POST['action'];

    if ($action === 'save_post') {
        try {
            $id    = (int)($_POST['post_id'] ?? 0);
            $title = trim($_POST['title'] ?? '');
            $slug  = trim($_POST['slug'] ?? '') ?: mc_blog_slugify($title);

            $data = [
                'slug'             => $slug,
                'title'            => $title,
                'excerpt'          => trim($_POST['excerpt'] ?? ''),
                'body_html'        => mc_blog_sanitize_body($_POST['body_html'] ?? ''),
                'image_url'        => trim($_POST['image_url'] ?? ''),
                'image_alt'        => trim($_POST['image_alt'] ?? ''),
                'category_label'   => trim($_POST['category_label'] ?? 'Insight'),
                'badge'            => trim($_POST['badge'] ?? 'Article'),
                'accent'           => in_array($_POST['accent'] ?? '', mc_blog_allowed_accents()) ? $_POST['accent'] : 'orange',
                'layout_flip'      => isset($_POST['layout_flip']) ? 1 : 0,
                'author'           => trim($_POST['author'] ?? 'Windzon'),
                'meta_title'       => trim($_POST['meta_title'] ?? '') ?: $title,
                'meta_description' => trim($_POST['meta_description'] ?? ''),
                'meta_keywords'    => trim($_POST['meta_keywords'] ?? ''),
                'status'           => $_POST['status'] ?? 'draft',
                'published_at'     => $_POST['published_at'] ?? date('Y-m-d'),
            ];

            $catIds = array_map('intval', $_POST['category_ids'] ?? []);

            try {
                $newId = mc_blog_admin_save($id, $data, $catIds);
                header('Location: /admin/panel.php?saved=1&section=posts');
                exit;
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }

    if ($action === 'save_category') {
        $pdo = mc_blog_pdo();
        if ($pdo) {
            $cid   = (int)($_POST['cat_id'] ?? 0);
            $cslug = mc_blog_slugify($_POST['cat_label'] ?? '');
            $clbl  = trim($_POST['cat_label'] ?? '');
            if ($clbl && $cslug) {
                if ($cid > 0) {
                    $pdo->prepare("UPDATE mc_blog_categories SET slug=?, label=? WHERE id=?")->execute([$cslug, $clbl, $cid]);
                } else {
                    $pdo->prepare("INSERT INTO mc_blog_categories (slug, label) VALUES (?,?)")->execute([$cslug, $clbl]);
                }
            }
        }
        header('Location: /admin/panel.php?section=categories');
        exit;
    }

    if ($action === 'delete_category') {
        $pdo = mc_blog_pdo();
        $cid = (int)($_POST['cat_id'] ?? 0);
        if ($pdo && $cid > 0) {
            $pdo->prepare("DELETE FROM mc_blog_categories WHERE id=?")->execute([$cid]);
        }
        header('Location: /admin/panel.php?section=categories');
        exit;
    }
}

$section = $_GET['section'] ?? 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin Panel - Windzon</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all-fontawesome.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background: #f5f7fa; }
        .admin-container { display: flex; min-height: 100vh; }
        .sidebar { width: 260px; background: #2c3e50; color: white; padding: 20px 0; position: fixed; height: 100vh; overflow-y: auto; }
        .sidebar-header { padding: 0 20px 20px; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-header h2 { font-size: 20px; font-weight: 700; }
        .sidebar-menu { list-style: none; padding: 20px 0; }
        .sidebar-menu li a { display: flex; align-items: center; padding: 12px 20px; color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.2s; }
        .sidebar-menu li a:hover, .sidebar-menu li a.active { background: rgba(255,255,255,0.1); color: white; }
        .sidebar-menu li a i { width: 24px; margin-right: 12px; }
        .main-content { flex: 1; margin-left: 260px; padding: 30px; }
        .top-bar { background: white; padding: 20px 30px; border-radius: 12px; margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        .top-bar h1 { font-size: 28px; font-weight: 700; color: #2c3e50; margin: 0; }
        .btn-logout { background: #e74c3c; color: white; border: none; padding: 10px 20px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: white; padding: 24px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        .stat-card h3 { font-size: 14px; color: #7f8c8d; font-weight: 600; margin-bottom: 8px; text-transform: uppercase; }
        .stat-card .stat-value { font-size: 36px; font-weight: 700; color: #2c3e50; }
        .card { background: white; border-radius: 12px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); margin-bottom: 20px; }
        .card-header { font-size: 20px; font-weight: 700; margin-bottom: 20px; color: #2c3e50; }
        .table { width: 100%; border-collapse: collapse; }
        .table th { background: #f8f9fa; padding: 12px; text-align: left; font-weight: 600; color: #2c3e50; border-bottom: 2px solid #dee2e6; }
        .table td { padding: 12px; border-bottom: 1px solid #dee2e6; }
        .badge { padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: 600; }
        .badge-success { background: #d4edda; color: #155724; }
        .badge-warning { background: #fff3cd; color: #856404; }
        .btn { padding: 8px 16px; border-radius: 6px; border: none; cursor: pointer; text-decoration: none; display: inline-block; font-weight: 500; }
        .btn-primary { background: #3498db; color: white; }
        .btn-success { background: #27ae60; color: white; }
        .btn-danger { background: #e74c3c; color: white; }
        .btn-sm { padding: 6px 12px; font-size: 14px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; }
        .form-control { width: 100%; padding: 10px 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 14px; }
        .form-control:focus { outline: none; border-color: #3498db; }
        textarea.form-control { min-height: 120px; font-family: inherit; }
        .editor-toolbar { background: #f8f9fa; padding: 10px; border: 2px solid #e0e0e0; border-bottom: none; border-radius: 6px 6px 0 0; display: flex; gap: 5px; }
        .editor-toolbar button { background: white; border: 1px solid #dee2e6; padding: 6px 12px; border-radius: 4px; cursor: pointer; }
        .editor-toolbar button:hover { background: #e9ecef; }
        .editor-content { border: 2px solid #e0e0e0; border-radius: 0 0 6px 6px; padding: 12px; min-height: 300px; max-height: 500px; overflow-y: auto; }
        .editor-content:focus { outline: none; border-color: #3498db; }
        .alert { padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .db-status { display: inline-flex; align-items: center; gap: 8px; padding: 8px 16px; border-radius: 6px; font-size: 14px; font-weight: 600; }
        .db-status.connected { background: #d4edda; color: #155724; }
        .db-status.disconnected { background: #f8d7da; color: #721c24; }
        .accent-picker { display: flex; gap: 10px; flex-wrap: wrap; }
        .accent-swatch { width: 40px; height: 40px; border-radius: 8px; cursor: pointer; border: 3px solid transparent; transition: all 0.2s; }
        .accent-swatch:hover { transform: scale(1.1); }
        .accent-swatch.selected { border-color: #2c3e50; box-shadow: 0 0 0 2px white, 0 0 0 4px #2c3e50; }
        .image-preview { max-width: 200px; margin-top: 10px; border-radius: 8px; }
        .category-checkboxes { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 10px; }
        .category-checkboxes label { display: flex; align-items: center; gap: 8px; }
    </style>
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>🪟 Windzon Blog</h2>
                <p style="font-size: 12px; color: rgba(255,255,255,0.6); margin-top: 5px;">Admin Panel</p>
            </div>
            <ul class="sidebar-menu">
                <li><a href="?section=dashboard" class="<?= $section === 'dashboard' ? 'active' : '' ?>"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="?section=posts" class="<?= $section === 'posts' ? 'active' : '' ?>"><i class="fas fa-file-alt"></i> Posts</a></li>
                <li><a href="?section=new" class="<?= $section === 'new' ? 'active' : '' ?>"><i class="fas fa-plus"></i> New Post</a></li>
                <li><a href="?section=categories" class="<?= $section === 'categories' ? 'active' : '' ?>"><i class="fas fa-tags"></i> Categories</a></li>
            </ul>
        </aside>

        <main class="main-content">
            <div class="top-bar">
                <h1><?= ucfirst($section) ?></h1>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div class="db-status <?= $dbOk ? 'connected' : 'disconnected' ?>">
                        <i class="fas fa-<?= $dbOk ? 'check-circle' : 'exclamation-triangle' ?>"></i>
                        <?= $dbOk ? 'DB Connected' : 'DB Disconnected' ?>
                    </div>
                    <a href="/admin/logout.php" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>

            <?php if (!$dbOk): ?>
                <div class="alert alert-danger">
                    <strong>Database not connected!</strong> <?= htmlspecialchars(mc_blog_db_diagnostic_message()) ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['saved'])): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> Post saved successfully!
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['deleted'])): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> Post deleted successfully!
                </div>
            <?php endif; ?>

            <?php if ($section === 'dashboard'): ?>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Total Posts</h3>
                        <div class="stat-value"><?= $totalPosts ?></div>
                    </div>
                    <div class="stat-card">
                        <h3>Published</h3>
                        <div class="stat-value" style="color: #27ae60;"><?= $published ?></div>
                    </div>
                    <div class="stat-card">
                        <h3>Drafts</h3>
                        <div class="stat-value" style="color: #f39c12;"><?= $drafts ?></div>
                    </div>
                    <div class="stat-card">
                        <h3>Categories</h3>
                        <div class="stat-value"><?= count($categories) ?></div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Recent Posts</div>
                    <?php if (empty($posts)): ?>
                        <p style="color: #7f8c8d;">No posts yet. <a href="?section=new">Create your first post</a></p>
                    <?php else: ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (array_slice($posts, 0, 10) as $post): ?>
                                    <tr>
                                        <td><strong><?= htmlspecialchars($post['title']) ?></strong></td>
                                        <td><span class="badge badge-<?= $post['status'] === 'published' ? 'success' : 'warning' ?>"><?= ucfirst($post['status']) ?></span></td>
                                        <td><?= mc_blog_format_display_date($post['published_at']) ?></td>
                                        <td>
                                            <a href="?section=new&edit=<?= $post['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($section === 'posts'): ?>
                <div class="card">
                    <div class="card-header">All Posts</div>
                    <?php if (empty($posts)): ?>
                        <p style="color: #7f8c8d;">No posts yet. <a href="?section=new">Create your first post</a></p>
                    <?php else: ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($posts as $post): ?>
                                    <tr>
                                        <td><strong><?= htmlspecialchars($post['title']) ?></strong></td>
                                        <td><?= htmlspecialchars($post['author']) ?></td>
                                        <td><span class="badge badge-<?= $post['status'] === 'published' ? 'success' : 'warning' ?>"><?= ucfirst($post['status']) ?></span></td>
                                        <td><?= mc_blog_format_display_date($post['published_at']) ?></td>
                                        <td>
                                            <a href="?section=new&edit=<?= $post['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="/admin/delete.php" style="display: inline;" onsubmit="return confirm('Delete this post?');">
                                                <input type="hidden" name="csrf" value="<?= $csrf ?>">
                                                <input type="hidden" name="id" value="<?= $post['id'] ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($section === 'new'): ?>
                <div class="card">
                    <div class="card-header"><?= $editPost ? 'Edit Post' : 'New Post' ?></div>
                    <form method="POST">
                        <input type="hidden" name="csrf" value="<?= $csrf ?>">
                        <input type="hidden" name="action" value="save_post">
                        <input type="hidden" name="post_id" value="<?= $editPost['id'] ?? 0 ?>">

                        <div class="form-group">
                            <label>Title *</label>
                            <input type="text" name="title" class="form-control" required value="<?= htmlspecialchars($editPost['title'] ?? '') ?>">
                        </div>

                        <div class="form-group">
                            <label>Slug (URL)</label>
                            <input type="text" name="slug" class="form-control" value="<?= htmlspecialchars($editPost['slug'] ?? '') ?>" placeholder="auto-generated-from-title">
                        </div>

                        <div class="form-group">
                            <label>Excerpt *</label>
                            <textarea name="excerpt" class="form-control" required><?= htmlspecialchars($editPost['excerpt'] ?? '') ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <div class="editor-toolbar">
                                <button type="button" onclick="document.execCommand('bold')"><i class="fas fa-bold"></i></button>
                                <button type="button" onclick="document.execCommand('italic')"><i class="fas fa-italic"></i></button>
                                <button type="button" onclick="document.execCommand('insertUnorderedList')"><i class="fas fa-list-ul"></i></button>
                                <button type="button" onclick="document.execCommand('insertOrderedList')"><i class="fas fa-list-ol"></i></button>
                                <button type="button" onclick="document.execCommand('formatBlock', false, 'h2')">H2</button>
                                <button type="button" onclick="document.execCommand('formatBlock', false, 'h3')">H3</button>
                            </div>
                            <div class="editor-content" contenteditable="true" id="editor"><?= $editPost['body'] ?? '' ?></div>
                            <input type="hidden" name="body_html" id="body_html">
                        </div>

                        <div class="form-group">
                            <label>Featured Image URL</label>
                            <input type="text" name="image_url" class="form-control" id="image_url" value="<?= htmlspecialchars($editPost['image_url'] ?? '') ?>">
                            <div id="image_preview_container"></div>
                        </div>

                        <div class="form-group">
                            <label>Image Alt Text</label>
                            <input type="text" name="image_alt" class="form-control" value="<?= htmlspecialchars($editPost['image_alt'] ?? '') ?>">
                        </div>

                        <div class="form-group">
                            <label>Category Label (shown on card)</label>
                            <input type="text" name="category_label" class="form-control" value="<?= htmlspecialchars($editPost['category_label'] ?? 'Insight') ?>">
                        </div>

                        <div class="form-group">
                            <label>Badge</label>
                            <input type="text" name="badge" class="form-control" value="<?= htmlspecialchars($editPost['badge'] ?? 'Article') ?>">
                        </div>

                        <div class="form-group">
                            <label>Accent Color</label>
                            <div class="accent-picker">
                                <?php
                                $accents = ['blue' => '#3498db', 'indigo' => '#6610f2', 'violet' => '#9b59b6', 'slate' => '#95a5a6', 'emerald' => '#27ae60', 'amber' => '#f39c12', 'pink' => '#e91e63', 'teal' => '#1abc9c', 'sky' => '#00bcd4', 'orange' => '#e67e22'];
                                $currentAccent = $editPost['accent'] ?? 'orange';
                                foreach ($accents as $name => $color):
                                ?>
                                    <div class="accent-swatch <?= $currentAccent === $name ? 'selected' : '' ?>" style="background: <?= $color ?>;" data-accent="<?= $name ?>" onclick="selectAccent('<?= $name ?>')"></div>
                                <?php endforeach; ?>
                            </div>
                            <input type="hidden" name="accent" id="accent_input" value="<?= $currentAccent ?>">
                        </div>

                        <div class="form-group">
                            <label>Filter Categories</label>
                            <div class="category-checkboxes">
                                <?php foreach ($categories as $cat): ?>
                                    <label>
                                        <input type="checkbox" name="category_ids[]" value="<?= $cat['id'] ?>" <?= isset($editPost['category_ids']) && in_array($cat['id'], $editPost['category_ids']) ? 'checked' : '' ?>>
                                        <?= htmlspecialchars($cat['label']) ?>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($editPost['author'] ?? 'Windzon') ?>">
                        </div>

                        <div class="form-group">
                            <label>Status *</label>
                            <select name="status" class="form-control">
                                <option value="draft" <?= ($editPost['status'] ?? 'draft') === 'draft' ? 'selected' : '' ?>>Draft</option>
                                <option value="published" <?= ($editPost['status'] ?? '') === 'published' ? 'selected' : '' ?>>Published</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Publish Date</label>
                            <input type="date" name="published_at" class="form-control" value="<?= $editPost['published_at'] ?? date('Y-m-d') ?>">
                        </div>

                        <div class="form-group">
                            <label>Meta Title (SEO)</label>
                            <input type="text" name="meta_title" class="form-control" value="<?= htmlspecialchars($editPost['meta_title'] ?? '') ?>">
                        </div>

                        <div class="form-group">
                            <label>Meta Description (SEO)</label>
                            <textarea name="meta_description" class="form-control"><?= htmlspecialchars($editPost['meta_description'] ?? '') ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Meta Keywords (SEO)</label>
                            <input type="text" name="meta_keywords" class="form-control" value="<?= htmlspecialchars($editPost['meta_keywords'] ?? '') ?>">
                        </div>

                        <button type="submit" class="btn btn-success" style="padding: 12px 32px; font-size: 16px;">
                            <i class="fas fa-save"></i> <?= $editPost ? 'Update Post' : 'Publish Post' ?>
                        </button>
                    </form>
                </div>
            <?php endif; ?>

            <?php if ($section === 'categories'): ?>
                <div class="card">
                    <div class="card-header">Manage Categories</div>
                    <form method="POST" style="margin-bottom: 30px;">
                        <input type="hidden" name="csrf" value="<?= $csrf ?>">
                        <input type="hidden" name="action" value="save_category">
                        <div style="display: flex; gap: 10px;">
                            <input type="text" name="cat_label" class="form-control" placeholder="New category name" required>
                            <button type="submit" class="btn btn-success">Add Category</button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Label</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $cat): ?>
                                <tr>
                                    <td><strong><?= htmlspecialchars($cat['label']) ?></strong></td>
                                    <td><code><?= htmlspecialchars($cat['slug']) ?></code></td>
                                    <td>
                                        <form method="POST" style="display: inline;" onsubmit="return confirm('Delete this category?');">
                                            <input type="hidden" name="csrf" value="<?= $csrf ?>">
                                            <input type="hidden" name="action" value="delete_category">
                                            <input type="hidden" name="cat_id" value="<?= $cat['id'] ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </main>
    </div>

    <script>
        // Save editor content to hidden field before submit
        document.querySelector('form')?.addEventListener('submit', function() {
            const editor = document.getElementById('editor');
            const hiddenField = document.getElementById('body_html');
            if (editor && hiddenField) {
                hiddenField.value = editor.innerHTML;
            }
        });

        // Accent color selector
        function selectAccent(accent) {
            document.querySelectorAll('.accent-swatch').forEach(el => el.classList.remove('selected'));
            event.target.classList.add('selected');
            document.getElementById('accent_input').value = accent;
        }

        // Image preview
        const imageUrlInput = document.getElementById('image_url');
        if (imageUrlInput) {
            imageUrlInput.addEventListener('input', function() {
                const container = document.getElementById('image_preview_container');
                if (this.value) {
                    container.innerHTML = `<img src="${this.value}" class="image-preview" alt="Preview">`;
                } else {
                    container.innerHTML = '';
                }
            });
            // Trigger on load if value exists
            if (imageUrlInput.value) {
                imageUrlInput.dispatchEvent(new Event('input'));
            }
        }
    </script>
</body>
</html>
