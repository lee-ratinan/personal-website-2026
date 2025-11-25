<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('PersonalLife.system.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('PersonalLife.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('PersonalLife.system.seo.keywords') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet') ?>">
    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body class="index-page">
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="<?= base_url($locale) ?>" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="<?= base_url('assets/img/logo.webp') ?>" alt=""> -->
            <h1 class="sitename fw-bold"><?= lang('Home.system.site-name-head') ?></h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><?= lang('PersonalLife.system.title') ?></a></li>
                <li><a href="#about"><?= lang('PersonalLife.sections.about.title') ?></a></li>
                <li><a href="#gallery"><?= lang('PersonalLife.sections.gallery.title') ?></a></li>
                <li><a href="#bucket-list"><?= lang('PersonalLife.sections.bucket-list.title') ?></a></li>
                <li><a href="<?= base_url($locale) ?>"><?= lang('PersonalLife.system.back-home') ?></a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="<?= base_url('assets/img/profile/profile-hero.jpg') ?>" alt="" data-aos="fade-in">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2><?= lang('PersonalLife.sections.home.greetings') ?></h2>
                    <p><?= lang('PersonalLife.sections.home.i-am-a') ?> <span class="typed" data-typed-items="<?= lang('PersonalLife.sections.home.occupations') ?>"></span><span class="typed-cursor" aria-hidden="true"></span></p>
                    <div class="social-links">
                        <a href="https://www.instagram.com/ratinanlee/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/lee.ratinan" target="_blank"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="content" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-4"><?= lang('PersonalLife.sections.about.heading') ?></h2>
                        <p class="lead mb-4"><?= lang('PersonalLife.sections.about.paragraph-1') ?></p>
                        <p class="mb-5"><?= lang('PersonalLife.sections.about.paragraph-2') ?></p>
                        <div class="row g-4 mb-5">
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <div class="stat-number fw-bold"><?= number_format($countries_visited) ?></div>
                                    <div class="stat-label"><?= lang('PersonalLife.sections.about.box-1') ?></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <div class="stat-number fw-bold">~<?= number_format($distant_traveled) ?></div>
                                    <div class="stat-label"><?= lang('PersonalLife.sections.about.box-2') ?></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <?php $vacations = count($galleries); ?>
                                    <div class="stat-number fw-bold"><?= number_format($vacations) ?></div>
                                    <div class="stat-label"><?= lang('PersonalLife.sections.about.box-3') ?></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <div class="stat-number fw-bold"><?= number_format($flights) ?>+</div>
                                    <div class="stat-label"><?= lang('PersonalLife.sections.about.box-4') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="image-stack">
                        <div class="image-main">
                            <img src="<?= base_url('assets/img/travel/about-1.jpg') ?>" alt="<?= lang('PersonalLife.sections.about.heading') ?>" class="img-fluid">
                        </div>
                        <div class="image-overlay">
                            <img src="<?= base_url('assets/img/travel/about-2.jpg') ?>" alt="Nat Lee" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Gallery Section -->
    <section id="gallery" class="gallery portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="300">
            <h5><?= lang('PersonalLife.sections.gallery.title') ?></h5>
            <h2><?= lang('PersonalLife.sections.gallery.heading') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="isotope-layout" data-default-filter=".filter-first-ten" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active"><?= lang('PersonalLife.sections.gallery.filters.all') ?></li>
                    <li data-filter=".filter-southeast-asia"><?= lang('PersonalLife.sections.gallery.filters.southeast-asia') ?></li>
                    <li data-filter=".filter-east-asia"><?= lang('PersonalLife.sections.gallery.filters.east-asia') ?></li>
                    <li data-filter=".filter-oceania"><?= lang('PersonalLife.sections.gallery.filters.oceania') ?></li>
                    <li data-filter=".filter-america"><?= lang('PersonalLife.sections.gallery.filters.america') ?></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <?php foreach ($galleries as $i => $gallery) : ?>
                        <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?= ($i < 10 ? 'filter-first-ten' : '') ?> <?php foreach ($gallery['filters'] as $filter) {echo ' filter-' . $filter;} ?>">
                            <div class="portfolio-card">
                                <div class="portfolio-image-container">
                                    <img src="<?= base_url('assets/img/gallery/' . $gallery['code'] . '.jpg') ?>" alt="<?= $gallery['title'] ?>" class="img-fluid" loading="lazy">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h4><?= $gallery['title'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <div class="project-tags me-2 d-block">
                                        <?php foreach ($gallery['locations'] as $location) : ?><span class="tag float-start m-1"><?= lang('PersonalLife.locations.' . $location) ?></span><?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <span class="small"><?= format_date($gallery['dates'], $locale, ' - ') ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section><!-- /Gallery Section -->
    <!-- Bucket List Section -->
    <section id="bucket-list" class="bucket-list portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="300">
            <h5><?= lang('PersonalLife.sections.bucket-list.title') ?></h5>
            <h2><?= lang('PersonalLife.sections.bucket-list.heading') ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="isotope-layout" data-default-filter=".filter-first-ten" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*"><?= lang('PersonalLife.sections.bucket-list.filters.all') ?></li>
                    <li data-filter=".filter-observation"><?= lang('PersonalLife.sections.bucket-list.filters.observation') ?></li>
                    <li data-filter=".filter-activity"><?= lang('PersonalLife.sections.bucket-list.filters.activity') ?></li>
                    <li data-filter=".filter-cultural"><?= lang('PersonalLife.sections.bucket-list.filters.cultural') ?></li>
                    <li data-filter=".filter-others"><?= lang('PersonalLife.sections.bucket-list.filters.others') ?></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <?php foreach ($bucket_lists as $i => $item) : ?>
                        <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?= ($i < 10 ? 'filter-first-ten' : '') ?> <?php foreach ($item['filters'] as $filter) {echo ' filter-' . $filter;} ?>">
                            <div class="portfolio-card">
                                <div class="portfolio-image-container">
                                    <img src="<?= base_url('assets/img/bucket-list/' . $item['code'] . '.jpg') ?>" alt="<?= $item['title'] ?>" class="img-fluid" loading="lazy">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h4><?= $item['title'] ?></h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <div class="project-tags me-2">
                                        <?php foreach ($item['locations'] as $location) : ?><span class="tag float-start m-1"><?= lang('PersonalLife.locations.' . $location) ?></span><?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <span class="small"><?= format_date($item['dates'], $locale, ' - ') ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section><!-- /Bucket List Section -->
</main>
<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="<?= base_url($locale) ?>" class="logo d-flex align-items-center">
                    <span class="sitename"><?= lang('Home.system.site-name-head') ?></span>
                </a>
                <p><?= lang('Home.system.footer-msg') ?></p>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <h4><?= lang('Home.system.useful-links') ?></h4>
                <ul>
                    <li><a href="#hero" class="active"><?= lang('PersonalLife.system.title') ?></a></li>
                    <li><a href="#about"><?= lang('PersonalLife.sections.about.title') ?></a></li>
                    <li><a href="#gallery"><?= lang('PersonalLife.sections.gallery.title') ?></a></li>
                    <li><a href="#bucket-list"><?= lang('PersonalLife.sections.bucket-list.title') ?></a></li>
                    <li><a href="<?= base_url($locale) ?>"><?= lang('PersonalLife.system.back-home') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <h4><?= lang('Home.system.change-language') ?></h4>
                <ul>
                    <li><a href="<?= base_url('en/personal-life') ?>">English (US)</a></li>
                    <li><a href="<?= base_url('th/personal-life') ?>">ภาษาไทย</a></li>
                    <li><a href="<?= base_url('ja/personal-life') ?>">日本語</a></li>
                    <li><a href="<?= base_url('zh-TW/personal-life') ?>">中文（台灣）</a></li>
                    <li><a href="<?= base_url('en-SHAW/personal-life') ?>">𐑖𐑱𐑝𐑾𐑯</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">RatinanLee</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('assets/vendor/typed.js/typed.umd.js') ?>"></script>
<script src="<?= base_url('assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<!-- Main JS File -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>