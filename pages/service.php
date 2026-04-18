<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'service';
$pageTitle = 'Services - Windzon';
$pageDescription = 'Professional aluminium window and door services – installation, repair, maintenance, and accessories. Expert solutions for residential and commercial projects.';
$pageKeywords = 'window services, door services, installation, maintenance, repair';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Services</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- service-area -->
        <div class="service-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-window-frame-open"></i> Services</span>
                            <h2 class="site-title">Let's Check Our <span>Services</span> Offer For You</h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="service-img">
                                <img src="<?= $baseUrl ?>assets/img/service/01.jpg" alt="">
                                <div class="service-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/window-1.svg" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="<?= $baseUrl ?>pages/window.php">Aluminium Window Installation</a>
                                </h3>
                                <p class="service-text">
                                    Professional installation of sliding, casement, and fixed aluminium windows with precision fitting, weather sealing, and energy-efficient glazing options for homes and offices.
                                </p>
                                <div class="service-arrow">
                                    <a href="<?= $baseUrl ?>pages/window.php" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item wow fadeInDown" data-wow-delay=".25s">
                            <div class="service-img">
                                <img src="<?= $baseUrl ?>assets/img/service/02.jpg" alt="">
                                <div class="service-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/door.svg" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="<?= $baseUrl ?>pages/door.php">Aluminium Door Systems</a>
                                </h3>
                                <p class="service-text">
                                    Premium sliding, folding, and hinged aluminium doors with multi-point locking, smooth operation, and custom finishes for residential and commercial entrances.
                                </p>
                                <div class="service-arrow">
                                    <a href="<?= $baseUrl ?>pages/door.php" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="service-img">
                                <img src="<?= $baseUrl ?>assets/img/service/03.jpg" alt="">
                                <div class="service-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/repair.svg" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="<?= $baseUrl ?>pages/service-single.php?service=maintenance">Maintenance & Repair</a>
                                </h3>
                                <p class="service-text">
                                    Expert repair, hardware replacement, and preventive maintenance to extend the life of your aluminium windows and doors. Fast response for urgent issues.
                                </p>
                                <div class="service-arrow">
                                    <a href="<?= $baseUrl ?>pages/service-single.php?service=maintenance" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="service-img">
                                <img src="<?= $baseUrl ?>assets/img/service/04.jpg" alt="">
                                <div class="service-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/accessory.svg" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="<?= $baseUrl ?>pages/service-single.php?service=accessories">Premium Accessories & Hardware</a>
                                </h3>
                                <p class="service-text">
                                    High-quality locks, handles, rollers, hinges, and weather seals from trusted brands. Upgrade or replace components for improved security and performance.
                                </p>
                                <div class="service-arrow">
                                    <a href="<?= $baseUrl ?>pages/service-single.php?service=accessories" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item wow fadeInDown" data-wow-delay=".25s">
                            <div class="service-img">
                                <img src="<?= $baseUrl ?>assets/img/service/05.jpg" alt="">
                                <div class="service-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/window-2.svg" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="<?= $baseUrl ?>pages/contact.php">Project Planning & Consultation</a>
                                </h3>
                                <p class="service-text">
                                    Free site visits, technical drawings, and project management for new builds and renovations. We coordinate with architects and builders for seamless execution.
                                </p>
                                <div class="service-arrow">
                                    <a href="<?= $baseUrl ?>pages/contact.php" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="service-img">
                                <img src="<?= $baseUrl ?>assets/img/service/06.jpg" alt="">
                                <div class="service-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/window-3.svg" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="<?= $baseUrl ?>pages/service-single.php?service=upgrades">System Upgrades & Replacement</a>
                                </h3>
                                <p class="service-text">
                                    Replace outdated windows and doors with modern aluminium systems. Improve insulation, security, and aesthetics while adding value to your property.
                                </p>
                                <div class="service-arrow">
                                    <a href="<?= $baseUrl ?>pages/service-single.php?service=upgrades" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-area -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
