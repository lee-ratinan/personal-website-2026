<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $data['business-card'] ?> - <?= $data['name'] ?></title>
    <meta name="description" content="<?= lang('Home.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('Home.system.seo.keywords') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if (in_array($locale, ['en', 'vi', 'id', 'es'])) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('en-Shaw' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Shavian&display=swap" rel="stylesheet">
    <?php elseif ('ko' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@100..900&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free-7.1.0-web/css/all.min.css') ?>" rel="stylesheet">
    <!-- hreflang -->
    <link rel="alternate" hreflang="en" href="<?= base_url('business-card?hl=en') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('business-card?hl=th') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('business-card?hl=ja') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('business-card?hl=zh-TW') ?>"/>
    <link rel="alternate" hreflang="ko" href="<?= base_url('business-card?hl=ko') ?>"/>
    <link rel="alternate" hreflang="vi" href="<?= base_url('business-card?hl=vi') ?>"/>
    <link rel="alternate" hreflang="es" href="<?= base_url('business-card?hl=es') ?>"/>
    <link rel="alternate" hreflang="id" href="<?= base_url('business-card?hl=id') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('business-card?hl=en-Shaw') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('business-card') ?>"/>
    <link rel="canonical" href="<?= current_url() . (empty($hl) ? '' : '?hl=' . $hl) ?>">
    <style>
        body {
        <?php if (in_array($locale, ['en', 'vi', 'id', 'es'])) : ?> font-family: "Noto Serif", serif;
        <?php elseif ('th' == $locale) : ?> font-family: "Noto Serif Thai", serif;
        <?php elseif ('zh-TW' == $locale) : ?> font-family: "Noto Serif TC", serif;
        <?php elseif ('ja' == $locale) : ?> font-family: "Noto Serif JP", serif;
        <?php elseif ('en-Shaw' == $locale) : ?> font-family: "Noto Sans Shavian", serif;
        <?php elseif ('ko' == $locale) : ?> font-family: "Noto Serif KR", serif;
        <?php endif; ?>
        }
        h3 { font-size:1.1em; }
        h2 { font-size:1.2em; }
        h1 { font-size:1.3em; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col px-3 py-5" style="width:100%;max-width:800px;margin:0 auto;">
            <h1><?= $data['name'] ?></h1>
            <h2><?= $data['tagline'] ?></h2>
            <a href="<?= base_url() ?>" class="btn btn-outline-success btn-sm me-2 mb-2">
                <i class="fa-solid fa-globe-asia"></i> lee.ratinan.com
            </a>
            <a href="mailto:lee@ratinan.com" class="btn btn-outline-success btn-sm me-2 mb-2">
                <i class="fa-solid fa-envelope"></i> lee@ratinan.com
            </a>
            <div class="row">
                <div class="col col-md-10 col-lg-8">
                    <?php foreach ($links as $class => $link) : ?>
                        <a href="<?= $link ?>" class="btn btn-outline-success btn-sm me-2 mb-2">
                            <i class="fa-brands fa-<?= $class ?>"></i>
                            <?= $translations[$locale][$class] ?? $translations['en'][$class] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <p>
                <?php foreach ($professional_profiles as $name => $link) : ?>
                    [ <a href="<?= $link ?>" target="_blank"><?= $name ?></a> ]
                <?php endforeach; ?>
            </p>
            <h3><?= $data['education'] ?></h3>
            <ul>
                <?php foreach ($data['educations'] as $row) : ?>
                    <li><?= $row ?></li>
                <?php endforeach; ?>
            </ul>
            <hr>
            <h3><?= $data['certification'] ?></h3>
            <ul>
                <?php foreach ($data['certifications'] as $row) : ?>
                    <li><?= $row ?></li>
                <?php endforeach; ?>
            </ul>
            <i class="fa-solid fa-language"></i>
            <?php foreach ($supported_languages as $lang_code => $lang_name) : ?>
                <a class="btn btn-<?= ($lang_code == $locale ? '' : 'outline-') ?>success btn-sm" href="?hl=<?= $lang_code ?>"><?= $lang_name ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
</html>