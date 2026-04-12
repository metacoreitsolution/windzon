<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thank you for contacting Windzon. We will respond shortly.">
    <title>Thank You - Windzon</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/windzon-premium.css">
</head>
<body class="thank-you-page">
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
                        <img src="assets/img/logo.png" alt="Windzon">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
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
                            <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link" href="contact.php">Contact us</a></li>
                        </ul>
                        <div class="nav-right">
                            <div class="nav-right-btn mt-2">
                                <a href="contact.php" class="theme-btn">Get A Quote<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="search-area">
                        <form action="blog.php" method="get">
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
    <main class="main thank-you-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="thank-you-card text-center">
                        <div class="thank-you-icon mb-4" aria-hidden="true">
                            <i class="far fa-check-circle text-success"></i>
                        </div>
                        <h1 class="mb-4">Thank You!</h1>
                        <p class="lead mb-4">Your message has been received. Our team will respond within 24 hours.</p>
                        <p class="mb-4 thank-you-contact">For urgent enquiries, call us at <a href="tel:+919712002300">+91 97120 02300</a> or <a href="tel:+918000800052">+91 80008 00052</a></p>
                        <div class="thank-you-actions d-flex flex-wrap gap-3 justify-content-center align-items-center">
                            <a href="index.php" class="theme-btn">Back to Home</a>
                            <a href="contact.php" class="theme-btn theme-btn2 thank-you-btn-outline">Contact Again</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer-area thank-you-footer">
        <div class="copyright thank-you-copyright-bar">
            <div class="container text-center">
                <p class="copyright-text mb-0">&copy; <span id="thank-you-year"></span> Windzon. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>document.getElementById("thank-you-year").textContent = new Date().getFullYear();</script>
</body>
</html>
