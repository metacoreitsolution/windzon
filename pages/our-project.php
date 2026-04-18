<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'projects';
$pageTitle = 'Our Projects - Windzon';
$pageDescription = 'Explore Windzon\'s portfolio of aluminium window and door projects. Residential and commercial installations across Rajkot and beyond.';
$pageKeywords = 'Windzon projects, window installations, door projects, portfolio';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Our Project</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Our Project</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->



        <!-- portfolio-area -->
        <div class="portfolio-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-lg-flex align-items-end justify-content-between mb-40">
                        <div class="site-heading mb-0">
                            <span class="site-title-tagline">
                                <i class="far fa-window-frame-open"></i> Our Projects
                            </span>
                            <h2 class="site-title">Explore Our <span>Installations</span></h2>
                        </div>
                        <div class="filter-control">
                            <ul class="filter-btn">
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".cat1">Showroom</li>
                                <li data-filter=".cat2">Home</li>
                                <li data-filter=".cat3">Bungalows</li>
                                <li data-filter=".cat4">Office</li>
                                <li data-filter=".cat5">Cafes</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row filter-box popup-gallery">

                    <!-- Showroom -->
                    <div class="col-md-4 filter-item cat1">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="<?= $baseUrl ?>assets/img/portfolio/01.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <a class="popup-img portfolio-link" href="<?= $baseUrl ?>assets/img/portfolio/01.jpg">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <div class="portfolio-info">
                                    <div class="portfolio-title-info">
                                        <h5 class="portfolio-subtitle"><span>//</span> Showroom</h5>
                                        <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=showroom">
                                            <h4 class="portfolio-title">Luxury Aluminium Showroom</h4>
                                        </a>
                                    </div>
                                    <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=showroom" class="portfolio-btn" aria-label="View project details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home -->
                    <div class="col-md-4 filter-item cat2">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="<?= $baseUrl ?>assets/img/portfolio/02.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <a class="popup-img portfolio-link" href="<?= $baseUrl ?>assets/img/portfolio/02.jpg">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <div class="portfolio-info">
                                    <div class="portfolio-title-info">
                                        <h5 class="portfolio-subtitle"><span>//</span> Home</h5>
                                        <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=residential">
                                            <h4 class="portfolio-title">Modern Residential Windows</h4>
                                        </a>
                                    </div>
                                    <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=residential" class="portfolio-btn" aria-label="View project details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bungalow -->
                    <div class="col-md-4 filter-item cat3">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="<?= $baseUrl ?>assets/img/portfolio/03.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <a class="popup-img portfolio-link" href="<?= $baseUrl ?>assets/img/portfolio/03.jpg">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <div class="portfolio-info">
                                    <div class="portfolio-title-info">
                                        <h5 class="portfolio-subtitle"><span>//</span> Bungalows</h5>
                                        <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=villa">
                                            <h4 class="portfolio-title">Premium Villa Installation</h4>
                                        </a>
                                    </div>
                                    <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=villa" class="portfolio-btn" aria-label="View project details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office -->
                    <div class="col-md-4 filter-item cat4">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="<?= $baseUrl ?>assets/img/portfolio/04.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <a class="popup-img portfolio-link" href="<?= $baseUrl ?>assets/img/portfolio/04.jpg">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <div class="portfolio-info">
                                    <div class="portfolio-title-info">
                                        <h5 class="portfolio-subtitle"><span>//</span> Office</h5>
                                        <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=office">
                                            <h4 class="portfolio-title">Corporate Office Glass System</h4>
                                        </a>
                                    </div>
                                    <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=office" class="portfolio-btn" aria-label="View project details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cafe -->
                    <div class="col-md-4 filter-item cat5">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="<?= $baseUrl ?>assets/img/portfolio/05.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <a class="popup-img portfolio-link" href="<?= $baseUrl ?>assets/img/portfolio/05.jpg">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <div class="portfolio-info">
                                    <div class="portfolio-title-info">
                                        <h5 class="portfolio-subtitle"><span>//</span> Cafes</h5>
                                        <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=cafe">
                                            <h4 class="portfolio-title">Modern Cafe Sliding Doors</h4>
                                        </a>
                                    </div>
                                    <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=cafe" class="portfolio-btn" aria-label="View project details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Mixed -->
                    <div class="col-md-4 filter-item cat1 cat4">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="<?= $baseUrl ?>assets/img/portfolio/06.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <a class="popup-img portfolio-link" href="<?= $baseUrl ?>assets/img/portfolio/06.jpg">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <div class="portfolio-info">
                                    <div class="portfolio-title-info">
                                        <h5 class="portfolio-subtitle"><span>//</span> Commercial</h5>
                                        <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=commercial">
                                            <h4 class="portfolio-title">Commercial Complex Installation</h4>
                                        </a>
                                    </div>
                                    <a href="<?= $baseUrl ?>pages/portfolio-single.php?project=commercial" class="portfolio-btn" aria-label="View project details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- portfolio-area end -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
