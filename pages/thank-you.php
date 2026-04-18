<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'thank-you';
$pageTitle = 'Thank You - Windzon';
$pageDescription = 'Thank you for contacting Windzon. We will get back to you soon.';
$pageKeywords = 'thank you, contact confirmation';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="thank-you-card text-center">
                        <div class="thank-you-icon mb-4" aria-hidden="true">
                            <i class="far fa-check-circle text-success"></i>
                        </div>
                        <h1 class="mb-4">Thank You!</h1>
                        <p class="lead mb-4">Your message has been received. Our team will respond within 24 hours.</p>
                        <p class="mb-4 thank-you-contact">For urgent enquiries, call us at <a href="tel:+919712002300">+91 97120 02300</a> or <a href="tel:+918000800052">+91 80008 00052</a></p>
                        <div class="thank-you-actions d-flex flex-wrap gap-3 justify-content-center align-items-center">
                            <a href="<?= $baseUrl ?>index.php" class="theme-btn">Back to Home</a>
                            <a href="<?= $baseUrl ?>pages/contact.php" class="theme-btn theme-btn2 thank-you-btn-outline">Contact Again</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
