<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'window';
$pageTitle = 'Windows - Windzon';
$pageDescription = 'Explore Windzon\'s premium aluminium windows – casement, sliding, fixed, top-hung, bay & bow, sash. Energy-efficient, durable, and stylish for homes and offices.';
$pageKeywords = 'aluminium windows, casement windows, sliding windows, window installation';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Windows</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Windows</li>
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
                    <span class="site-title-tagline">
                        <i class="far fa-window-frame-open"></i> Window Features
                    </span>
                    <h2 class="site-title">
                        Advanced <span>Performance Features</span> For Modern Spaces
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>

        <div class="feature-wrapper">
            <div class="row">

                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="feature-icon">
                            <img src="<?= $baseUrl ?>assets/img/icon/sound.svg" alt="">
                        </div>
                        <h4 class="feature-title">Superior Sound Insulation</h4>
                        <p>
                            Our aluminium windows are designed with multi-layer sealing 
                            and premium glass options that significantly reduce outside noise, 
                            creating a peaceful and comfortable indoor environment.
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="feature-icon">
                            <img src="<?= $baseUrl ?>assets/img/icon/weather.svg" alt="">
                        </div>
                        <h4 class="feature-title">Weather Resistant Design</h4>
                        <p>
                            Built with corrosion-resistant aluminium and advanced 
                            weather sealing technology, our windows withstand 
                            heavy rain, strong winds, and extreme temperatures.
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="feature-icon">
                            <img src="<?= $baseUrl ?>assets/img/icon/door-lock.svg" alt="">
                        </div>
                        <h4 class="feature-title">Enhanced Security System</h4>
                        <p>
                            Equipped with multi-point locking systems and 
                            high-strength frames to provide superior protection 
                            against forced entry and ensure complete safety.
                        </p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="feature-icon">
                            <img src="<?= $baseUrl ?>assets/img/icon/money.svg" alt="">
                        </div>
                        <h4 class="feature-title">Low Maintenance & Long Life</h4>
                        <p>
                            Our aluminium windows require minimal maintenance, 
                            resist rust and fading, and maintain their modern 
                            appearance and strength for decades.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        <!-- feature area end -->


        <!-- window area -->
        <div class="window-area bg py-120">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="window-left wow fadeInLeft" data-wow-delay=".25s">
                    <div class="window-img">
                        <img src="<?= $baseUrl ?>assets/img/window/01.jpg" alt="Modern Aluminium Windows">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 align-self-center">
                <div class="window-right">

                    <div class="window-content wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">
                                <i class="far fa-window-frame-open"></i> Our Window Collection
                            </span>
                            <h2 class="site-title">
                                Premium <span>Aluminium Windows</span> For Every Space
                            </h2>
                        </div>

                        <p class="about-text">
                            We offer a wide range of modern aluminium window systems 
                            designed to enhance natural light, ventilation, and energy efficiency. 
                            Our windows combine sleek aesthetics with structural strength, 
                            ensuring long-lasting durability and superior performance 
                            for residential, commercial, and industrial spaces.
                        </p>
                    </div>

                    <div class="window-service window-service-expanded wow fadeInUp" data-wow-delay=".25s">
                        <div class="row g-0">

                            <!-- Casement -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-10.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=casement-windows">Casement Windows</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sliding Windows -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-6.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=sliding-windows">Sliding Windows</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Fixed -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-9.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=fixed-windows">Fixed Windows</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Top Hung Windows -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-7.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=top-hung-windows">Top Hung Windows</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Bay & Bow Windows -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-11.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=bay-bow-windows">Bay & Bow Windows</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sash Windows -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-8.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=sash-windows">Sash Windows</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Slimline Window System -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-10.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=slimline-window-system">Slimline Window System</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Thermal Windows -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="window-service-item">
                                    <div class="window-service-icon">
                                        <img src="<?= $baseUrl ?>assets/img/icon/window-6.svg" alt="">
                                    </div>
                                    <div class="window-service-title">
                                        <a href="<?= $baseUrl ?>pages/product-detail.php?category=windows&item=thermal-windows">Thermal Windows</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
        <!-- window area -->


        <!-- faq area -->
        <div class="faq-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start"><i class="far fa-window-frame-open"></i> Faq's</span>
                                <h2 class="site-title my-3">General <span>frequently</span> asked questions</h2>
                            </div>
                            <p class="mb-3">Find answers to common questions about our aluminium windows and doors. From installation timelines to warranty details, we're here to help you make informed decisions.</p>
                            <p class="mb-4">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p>
                            <a href="#" class="theme-btn mt-2">Have Any Question ?</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span> How Long Does A Service Take ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-question"></i></span> How Can I Become A Member
                                        ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span><i class="far fa-question"></i></span> What Payment Gateway You Support ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span><i class="far fa-question"></i></span> How Can I Cancel My Request ?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
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
