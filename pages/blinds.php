<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'blinds';
$pageTitle = 'Blinds - Windzon';
$pageDescription = 'Windzon premium window blinds – stylish, functional solutions for homes and offices. Complement your aluminium windows with quality blinds.';
$pageKeywords = 'window blinds, aluminium blinds, Windzon blinds';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Blinds</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Blinds</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- feature area -->
        <div class="feature-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-window-frame-open"></i> Blinds Features</span>
                            <h2 class="site-title">Smart <span>Blinds Features</span> For Modern Spaces</h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="feature-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/sound.svg" alt="Light Control">
                                </div>
                                <h4 class="feature-title">Light Control</h4>
                                <p>Adjustable slats and fabric options allow precise control of natural light entering your space for optimal comfort.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/door-lock.svg" alt="Privacy">
                                </div>
                                <h4 class="feature-title">Privacy Protection</h4>
                                <p>Designed to ensure complete privacy without compromising on style and ventilation.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/weather.svg" alt="Easy Operation">
                                </div>
                                <h4 class="feature-title">Easy Operation</h4>
                                <p>Available in manual and motorized systems for smooth and convenient usage.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/money.svg" alt="Low Maintenance">
                                </div>
                                <h4 class="feature-title">Low Maintenance</h4>
                                <p>High-quality materials ensure durability and easy cleaning for long-term performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- blinds area -->
        <div class="blinds-area door-area bg py-120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 align-self-center">
                        <div class="door-left">
                            <div class="door-content wow fadeInDown" data-wow-delay=".25s">
                                <div class="site-heading mb-3">
                                    <span class="site-title-tagline">
                                        <i class="far fa-window-frame-open"></i> Our Blinds Collection
                                    </span>
                                    <h2 class="site-title">
                                        Stylish & Functional <span>Window Blinds</span>
                                    </h2>
                                </div>
                                <p class="about-text">
                                    Our premium window blinds are designed to enhance privacy, 
                                    light control, and interior aesthetics. With a wide range 
                                    of materials, colors, and operating systems, our blinds 
                                    provide both decorative appeal and practical functionality 
                                    for homes, offices, and commercial spaces.
                                </p>
                            </div>

                            <div class="door-service blinds-service wow fadeInUp" data-wow-delay=".25s">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="door-service-item">
                                            <div class="door-service-icon">
                                                <img src="<?= $baseUrl ?>assets/img/icon/window-4.svg" alt="">
                                            </div>
                                            <div class="door-service-title">
                                                <a href="<?= $baseUrl ?>pages/product-detail.php?category=blinds&item=skylight-roman-blinds">SKYLIGHT Roman blinds</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="door-service-item">
                                            <div class="door-service-icon">
                                                <img src="<?= $baseUrl ?>assets/img/icon/window-5.svg" alt="">
                                            </div>
                                            <div class="door-service-title">
                                                <a href="<?= $baseUrl ?>pages/product-detail.php?category=blinds&item=skylight-blinds">SKYLIGHT BLINDS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="door-service-item border-end-0">
                                            <div class="door-service-icon">
                                                <img src="<?= $baseUrl ?>assets/img/icon/window-6.svg" alt="">
                                            </div>
                                            <div class="door-service-title">
                                                <a href="<?= $baseUrl ?>pages/product-detail.php?category=blinds&item=dgu-blinds">DGU BLINDS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="door-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="door-img">
                                <img src="<?= $baseUrl ?>assets/img/window/01.jpg" alt="Modern Window Blinds">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- blinds area end -->


        <!-- faq area -->
        <div class="faq-area py-120">
            <div class="container">
                <div class="row">

                    <!-- Left Content -->
                    <div class="col-lg-6">
                        <div class="faq-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">
                                    <i class="far fa-window-frame-open"></i> Blinds FAQ
                                </span>
                                <h2 class="site-title my-3">
                                    Frequently Asked <span>Questions</span>
                                </h2>
                            </div>

                            <p class="mb-3">
                                Choosing the right window blinds is essential for 
                                light control, privacy, and interior aesthetics. Below 
                                are answers to some common questions our clients ask.
                            </p>

                            <p class="mb-4">
                                If you require custom sizes, fabric options, or 
                                motorized solutions, our expert team is always 
                                ready to assist you.
                            </p>

                            <a href="<?= $baseUrl ?>pages/contact.php" class="theme-btn mt-2">
                                Have Any Question ?
                            </a>
                        </div>
                    </div>

                    <!-- Right Accordion -->
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionBlinds">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingB1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#b1" aria-expanded="true" aria-controls="b1">
                                        <span><i class="far fa-question"></i></span>
                                        How do I choose the right blinds?
                                    </button>
                                </h2>
                                <div id="b1" class="accordion-collapse collapse show" aria-labelledby="headingB1" data-bs-parent="#accordionBlinds">
                                    <div class="accordion-body">
                                        Our team helps you select blinds based on room type, lighting requirements, interior design, and your privacy needs. We offer samples and consultations to ensure the perfect fit.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingB2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b2" aria-expanded="false" aria-controls="b2">
                                        <span><i class="far fa-question"></i></span>
                                        Are motorized blinds available?
                                    </button>
                                </h2>
                                <div id="b2" class="accordion-collapse collapse" aria-labelledby="headingB2" data-bs-parent="#accordionBlinds">
                                    <div class="accordion-body">
                                        Yes, we provide smart motorized blinds with remote control and home automation options for convenient operation and modern living.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingB3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b3" aria-expanded="false" aria-controls="b3">
                                        <span><i class="far fa-question"></i></span>
                                        What materials are your blinds made from?
                                    </button>
                                </h2>
                                <div id="b3" class="accordion-collapse collapse" aria-labelledby="headingB3" data-bs-parent="#accordionBlinds">
                                    <div class="accordion-body">
                                        We offer blinds in aluminium, wood, fabric, and PVC materials. Each type offers unique benefits for light control, durability, and aesthetic appeal.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingB4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b4" aria-expanded="false" aria-controls="b4">
                                        <span><i class="far fa-question"></i></span>
                                        Do you offer custom sizing?
                                    </button>
                                </h2>
                                <div id="b4" class="accordion-collapse collapse" aria-labelledby="headingB4" data-bs-parent="#accordionBlinds">
                                    <div class="accordion-body">
                                        Absolutely. We provide custom-sized blinds to fit any window or door. Our team takes precise measurements to ensure a perfect fit and professional installation.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- faq area end -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
