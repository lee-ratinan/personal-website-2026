<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('PersonalLife.system.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('PersonalLife.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('PersonalLife.system.seo.keywords') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <?php if ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Sriracha&display=swap" rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&family=Stick&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Rampart+One&display=swap" rel="stylesheet">
    <?php else : ?>
        <link href="https://fonts.googleapis.com/css2?family=Rampart+One&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet') ?>">
    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.min.css') ?>" rel="stylesheet">
    <!-- hreflang -->
    <link rel="alternate" hreflang="en" href="<?= base_url('en/personal-life') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/personal-life') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/personal-life') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/personal-life') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('personal-life') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body class="index-page <?= $locale ?>">
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
                <li><a href="#footer"><i class="bi bi-translate"></i></a></li>
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
                    <div class="image-stack" style="position: relative;">
                        <div class="image-main" style="position: relative;z-index: 1;">
                            <img src="<?= base_url('assets/img/travel/about-1.jpg') ?>" alt="<?= lang('PersonalLife.sections.about.heading') ?>" class="img-fluid" style="border-radius: 8px; box-shadow: 0 20px 40px color-mix(in srgb, var(--accent-color), transparent 90%);">
                        </div>
                        <div class="image-overlay" style="position: absolute;bottom: -40px;right: -40px;z-index: 2;max-width: 200px;">
                            <img src="<?= base_url('assets/img/travel/about-2.jpg') ?>" alt="Nat Lee" class="img-fluid" style="border-radius: 8px; border: 4px solid var(--default-color); box-shadow: 0 15px 30px color-mix(in srgb, var(--accent-color), transparent 85%);">
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
            <div class="isotope-layout" data-default-filter=".filter-first-twelve" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active"><?= lang('PersonalLife.sections.gallery.filters.all') ?> <span id="count-gallery-all"></span></li>
                    <li data-filter=".filter-southeast-asia"><?= lang('PersonalLife.sections.gallery.filters.southeast-asia') ?> <span id="count-gallery-southeast-asia"></span></li>
                    <li data-filter=".filter-east-asia"><?= lang('PersonalLife.sections.gallery.filters.east-asia') ?> <span id="count-gallery-east-asia"></span></li>
                    <li data-filter=".filter-oceania"><?= lang('PersonalLife.sections.gallery.filters.oceania') ?> <span id="count-gallery-oceania"></span></li>
                    <li data-filter=".filter-america"><?= lang('PersonalLife.sections.gallery.filters.america') ?> <span id="count-gallery-america"></span></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <?php
                    $regions = [
                            'southeast-asia' => 0,
                            'east-asia'      => 0,
                            'america'        => 0,
                            'oceania'        => 0,
                    ];
                    ?>
                    <?php foreach ($galleries as $i => $gallery) : ?>
                        <?php
                        $regions[$gallery['filter']] += 1;
                        $locations = [];
                        $date_str  = format_date($gallery['dates'], $locale, ' - ');
                        foreach ($gallery['locations'] as $location) {
                            $locations[] = lang('PersonalLife.locations.' . $location);
                        }
                        ?>
                        <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?= ($i < 12 ? 'filter-first-twelve' : '') ?> <?= 'filter-' . $gallery['filter'] ?>">
                            <div class="portfolio-card">
                                <div class="portfolio-image-container">
                                    <img src="<?= base_url('assets/img/gallery/' . $gallery['code'] . '.jpg') ?>" alt="<?= $gallery['title'] ?>" class="img-fluid" loading="lazy">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h4><?= $gallery['title'] ?></h4>
                                        </div>
                                        <div class="portfolio-actions">
                                            <a href="<?= base_url('assets/img/gallery/' . $gallery['code'] . '.jpg') ?>" class="glightbox portfolio-link" data-glightbox="title:<?= $gallery['title'] ?>;description: <i class='bi bi-geo-alt'></i> <?= implode(get_comma($locale), $locations) ?> <i class='bi bi-calendar-heart'></i> <?= $date_str ?>"><i class="bi bi-plus-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <div class="project-tags me-2 d-block">
                                        <span class="tag float-start m-1">
                                            <?= implode('</span><span class="tag float-start m-1">', $locations) ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <span class="small"><i class="bi bi-calendar-heart"></i> <?= $date_str ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section><!-- /Gallery Section -->
    <script>
        document.getElementById('count-gallery-all').innerHTML = '(<?= count($galleries) ?>)';
        document.getElementById('count-gallery-southeast-asia').innerHTML = '(<?= $regions['southeast-asia'] ?>)';
        document.getElementById('count-gallery-east-asia').innerHTML = '(<?= $regions['east-asia'] ?>)';
        document.getElementById('count-gallery-oceania').innerHTML = '(<?= $regions['oceania'] ?>)';
        document.getElementById('count-gallery-america').innerHTML = '(<?= $regions['america'] ?>)';
    </script>
    <!-- Bucket List Section -->
    <section id="bucket-list" class="bucket-list portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="300">
            <h5><?= lang('PersonalLife.sections.bucket-list.title') ?></h5>
            <h2><?= lang('PersonalLife.sections.bucket-list.heading') ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="isotope-layout" data-default-filter=".filter-first-twelve" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active"><?= lang('PersonalLife.sections.bucket-list.filters.all') ?> <span id="count-bucket-all"></span></li>
                    <li data-filter=".filter-observatory"><?= lang('PersonalLife.sections.bucket-list.filters.observatory') ?> <span id="count-bucket-observatory"></span></li>
                    <li data-filter=".filter-adventure"><?= lang('PersonalLife.sections.bucket-list.filters.adventure') ?> <span id="count-bucket-adventure"></span></li>
                    <li data-filter=".filter-cultural"><?= lang('PersonalLife.sections.bucket-list.filters.cultural') ?> <span id="count-bucket-cultural"></span></li>
                    <li data-filter=".filter-pilgrimage"><?= lang('PersonalLife.sections.bucket-list.filters.pilgrimage') ?> <span id="count-bucket-pilgrimage"></span></li>
                    <li data-filter=".filter-others"><?= lang('PersonalLife.sections.bucket-list.filters.others') ?> <span id="count-bucket-others"></span></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <?php
                    $stats = [
                            'observatory' => 0,
                            'adventure'   => 0,
                            'cultural'    => 0,
                            'pilgrimage'  => 0,
                            'others'      => 0
                    ];
                    ?>
                    <?php foreach ($bucket_lists as $i => $item) : ?>
                        <?php
                        $stats[$item['filter']] += 1;
                        $date_str = '';
                        if (!empty($item['dates'])) {
                            $date_str = format_date($item['dates'], $locale);
                        } else if (isset($item['since'])) {
                            $year     = calculate_years([$item['since']], $locale);
                            $date_str = lang('PersonalLife.since', [$year]);
                        }
                        $locations = [];
                        foreach ($item['locations'] as $location) {
                            $locations[] = lang('PersonalLife.locations.' . $location);
                        }
                        ?>
                        <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?= ($i < 12 ? 'filter-first-twelve' : '') ?> <?= 'filter-' . $item['filter'] ?>">
                            <div class="portfolio-card">
                                <div class="portfolio-image-container">
                                    <img src="<?= base_url('assets/img/bucket-lists/' . $item['code'] . '.jpg') ?>" alt="<?= $item['title'] ?>" class="img-fluid" loading="lazy">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h4><?= $item['title'] ?></h4>
                                        </div>
                                        <div class="portfolio-actions">
                                            <a href="<?= base_url('assets/img/bucket-lists/' . $item['code'] . '.jpg') ?>" class="glightbox portfolio-link" data-glightbox="title:<?= lang('PersonalLife.sections.bucket-list.filters.' . $item['filter']) ?> / <?= $item['title'] ?>; description: <i class='bi bi-geo-alt'></i> <?= implode(get_comma($locale), $locations) ?> <i class='bi bi-calendar-heart'></i> <?= $date_str ?>"><i class="bi bi-plus-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <div class="project-tags">
                                        <span class="tag float-start"><?= implode('</span><span class="tag float-start">', $locations) ?></span>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <span class="small">
                                        <i class="bi bi-calendar-heart"></i> <?= $date_str ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section><!-- /Bucket List Section -->
    <?php
    $totals = [
            'observatory' => ($stats['observatory']+count($bucket_lists_to_fill['observatory'])),
            'adventure'   => ($stats['adventure']+count($bucket_lists_to_fill['adventure'])),
            'cultural'    => ($stats['cultural']+count($bucket_lists_to_fill['cultural'])),
            'pilgrimage'  => ($stats['pilgrimage']+count($bucket_lists_to_fill['pilgrimage'])),
            'others'      => ($stats['others']+count($bucket_lists_to_fill['others']))
    ];
    $grand_total = array_sum($totals);
    ?>
    <script>
        document.getElementById('count-bucket-all').innerHTML = '(<?= count($bucket_lists) ?>/<?= $grand_total ?>)';
        document.getElementById('count-bucket-observatory').innerHTML = '(<?= $stats['observatory'] ?>/<?= $totals['observatory'] ?>)';
        document.getElementById('count-bucket-adventure').innerHTML = '(<?= $stats['adventure'] ?>/<?= $totals['adventure'] ?>)';
        document.getElementById('count-bucket-cultural').innerHTML = '(<?= $stats['cultural'] ?>/<?= $totals['cultural'] ?>)';
        document.getElementById('count-bucket-pilgrimage').innerHTML = '(<?= $stats['pilgrimage'] ?>/<?= $totals['pilgrimage'] ?>)';
        document.getElementById('count-bucket-others').innerHTML = '(<?= $stats['others'] ?>/<?= $totals['others'] ?>)';
    </script>
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
                    <li><a href="<?= base_url('ja/personal-life') ?>">日本語 <sup>AI 翻訳 </sup></a></li>
                    <li><a href="<?= base_url('zh-TW/personal-life') ?>">中文（台灣） <sup>AI 翻譯</sup></a></li>
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
<script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>
</html>