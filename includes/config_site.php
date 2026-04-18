<?php
// Site Configuration
define('SITE_NAME', 'Windzon');
define('SITE_TAGLINE', 'Windows And Doors Service');
define('SITE_EMAIL', 'windzonsystemllp@gmail.com');
define('SITE_PHONE_1', '+91 97120 02300');
define('SITE_PHONE_2', '+91 80008 00052');
define('SITE_ADDRESS', 'Kalawad Road, Rajkot');

// Base URL - auto-detect or set manually
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$scriptPath = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = $protocol . $host . $scriptPath;

// For pages subdirectory, adjust base URL
if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
    $baseUrl = $protocol . $host . str_replace('/pages/', '/', dirname($_SERVER['SCRIPT_NAME'])) . '/';
}
