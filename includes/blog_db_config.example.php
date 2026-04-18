<?php
/**
 * Blog Database Configuration Template
 * 
 * Copy this file to blog_db_config.php and fill in your credentials.
 * blog_db_config.php is gitignored and will never be committed.
 */

return [
    // Option 1: Full DSN string
    'dsn'      => 'mysql:host=127.0.0.1;dbname=windzon_blog;charset=utf8mb4',
    
    // Option 2: Separate host and database (comment out dsn above if using this)
    // 'host'     => '127.0.0.1',
    // 'database' => 'windzon_blog',
    
    // Option 3: Unix socket (for MAMP on macOS, comment out dsn above if using this)
    // 'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
    // 'database'    => 'windzon_blog',
    
    'username' => 'root',
    'password' => 'your_password_here',
];
