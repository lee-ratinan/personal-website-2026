<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Certifications.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('Home.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('Home.system.seo.keywords') ?>">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/certifications') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/certifications') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/certifications') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/certifications') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('certifications') ?>"/>
    <link rel="canonical" href="<?= current_url($locale . '/certifications') ?>">
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
                <li><a href="<?= base_url($locale) ?>"><?= lang('Home.sections.home.title') ?></a></li>
                <li><a href="#"><?= lang('Certifications.title') ?></a></li>
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
    <!-- Certifications Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <h2><?= lang('Certifications.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col" data-aos="zoom-in" data-aos-delay="150">
                    <div class="table-responsive mb-5">
                        <table class="table table-dark table-striped table-hover table-sm">
                            <thead>
                            <tr>
                                <th style="min-width:400px" colspan="3"><?= lang('Certifications.table.title') ?></th>
                                <th style="min-width:150px"><?= lang('Certifications.table.date') ?></th>
                                <th style="min-width:350px"><?= lang('Certifications.table.certifying-body') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5"><b><?= lang('Certifications.academic') ?></b></td>
                                </tr>
                                <?php foreach ($certificates['academic'] as $level => $records) : ?>
                                    <?php foreach ($records as $i => $row) : ?>
                                        <tr>
                                            <?php if (0 == $i) : ?>
                                            <td rowspan="<?= count($records) ?>"><?= lang('Certifications.data.' . $level) ?></td>
                                            <?php endif; ?>
                                            <td><?= (empty($row[3]) ? '-' : '<a class="btn btn-sm btn-warning" href="' . $row[3] . '" target="_blank"><i class="bi bi-file-earmark-pdf"></i></a>') ?></td>
                                            <td>
                                                <?= (empty($row[3]) ? '<i class="bi bi-x-circle text-danger"></i>' : '<i class="bi bi-check2-circle text-success"></i>') ?>
                                                <?= $row[0] ?>
                                            </td>
                                            <td><?= $row[2] ?></td>
                                            <td><?= $row[1] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="5"><b><?= lang('Certifications.professional') ?></b></td>
                                </tr>
                                <?php foreach ($certificates['professional'] as $group => $records) : ?>
                                    <?php foreach ($records as $i => $row) : ?>
                                        <tr>
                                            <?php if (0 == $i) : ?>
                                                <td rowspan="<?= count($records) ?>"><?= $group ?></td>
                                            <?php endif; ?>
                                            <td><?= (empty($row[3]) ? '-' : '<a class="btn btn-sm btn-primary" href="' . $row[3] . '" target="_blank"><i class="bi bi-file-earmark-pdf"></i></a>') ?></td>
                                            <td>
                                                <?= (empty($row[3]) ? '<i class="bi bi-x-circle text-danger"></i>' : '<i class="bi bi-check2-circle text-success"></i>') ?>
                                                <?= $row[0] ?>
                                            </td>
                                            <td><?= $row[2] ?></td>
                                            <td><?= $row[1] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="5"><b><?= lang('Certifications.others') ?></b></td>
                                </tr>
                                <?php foreach ($certificates['others']['languages'] as $lang => $records) : ?>
                                    <?php foreach ($records as $i => $row) : ?>
                                        <tr>
                                            <?php if (0 == $i) : ?>
                                                <td rowspan="<?= count($records) ?>"><?= lang('Certifications.data.' . $lang) ?></td>
                                            <?php endif; ?>
                                            <td><?= (empty($row[3]) ? '-' : '<a class="btn btn-sm btn-info" href="' . $row[3] . '" target="_blank"><i class="bi bi-file-earmark-pdf"></i></a>') ?></td>
                                            <td>
                                                <?= (empty($row[3]) ? '<i class="bi bi-x-circle text-danger"></i>' : '<i class="bi bi-check2-circle text-success"></i>') ?>
                                                <?= $row[0] ?>
                                            </td>
                                            <td><?= $row[2] ?></td>
                                            <td><?= $row[1] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <h3><?= lang('Certifications.cefr.title') ?></h3>
                    <div class="table-responsive">
                        <table class="table table-dark table-striped table-hover table-sm">
                            <thead>
                            <tr>
                                <th><?= lang('Certifications.cefr.language') ?></th>
                                <th colspan="2"><?= lang('Certifications.cefr.test') ?></th>
                                <th>A1</th>
                                <th>A2</th>
                                <th>B1</th>
                                <th>B2</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th><?= lang('Certifications.cefr.mother-tongue') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ภาษาไทย<br>Thai</td>
                                <td colspan="2">-</td>
                                <td colspan="6"></td>
                                <td><span class="badge bg-success"><i class="bi bi-check2-circle"></i> <?= lang('Certifications.cefr.mother-tongue') ?></span></td>
                            </tr>
                            <tr>
                                <td>English</td>
                                <td colspan="2">EF SET<br><small>(Computerized Adaptive Test)</small></td>
                                <td colspan="5"></td>
                                <td><a class="btn btn-sm btn-info" href="https://drive.google.com/file/d/18piWVwM1u3UT2zCmABG8uasEyYcuMHdv/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-pdf"></i> <?= format_date(['2025-08-08'], $locale) ?></a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td rowspan="5">日本語<br>Japanese</td>
                                <td rowspan="5">JLPT<br><small>(Paper-based)</small></td>
                                <td>N5</td>
                                <td><span class="badge bg-warning">80+/180</span></td>
                                <td colspan="6"></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td></td>
                                <td><span class="badge bg-warning">90+/180</span></td>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td></td>
                                <td><span class="badge bg-warning">95-103/180</span></td>
                                <td><span class="badge bg-warning">104+/180</span></td>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td></td>
                                <td></td>
                                <td><span class="badge bg-warning">90-111/180</span></td>
                                <td><span class="badge bg-warning">112+/180</span></td>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><span class="badge bg-warning">100-141/180</span></td>
                                <td><span class="badge bg-warning">142+/180</span></td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>國語｜中文（台灣）<br>Taiwanese Mandarin</td>
                                <td colspan="2">TOCFL<br><small>(Computerized Adaptive Test)</small></td>
                                <td colspan="7"></td>
                            </tr>
                            </tbody>
                        </table>
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
                    <li><a href="<?= base_url('en/certifications') ?>">English (US)</a></li>
                    <li><a href="<?= base_url('th/certifications') ?>">ภาษาไทย</a></li>
                    <li><a href="<?= base_url('ja/certifications') ?>">日本語 <sup>AI 翻訳</sup></a></li>
                    <li><a href="<?= base_url('zh-TW/certifications') ?>">中文（台灣） <sup>AI 翻譯</sup></a></li>
                    <li><a href="<?= base_url('en-Shaw/certifications') ?>">𐑖𐑱𐑝𐑾𐑯</a></li>
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