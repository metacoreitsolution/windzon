<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'service';
$pageTitle = 'Service Detail - Windzon';
$pageDescription = 'Professional aluminium window and door services – installation, repair, maintenance, and accessories.';
$pageKeywords = 'window services, door services, installation, maintenance, repair';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title" id="breadcrumb-title">Service</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active" id="breadcrumb-current">Service</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- service-single -->
        <div class="service-single-area py-120">
            <div class="container">
                <div class="service-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="service-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">All Services</h4>
                                    <div class="category-list">
                                        <a href="<?= $baseUrl ?>pages/window.php"><i class="far fa-long-arrow-right"></i>Window Installation</a>
                                        <a href="<?= $baseUrl ?>pages/door.php"><i class="far fa-long-arrow-right"></i>Door Systems</a>
                                        <a href="<?= $baseUrl ?>pages/service-single.php?service=maintenance"><i class="far fa-long-arrow-right"></i>Maintenance & Repair</a>
                                        <a href="<?= $baseUrl ?>pages/service-single.php?service=accessories"><i class="far fa-long-arrow-right"></i>Accessories</a>
                                        <a href="<?= $baseUrl ?>pages/service-single.php?service=upgrades"><i class="far fa-long-arrow-right"></i>System Upgrades</a>
                                        <a href="<?= $baseUrl ?>pages/contact.php"><i class="far fa-long-arrow-right"></i>Project Consultation</a>
                                        <a href="<?= $baseUrl ?>pages/service.php"><i class="far fa-long-arrow-right"></i>All Services</a>
                                    </div>
                                </div>
                                <div class="widget service-download">
                                    <h4 class="widget-title">Download</h4>
                                    <a href="<?= $baseUrl ?>pages/contact.php"><i class="far fa-file-pdf"></i> Download Brochure</a>
                                    <a href="<?= $baseUrl ?>pages/contact.php"><i class="far fa-file-alt"></i> Download Application</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="service-details" id="service-details-content">
                                <div class="service-details-img mb-30">
                                    <img id="service-hero-img" src="<?= $baseUrl ?>assets/img/service/single.jpg" alt="">
                                </div>
                                <div class="service-details">
                                    <h3 class="mb-20" id="service-main-title">Professional Aluminium Window & Door Services</h3>
                                    <div id="service-content-body">
                                        <p class="mb-20">Windzon delivers comprehensive aluminium solutions for residential and commercial projects.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-single end-->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
