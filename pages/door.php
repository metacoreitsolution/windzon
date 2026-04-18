<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'door';
$pageTitle = 'Doors - Windzon';
$pageDescription = 'Discover Windzon\'s premium aluminium doors – sliding, hinged, folding, French doors. Secure, durable, and elegant for residential and commercial spaces.';
$pageKeywords = 'aluminium doors, sliding doors, folding doors, door installation';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Doors</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Doors</li>
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
                            <span class="site-title-tagline"><i class="far fa-window-frame-open"></i> Feature</span>
                            <h2 class="site-title">Our Awesome <span>Feature For</span> Our Clients</h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="feature-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/sound.svg" alt="">
                                </div>
                                <h4 class="feature-title">Sound Insulation</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of the page looking layout point.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/weather.svg" alt="">
                                </div>
                                <h4 class="feature-title">Weather Resistance</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of the page looking layout point.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/door-lock.svg" alt="">
                                </div>
                                <h4 class="feature-title">High Security</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of the page looking layout point.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="feature-icon">
                                    <img src="<?= $baseUrl ?>assets/img/icon/money.svg" alt="">
                                </div>
                                <h4 class="feature-title">No Upfront Payment</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of the page looking layout point.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- door area -->
        <div class="door-area bg py-120">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 align-self-center">
                <div class="door-left">

                    <div class="door-content wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">
                                <i class="far fa-window-frame-open"></i> Our Door Collection
                            </span>
                            <h2 class="site-title">
                                Premium <span>Aluminium Doors</span> For Modern Living
                            </h2>
                        </div>

                        <p class="about-text">
                            Our aluminium doors are designed to combine strength, 
                            security, and contemporary style. Built using 
                            high-quality aluminium profiles and advanced locking 
                            systems, our doors enhance safety while maintaining 
                            sleek aesthetics suitable for residential, commercial, 
                            and industrial spaces.
                        </p>
                    </div>

                    <div class="door-service wow fadeInUp" data-wow-delay=".25s">
                        <div class="row g-0">

                            <!-- Sliding Door -->
                            <div class="col-md-4">
                                <div class="door-service-item">
                                    <div class="door-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/door-3.svg" alt="">
                                    </div>
                                    <div class="door-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=doors&item=sliding-doors">Sliding Doors</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Hinged Door -->
                            <div class="col-md-4">
                                <div class="door-service-item">
                                    <div class="door-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/door-2.svg" alt="">
                                    </div>
                                    <div class="door-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=doors&item=hinged-doors">Hinged Doors</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Fixed Glass Door -->
                            <div class="col-md-4">
                                <div class="door-service-item border-end-0">
                                    <div class="door-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/door-1.svg" alt="">
                                    </div>
                                    <div class="door-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=doors&item=fixed-glass-doors">Fixed Glass Doors</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Folding Door -->
                            <div class="col-md-4">
                                <div class="door-service-item border-bottom-0">
                                    <div class="door-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/door-5.svg" alt="">
                                    </div>
                                    <div class="door-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=doors&item=folding-doors">Folding Doors</a>
                                    </div>
                                </div>
                            </div>

                            <!-- French Door -->
                            <div class="col-md-4">
                                <div class="door-service-item border-bottom-0">
                                    <div class="door-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/door-6.svg" alt="">
                                    </div>
                                    <div class="door-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=doors&item=french-doors">French Doors</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Customized Door -->
                            <div class="col-md-4">
                                <div class="door-service-item border-0">
                                    <div class="door-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/door-4.svg" alt="">
                                    </div>
                                    <div class="door-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=doors&item=customized-doors">Customized Doors</a>
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
                        <img src="<?= $baseUrl ?>assets/img/door/01.jpg" alt="Modern Aluminium Doors">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
        <!-- door area -->


        <!-- faq area -->
        <div class="faq-area py-120">
    <div class="container">
        <div class="row">

            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="faq-right">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline justify-content-start">
                            <i class="far fa-window-frame-open"></i> Door FAQ
                        </span>
                        <h2 class="site-title my-3">
                            Frequently Asked <span>Questions</span>
                        </h2>
                    </div>

                    <p class="mb-3">
                        Choosing the right aluminium door is essential for 
                        security, durability, and modern aesthetics. Below 
                        are answers to some common questions our clients ask.
                    </p>

                    <p class="mb-4">
                        If you require custom sizes, design consultation, or 
                        detailed technical specifications, our expert team 
                        is always ready to assist you.
                    </p>

                    <a href="<?= $baseUrl ?>pages/contact.php" class="theme-btn mt-2">
                        Have Any Question ?
                    </a>
                </div>
            </div>

            <!-- Right Accordion -->
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">

                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <span><i class="far fa-question"></i></span>
                                How secure are aluminium doors?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our aluminium doors feature reinforced frames 
                                and advanced multi-point locking systems that 
                                provide high-level protection against forced entry, 
                                ensuring safety for residential and commercial properties.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <span><i class="far fa-question"></i></span>
                                Are aluminium doors weather resistant?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. Aluminium doors are highly resistant to rust, 
                                corrosion, moisture, and extreme temperatures, 
                                making them ideal for all weather conditions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <span><i class="far fa-question"></i></span>
                                Do you offer customized door designs?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Absolutely. We provide custom sizes, frame finishes, 
                                glass options, and powder-coated color selections 
                                tailored to match your architectural requirements.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <span><i class="far fa-question"></i></span>
                                How long do aluminium doors last?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                With proper installation and minimal maintenance, 
                                aluminium doors can last for decades while maintaining 
                                their strength, performance, and modern appearance.
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
