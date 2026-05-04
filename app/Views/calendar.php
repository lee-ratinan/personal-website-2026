<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.calendar') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="Ratinan Lee's <?= lang('Home.calendar') ?>">
    <meta name="keywords" content="<?= lang('Home.calendar') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if ('en' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Story+Script&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Sriracha&display=swap" rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&family=Stick&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Yusei+Magic&display=swap" rel="stylesheet">
    <?php else : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Shavian&display=swap" rel="stylesheet">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/calendar') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/calendar') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/calendar') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/calendar') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('calendar') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body class="calendar-page <?= $locale ?>">
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="<?= base_url($locale) ?>" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="<?= base_url('assets/img/logo.webp') ?>" alt=""> -->
            <h1 class="sitename fw-bold"><?= lang('Home.system.site-name-head') ?></h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= base_url($locale) ?>"><?= lang('Home.sections.home.title') ?></a></li>
                <li><a href="<?= base_url($locale . '/certifications') ?>"><?= lang('Certifications.title') ?></a></li>
                <li><a href="<?= base_url($locale . '/writing') ?>"><?= lang('Writing.title') ?></a></li>
                <li><a href="<?= base_url($locale . '/personal-life') ?>"><?= lang('Home.system.pages.personal-life') ?></a></li>
                <li><a href="https://blog.ratinan.com"><?= lang('Home.system.pages.blog') ?></a></li>
                <li><a href="#footer"><i class="bi bi-translate"></i></a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
<main class="main">
    <!-- About Section -->
    <section id="about" class="about section mt-5">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?= lang('Home.calendar') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-delay="150">
                    <div style="overflow: hidden; height: 575px; width: 800px; max-width:100%; border: 1px solid #ccc; margin: 0 auto;">
                        <iframe
                            src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FSingapore&showPrint=0&title=Nat%20Lee's%20Calendar&showCalendars=0&showTabs=0&showTitle=1&src=bGVlLnJhdGluYW5AZ21haWwuY29t&color=%237cb342"
                            style="border-width:0; margin: 0 auto -25px auto; max-width:100%;"
                            width="800"
                            height="600"
                            frameborder="0"
                            scrolling="no">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
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
                    <li><a href="<?= base_url($locale) ?>"><?= lang('Home.sections.home.title') ?></a></li>
                    <li><a href="<?= base_url($locale . '/certifications') ?>"><?= lang('Certifications.title') ?></a></li>
                    <li><a href="<?= base_url($locale . '/writing') ?>"><?= lang('Writing.title') ?></a></li>
                    <li><a href="<?= base_url($locale . '/personal-life') ?>"><?= lang('Home.system.pages.personal-life') ?></a></li>
                    <li><a href="<?= base_url($locale . '/calendar') ?>"><?= lang('Home.calendar') ?></a></li>
                    <li><a href="https://blog.ratinan.com"><?= lang('Home.system.pages.blog') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <h4><?= lang('Home.system.change-language') ?></h4>
                <ul>
                    <li><a href="<?= base_url('en/calendar') ?>">English (US)</a></li>
                    <li><a href="<?= base_url('th/calendar') ?>">ภาษาไทย</a></li>
                    <li><a href="<?= base_url('ja/calendar') ?>">日本語 <sup>AI 翻訳</sup></a></li>
                    <li><a href="<?= base_url('zh-TW/calendar') ?>">中文（台灣） <sup>AI 翻譯</sup></a></li>
                    <li><a href="<?= base_url('en-Shaw/calendar') ?>">𐑖𐑱𐑝𐑾𐑯</a></li>
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