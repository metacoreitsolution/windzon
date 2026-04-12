<?php
/**
 * Homepage "Get Free Quote" form handler (AJAX POST).
 */
header('Content-Type: text/plain; charset=UTF-8');

require_once dirname(__DIR__, 2) . '/includes/mail_helper.php';
require_once dirname(__DIR__, 2) . '/includes/quote_services.php';
require_once dirname(__DIR__, 2) . '/includes/mail_template.php';

if (!windzon_mail_config_ok()) {
    http_response_code(500);
    echo 'Email is not configured: set WINDZON_SMTP_PASSWORD in includes/config.local.php (Gmail App Password).';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Invalid request method.';
    exit;
}

$name = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
$email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim((string) $_POST['subject']) : '';
$serviceRaw = isset($_POST['service']) ? trim((string) $_POST['service']) : '';
$message = isset($_POST['message']) ? trim((string) $_POST['message']) : '';

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Please fill in your name and a valid email address.';
    exit;
}

$subject = $subject !== '' ? str_replace(["\r", "\n"], '', $subject) : 'Quote Request';
$serviceLabel = windzon_quote_service_label($serviceRaw);

$fields = [
    ['label' => 'Name', 'value' => $name],
    ['label' => 'Email', 'value' => $email],
    ['label' => 'Subject', 'value' => $subject],
    ['label' => 'Service', 'value' => $serviceLabel],
    ['label' => 'Message', 'value' => $message, 'multiline' => true],
];

$emailSubject = 'Windzon Quote Request: ' . $subject;
$emailPlain = windzon_mail_plain_from_fields($fields);
$emailHtml = windzon_mail_premium_html('New quote request', $fields);

if (windzon_mail_send(WINDZON_MAIL_TO, $emailSubject, $emailPlain, $email, $emailHtml)) {
    http_response_code(200);
    echo 'Thank you! Your request has been sent. We will get back to you soon.';
} else {
    http_response_code(500);
    echo 'Sorry, there was an error sending your request. Please call us or email directly.';
}
