<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'products';
$pageTitle = 'Product Detail - Windzon';
$pageDescription = 'Explore detailed specifications and design highlights for Windzon windows, doors, and blinds systems.';
$pageKeywords = 'Windzon product details, aluminium windows, aluminium doors, blinds systems';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title" id="product-breadcrumb-title">Product Detail</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li><a href="#" id="product-category-page-link">Products</a></li>
                    <li class="active" id="product-breadcrumb-current">Product Detail</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- product detail -->
        <div class="catalog-product-page py-120">
            <div class="container">
                <div class="catalog-product-head text-center">
                    <span class="site-title-tagline" id="catalog-tagline">Windows Catalogue Detail</span>
                    <h2 class="site-title" id="catalog-main-title">Product Detail</h2>
                    <p id="catalog-intro">The selected product details will appear in a new catalogue-style layout.</p>
                </div>

                <div class="catalog-overview-card">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-5">
                            <div class="catalog-overview-visual">
                                <img id="catalog-overview-image" src="<?= $baseUrl ?>assets/img/window/01.jpg" alt="Product overview">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="catalog-overview-copy">
                                <span class="catalog-overview-label">Selected System</span>
                                <h3 id="catalog-overview-title">System Range</h3>
                                <p id="catalog-overview-summary">Technical overview and key positioning will load here.</p>
                                <ul class="catalog-overview-points" id="catalog-overview-points"></ul>
                                <div class="catalog-type-nav" id="catalog-type-nav"></div>
                                <p class="catalog-source-note" id="catalog-source-note"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="catalog-type-sections"></div>

                <div class="catalog-cta-card">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-8">
                            <h3 id="catalog-cta-title">Need support for this product?</h3>
                            <p id="catalog-cta-text">Get in touch for system guidance, finishes, glazing options, and project-specific recommendations.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="contact.php" class="theme-btn">Get A Quote<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="catalog-related-card">
                    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
                        <div>
                            <span class="catalog-overview-label">More Options</span>
                            <h3 class="mb-0">Related Selections</h3>
                        </div>
                        <a href="#" id="catalog-category-link" class="theme-btn theme-btn-outline">Back To Category<i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="catalog-related-links" id="catalog-related-links"></div>
                </div>
            </div>
        </div>
        <!-- product detail end -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
