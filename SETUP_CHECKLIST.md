# Windzon Blog System - Setup Checklist

Use this checklist to ensure your blog system is properly configured.

## ☑️ Pre-Installation Checklist

- [ ] PHP 7.4+ installed
- [ ] MySQL 5.7+ or MariaDB 10.3+ installed
- [ ] `pdo_mysql` PHP extension enabled
- [ ] Web server running (Apache/Nginx/MAMP/XAMPP)
- [ ] Access to MySQL (phpMyAdmin or CLI)

## ☑️ Database Setup

- [ ] Database created (e.g., `windzon_blog`)
- [ ] Ran `database/blog_tables.sql` successfully
- [ ] 3 tables created: `mc_blog_posts`, `mc_blog_categories`, `mc_blog_post_categories`
- [ ] 5 default categories inserted
- [ ] (Optional) Ran `database/sample_blog_posts.sql` for sample content

### Verify Database:
```sql
USE windzon_blog;
SHOW TABLES;
SELECT * FROM mc_blog_categories;
```

## ☑️ Configuration Files

- [ ] Copied `includes/blog_db_config.example.php` to `includes/blog_db_config.php`
- [ ] Updated database credentials in `includes/blog_db_config.php`
- [ ] Copied `admin/config.example.php` to `admin/config.php`
- [ ] Set strong admin password in `admin/config.php`

### Test Database Connection:
```bash
php -r "require 'includes/blog_db.php'; var_dump(mc_blog_db_available());"
```
Should output: `bool(true)`

## ☑️ File Permissions

- [ ] `uploads/` directory exists
- [ ] `uploads/` directory is writable (chmod 755 or 777)

### Test Permissions:
```bash
ls -la uploads/
touch uploads/test.txt && rm uploads/test.txt && echo "Writable!"
```

## ☑️ Admin Panel Access

- [ ] Can access `/admin/login.php`
- [ ] Can log in with password from `admin/config.php`
- [ ] Redirected to `/admin/panel.php` after login
- [ ] Dashboard shows "DB Connected" (green indicator)
- [ ] Can see statistics (Total Posts, Published, Drafts, Categories)

## ☑️ Admin Panel Functionality

- [ ] Can navigate to "New Post" section
- [ ] Can create a test post with title and excerpt
- [ ] Rich text editor works (bold, italic, lists)
- [ ] Can select accent color
- [ ] Can check category checkboxes
- [ ] Can save post as draft
- [ ] Can publish post (change status to Published)
- [ ] Can edit existing post
- [ ] Can delete post
- [ ] Can add new category
- [ ] Can delete category

## ☑️ Public Blog Pages

- [ ] Can access `/blog.php`
- [ ] Published posts appear on blog listing
- [ ] Draft posts do NOT appear on blog listing
- [ ] Category filter tabs appear
- [ ] Clicking category filters posts correctly
- [ ] Pagination appears (if more than 6 posts)
- [ ] Can click "Read More" on a post
- [ ] Redirected to `/blog-single.php?slug=post-slug`
- [ ] Post content displays correctly
- [ ] Featured image displays (if set)
- [ ] Author and date display correctly
- [ ] "Back to Blog" link works

## ☑️ Image Upload

- [ ] Can paste image URL in "Featured Image URL" field
- [ ] Image preview appears below URL field
- [ ] (Future) Can drag-and-drop upload images

## ☑️ SEO Features

- [ ] Post page title shows post title
- [ ] Meta description appears in page source
- [ ] Meta keywords appear in page source
- [ ] Breadcrumb shows post title
- [ ] URL slug is SEO-friendly (e.g., `?slug=my-post-title`)

## ☑️ Security

- [ ] `includes/blog_db_config.php` is gitignored
- [ ] `admin/config.php` is gitignored
- [ ] `uploads/*` files are gitignored
- [ ] Cannot access admin panel without password
- [ ] Logout works and redirects to login page
- [ ] CSRF tokens present on forms (check page source)

