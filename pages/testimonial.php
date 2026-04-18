<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'testimonial';
$pageTitle = 'Testimonials - Windzon';
$pageDescription = 'Read what our clients say about Windzon aluminium windows and doors. Real reviews and experiences from satisfied customers.';
$pageKeywords = 'Windzon reviews, customer testimonials, client feedback';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Testimonials</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Testimonials</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- testimonial area -->
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-window-frame-open"></i> Testimonials</span>
                            <h2 class="site-title">What Our Client <span>Say's</span> About Us</h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="<?= $baseUrl ?>assets/img/testimonial/01.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Anthony Nicoll</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected humour randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="<?= $baseUrl ?>assets/img/testimonial/02.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Richard Lock</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected humour randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="<?= $baseUrl ?>assets/img/testimonial/03.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Randal Grand</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected humour randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="<?= $baseUrl ?>assets/img/testimonial/04.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Edward Miles</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected humour randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="<?= $baseUrl ?>assets/img/testimonial/05.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Ninal Gordon</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected humour randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
