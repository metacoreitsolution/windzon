<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $pageDescription ?? 'Windzon - Premium aluminium windows and doors' ?>">
    <meta name="keywords" content="<?= $pageKeywords ?? 'aluminium windows, doors, blinds' ?>">
    <title><?= $pageTitle ?? 'Windzon - Windows And Doors Service' ?></title>
    <link rel="icon" type="image/x-icon" href="<?= $baseUrl ?>assets/img/logo/favicon.png">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/animate.min.css">
    <?php if (!empty($additionalCSS)): ?>
        <?php foreach ($additionalCSS as $css): ?>
            <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/<?= $css ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/windzon-premium.css">
</head>
<body>
    <div class="preloader">
        <div class="loader-ripple"><div></div><div></div></div>
    </div>
    <header class="header">
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
                            <?php include __DIR__ . '/header-social.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container custom-nav position-relative">
                    <a class="navbar-brand" href="<?= $baseUrl ?>index.php">
                        <img src="<?= $baseUrl ?>assets/img/logo.png" alt="logo">
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
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" href="<?= $baseUrl ?>index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'about' ? 'active' : '' ?>" href="<?= $baseUrl ?>pages/about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'service' ? 'active' : '' ?>" href="<?= $baseUrl ?>pages/service.php">Services</a></li>
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'window' ? 'active' : '' ?>" href="<?= $baseUrl ?>pages/window.php">Windows</a></li>
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'door' ? 'active' : '' ?>" href="<?= $baseUrl ?>pages/door.php">Doors</a></li>
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'blinds' ? 'active' : '' ?>" href="<?= $baseUrl ?>pages/blinds.php">Blinds</a></li>
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'projects' ? 'active' : '' ?>" href="<?= $baseUrl ?>pages/our-project.php">Our Projects</a></li>
                            <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'blog' ? 'active' : '' ?>" href="<?= $baseUrl ?>pages/blog.php">Blog</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link" href="<?= $baseUrl ?>pages/contact.php">Contact us</a></li>
                        </ul>
                        <div class="nav-right">
                            <div class="nav-right-btn mt-2">
                                <a href="<?= $baseUrl ?>pages/contact.php" class="theme-btn">Get A Quote<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="search-area">
                        <form action="<?= $baseUrl ?>pages/blog.php" method="get">
                            <div class="form-group">
                                <input type="text" name="s" class="form-control" placeholder="Search...">
                                <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