### Verify Gitignore:
```bash
git status
# Should NOT show:
# - includes/blog_db_config.php
# - admin/config.php
# - uploads/* (except .gitkeep)
```

## ☑️ Error Handling

- [ ] If database disconnected, shows error message with diagnostic
- [ ] If post slug not found, shows 404 error
- [ ] If wrong admin password, shows error message
- [ ] If duplicate slug, shows error message

## ☑️ Mobile Responsiveness

- [ ] Blog listing looks good on mobile
- [ ] Single post page looks good on mobile
- [ ] Admin panel sidebar collapses on mobile
- [ ] Forms are usable on mobile

## 🐛 Common Issues & Solutions

### Issue: "Database not connected"
**Solution:**
1. Check `includes/blog_db_config.php` exists
2. Verify credentials are correct
3. Ensure MySQL is running
4. Test: `mysql -u root -p -e "USE windzon_blog; SELECT 1;"`

### Issue: "pdo_mysql extension not loaded"
**Solution:**
1. Edit `php.ini` (find with `php --ini`)
2. Uncomment: `extension=pdo_mysql`
3. Restart web server

### Issue: "Access denied for user"
**Solution:**
1. Check MySQL username/password
2. Grant permissions: `GRANT ALL ON windzon_blog.* TO 'user'@'localhost';`

### Issue: "Table doesn't exist"
**Solution:**
1. Verify database name in config matches created database
2. Re-run `database/blog_tables.sql`

### Issue: "Can't upload images"
**Solution:**
```bash
chmod 755 uploads/
# or
chmod 777 uploads/
```

### Issue: "Can't log in to admin"
**Solution:**
1. Check `admin/config.php` exists
2. Verify password is correct (no extra spaces)
3. Clear browser cookies
4. Try incognito/private window

### Issue: "Posts not showing on blog"
**Solution:**
1. Check post status is "Published" (not Draft)
2. Check published date is not in the future
3. Verify database connection is working

## 📊 Performance Checklist

- [ ] Database indexes are created (automatic with schema)
- [ ] Images are optimized before upload
- [ ] No more than 6 posts per page (configurable)
- [ ] Database queries use prepared statements (automatic)

## 🎯 Final Verification

Run this complete test:

1. **Create a post:**
   - Log in to admin panel
   - Create new post with title "Test Post"
   - Add excerpt "This is a test"
   - Set status to Published
   - Save

2. **View on frontend:**
   - Go to `/blog.php`
   - Verify "Test Post" appears
   - Click "Read More"
   - Verify post content displays

3. **Test filtering:**
   - Go back to `/blog.php`
   - Click a category filter
   - Verify posts filter correctly

4. **Test editing:**
   - Go back to admin panel
   - Edit "Test Post"
   - Change title to "Updated Test Post"
   - Save
   - Verify changes appear on frontend

5. **Test deletion:**
   - Delete "Test Post" from admin
   - Verify it no longer appears on frontend

## ✅ All Done!

If all checkboxes are checked, your blog system is fully operational! 🎉

## 📚 Next Steps

1. **Create real content:**
   - Write your first real blog post
   - Add featured images
   - Optimize for SEO

2. **Customize:**
   - Adjust posts per page in `includes/blog_repository.php`
   - Add more categories via admin panel
   - Customize accent colors

3. **Backup:**
   - Set up regular database backups
   - Back up uploaded images
   - Version control your code (git)

4. **Monitor:**
   - Check admin panel regularly
   - Monitor database size
   - Review published posts

## 🆘 Need Help?

Refer to these documents:
- `BLOG_SETUP_GUIDE.md` - Complete setup guide
- `IMPLEMENTATION_SUMMARY.md` - Overview and SQL queries
- `database/SETUP_INSTRUCTIONS.md` - Database setup steps
- `database/QUICK_SQL_REFERENCE.sql` - Useful SQL queries

---

**Happy blogging!** ✍️
