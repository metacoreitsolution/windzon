<?php
require_once __DIR__ . '/includes/blog_repository.php';

// Get filter and pagination parameters
$categoryFilter = $_GET['cat'] ?? 'all';
$currentPage = max(1, (int)($_GET['page'] ?? 1));

// Fetch and filter posts
$allPosts = mc_all_posts();
$filteredPosts = mc_filter_posts_by_cat($allPosts, $categoryFilter);
$totalPosts = count($filteredPosts);
$totalPages = mc_blog_total_pages($totalPosts);
$posts = mc_blog_paginate_slice($filteredPosts, $currentPage);

// Get categories for filter tabs
$categories = mc_blog_fetch_all_categories();
$dbOk = mc_blog_db_available();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Latest news, tips, and insights about windows, doors, and blinds from Windzon">
    <meta name="keywords" content="windows blog, doors blog, aluminium windows, home improvement">

    <!-- title -->
    <title>Blog - Windzon Windows And Doors Service</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/windzon-premium.css">

</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">
        <!-- top header -->
        <div class="header-top">
            <div class="container px-0">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="#"><i class="far fa-location-dot"></i> Kalawad Road, Rajkot</a></li>
                                <li><a href="mailto:windzonsystemllp@gmail.com"><i class="far fa-envelopes"></i> windzonsystemllp@gmail.com</a></li>
                                <li class="header-phone-group">
                                    <a href="tel:+919712002300"><i class="far fa-phone-volume"></i> +91 97120 02300</a>
                                    <a href="tel:+918000800052" class="secondary-number">+91 80008 00052</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-social">
                            <?php include __DIR__ . '/includes/partials/header-social.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container custom-nav position-relative">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="window.php">Windows</a></li>
                            <li class="nav-item"><a class="nav-link" href="door.php">Doors</a></li>
                            <li class="nav-item"><a class="nav-link" href="blinds.php">Blinds</a></li>
                            <li class="nav-item"><a class="nav-link" href="our-project.php">Our Projects</a></li>
                            <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link" href="contact.php">Contact us</a></li>
                        </ul>
                        <div class="nav-right">
                            <div class="nav-right-btn mt-2">
                                <a href="contact.php" class="theme-btn">Get A Quote<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- search area -->
                    <div class="search-area">
                        <form action="blog.php" method="get">
                            <div class="form-group">
                                <input type="text" name="s" class="form-control" placeholder="Search...">
                                <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- search area end -->
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->


    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Our Blog</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Our Blog</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- blog area -->
        <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-window-frame-open"></i> Our Blog</span>
                            <h2 class="site-title">Latest News & <span>Blog</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>

                <?php if (!$dbOk): ?>
                    <div class="alert alert-warning text-center" role="alert">
                        <strong>Database not connected.</strong> <?= htmlspecialchars(mc_blog_db_diagnostic_message()) ?>
                    </div>
                <?php endif; ?>

                <!-- Category Filter -->
                <?php if (!empty($categories)): ?>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="text-center">
                                <a href="?cat=all" class="btn btn-sm <?= $categoryFilter === 'all' ? 'btn-primary' : 'btn-outline-primary' ?> m-1">All</a>
                                <?php foreach ($categories as $cat): ?>
                                    <a href="?cat=<?= urlencode($cat['slug']) ?>" class="btn btn-sm <?= $categoryFilter === $cat['slug'] ? 'btn-primary' : 'btn-outline-primary' ?> m-1">
                                        <?= htmlspecialchars($cat['label']) ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Blog Posts -->
                <div class="row">
                    <?php if (empty($posts)): ?>
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="far fa-file-alt" style="font-size: 64px; color: #ccc;"></i>
                                <h3 class="mt-3">No posts yet</h3>
                                <p class="text-muted">Check back soon for new content!</p>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($posts as $index => $post): ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="blog-item wow fadeInUp" data-wow-delay="<?= sprintf('.%02ds', ($index % 3 + 1) * 25) ?>">
                                    <?php if ($post['image_url']): ?>
                                        <div class="blog-item-img">
                                            <img src="<?= htmlspecialchars($post['image_url']) ?>" alt="<?= htmlspecialchars($post['image_alt'] ?: $post['title']) ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="blog-item-info">
                                        <div class="blog-item-meta">
                                            <ul>
                                                <li><a href="#"><i class="far fa-user-circle"></i> By <?= htmlspecialchars($post['author']) ?></a></li>
                                                <li><a href="#"><i class="far fa-calendar-alt"></i> <?= mc_blog_format_display_date($post['published_at']) ?></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="blog-title">
                                            <a href="blog-single.php?slug=<?= urlencode($post['slug']) ?>"><?= htmlspecialchars($post['title']) ?></a>
                                        </h4>
                                        <p><?= htmlspecialchars($post['excerpt']) ?></p>
                                        <a class="theme-btn" href="blog-single.php?slug=<?= urlencode($post['slug']) ?>">Read More<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <?php if ($totalPages > 1): ?>
                    <div class="pagination-area">
                        <div aria-label="Page navigation">
                            <ul class="pagination">
                                <?php if ($currentPage > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?cat=<?= urlencode($categoryFilter) ?>&page=<?= $currentPage - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= $i === $currentPage ? 'active' : '' ?>">
                                        <a class="page-link" href="?cat=<?= urlencode($categoryFilter) ?>&page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>

                                <?php if ($currentPage < $totalPages): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?cat=<?= urlencode($categoryFilter) ?>&page=<?= $currentPage + 1 ?>" aria-label="Next">
                                            <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- blog area end -->

    </main>



    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <p class="mb-3">
                                Windzon – premium aluminium windows and doors. 32+ years of expertise. Quality materials, expert installation, dedicated support.
                            </p>
                            <ul class="footer-contact">
                                <li class="footer-phone-group">
                                    <i class="far fa-phone"></i>
                                    <div class="footer-phone-links">
                                        <a href="tel:+919712002300">+91 97120 02300</a>
                                        <a href="tel:+918000800052">+91 80008 00052</a>
                                    </div>
                                </li>
                                <li><i class="far fa-map-marker-alt"></i>Kalawad Road, Rajkot</li>
                                <li><a href="mailto:windzonsystemllp@gmail.com"><i class="far fa-envelope"></i> windzonsystemllp@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="index.php"><i class="fas fa-caret-right"></i> Home</a></li>
                                <li><a href="about.php"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="window.php"><i class="fas fa-caret-right"></i> Window</a></li>
                                <li><a href="door.php"><i class="fas fa-caret-right"></i> Door</a></li>
                                <li><a href="blinds.php"><i class="fas fa-caret-right"></i> Blinds</a></li>
                                <li><a href="our-project.php"><i class="fas fa-caret-right"></i> Our Projects</a></li>
                                <li><a href="contact.php"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Our Services</h4>
                            <ul class="footer-list">
                                <li><a href="window.php"><i class="fas fa-caret-right"></i> Window Installation</a></li>
                                <li><a href="door.php"><i class="fas fa-caret-right"></i> Door Systems</a></li>
                                <li><a href="service-single.php?service=maintenance"><i class="fas fa-caret-right"></i> Maintenance & Repair</a></li>
                                <li><a href="service-single.php?service=accessories"><i class="fas fa-caret-right"></i> Accessories</a></li>
                                <li><a href="contact.php"><i class="fas fa-caret-right"></i> Project Consultation</a></li>
                                <li><a href="service.php"><i class="fas fa-caret-right"></i> All Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box footer-cta-panel">
                            <div class="footer-cta-inner">
                                <span class="footer-cta-label">Next step</span>
                                <h4 class="footer-cta-title">Start your project</h4>
                                <p class="footer-cta-text">Site visits, measurements, and tailored quotes for homes and commercial spaces in Rajkot and beyond.</p>
                                <a href="contact.php" class="theme-btn footer-cta-btn">Free consultation <i class="far fa-arrow-right"></i></a>
                                <div class="footer-cta-accent" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> Windzon </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <?php include __DIR__ . '/includes/partials/footer-social-items.php'; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->




    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>