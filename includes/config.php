<?php
/**
 * Windzon site configuration — mail for contact + quote forms.
 *
 * SMTP: Gmail uses smtp.gmail.com, port 587, tls. Use an App Password in
 * includes/config.local.php (WINDZON_SMTP_PASSWORD) — do not commit that file.
 *
 * If WINDZON_SMTP_HOST is empty, PHP mail() is used (often broken on XAMPP).
 */

$windzonConfigLocal = __DIR__ . '/config.local.php';
if (is_file($windzonConfigLocal)) {
    require_once $windzonConfigLocal;
}

if (!defined('WINDZON_MAIL_TO')) {
    define('WINDZON_MAIL_TO', 'dhorajiyabrijesh607@gmail.com');
}

if (!defined('WINDZON_MAIL_FROM')) {
    define('WINDZON_MAIL_FROM', 'windzonesystemllp@gmail.com');
}

if (!defined('WINDZON_MAIL_FROM_NAME')) {
    define('WINDZON_MAIL_FROM_NAME', 'Windzon Website');
}

if (!defined('WINDZON_SMTP_HOST')) {
    define('WINDZON_SMTP_HOST', 'smtp.gmail.com');
}

if (!defined('WINDZON_SMTP_PORT')) {
    define('WINDZON_SMTP_PORT', 587);
}

if (!defined('WINDZON_SMTP_ENCRYPTION')) {
    define('WINDZON_SMTP_ENCRYPTION', 'tls');
}

/** Must match the Gmail account that owns the App Password. */
if (!defined('WINDZON_SMTP_USER')) {
    define('WINDZON_SMTP_USER', 'windzonesystemllp@gmail.com');
}

if (!defined('WINDZON_SMTP_PASSWORD')) {
    define('WINDZON_SMTP_PASSWORD', '');
}

/** Helps some Windows/XAMPP setups connect to Gmail TLS (disable for strict production if not needed). */
if (!defined('WINDZON_SMTP_RELAX_SSL')) {
    define('WINDZON_SMTP_RELAX_SSL', PHP_OS_FAMILY === 'Windows');
}

/** Social & WhatsApp — override in config.local.php if needed. */
if (!defined('WINDZON_SOCIAL_FACEBOOK_URL')) {
    define('WINDZON_SOCIAL_FACEBOOK_URL', '#');
}
if (!defined('WINDZON_SOCIAL_INSTAGRAM_URL')) {
    define('WINDZON_SOCIAL_INSTAGRAM_URL', '#');
}
/** Full international number, no + (e.g. 919712002300 for +91 97120 02300). */
if (!defined('WINDZON_WHATSAPP_URL')) {
    define('WINDZON_WHATSAPP_URL', 'https://wa.me/919712002300');
}
