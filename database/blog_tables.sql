-- MetaCortex Blog System Database Tables
-- MySQL 8.0+ / MariaDB 10.5+

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

CREATE TABLE IF NOT EXISTS `mc_blog_categories` (
  `id`    TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug`  VARCHAR(32) NOT NULL,
  `label` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default categories for Windzon (Windows, Doors, Blinds)
INSERT INTO `mc_blog_categories` (`slug`, `label`) VALUES
('windows', 'Windows'),
('doors', 'Doors'),
('blinds', 'Blinds'),
('maintenance', 'Maintenance & Tips'),
('projects', 'Projects & Ideas')
ON DUPLICATE KEY UPDATE `label` = VALUES(`label`);

CREATE TABLE IF NOT EXISTS `mc_blog_post_categories` (
  `post_id`     BIGINT UNSIGNED NOT NULL,
  `category_id` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`post_id`, `category_id`),
  CONSTRAINT `fk_post` FOREIGN KEY (`post_id`) REFERENCES `mc_blog_posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_cat`  FOREIGN KEY (`category_id`) REFERENCES `mc_blog_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
