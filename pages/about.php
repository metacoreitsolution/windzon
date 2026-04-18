<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'about';
$pageTitle = 'About Us - Windzon';
$pageDescription = 'Learn about Windzon – 32+ years of aluminium windows and doors expertise. Quality, precision, and customer commitment for residential and commercial projects.';
$pageKeywords = 'about Windzon, aluminium company, windows doors manufacturer';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- about area -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <img src="<?= $baseUrl ?>assets/img/about/01.jpg" alt="About Our Aluminium Company">
                        </div>
                        <div class="about-experience">
                            <div class="about-experience-icon">
                                <img src="<?= $baseUrl ?>assets/img/icon/window.svg" alt="Aluminium Icon">
                            </div>
                            <b class="text-start">32+ Years Of <br> Industry Experience</b>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">

                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">
                                <i class="far fa-window-frame-open"></i> About Our Company
                            </span>
                            <h2 class="site-title">
                                Delivering Premium <span>Aluminium Window & Door</span> Solutions
                            </h2>
                        </div>

                        <p class="about-text">
                            We are a trusted manufacturer and installer of high-quality aluminium
                            windows and doors, serving residential and commercial clients with
                            modern, durable, and energy-efficient solutions. Our commitment to
                            precision engineering and superior materials ensures long-lasting
                            performance and elegant architectural finishes.
                        </p>

                        <p class="about-text mt-3">
                            From initial consultation and custom design to professional installation,
                            we manage every stage of the project with attention to detail and
                            customer satisfaction. Our mission is to enhance every space with
                            strong, secure, and aesthetically refined aluminium systems.
                        </p>

                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    High-performance aluminium profiles with premium finishing
                                </li>
                                <li>
                                    Customized solutions for homes, offices & commercial projects
                                </li>
                                <li>
                                    Expert installation backed by quality assurance
                                </li>
                            </ul>
                        </div>

                        <a href="<?= $baseUrl ?>pages/contact.php" class="theme-btn mt-4">
                            Get In Touch<i class="fas fa-arrow-right"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- why choose us -->
    <div class="choose-area py-120 bg">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="choose-img wow fadeInLeft" data-wow-delay=".25s">
                        <img src="<?= $baseUrl ?>assets/img/choose/01.jpg" alt="Why Choose Our Aluminium Company">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-content wow fadeInRight" data-wow-delay=".25s">

                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">
                                <i class="far fa-window-frame-open"></i> Why Choose Us
                            </span>
                            <h2 class="site-title">
                                Quality, Precision & <span>Commitment</span> In Every Project
                            </h2>
                        </div>

                        <p>
                            Choosing the right aluminium partner is essential for long-term
                            durability and performance. We combine modern technology,
                            skilled craftsmanship, and premium materials to deliver
                            window and door systems that exceed expectations.
                        </p>

                        <div class="choose-wrapper mt-4">

                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/worker.svg" alt="">
                                </div>
                                <div class="choose-item-content">
                                    <h4>Experienced Professionals</h4>
                                    <p>
                                        Our team has extensive industry experience in
                                        manufacturing and installing aluminium systems
                                        with precision and care.
                                    </p>
                                </div>
                            </div>

                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/accessory.svg" alt="">
                                </div>
                                <div class="choose-item-content">
                                    <h4>High-Quality Materials</h4>
                                    <p>
                                        We use premium-grade aluminium profiles and
                                        hardware to ensure strength, safety, and
                                        long-lasting performance.
                                    </p>
                                </div>
                            </div>

                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/money.svg" alt="">
                                </div>
                                <div class="choose-item-content">
                                    <h4>Transparent Pricing</h4>
                                    <p>
                                        Clear quotations with no hidden charges,
                                        ensuring complete trust and confidence
                                        throughout the project.
                                    </p>
                                </div>
                            </div>

                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/money.svg" alt="">
                                </div>
                                <div class="choose-item-content">
                                    <h4>Customer-Centric Approach</h4>
                                    <p>
                                        We focus on understanding client requirements
                                        and delivering customized aluminium solutions
                                        tailored to each project.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- why choose us -->

    <div class="quality-area py-120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="quality-content wow fadeInLeft" data-wow-delay=".25s">

                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">
                                <i class="far fa-window-frame-open"></i> Our Quality Policy
                            </span>
                            <h2 class="site-title">
                                Committed To <span>Excellence & Precision</span>
                            </h2>
                        </div>

                        <p>
                            Quality is at the core of everything we do. From selecting
                            premium-grade aluminium profiles to final installation,
                            every stage of our process follows strict quality control
                            standards to ensure durability, safety, and long-lasting performance.
                        </p>

                        <p class="mt-3">
                            We continuously upgrade our technology, tools, and techniques
                            to meet modern architectural demands while maintaining
                            consistency, reliability, and customer satisfaction in
                            every project we undertake.
                        </p>

                        <ul class="about-list list-unstyled mt-4">
                            <li>Strict quality inspection at every production stage</li>
                            <li>Use of certified and high-strength aluminium materials</li>
                            <li>Precision fabrication with advanced machinery</li>
                            <li>Professional installation with performance testing</li>
                            <li>Commitment to timely project completion</li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="quality-img wow fadeInRight" data-wow-delay=".25s">
                        <img src="<?= $baseUrl ?>assets/img/about/02.jpg" alt="Aluminium Quality Standards">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- testimonial cta -->
    <div class="cta-area pt-100 pb-100">
        <div class="container">
            <div class="cta-wrapper" style="background-image: url(<?= $baseUrl ?>assets/img/cta/01.jpg);">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-center text-lg-start">
                        <div class="cta-text cta-divider">
                            <h1>Hear From Our Satisfied Clients</h1>
                            <p>Discover why homeowners and businesses trust Windzon for their aluminium window and door projects. Read their real experiences and success stories.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <a href="<?= $baseUrl ?>pages/testimonial.php" class="theme-btn theme-btn2">View All Testimonials<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial cta end -->

</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
