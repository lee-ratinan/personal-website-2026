<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.system.pages.home') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('Home.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('Home.system.seo.keywords') ?>">
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
<?php
$experience_years = date('Y') - 2012;
?>
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
    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.1') ?></span>
            <h2><?= lang('Home.sections.about.about-me') ?></h2>
            <p><?= lang('Home.sections.about.main-paragraph') ?></p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="150">
                    <div class="profile-card">
                        <div class="profile-header">
                            <div class="profile-avatar">
                                <img src="<?= base_url('assets/img/profile/profile-img.jpg') ?>" class="img-fluid" alt="<?= lang('Home.sections.about.ratinan-lee') ?>">
                                <div class="status-indicator"></div>
                            </div>
                            <h3><?= lang('Home.sections.about.ratinan-lee') ?></h3>
                            <span class="role"><?= lang('Home.sections.about.main-occupations') ?></span>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </div>
                        </div>
                        <div class="profile-stats">
                            <div class="stat-item">
                                <h4>20+</h4>
                                <p><?= lang('Home.sections.about.counts.products') ?></p>
                            </div>
                            <div class="stat-item">
                                <h4><?= $experience_years ?>+</h4>
                                <p><?= lang('Home.sections.about.counts.years') ?></p>
                            </div>
                            <div class="stat-item">
                                <h4>19+</h4>
                                <p><?= lang('Home.sections.about.counts.certificates') ?></p>
                            </div>
                        </div>
                        <div class="profile-actions">
                            <a href="#" class="btn-primary d-none"><i class="bi bi-download"></i> <?= lang('Home.sections.about.download-cv') ?></a>
                            <a href="#contact" class="btn-secondary"><i class="bi bi-envelope"></i> <?= lang('Home.sections.contact.title') ?></a>
                        </div>
                        <div class="social-connect">
                            <a href="https://www.linkedin.com/in/ratinanlee" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/lee-ratinan" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="https://www.instagram.com/ratinanlee/" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
                    <div class="content-wrapper">
                        <div class="bio-section">
                            <div class="section-tag"><?= lang('Home.sections.about.about-me') ?></div>
                            <h2><?= lang('Home.sections.about.secondary.title') ?></h2>
                            <p><?= lang('Home.sections.about.secondary.paragraph-1') ?></p>
                            <p><?= lang('Home.sections.about.secondary.paragraph-2') ?></p>
                        </div>
                        <div class="details-grid">
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="250">
                                <i class="bi bi-briefcase"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.1.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.1.value', [$experience_years]) ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-mortarboard"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.2.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.2.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="350">
                                <i class="bi bi-geo-alt"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.3.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.3.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-calendar-check"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.4.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.4.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="350">
                                <i class="bi bi-translate"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.5.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.5.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-person-vcard"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.6.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.6.value') ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Resume Section -->
    <section id="resume" class="resume section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.2') ?></span>
            <h2><?= lang('Home.sections.resume.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="experience-section">
                        <div class="section-header" data-aos="fade-right" data-aos-delay="200">
                            <div class="header-content">
                                <span class="section-badge"><?= lang('Home.sections.resume.experience.label') ?></span>
                                <h2><?= lang('Home.sections.resume.experience.title') ?></h2>
                            </div>
                        </div>
                        <div class="experience-cards">
                            <div class="exp-card featured" data-aos="zoom-in" data-aos-delay="300">
                                <div class="card-header">
                                    <div class="company-logo">
                                        <i class="bi bi-buildings"></i>
                                    </div>
                                    <div class="period-badge"><?= lang('Home.sections.resume.experience.records.1.current') ?></div>
                                </div>
                                <div class="card-body">
                                    <h3><?= lang('Home.sections.resume.experience.records.1.title') ?></h3>
                                    <p class="company-name"><?= lang('Home.sections.resume.experience.records.1.companies') ?></p>
                                    <span class="duration"><?= lang('Home.sections.resume.experience.records.1.when') ?></span>
                                    <p class="description"><?= lang('Home.sections.resume.experience.records.1.paragraph') ?></p>
                                    <div class="skills-tags">
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.1') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.2') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.3') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.4') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="exp-card" data-aos="zoom-in" data-aos-delay="350">
                                <div class="card-header">
                                    <div class="company-logo">
                                        <i class="bi bi-laptop"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3><?= lang('Home.sections.resume.experience.records.2.title') ?></h3>
                                    <p class="company-name"><?= lang('Home.sections.resume.experience.records.2.companies') ?></p>
                                    <span class="duration"><?= lang('Home.sections.resume.experience.records.2.when') ?></span>
                                    <p class="description"><?= lang('Home.sections.resume.experience.records.2.paragraph') ?></p>
                                    <div class="skills-tags">
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.1') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.2') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.3') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.4') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="exp-card" data-aos="zoom-in" data-aos-delay="400">
                                <div class="card-header">
                                    <div class="company-logo">
                                        <i class="bi bi-keyboard"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3><?= lang('Home.sections.resume.experience.records.3.title') ?></h3>
                                    <p class="company-name"><?= lang('Home.sections.resume.experience.records.3.companies') ?></p>
                                    <span class="duration"><?= lang('Home.sections.resume.experience.records.3.when') ?></span>
                                    <p class="description"><?= lang('Home.sections.resume.experience.records.3.paragraph') ?></p>
                                    <div class="skills-tags">
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.1') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.2') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.3') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.4') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="education-section">
                        <div class="section-header" data-aos="fade-left" data-aos-delay="200">
                            <div class="header-content">
                                <span class="section-badge"><?= lang('Home.sections.resume.education.label') ?></span>
                                <h2><?= lang('Home.sections.resume.education.title') ?></h2>
                            </div>
                        </div>
                        <div class="education-timeline" data-aos="fade-left" data-aos-delay="300">
                            <div class="timeline-track">
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <div class="education-meta">
                                            <span class="year-range"><?= lang('Home.sections.resume.education.records.certificates.years') ?></span>
                                            <span class="degree-level"><?= lang('Home.sections.resume.education.records.certificates.label') ?></span>
                                        </div>
                                        <h4><?= lang('Home.sections.resume.education.records.certificates.title') ?></h4>
                                        <div class="certifications-list">
                                            <?php foreach (lang('Home.sections.resume.education.records.certificates.list') as $line) : ?>
                                            <div class="cert-item">
                                                <span class="cert-name"><?= $line[0] ?></span>
                                                <span class="cert-year"><?= $line[1] ?></span>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <div class="education-meta">
                                            <span class="year-range"><?= lang('Home.sections.resume.education.records.masters.year') ?></span>
                                            <span class="degree-level"><?= lang('Home.sections.resume.education.records.masters.label') ?></span>
                                        </div>
                                        <h4><?= lang('Home.sections.resume.education.records.masters.title') ?></h4>
                                        <p class="institution"><?= lang('Home.sections.resume.education.records.masters.university') ?></p>
                                        <p class="description"><?= lang('Home.sections.resume.education.records.masters.paragraph') ?></p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <div class="education-meta">
                                            <span class="year-range"><?= lang('Home.sections.resume.education.records.bachelor.year') ?></span>
                                            <span class="degree-level"><?= lang('Home.sections.resume.education.records.bachelor.label') ?></span>
                                        </div>
                                        <h4><?= lang('Home.sections.resume.education.records.bachelor.title') ?></h4>
                                        <p class="institution"><?= lang('Home.sections.resume.education.records.bachelor.university') ?></p>
                                        <p class="description"><?= lang('Home.sections.resume.education.records.bachelor.paragraph') ?></p>
                                        <div class="achievement">
                                            <i class="bi bi-award"></i>
                                            <span><?= lang('Home.sections.resume.education.records.bachelor.honors') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Resume Section -->
    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.3') ?></span>
            <h2><?= lang('Home.sections.services.title') ?></h2>
            <p><?= lang('Home.sections.services.paragraph') ?></p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <?php
                $icons = [
                    'kanban', // leadership + management
                    'palette', // system analysis design
                    'code-slash', // development
                    'megaphone'  // coaching
                ];
                ?>
                <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="<?= $i+1 ?>00">
                    <div class="service-item">
                        <?php if (0 == $i) : ?><div class="featured-tag">Featured</div><?php endif ?>
                        <div class="icon-wrapper">
                            <i class="bi bi-<?= $icons[$i] ?>"></i>
                        </div>
                        <h4><?= lang('Home.sections.services.list.' . $i . '.item') ?></h4>
                        <p><?= lang('Home.sections.services.list.' . $i . '.description') ?></p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            <div class="row mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="cta-box">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h3><?= lang('Home.sections.services.cta-title') ?></h3>
                                <p><?= lang('Home.sections.services.cta-paragraph') ?></p>
                            </div>
                            <div class="col-lg-4 text-lg-end text-center">
                                <a href="#contact" class="cta-btn"><?= lang('Home.sections.services.cta') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Services Section -->
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.4') ?></span>
            <h2><?= lang('Home.sections.portfolio.title') ?></h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active">All Work</li>
                    <li data-filter=".filter-creative">Creative</li>
                    <li data-filter=".filter-digital">Digital</li>
                    <li data-filter=".filter-strategy">Strategy</li>
                    <li data-filter=".filter-development">Development</li>
                </ul>

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-creative">
                        <div class="portfolio-card">
                            <div class="portfolio-image-container">
                                <img src="<?= base_url('assets/img/portfolio/portfolio-1.webp') ?>" alt="Creative Project" class="img-fluid" loading="lazy">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <span class="project-category">Creative Design</span>
                                        <h4>Visual Identity System</h4>
                                    </div>
                                    <div class="portfolio-actions">
                                        <a href="<?= base_url('assets/img/portfolio/portfolio-1.webp') ?>" class="glightbox portfolio-link">
                                            <i class="bi bi-plus-lg"></i>
                                        </a>
                                        <a href="#" class="portfolio-details">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-meta">
                                <div class="project-tags">
                                    <span class="tag">Branding</span>
                                    <span class="tag">Identity</span>
                                </div>
                                <div class="project-year">2024</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
                        <div class="portfolio-card">
                            <div class="portfolio-image-container">
                                <img src="<?= base_url('assets/img/portfolio/portfolio-2.webp') ?>" alt="Digital Project" class="img-fluid" loading="lazy">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <span class="project-category">Digital Experience</span>
                                        <h4>Interactive Web Platform</h4>
                                    </div>
                                    <div class="portfolio-actions">
                                        <a href="<?= base_url('assets/img/portfolio/portfolio-2.webp') ?>" class="glightbox portfolio-link">
                                            <i class="bi bi-plus-lg"></i>
                                        </a>
                                        <a href="#" class="portfolio-details">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-meta">
                                <div class="project-tags">
                                    <span class="tag">Web Design</span>
                                    <span class="tag">Development</span>
                                </div>
                                <div class="project-year">2024</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
                        <div class="portfolio-card">
                            <div class="portfolio-image-container">
                                <img src="<?= base_url('assets/img/portfolio/portfolio-3.webp') ?>" alt="Strategy Project" class="img-fluid" loading="lazy">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <span class="project-category">Brand Strategy</span>
                                        <h4>Market Positioning</h4>
                                    </div>
                                    <div class="portfolio-actions">
                                        <a href="<?= base_url('assets/img/portfolio/portfolio-3.webp') ?>" class="glightbox portfolio-link">
                                            <i class="bi bi-plus-lg"></i>
                                        </a>
                                        <a href="#" class="portfolio-details">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-meta">
                                <div class="project-tags">
                                    <span class="tag">Strategy</span>
                                    <span class="tag">Consulting</span>
                                </div>
                                <div class="project-year">2023</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
                        <div class="portfolio-card">
                            <div class="portfolio-image-container">
                                <img src="<?= base_url('assets/img/portfolio/portfolio-4.webp') ?>" alt="Development Project" class="img-fluid" loading="lazy">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <span class="project-category">Full Stack</span>
                                        <h4>Custom Application</h4>
                                    </div>
                                    <div class="portfolio-actions">
                                        <a href="<?= base_url('assets/img/portfolio/portfolio-4.webp') ?>" class="glightbox portfolio-link">
                                            <i class="bi bi-plus-lg"></i>
                                        </a>
                                        <a href="#" class="portfolio-details">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-meta">
                                <div class="project-tags">
                                    <span class="tag">React</span>
                                    <span class="tag">Node.js</span>
                                </div>
                                <div class="project-year">2024</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-creative">
                        <div class="portfolio-card">
                            <div class="portfolio-image-container">
                                <img src="<?= base_url('assets/img/portfolio/portfolio-5.webp') ?>" alt="Creative Project" class="img-fluid" loading="lazy">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <span class="project-category">Art Direction</span>
                                        <h4>Campaign Design</h4>
                                    </div>
                                    <div class="portfolio-actions">
                                        <a href="<?= base_url('assets/img/portfolio/portfolio-5.webp') ?>" class="glightbox portfolio-link">
                                            <i class="bi bi-plus-lg"></i>
                                        </a>
                                        <a href="#" class="portfolio-details">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-meta">
                                <div class="project-tags">
                                    <span class="tag">Creative</span>
                                    <span class="tag">Campaign</span>
                                </div>
                                <div class="project-year">2024</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
                        <div class="portfolio-card">
                            <div class="portfolio-image-container">
                                <img src="<?= base_url('assets/img/portfolio/portfolio-6.webp') ?>" alt="Digital Project" class="img-fluid" loading="lazy">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <span class="project-category">Digital Product</span>
                                        <h4>Mobile Experience</h4>
                                    </div>
                                    <div class="portfolio-actions">
                                        <a href="<?= base_url('assets/img/portfolio/portfolio-6.webp') ?>" class="glightbox portfolio-link">
                                            <i class="bi bi-plus-lg"></i>
                                        </a>
                                        <a href="#" class="portfolio-details">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-meta">
                                <div class="project-tags">
                                    <span class="tag">Mobile</span>
                                    <span class="tag">UI/UX</span>
                                </div>
                                <div class="project-year">2023</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="portfolio-bottom" data-aos="fade-up" data-aos-delay="400">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3>Like what you see?</h3>
                        <p>Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="#contact" class="btn btn-accent">Let's Work Together</a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Portfolio Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.5') ?></span>
            <h2><?= lang('Home.sections.contact.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-linkedin"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.linkedin') ?></h3>
                            <p><a href="https://www.linkedin.com/in/ratinanlee" target="_blank">/in/ratinanlee</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-github"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.github') ?></h3>
                            <p><a href="https://github.com/lee-ratinan" target="_blank">/lee-ratinan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.instagram') ?></h3>
                            <p><a href="https://www.instagram.com/ratinanlee/" target="_blank">/ratinanlee</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-line"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.line') ?></h3>
                            <p><a href="https://line.me/ti/p/ME2Tsnm9nr" target="_blank">Nat-エイキン</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-medium"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.medium') ?></h3>
                            <p><a href="https://medium.com/@ratinanlee" target="_blank">@ratinanlee</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-messenger"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.facebook') ?></h3>
                            <p><a href="https://www.messenger.com/t/lee.ratinan/" target="_blank">/lee.ratinan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-telegram"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.telegram') ?></h3>
                            <p><a href="https://t.me/rikikawa_eikin" target="_blank">@rikikawa_eikin</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.whatsapp') ?></h3>
                            <p><a href="<?= base_url('whatsapp') ?>" target="_blank">Ratinan “Nat” Lee</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->
</main>
<footer id="footer" class="footer">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Craftivo</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
                <p>United States</p>
                <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>

        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Craftivo</strong> <span>All Rights Reserved</span></p>
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