<?php
require_once __DIR__ . '/../includes/blog_repository.php';

// Get slug from URL
$slug = $_GET['slug'] ?? '';
$post = mc_blog_find_dynamic_by_slug($slug);

// 404 if post not found
if (!$post) {
    header('HTTP/1.0 404 Not Found');
    echo '<!DOCTYPE html><html><head><title>Post Not Found</title></head><body><h1>404 - Post Not Found</h1><p><a href="../pages/blog.php">Back to Blog</a></p></body></html>';
    exit;
}

// Page Configuration
$baseUrl = '../';
$activePage = 'blog';
$pageTitle = ($post['meta_title'] ?: $post['title']) . ' - Windzon';
$pageDescription = $post['meta_description'] ?: $post['excerpt'];
$pageKeywords = $post['meta_keywords'];
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title"><?= htmlspecialchars($post['title']) ?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li><a href="<?= $baseUrl ?>pages/blog.php">Blog</a></li>
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
                                            <a href="<?= $baseUrl ?>pages/blog.php" class="theme-btn"><i class="far fa-arrow-left"></i> Back to Blog</a>
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
                                        <a href="<?= $baseUrl ?>pages/blog.php?cat=<?= urlencode($cat['slug']) ?>">
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

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
