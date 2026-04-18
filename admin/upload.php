<?php
require_once __DIR__ . '/bootstrap.php';
mc_admin_require_login();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['ok' => false, 'error' => 'POST required']);
    exit;
}

if (!isset($_POST['csrf']) || !mc_csrf_validate($_POST['csrf'])) {
    echo json_encode(['ok' => false, 'error' => 'Invalid CSRF token']);
    exit;
}

if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(['ok' => false, 'error' => 'No file uploaded']);
    exit;
}

$file = $_FILES['image'];
$allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
$maxSize = 5 * 1024 * 1024; // 5MB

if (!in_array($file['type'], $allowedTypes)) {
    echo json_encode(['ok' => false, 'error' => 'Invalid file type. Only JPG, PNG, WebP, and GIF allowed.']);
    exit;
}

if ($file['size'] > $maxSize) {
    echo json_encode(['ok' => false, 'error' => 'File too large. Maximum 5MB.']);
    exit;
}

// Create uploads directory if it doesn't exist
$uploadDir = __DIR__ . '/../uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Generate unique filename
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$filename = uniqid('blog_', true) . '.' . $extension;
$destination = $uploadDir . $filename;

if (!move_uploaded_file($file['tmp_name'], $destination)) {
    echo json_encode(['ok' => false, 'error' => 'Failed to save file']);
    exit;
}

$url = '/uploads/' . $filename;
echo json_encode(['ok' => true, 'url' => $url]);
