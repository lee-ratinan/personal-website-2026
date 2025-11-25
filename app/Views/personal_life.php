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
                <li><a href="#hero" class="active"><?= lang('Home.sections.home.title') ?></a></li>
                <li><a href="#about"><?= lang('Home.sections.about.title') ?></a></li>
                <li><a href="#resume"><?= lang('Home.sections.resume.title') ?></a></li>
                <li><a href="#services"><?= lang('Home.sections.services.title') ?></a></li>
                <li><a href="#portfolio"><?= lang('Home.sections.portfolio.title') ?></a></li>
                <li><a href="#contact"><?= lang('Home.sections.contact.title') ?></a></li>
                <li><a href="<?= base_url($locale . '/personal-life') ?>"><?= lang('Home.system.pages.personal-life') ?></a></li>
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
                    <h2><?= lang('Home.sections.home.greetings') ?></h2>
                    <p><?= lang('Home.sections.home.i-am-a') ?> <span class="typed" data-typed-items="<?= lang('Home.sections.home.occupations') ?>"></span><span class="typed-cursor" aria-hidden="true"></span></p>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/ratinanlee" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com/lee-ratinan" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="https://www.instagram.com/ratinanlee/" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
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
                    <li><a href="#hero"><?= lang('Home.sections.home.title') ?></a></li>
                    <li><a href="#about"><?= lang('Home.sections.about.title') ?></a></li>
                    <li><a href="#resume"><?= lang('Home.sections.resume.title') ?></a></li>
                    <li><a href="#services"><?= lang('Home.sections.services.title') ?></a></li>
                    <li><a href="#portfolio"><?= lang('Home.sections.portfolio.title') ?></a></li>
                    <li><a href="#contact"><?= lang('Home.sections.contact.title') ?></a></li>
                    <li><a href="<?= base_url($locale . '/personal-life') ?>"><?= lang('Home.system.pages.personal-life') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <h4><?= lang('Home.system.change-language') ?></h4>
                <ul>
                    <li><a href="<?= base_url('en') ?>">English (US)</a></li>
                    <li><a href="<?= base_url('th') ?>">ภาษาไทย</a></li>
                    <li><a href="<?= base_url('ja') ?>">日本語</a></li>
                    <li><a href="<?= base_url('zh-TW') ?>">中文（台灣）</a></li>
                    <li><a href="<?= base_url('en-SHAW') ?>">𐑖𐑱𐑝𐑾𐑯</a></li>
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