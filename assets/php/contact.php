<?php
/**
 * Contact form handler (AJAX POST from contact page).
 */
header('Content-Type: text/plain; charset=UTF-8');

require_once dirname(__DIR__, 2) . '/includes/mail_helper.php';
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
$message = isset($_POST['message']) ? trim((string) $_POST['message']) : '';

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Please fill in all required fields correctly.';
    exit;
}

$subject = $subject !== '' ? str_replace(["\r", "\n"], '', $subject) : 'Contact Form';

$fields = [
    ['label' => 'Name', 'value' => $name],
    ['label' => 'Email', 'value' => $email],
    ['label' => 'Subject', 'value' => $subject],
    ['label' => 'Message', 'value' => $message, 'multiline' => true],
];

$emailSubject = 'Windzon Contact: ' . $subject;
$emailPlain = windzon_mail_plain_from_fields($fields);
$emailHtml = windzon_mail_premium_html('New contact message', $fields);

if (windzon_mail_send(WINDZON_MAIL_TO, $emailSubject, $emailPlain, $email, $emailHtml)) {
    http_response_code(200);
    echo 'Thank you! Your message has been sent successfully.';
} else {
    http_response_code(500);
    echo 'Sorry, there was an error sending your message. Please try again or contact us directly.';
}
