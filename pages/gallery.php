<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'gallery';
$pageTitle = 'Gallery - Windzon';
$pageDescription = 'View our gallery of completed aluminium window and door projects. Residential and commercial installations showcasing quality and craftsmanship.';
$pageKeywords = 'Windzon gallery, window projects, door installations, project photos';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Gallery</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- gallery-area -->
        <div class="gallery-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-window-frame-open"></i> Gallery</span>
                            <h2 class="site-title">Our Photo <span>Gallery</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row popup-gallery">
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= $baseUrl ?>assets/img/gallery/01.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="<?= $baseUrl ?>assets/img/gallery/01.jpg"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= $baseUrl ?>assets/img/gallery/02.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="<?= $baseUrl ?>assets/img/gallery/02.jpg"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= $baseUrl ?>assets/img/gallery/03.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="<?= $baseUrl ?>assets/img/gallery/03.jpg"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= $baseUrl ?>assets/img/gallery/04.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="<?= $baseUrl ?>assets/img/gallery/04.jpg"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= $baseUrl ?>assets/img/gallery/05.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="<?= $baseUrl ?>assets/img/gallery/05.jpg"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="<?= $baseUrl ?>assets/img/gallery/06.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="<?= $baseUrl ?>assets/img/gallery/06.jpg"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery-area end -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
