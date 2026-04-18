<?php
require_once __DIR__ . '/includes/blog_repository.php';

// Get slug from URL
$slug = $_GET['slug'] ?? '';
$post = mc_blog_find_dynamic_by_slug($slug);

// 404 if post not found
if (!$post) {
    header('HTTP/1.0 404 Not Found');
    echo '<!DOCTYPE html><html><head><title>Post Not Found</title></head><body><h1>404 - Post Not Found</h1><p><a href="blog.php">Back to Blog</a></p></body></html>';
    exit;
}

// Set meta tags
$pageTitle = $post['meta_title'] ?: $post['title'];
$pageDescription = $post['meta_description'] ?: $post['excerpt'];
$pageKeywords = $post['meta_keywords'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">

    <!-- title -->
    <title><?= htmlspecialchars($pageTitle) ?> - Windzon</title>

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
                <h2 class="breadcrumb-title"><?= htmlspecialchars($post['title']) ?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li class="active"><?= htmlspecialchars($post['title']) ?></li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- blog single area -->
        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <?php if ($post['image_url']): ?>
                                    <div class="blog-thumb-img">
                                        <img src="<?= htmlspecialchars($post['image_url']) ?>" alt="<?= htmlspecialchars($post['image_alt'] ?: $post['title']) ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="#"><?= htmlspecialchars($post['author']) ?></a></li>
                                                <li><i class="far fa-calendar"></i><?= mc_blog_format_display_date($post['published_at']) ?></li>
                                            </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                             <a href="#" class="share-link"><i class="far fa-share-alt"></i>Share</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20"><?= htmlspecialchars($post['title']) ?></h3>
                                        <div class="blog-content">
                                            <?= $post['body'] ?>
                                        </div>
                                        <hr>
                                        <div class="mt-4">
                                            <a href="blog.php" class="theme-btn"><i class="far fa-arrow-left"></i> Back to Blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <!-- search-->
                            <div class="widget search">
                                <h5 class="widget-title">Search</h5>
                                <form class="search-form" action="blog.php" method="get">
                                    <input type="text" name="s" class="form-control" placeholder="Search Here...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <!-- category -->
                            <div class="widget category">
                                <h5 class="widget-title">Category</h5>
                                <div class="category-list">
                                    <?php
                                    $categories = mc_blog_fetch_all_categories();
                                    foreach ($categories as $cat):
                                    ?>
                                        <a href="blog.php?cat=<?= urlencode($cat['slug']) ?>">
                                            <i class="far fa-arrow-right"></i><?= htmlspecialchars($cat['label']) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- recent post -->
                            <div class="widget recent-post">
                                <h5 class="widget-title">Recent Post</h5>
                                <?php
                                $recentPosts = array_slice(mc_all_posts(), 0, 3);
                                foreach ($recentPosts as $recentPost):
                                ?>
                                    <div class="recent-post-single">
                                        <?php if ($recentPost['image_url']): ?>
                                            <div class="recent-post-img">
                                                <img src="<?= htmlspecialchars($recentPost['image_url']) ?>" alt="<?= htmlspecialchars($recentPost['title']) ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="recent-post-bio">
                                            <h6><a href="blog-single.php?slug=<?= urlencode($recentPost['slug']) ?>"><?= htmlspecialchars($recentPost['title']) ?></a></h6>
                                            <span><i class="far fa-clock"></i><?= mc_blog_format_display_date($recentPost['published_at']) ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- social share -->
                            <div class="widget social-share">
                                <h5 class="widget-title">Follow Us</h5>
                                <div class="social-share-link">
                                    <?php include __DIR__ . '/includes/partials/social-inline-fbf.php'; ?>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog single area end --> 

    </main>



    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="index.php" class="footer-logo">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <p class="mb-3">
                                Windzon delivers premium aluminium windows and doors with 32+ years of expertise. We combine precision engineering, quality materials, and professional installation for residential and commercial projects.
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