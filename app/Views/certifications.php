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
<?php include "_header.php"; ?>
<main class="main">
    <!-- Certifications Section -->
    <section id="about" class="about section mt-5">
        <div class="container section-title" data-aos="fade-up">
            <h2><?= lang('Certifications.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-delay="150">
                    <?php include "_professional_certifications.php"; ?>
                </div>
                <div class="col-12" data-aos="zoom-in" data-aos-delay="200">
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
                    <h3><?= lang('Certifications.cefr.title') ?> <sup><a href="https://www.eur.nl/en/media/2021-03-assessment-grid-council-europe-english" target="_blank"><i class="bi bi-box-arrow-up-right"></i></a></sup></h3>
                    <div class="table-responsive">
                        <table class="table table-dark table-striped table-hover table-sm">
                            <thead>
                            <tr>
                                <th style="min-width:150px"><?= lang('Certifications.cefr.language') ?></th>
                                <th style="min-width:250px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ภาษาไทย Thai</td>
                                <td><div class="progress" role="progressbar" aria-label="ภาษาไทย Thai" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><div class="progress-bar bg-success w-100"><?= lang('Certifications.cefr.mother-tongue') ?></div></div></td>
                            </tr>
                            <tr>
                                <td>English</td>
                                <td><div class="progress" role="progressbar" aria-label="English" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><div class="progress-bar bg-success w-100">C2</div></div></td>
                            </tr>
                            <tr>
                                <td>日本語 Japanese</td>
                                <td><div class="progress" role="progressbar" aria-label="日本語 Japanese" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"><div class="progress-bar bg-warning" style="width:17%">A1</div></div></td>
                            </tr>
                            <tr>
                                <td>國語 Taiwanese Mandarin</td>
                                <td><div class="progress" role="progressbar" aria-label="國語 Taiwanese Mandarin" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"><div class="progress-bar bg-warning" style="width:17%">A1</div></div></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="progress-stacked">
                                        <div class="progress" role="progressbar" aria-label="A1" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%"><div class="progress-bar bg-info">A1</div></div>
                                        <div class="progress" role="progressbar" aria-label="A2" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%"><div class="progress-bar bg-primary">A2</div></div>
                                        <div class="progress" role="progressbar" aria-label="B1" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%"><div class="progress-bar bg-info">B1</div></div>
                                        <div class="progress" role="progressbar" aria-label="B2" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%"><div class="progress-bar bg-primary">B2</div></div>
                                        <div class="progress" role="progressbar" aria-label="C1" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%"><div class="progress-bar bg-info">C1</div></div>
                                        <div class="progress" role="progressbar" aria-label="C2" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%"><div class="progress-bar bg-primary">C2</div></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
</main>
<?php include "_footer.php"; ?>
</body>
</html>