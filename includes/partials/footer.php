    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="<?= $baseUrl ?>index.php" class="footer-logo">
                                <img src="<?= $baseUrl ?>assets/img/logo.png" alt="">
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
                                <li><a href="<?= $baseUrl ?>index.php"><i class="fas fa-caret-right"></i> Home</a></li>
                                <li><a href="<?= $baseUrl ?>pages/about.php"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="<?= $baseUrl ?>pages/window.php"><i class="fas fa-caret-right"></i> Window</a></li>
                                <li><a href="<?= $baseUrl ?>pages/door.php"><i class="fas fa-caret-right"></i> Door</a></li>
                                <li><a href="<?= $baseUrl ?>pages/blinds.php"><i class="fas fa-caret-right"></i> Blinds</a></li>
                                <li><a href="<?= $baseUrl ?>pages/our-project.php"><i class="fas fa-caret-right"></i> Our Projects</a></li>
                                <li><a href="<?= $baseUrl ?>pages/contact.php"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Our Services</h4>
                            <ul class="footer-list">
                                <li><a href="<?= $baseUrl ?>pages/window.php"><i class="fas fa-caret-right"></i> Window Installation</a></li>
                                <li><a href="<?= $baseUrl ?>pages/door.php"><i class="fas fa-caret-right"></i> Door Systems</a></li>
                                <li><a href="<?= $baseUrl ?>pages/service-single.php?service=maintenance"><i class="fas fa-caret-right"></i> Maintenance & Repair</a></li>
                                <li><a href="<?= $baseUrl ?>pages/service-single.php?service=accessories"><i class="fas fa-caret-right"></i> Accessories</a></li>
                                <li><a href="<?= $baseUrl ?>pages/contact.php"><i class="fas fa-caret-right"></i> Project Consultation</a></li>
                                <li><a href="<?= $baseUrl ?>pages/service.php"><i class="fas fa-caret-right"></i> All Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box footer-cta-panel">
                            <div class="footer-cta-inner">
                                <span class="footer-cta-label">Next step</span>
                                <h4 class="footer-cta-title">Start your project</h4>
                                <p class="footer-cta-text">Site visits, measurements, and tailored quotes for homes and commercial spaces in Rajkot and beyond.</p>
                                <a href="<?= $baseUrl ?>pages/contact.php" class="theme-btn footer-cta-btn">Free consultation <i class="far fa-arrow-right"></i></a>
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
                            &copy; Copyright <span id="date"></span> <a href="<?= $baseUrl ?>index.php"> Windzon </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <?php include __DIR__ . '/footer-social-items.php'; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
    <script src="<?= $baseUrl ?>assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?= $baseUrl ?>assets/js/modernizr.min.js"></script>
    <script src="<?= $baseUrl ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $baseUrl ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?= $baseUrl ?>assets/js/wow.min.js"></script>
    <?php if (!empty($additionalJS)): ?>
        <?php foreach ($additionalJS as $js): ?>
            <script src="<?= $baseUrl ?>assets/js/<?= $js ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    <script src="<?= $baseUrl ?>assets/js/main.js"></script>
</body>
</html>
