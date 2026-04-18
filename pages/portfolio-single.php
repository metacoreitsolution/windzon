<?php
// Page Configuration
$baseUrl = '../';
$activePage = 'projects';
$pageTitle = 'Portfolio Detail - Windzon';
$pageDescription = 'View detailed information about our aluminium window and door project.';
$pageKeywords = 'Windzon portfolio, project details, window installation, door installation';
$additionalCSS = [];
$additionalJS = [];

include __DIR__ . '/../includes/partials/header.php';
?>

<main class="main">
<!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= $baseUrl ?>assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title" id="portfolio-breadcrumb-title">Portfolio Single</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?= $baseUrl ?>index.php">Home</a></li>
                    <li><a href="<?= $baseUrl ?>pages/our-project.php">Our Projects</a></li>
                    <li class="active" id="portfolio-breadcrumb-current">Portfolio Single</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- portfolio-single -->
        <div class="portfolio-single-area py-120">
            <div class="container">
                <div class="portfolio-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="portfolio-sidebar">
                                <div class="widget portfolio-sidebar-content">
                                    <h4 class="portfolio-sidebar-title">Portfolio Details</h4>
                                    <ul id="portfolio-sidebar-details">
                                        <li>
                                            Category <span id="portfolio-category">Modern Window</span>
                                        </li>
                                        <li>
                                            Date <span id="portfolio-date">14 March, 2025</span>
                                        </li>
                                        <li>
                                            Client Name <span id="portfolio-client">Roger M Collins</span>
                                        </li>
                                        <li>
                                            Budget <span id="portfolio-budget">$1250.00</span>
                                        </li>
                                        <li>
                                            Project Manager <span id="portfolio-manager">Doseph Brehmer</span>
                                        </li>
                                        <li>
                                            Location <span id="portfolio-location">New York, USA</span>
                                        </li>
                                        <li>
                                            Rating
                                            <div class="rating">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget new-portfolio">
                                    <h4>Need Window & Door Repair? We Are Ready To Help You</h4>
                                    <a href="contact.php" class="new-portfolio-btn">Contact Now<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="portfolio-details">
                                <div class="portfolio-details-img mb-30">
                                    <img id="portfolio-main-img" src="<?= $baseUrl ?>assets/img/portfolio/single.jpg" alt="thumb">
                                </div>
                                <div class="portfolio-details">
                                    <h3 class="mb-20" id="portfolio-main-title">Modern Window</h3>
                                    <div id="portfolio-content-body">
                                    <p class="mb-20">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                                    </p>
                                    <p class="mb-20">
                                        But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the
                                        master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                                        itself, because it is pleasure, but because those who do not know how to pursue
                                        pleasure rationally encounter consequences that are extremely painful. Nor again
                                        is there anyone who loves or pursues or desires to obtain pain of itself,
                                        because it is pain, but because occasionally circumstances occur in which toil
                                        and pain can procure him some great pleasure. To take a trivial example
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="<?= $baseUrl ?>assets/img/portfolio/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="<?= $baseUrl ?>assets/img/portfolio/02.jpg" alt="">
                                        </div>
                                    </div>
                                    <p class="mb-20">
                                        Power of choice is untrammelled and when nothing prevents our being able to do
                                        what we like best, every pleasure is to be welcomed and every pain avoided. But
                                        in certain circumstances and owing to the claims of duty or the obligations of
                                        business it will frequently occur that pleasures have to be repudiated and
                                        annoyances accepted. The wise man therefore always holds in these matters to
                                        this principle of selection.
                                    </p>
                                    <div class="my-4">
                                        <div class="mb-3">
                                            <h3 class="mb-3">Project Tips</h3>
                                            <p>Aliquam facilisis rhoncus nunc, non vestibulum mauris volutpat non.
                                                Vivamus tincidunt accumsan urna, vel aliquet nunc commodo tristique.
                                                Nulla facilisi. Phasellus vel ex nulla. Nunc tristique sapien id mauris
                                                efficitur, porta scelerisque nisl dignissim. Vestibulum ante ipsum
                                                primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed at
                                                mollis tellus. Proin consequat, orci nec bibendum viverra, ante orci
                                                suscipit dolor, et condimentum felis dolor ac lectus.</p>
                                        </div>
                                        <ul class="portfolio-single-list">
                                            <li><i class="far fa-check"></i>Fusce justo risus placerat in risus eget
                                                tincidunt consequat elit.</li>
                                            <li><i class="far fa-check"></i>Nunc fermentum sem sit amet dolor laoreet
                                                placerat.</li>
                                            <li><i class="far fa-check"></i>Nullam rhoncus dictum diam quis ultrices.
                                            </li>
                                            <li><i class="far fa-check"></i>Integer quis lorem est uspendisse eu augue
                                                porta ullamcorper dictum.</li>
                                            <li><i class="far fa-check"></i>Quisque tristique neque arcu ut venenatis
                                                felis malesuada et.</li>
                                        </ul>
                                    </div>
                                    <div class="my-4">
                                        <h3 class="mb-3">Overview &amp; Challenge</h3>
                                        <p>Quisque a nisl id sem sollicitudin volutpat. Cras et commodo quam, vel congue
                                            ligula. Orci varius natoque penatibus et magnis dis parturient montes,
                                            nascetur ridiculus mus. Cras quis venenatis neque. Donec volutpat tellus
                                            lobortis mi ornare eleifend. Fusce eu nisl ut diam ultricies accumsan.
                                            Integer lobortis vestibulum nunc id porta. Curabitur aliquam arcu sed ex
                                            dictum, a facilisis urna porttitor. Fusce et mattis nisl. Sed iaculis libero
                                            consequat justo auctor iaculis. Vestibulum sed ex et magna tristique
                                            bibendum. Sed hendrerit neque nec est suscipit, id faucibus dolor convallis.
                                        </p>
                                    </div>
                                    <p class="mt-4"><a href="contact.php" class="theme-btn">Get A Quote<i class="fas fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio-single end -->
</main>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
