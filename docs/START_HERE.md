# 🚀 START HERE - Windzon Blog System

## What Has Been Done

Your Windzon website now has a **complete, database-driven blog system** that replaces the static blog posts. Here's what's ready:

✅ **Dynamic blog listing** with pagination and filtering  
✅ **Admin panel** to create, edit, and manage posts  
✅ **Database schema** with 3 tables  
✅ **6 sample blog posts** ready to import  
✅ **Image upload** functionality  
✅ **SEO optimization** for each post  
✅ **Security features** (CSRF, authentication, sanitization)

## 🎯 Quick Start (5 Minutes)

### Step 1: Create Database Tables

**Option A - Using phpMyAdmin (Easiest):**
1. Open phpMyAdmin in your browser
2. Create a new database called `windzon_blog`
3. Select the database
4. Click "SQL" tab
5. Open the file `database/blog_tables.sql` in a text editor
6. Copy ALL the contents
7. Paste into phpMyAdmin SQL box
8. Click "Go"

**Option B - Using MySQL Command Line:**
```bash
mysql -u root -p
```
Then paste these commands:
```sql
CREATE DATABASE windzon_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE windzon_blog;
SOURCE /full/path/to/windzon/database/blog_tables.sql;
```

✅ **Verify:** You should see 3 tables created and 5 categories inserted.

### Step 2: Configure Database Connection

```bash
cp includes/blog_db_config.example.php includes/blog_db_config.php
```

Edit `includes/blog_db_config.php` with your database credentials:
```php
<?php
return [
    'dsn'      => 'mysql:host=127.0.0.1;dbname=windzon_blog;charset=utf8mb4',
    'username' => 'root',           // Your MySQL username
    'password' => 'your_password',  // Your MySQL password
];
```

**Common settings:**
- MAMP/XAMPP: `host=127.0.0.1`
- cPanel: `host=localhost`

### Step 3: Configure Admin Password

```bash
cp admin/config.example.php admin/config.php
```

Edit `admin/config.php`:
```php
<?php
return [
    'password' => 'YourStrongPassword123!',  // Choose a strong password
];
```

### Step 4: Set Permissions

```bash
chmod 755 uploads/
```

### Step 5: Test It!

1. **Go to admin panel:** `http://your-domain.com/admin/panel.php`
2. **Log in** with your password
3. **Check the green "DB Connected" indicator** in the top right
4. **Create a test post:**
   - Click "New Post"
   - Title: "My First Post"
   - Excerpt: "This is my first blog post"
   - Status: Published
   - Click "Publish Post"
5. **View your blog:** `http://your-domain.com/blog.php`

## 📁 What Files Were Created

```
windzon/
├── database/
│   ├── blog_tables.sql              ← Run this to create tables
│   ├── sample_blog_posts.sql        ← Optional: 6 sample posts
│   ├── SETUP_INSTRUCTIONS.md        ← Database setup guide
│   └── QUICK_SQL_REFERENCE.sql      ← Useful SQL queries
│
├── includes/
│   ├── blog_db_config.example.php   ← Copy to blog_db_config.php
│   ├── blog_db.php                  ← Database layer (don't edit)
│   └── blog_repository.php          ← Business logic (don't edit)
│
├── admin/
│   ├── config.example.php           ← Copy to config.php
│   ├── bootstrap.php                ← Auth system (don't edit)
│   ├── login.php                    ← Login page
│   ├── logout.php                   ← Logout handler
│   ├── panel.php                    ← Main admin panel
│   ├── upload.php                   ← Image upload
│   └── delete.php                   ← Delete posts
│
├── uploads/                         ← Uploaded images go here
│   └── .gitkeep
│
├── blog.php                         ← Updated to use database
├── blog-single.php                  ← Updated to use database
│
├── START_HERE.md                    ← This file
├── BLOG_SETUP_GUIDE.md              ← Complete guide
├── IMPLEMENTATION_SUMMARY.md        ← Technical overview
└── SETUP_CHECKLIST.md               ← Verification checklist
```

## 🗄️ The SQL Queries You Need

### Create Database and Tables:

```sql
-- 1. Create database
CREATE DATABASE windzon_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE windzon_blog;

-- 2. Create posts table
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

-- 3. Create categories table
CREATE TABLE IF NOT EXISTS `mc_blog_categories` (
  `id`    TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug`  VARCHAR(32) NOT NULL,
  `label` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 4. Insert default categories
