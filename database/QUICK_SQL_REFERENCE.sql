-- ============================================
-- WINDZON BLOG SYSTEM - QUICK SQL REFERENCE
-- ============================================

-- STEP 1: CREATE DATABASE
-- ============================================
CREATE DATABASE windzon_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE windzon_blog;

-- STEP 2: CREATE TABLES
-- ============================================

-- Posts Table
CREATE TABLE IF NOT EXISTS `mc_blog_posts` (
  `id`               BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `public_id`        CHAR(32) NOT NULL,
  `slug`             VARCHAR(190) NOT NULL,
  `title`            VARCHAR(500) NOT NULL,
  `excerpt`          TEXT NOT NULL,
  `body_html`        MEDIUMTEXT NOT NULL,
  `image_url`        VARCHAR(2048) NOT NULL DEFAULT '',
  `image_alt`        VARCHAR(500) NOT NULL DEFAULT '',
  `category_label`   VARCHAR(190) NOT NULL DEFAULT 'Insight',
  `badge`            VARCHAR(190) NOT NULL DEFAULT 'Article',
  `accent`           VARCHAR(32) NOT NULL DEFAULT 'blue',
  `layout_flip`      TINYINT(1) NOT NULL DEFAULT 0,
  `author`           VARCHAR(190) NOT NULL DEFAULT 'Windzon',
  `meta_title`       VARCHAR(500) NOT NULL DEFAULT '',
  `meta_description` VARCHAR(1000) NOT NULL DEFAULT '',
  `meta_keywords`    VARCHAR(500) NOT NULL DEFAULT '',
  `status`           ENUM('draft','published') NOT NULL DEFAULT 'draft',
  `published_at`     DATE NOT NULL,
  `created_at`       DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
  `updated_at`       DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3) ON UPDATE CURRENT_TIMESTAMP(3),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_slug` (`slug`),
  UNIQUE KEY `uq_public_id` (`public_id`),
  KEY `idx_status_published` (`status`, `published_at` DESC)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Categories Table
CREATE TABLE IF NOT EXISTS `mc_blog_categories` (
  `id`    TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug`  VARCHAR(32) NOT NULL,
  `label` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Post-Category Relationship Table
CREATE TABLE IF NOT EXISTS `mc_blog_post_categories` (
  `post_id`     BIGINT UNSIGNED NOT NULL,
  `category_id` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`post_id`, `category_id`),
  CONSTRAINT `fk_post` FOREIGN KEY (`post_id`) REFERENCES `mc_blog_posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_cat`  FOREIGN KEY (`category_id`) REFERENCES `mc_blog_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- STEP 3: INSERT DEFAULT CATEGORIES
-- ============================================
INSERT INTO `mc_blog_categories` (`slug`, `label`) VALUES
('windows', 'Windows'),
('doors', 'Doors'),
('blinds', 'Blinds'),
('maintenance', 'Maintenance & Tips'),
('projects', 'Projects & Ideas')
ON DUPLICATE KEY UPDATE `label` = VALUES(`label`);

-- STEP 4: VERIFY INSTALLATION
-- ============================================

-- Check tables exist
SHOW TABLES;

-- Check categories
SELECT * FROM mc_blog_categories;

-- Check posts (will be empty until you create some)
SELECT COUNT(*) as total_posts FROM mc_blog_posts;

-- ============================================
-- USEFUL QUERIES FOR MANAGEMENT
-- ============================================

-- View all published posts
SELECT id, title, author, status, published_at 
FROM mc_blog_posts 
WHERE status = 'published' 
ORDER BY published_at DESC;

-- View all drafts
SELECT id, title, author, created_at 
FROM mc_blog_posts 
WHERE status = 'draft' 
ORDER BY created_at DESC;

-- Count posts by status
SELECT status, COUNT(*) as count 
FROM mc_blog_posts 
GROUP BY status;

-- View posts with their categories
SELECT 
    p.id,
    p.title,
    p.status,
    GROUP_CONCAT(c.label SEPARATOR ', ') as categories
FROM mc_blog_posts p
LEFT JOIN mc_blog_post_categories pc ON p.id = pc.post_id
LEFT JOIN mc_blog_categories c ON pc.category_id = c.id
GROUP BY p.id, p.title, p.status
ORDER BY p.published_at DESC;

-- Find posts by category
SELECT p.title, p.published_at
FROM mc_blog_posts p
JOIN mc_blog_post_categories pc ON p.id = pc.post_id
JOIN mc_blog_categories c ON pc.category_id = c.id
WHERE c.slug = 'windows' AND p.status = 'published'
ORDER BY p.published_at DESC;

-- ============================================
-- MAINTENANCE QUERIES
-- ============================================

-- Delete a specific post (replace 1 with post ID)
DELETE FROM mc_blog_posts WHERE id = 1;

-- Delete all draft posts older than 30 days
DELETE FROM mc_blog_posts 
WHERE status = 'draft' 
AND created_at < DATE_SUB(NOW(), INTERVAL 30 DAY);

-- Update post status
UPDATE mc_blog_posts SET status = 'published' WHERE id = 1;

-- Change post slug
UPDATE mc_blog_posts SET slug = 'new-slug' WHERE id = 1;

-- Add a new category
INSERT INTO mc_blog_categories (slug, label) VALUES ('new-category', 'New Category');

-- Delete a category (will also remove post associations)
DELETE FROM mc_blog_categories WHERE slug = 'category-slug';

-- ============================================
-- BACKUP AND RESTORE
-- ============================================

-- Backup database (run from command line)
-- mysqldump -u root -p windzon_blog > windzon_blog_backup.sql

-- Restore database (run from command line)
-- mysql -u root -p windzon_blog < windzon_blog_backup.sql

-- ============================================
-- RESET DATABASE (CAUTION: DELETES ALL DATA)
-- ============================================

-- Uncomment and run these if you want to start fresh
-- DROP TABLE IF EXISTS mc_blog_post_categories;
-- DROP TABLE IF EXISTS mc_blog_posts;
-- DROP TABLE IF EXISTS mc_blog_categories;

-- Then re-run the CREATE TABLE statements above

-- ============================================
-- PERFORMANCE OPTIMIZATION
-- ============================================

-- Check table sizes
SELECT 
    table_name AS 'Table',
    ROUND(((data_length + index_length) / 1024 / 1024), 2) AS 'Size (MB)'
FROM information_schema.TABLES
WHERE table_schema = 'windzon_blog'
ORDER BY (data_length + index_length) DESC;

-- Optimize tables
OPTIMIZE TABLE mc_blog_posts;
OPTIMIZE TABLE mc_blog_categories;
OPTIMIZE TABLE mc_blog_post_categories;

-- ============================================
-- TROUBLESHOOTING
-- ============================================

-- Check for duplicate slugs
SELECT slug, COUNT(*) as count 
FROM mc_blog_posts 
GROUP BY slug 
HAVING count > 1;

-- Find posts without categories
SELECT p.id, p.title
FROM mc_blog_posts p
LEFT JOIN mc_blog_post_categories pc ON p.id = pc.post_id
WHERE pc.post_id IS NULL;

-- Check database character set
SHOW CREATE DATABASE windzon_blog;

-- Check table character sets
SELECT 
    table_name,
    table_collation
FROM information_schema.tables
WHERE table_schema = 'windzon_blog';
