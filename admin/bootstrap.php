<?php
/**
 * Admin Bootstrap
 * Session management, authentication, and CSRF protection
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Get admin password from config
 * @return string
 */
function mc_admin_password() {
    // Try environment variable first
    $envPass = getenv('MC_BLOG_ADMIN_PASSWORD');
    if ($envPass !== false && $envPass !== '') {
        return $envPass;
    }

    // Try config file
    $configPath = __DIR__ . '/config.php';
    if (file_exists($configPath)) {
        $config = require $configPath;
        if (is_array($config) && isset($config['password'])) {
            return $config['password'];
        }
    }

    return 'changeme'; // Default fallback
}

/**
 * Check if admin is logged in
 * @return bool
 */
function mc_admin_is_logged_in() {
    return isset($_SESSION['mc_blog_admin']) && $_SESSION['mc_blog_admin'] === true;
}

/**
 * Require admin login (redirect if not logged in)
 */
function mc_admin_require_login() {
    if (!mc_admin_is_logged_in()) {
        header('Location: /admin/login.php');
        exit;
    }
}

/**
 * Generate CSRF token
 * @return string
 */
function mc_csrf_token() {
    if (!isset($_SESSION['mc_csrf_token'])) {
        $_SESSION['mc_csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['mc_csrf_token'];
}

/**
 * Validate CSRF token
 * @param string $token
 * @return bool
 */
function mc_csrf_validate($token) {
    return isset($_SESSION['mc_csrf_token']) && hash_equals($_SESSION['mc_csrf_token'], $token);
}