INSERT INTO `mc_blog_categories` (`slug`, `label`) VALUES
('windows', 'Windows'),
('doors', 'Doors'),
('blinds', 'Blinds'),
('maintenance', 'Maintenance & Tips'),
('projects', 'Projects & Ideas')
ON DUPLICATE KEY UPDATE `label` = VALUES(`label`);

-- 5. Create relationship table
CREATE TABLE IF NOT EXISTS `mc_blog_post_categories` (
  `post_id`     BIGINT UNSIGNED NOT NULL,
  `category_id` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`post_id`, `category_id`),
  CONSTRAINT `fk_post` FOREIGN KEY (`post_id`) REFERENCES `mc_blog_posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_cat`  FOREIGN KEY (`category_id`) REFERENCES `mc_blog_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

**OR** just run the file:
```bash
mysql -u root -p windzon_blog < database/blog_tables.sql
```

## 🎨 Optional: Add Sample Posts

To see the blog in action immediately, import 6 sample posts:

```bash
mysql -u root -p windzon_blog < database/sample_blog_posts.sql
```

Or run the contents of `database/sample_blog_posts.sql` in phpMyAdmin.

## 🔧 Configuration Examples

### For MAMP (macOS):
```php
// includes/blog_db_config.php
return [
    'dsn'      => 'mysql:host=127.0.0.1;dbname=windzon_blog;charset=utf8mb4',
    'username' => 'root',
    'password' => 'root',
];
```

### For XAMPP (Windows):
```php
// includes/blog_db_config.php
return [
    'dsn'      => 'mysql:host=127.0.0.1;dbname=windzon_blog;charset=utf8mb4',
    'username' => 'root',
    'password' => '',  // Usually empty for XAMPP
];
```

### For cPanel Hosting:
```php
// includes/blog_db_config.php
return [
    'dsn'      => 'mysql:host=localhost;dbname=username_windzon;charset=utf8mb4',
    'username' => 'username_dbuser',
    'password' => 'your_cpanel_db_password',
];
```

## 🐛 Troubleshooting

### "Database not connected" error

1. **Check PDO MySQL extension:**
   ```bash
   php -m | grep pdo_mysql
   ```
   If not listed, enable in `php.ini`:
   ```ini
   extension=pdo_mysql
   ```

2. **Test database connection:**
   ```bash
   mysql -u root -p -e "USE windzon_blog; SELECT 1;"
   ```

3. **Check credentials** in `includes/blog_db_config.php`

### "Can't upload images"

```bash
chmod 755 uploads/
# or if that doesn't work:
chmod 777 uploads/
```

### "Can't log in to admin"

1. Check `admin/config.php` exists
2. Verify password has no extra spaces
3. Clear browser cookies
4. Try incognito/private window

## 📚 Documentation

- **`BLOG_SETUP_GUIDE.md`** - Complete setup and usage guide (READ THIS NEXT)
- **`IMPLEMENTATION_SUMMARY.md`** - Technical overview and SQL queries
- **`SETUP_CHECKLIST.md`** - Verify everything is working
- **`database/SETUP_INSTRUCTIONS.md`** - Database setup steps
- **`database/QUICK_SQL_REFERENCE.sql`** - Useful SQL queries

## ✨ Features

### Admin Panel (`/admin/panel.php`)
- Dashboard with statistics
- Create/edit/delete posts
- Rich text editor
- Image upload
- Category management
- Draft/publish workflow
- SEO fields per post

### Public Blog (`/blog.php`)
- Dynamic post listing
- Category filtering
- Pagination (6 posts per page)
- Responsive design
- SEO-friendly URLs

### Single Post (`/blog-single.php?slug=post-slug`)
- Full post content
- Featured image
- Author and date
- Related posts sidebar
- SEO meta tags

## 🎯 Next Steps

1. ✅ **Run the SQL** to create tables (Step 1 above)
2. ✅ **Configure database** connection (Step 2 above)
3. ✅ **Set admin password** (Step 3 above)
4. ✅ **Log in** to admin panel
5. ✅ **Create your first post**
6. ✅ **View your blog**

## 🆘 Need Help?

1. Check the **green/red database indicator** in admin panel
2. Review **`BLOG_SETUP_GUIDE.md`** for detailed instructions
3. Check **`SETUP_CHECKLIST.md`** to verify each step
4. Look at **`database/QUICK_SQL_REFERENCE.sql`** for useful queries

---

## 🎉 You're Ready!

Your blog system is fully implemented and ready to use. Just follow the 5 steps above and you'll be blogging in minutes!

**Questions?** Check the documentation files listed above.

**Happy blogging!** ✍️
