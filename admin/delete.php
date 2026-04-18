<?php
require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/../includes/blog_repository.php';

mc_admin_require_login();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /admin/panel.php');
    exit;
}

if (!isset($_POST['csrf']) || !mc_csrf_validate($_POST['csrf'])) {
    die('Invalid CSRF token');
}

$id = (int)($_POST['id'] ?? 0);
if ($id > 0) {
    mc_blog_admin_delete($id);
}

header('Location: /admin/panel.php?section=posts&deleted=1');
exit;
