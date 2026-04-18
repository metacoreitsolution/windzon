# Windzon Blog System - Setup Guide

Complete database-driven blog system for the Windzon website.

## Quick Start

### 1. Create the Database

**Option A: Using phpMyAdmin**
1. Open phpMyAdmin
2. Create a new database (e.g., `windzon_blog`)
3. Select the database
4. Go to SQL tab
5. Copy and paste the contents of `database/blog_tables.sql`
6. Click "Go"

**Option B: Using MySQL CLI**
```bash
mysql -u root -p
```
```sql
CREATE DATABASE windzon_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE windzon_blog;
SOURCE /path/to/windzon/database/blog_tables.sql;
```

### 2. Configure Database Connection

```bash
cp includes/blog_db_config.example.php includes/blog_db_config.php
```

Edit `includes/blog_db_config.php`:
```php
return [
    'dsn'      => 'mysql:host=127.0.0.1;dbname=windzon_blog;charset=utf8mb4',
    'username' => 'root',
    'password' => 'your_password_here',
];
```

**Common configurations:**
- **MAMP (macOS)**: host=`127.0.0.1` or use unix_socket
- **XAMPP (Windows)**: host=`127.0.0.1`
- **cPanel hosting**: host=`localhost`

### 3. Configure Admin Password

```bash
cp admin/config.example.php admin/config.php
```

Edit `admin/config.php`:
```php
return [
    'password' => 'YourStrongPassword123!',
];
```

### 4. Set Permissions

```bash
chmod 755 uploads/
```

### 5. Access the Admin Panel

1. Go to: `http://your-domain.com/admin/panel.php`
2. Enter your admin password
3. Start creating posts!

## File Structure

```
windzon/
├── database/
│   └── blog_tables.sql          # Database schema
├── includes/
│   ├── blog_db_config.example.php   # DB config template
│   ├── blog_db_config.php           # Your DB credentials (gitignored)
│   ├── blog_db.php                  # PDO database layer
│   └── blog_repository.php          # Business logic
├── admin/
│   ├── config.example.php       # Admin password template
│   ├── config.php               # Your admin password (gitignored)
│   ├── bootstrap.php            # Auth & CSRF
│   ├── login.php                # Login page
│   ├── logout.php               # Logout handler
│   ├── panel.php                # Main admin panel
│   ├── upload.php               # Image upload endpoint
│   └── delete.php               # Delete post endpoint
├── uploads/                     # Uploaded images (gitignored)
│   └── .gitkeep
├── blog.php                     # Public blog listing
└── blog-single.php              # Single post view
```

## Features

### Public Blog
- ✅ Dynamic post listing with pagination (6 posts per page)
- ✅ Category filtering
- ✅ Responsive design
- ✅ SEO-friendly URLs (`?slug=post-title`)
- ✅ Meta tags for SEO

### Admin Panel
- ✅ Dashboard with statistics
- ✅ Rich text editor
- ✅ Image upload
- ✅ Category management
- ✅ Draft/Published status
- ✅ SEO fields (meta title, description, keywords)
- ✅ CSRF protection
- ✅ Session-based authentication

## Creating Your First Post

1. Log in to admin panel
2. Click "New Post"
3. Fill in:
   - **Title** (required)
   - **Excerpt** (required) - shown on blog listing
   - **Content** - use the rich text editor
   - **Featured Image URL** - paste image URL or upload
   - **Category Label** - shown as ribbon on card (e.g., "Windows")
   - **Badge** - small badge on card (e.g., "Guide", "Article")
   - **Filter Categories** - check boxes for filtering
   - **Status** - Published or Draft
4. Click "Publish Post"

## Database Tables

### mc_blog_posts
Main posts table with all content and metadata.

### mc_blog_categories
Filter categories (Windows, Doors, Blinds, Maintenance, Projects).

### mc_blog_post_categories
Many-to-many relationship between posts and categories.

## Troubleshooting

### "Database not connected" error

**Check PDO MySQL extension:**
```bash
php -m | grep pdo_mysql
```

If not listed, enable it in `php.ini`:
```ini
extension=pdo_mysql
```

**Check database credentials:**
- Verify username/password in `includes/blog_db_config.php`
- Ensure MySQL server is running
- Test connection with MySQL CLI

**Check database exists:**
```sql
SHOW DATABASES LIKE 'windzon_blog';
```

### Image upload not working

```bash
chmod 755 uploads/
```

### Slug conflict error

Each post must have a unique slug. Edit the slug field or delete the conflicting post.

## Configuration

### Posts Per Page

Edit `includes/blog_repository.php`:
```php
define('MC_BLOG_PER_PAGE', 6); // Change to your preferred number
```

### Default Categories

Edit `database/blog_tables.sql` before running it, or add categories via admin panel.

### Accent Colors

Available colors: blue, indigo, violet, slate, emerald, amber, pink, teal, sky, orange

## Security

- ✅ Admin password stored in gitignored config file
- ✅ Timing-safe password comparison (`hash_equals`)
- ✅ CSRF tokens on all forms
- ✅ HTML sanitization on post content
- ✅ Prepared statements (SQL injection protection)
- ✅ Session-based authentication

## URLs

- **Blog listing**: `/blog.php`
- **Single post**: `/blog-single.php?slug=post-slug`
- **Admin panel**: `/admin/panel.php`
- **Admin login**: `/admin/login.php`

## Support

For issues:
1. Check database connection in admin panel (shows status indicator)
2. Check PHP error logs
3. Verify file permissions on `uploads/` directory
4. Ensure all config files are created from examples

## License

Part of the Windzon website project.
