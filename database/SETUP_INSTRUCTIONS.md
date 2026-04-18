# Database Setup Instructions

## Step 1: Create Database

### Using phpMyAdmin:
1. Open phpMyAdmin in your browser
2. Click "New" in the left sidebar
3. Database name: `windzon_blog` (or your preferred name)
4. Collation: `utf8mb4_unicode_ci`
5. Click "Create"

### Using MySQL CLI:
```bash
mysql -u root -p
```

Then run:
```sql
CREATE DATABASE windzon_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

## Step 2: Create Tables

### Using phpMyAdmin:
1. Select your `windzon_blog` database
2. Click "SQL" tab
3. Open `blog_tables.sql` in a text editor
4. Copy all contents
5. Paste into the SQL box in phpMyAdmin
6. Click "Go"

You should see:
- ✅ Table `mc_blog_posts` created
- ✅ Table `mc_blog_categories` created  
- ✅ Table `mc_blog_post_categories` created
- ✅ 5 rows inserted into `mc_blog_categories`

### Using MySQL CLI:
```bash
mysql -u root -p windzon_blog < /path/to/windzon/database/blog_tables.sql
```

## Step 3: Add Sample Posts (Optional)

This step is optional but recommended to see how the blog works with real content.

### Using phpMyAdmin:
1. Select your `windzon_blog` database
2. Click "SQL" tab
3. Open `sample_blog_posts.sql` in a text editor
4. Copy all contents
5. Paste into the SQL box
6. Click "Go"

You should see:
- ✅ 6 sample posts inserted
- ✅ Posts linked to categories

### Using MySQL CLI:
```bash
mysql -u root -p windzon_blog < /path/to/windzon/database/sample_blog_posts.sql
```

## Step 4: Verify Installation

Run this query to check everything is set up:

```sql
USE windzon_blog;

-- Check tables exist
SHOW TABLES;

-- Check categories
SELECT * FROM mc_blog_categories;

-- Check posts (if you ran sample_blog_posts.sql)
SELECT id, title, status, published_at FROM mc_blog_posts;
```

You should see:
- 3 tables listed
- 5 categories (Windows, Doors, Blinds, Maintenance & Tips, Projects & Ideas)
- 6 sample posts (if you ran the sample data)

## Common Issues

### Error: "Access denied for user"
- Check your MySQL username and password
- Make sure the user has permissions on the database

### Error: "Unknown database"
- Make sure you created the database in Step 1
- Check the database name matches what you created

### Error: "Table already exists"
- The tables are already created
- If you want to start fresh, drop the tables first:
  ```sql
  DROP TABLE IF EXISTS mc_blog_post_categories;
  DROP TABLE IF EXISTS mc_blog_posts;
  DROP TABLE IF EXISTS mc_blog_categories;
  ```

## Next Steps

After database setup is complete:

1. Configure database connection: `includes/blog_db_config.php`
2. Configure admin password: `admin/config.php`
3. Visit `/admin/panel.php` to log in
4. Start creating posts!

See `BLOG_SETUP_GUIDE.md` for complete setup instructions.
