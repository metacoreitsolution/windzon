<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'team';
$pageTitle = 'Our Team - Windzon';
$pageDescription = 'Meet the Windzon team – experienced professionals dedicated to delivering premium aluminium windows and doors with expert installation.';
$pageKeywords = 'Windzon team, window experts, door professionals';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Our Team</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li class="active">Our Team</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- team-area -->
        <div class="team-area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-window-frame-open"></i> Our Team</span>
                            <h2 class="site-title">Meet With Our <span>Expert</span> Team Members</h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/01.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Angela T. Vigil</a></h5>
                                    <span>HR Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/02.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Frank A. Mitchell</a></h5>
                                    <span>Technician</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/03.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Susan D. Lunsford</a></h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/04.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Dennis A. Pruitt</a></h5>
                                    <span>Senior Worker</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/01.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Angela T. Vigil</a></h5>
                                    <span>HR Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/02.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Frank A. Mitchell</a></h5>
                                    <span>Technician</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/03.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Susan D. Lunsford</a></h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img src="<?= $baseUrl ?>assets/img/team/04.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Dennis A. Pruitt</a></h5>
                                    <span>Senior Worker</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area end -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
