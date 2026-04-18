<?php
require_once __DIR__ . '/../includes/blog_repository.php';

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

// Page Configuration
$baseUrl = '../';
$activePage = 'blog';
$pageTitle = 'Blog - Windzon';
$pageDescription = 'Latest news, tips, and insights about windows, doors, and blinds from Windzon';
$pageKeywords = 'windows blog, doors blog, aluminium windows, home improvement';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Our Blog</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
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
                                            <a href="<?= $baseUrl ?>pages/blog-single.php?slug=<?= urlencode($post['slug']) ?>"><?= htmlspecialchars($post['title']) ?></a>
                                        </h4>
                                        <p><?= htmlspecialchars($post['excerpt']) ?></p>
                                        <a class="theme-btn" href="<?= $baseUrl ?>pages/blog-single.php?slug=<?= urlencode($post['slug']) ?>">Read More<i class="fas fa-arrow-right"></i></a>
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

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
