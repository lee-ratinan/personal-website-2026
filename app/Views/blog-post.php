<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.system.pages.blog') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="Ratinan Lee's <?= lang('Home.system.pages.blog') ?>">
    <meta name="keywords" content="<?= lang('Home.system.pages.blog') ?>">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/blog-post' . @$post_slug) ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/blog-post' . @$post_slug) ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/blog-post' . @$post_slug) ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/blog-post' . @$post_slug) ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('blog-post' . @$post_slug) ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <style>
        .wp-block-columns{box-sizing:border-box;display:flex;flex-wrap:wrap!important}@media (min-width:782px){.wp-block-columns{flex-wrap:nowrap!important}}.wp-block-columns{align-items:normal!important}.wp-block-columns.are-vertically-aligned-top{align-items:flex-start}.wp-block-columns.are-vertically-aligned-center{align-items:center}.wp-block-columns.are-vertically-aligned-bottom{align-items:flex-end}@media (max-width:781px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:100%!important}}@media (min-width:782px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis]{flex-grow:0}}.wp-block-columns.is-not-stacked-on-mobile{flex-wrap:nowrap!important}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis]{flex-grow:0}:where(.wp-block-columns){margin-bottom:1.75em}:where(.wp-block-columns.has-background){padding:1.25em 2.375em}.wp-block-column{flex-grow:1;min-width:0;overflow-wrap:break-word;word-break:break-word}.wp-block-column.is-vertically-aligned-top{align-self:flex-start}.wp-block-column.is-vertically-aligned-center{align-self:center}.wp-block-column.is-vertically-aligned-bottom{align-self:flex-end}.wp-block-column.is-vertically-aligned-stretch{align-self:stretch}.wp-block-column.is-vertically-aligned-bottom,.wp-block-column.is-vertically-aligned-center,.wp-block-column.is-vertically-aligned-top{width:100%}
        .wp-block-pullquote{box-sizing:border-box;margin:0 0 1em;overflow-wrap:break-word;padding:4em 0;text-align:center}.wp-block-pullquote blockquote,.wp-block-pullquote p{color:inherit}.wp-block-pullquote blockquote{margin:0}.wp-block-pullquote p{margin-top:0}.wp-block-pullquote p:last-child{margin-bottom:0}.wp-block-pullquote.alignleft,.wp-block-pullquote.alignright{max-width:420px}.wp-block-pullquote cite,.wp-block-pullquote footer{position:relative}.wp-block-pullquote .has-text-color a{color:inherit}.wp-block-pullquote.has-text-align-left blockquote{text-align:left}.wp-block-pullquote.has-text-align-right blockquote{text-align:right}.wp-block-pullquote.has-text-align-center blockquote{text-align:center}.wp-block-pullquote.is-style-solid-color{border:none}.wp-block-pullquote.is-style-solid-color blockquote{margin-left:auto;margin-right:auto;max-width:60%}.wp-block-pullquote.is-style-solid-color blockquote p{font-size:2em;margin-bottom:0;margin-top:0}.wp-block-pullquote.is-style-solid-color blockquote cite{font-style:normal;text-transform:none}.wp-block-pullquote :where(cite){color:inherit;display:block}
        .max-400{max-width:400px;width:100%}
    </style>
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body class="calendar-page <?= $locale ?>">
<?php include "_header.php"; ?>
<main class="main mt-5 pt-5">
    <section id="about" class="about section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 col-md-10 col-xl-9">
                    <p><a href="<?= base_url($locale . '/blog') ?>"><?= lang('Home.system.pages.blog') ?></a> /</p>
                    <h1 id="post-title">[POST-TITLE]</h1>
                    <hr class="my-5" />
                    <div id="wordpress-post"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "_footer.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/js/glightbox.min.js" integrity="sha512-XL54SjceXZFzblziNnaFFaXggzqCuZrFS4loWPpvPJ6Kg0kc2HyL89+cPeH0GMq0sKL2SegzUmA8Lx9a0st2ow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>.gslide-desc {color:#000;}</style>
<script>
    /**
     * WordPress REST API — Single Post Fetcher & Renderer
     * Requires: jQuery
     *
     * Total API calls: 4
     *   1 × /wp/v2/posts/:id  or  /wp/v2/posts?slug=:slug
     *   1 × /wp/v2/media/:id
     *   1 × /wp/v2/users/:id
     *   1 × /wp/v2/tags?include=...
     *
     * Usage:
     *   WPPost.init({ baseUrl: 'https://your-site.com' });
     *   WPPost.loadById(123);
     *   WPPost.loadBySlug('my-post-slug');
     */

    const WPPost = (() => {
        // ─── Config ──────────────────────────────────────────────────────────────

        const CONFIG = {
            baseUrl: '',
        };

        // ─── Public: Initialise ──────────────────────────────────────────────────

        function init(options = {}) {
            CONFIG.baseUrl = (options.baseUrl || '').replace(/\/$/, '');
        }

        // ─── Public: Load by ID ──────────────────────────────────────────────────

        /**
         * Fetch and render a single post by its numeric ID.
         * @param {number} id
         */
        async function loadById(id) {
            _setLoading(true);
            try {
                const post = await _fetchById(id);
                const enriched = await _enrich(post);
                renderPost(enriched);
            } catch (err) {
                _renderError(err);
            } finally {
                _setLoading(false);
            }
        }

        // ─── Public: Load by Slug ────────────────────────────────────────────────

        /**
         * Fetch and render a single post by its slug.
         * @param {string} slug
         */
        async function loadBySlug(slug) {
            _setLoading(true);
            try {
                const post = await _fetchBySlug(slug);
                const enriched = await _enrich(post);
                renderPost(enriched);
            } catch (err) {
                _renderError(err);
            } finally {
                _setLoading(false);
            }
        }

        // ─── Step 1a: Fetch by ID ────────────────────────────────────────────────

        function _fetchById(id) {
            return $.ajax({
                url: `${CONFIG.baseUrl}/wp-json/wp/v2/posts/${id}`,
                method: 'GET',
                data: {
                    _fields: 'id,date_gmt,excerpt,title,content,featured_media,slug,tags,author',
                },
            });
        }

        // ─── Step 1b: Fetch by Slug ──────────────────────────────────────────────

        async function _fetchBySlug(slug) {
            const results = await $.ajax({
                url: `${CONFIG.baseUrl}/wp-json/wp/v2/posts`,
                method: 'GET',
                data: {
                    slug,
                    _fields: 'id,date_gmt,excerpt,title,content,featured_media,slug,tags,author',
                },
            });

            if (!results || results.length === 0) {
                throw { statusText: `No post found with slug "${slug}"` };
            }

            return results[0];
        }

        // ─── Step 2: Batch-enrich (3 parallel calls) ─────────────────────────────

        async function _enrich(post) {
            const mediaIds  = post.featured_media ? [post.featured_media] : [];
            const authorIds = post.author         ? [post.author]         : [];
            const tagIds    = post.tags           || [];

            const [mediaMap, authorMap, tagMap] = await Promise.all([
                _fetchMediaBatch(mediaIds),
                _fetchAuthorBatch(authorIds),
                _fetchTagBatch(tagIds),
            ]);

            return {
                ...post,
                mediaObj:  mediaMap[post.featured_media] || null,
                authorObj: authorMap[post.author]        || null,
                tagObjs:   tagIds.map((id) => tagMap[id]).filter(Boolean),
            };
        }

        // ─── Sub-fetchers ────────────────────────────────────────────────────────

        async function _fetchMediaBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/media`,
                    method: 'GET',
                    data: { include: ids.join(','), per_page: ids.length, _fields: 'id,source_url,alt_text,media_details' },
                });
                return _toMap(results);
            } catch { return {}; }
        }

        async function _fetchAuthorBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/users`,
                    method: 'GET',
                    data: { include: ids.join(','), per_page: ids.length, _fields: 'id,name,slug,avatar_urls,link' },
                });
                return _toMap(results);
            } catch { return {}; }
        }

        async function _fetchTagBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/tags`,
                    method: 'GET',
                    data: { include: ids.join(','), per_page: ids.length, _fields: 'id,name,slug,link' },
                });
                return _toMap(results);
            } catch { return {}; }
        }

        async function _glightboxInit() {
            // Find each figure in the gallery
            const figures = document.querySelectorAll('.wp-block-gallery figure');

            figures.forEach(function (figure) {
                // Skip if already processed
                if (figure.querySelector('a.glightbox')) return;

                const img = figure.querySelector('img');
                if (!img) return;

                const caption = figure.querySelector('figcaption');
                const description = caption ? caption.innerHTML.trim() : '';

                // Prefer full-size image if available
                const fullUrl = img.getAttribute('data-full-url') || img.src;

                const link = document.createElement('a');
                link.href = fullUrl;
                link.classList.add('glightbox');

                // Build data-glightbox attribute
                let glightboxData = 'title: Gallery';
                if (description) {
                    glightboxData += `; description: ${description}`;
                }
                link.setAttribute('data-glightbox', glightboxData);

                // Move ALL children into the link (img + figcaption)
                while (figure.firstChild) {
                    link.appendChild(figure.firstChild);
                }

                figure.appendChild(link);
            });
            // Init GLightbox on those links
            GLightbox({
                selector: 'a.glightbox'
            });
        }

        async function _fixRowCol() {
            // .wp-block-gallery figure
            $('.wp-block-gallery').each(function () {
                $(this).addClass('row');
            });
            $('.wp-block-gallery figure').each(function () {
                $(this).addClass('col-6 col-md-4 col-xl-3');
            });
            $('.wp-block-gallery img').each(function () {
                $(this).addClass('img-fluid mx-auto');
            });
            $('.wp-block-image img').each(function () {
                $(this).addClass('img-fluid max-400');
            });
            $('.wp-block-image').each(function () {
                $(this).addClass('text-center');
            });
        }
        // ─── Renderer ────────────────────────────────────────────────────────────

        /**
         * Render an enriched post into #wordpress-post.
         * @param {Object} post
         */
        function renderPost(post) {
            const $container = $('#wordpress-post');
            $container.empty();

            const title   = post.title?.rendered   || '(Untitled)';
            const content = post.content?.rendered || '';
            const date    = post.date_gmt
                ? new Date(post.date_gmt).toLocaleDateString(undefined, {
                    year: 'numeric', month: 'long', day: 'numeric',
                })
                : '';

            // Featured image
            const imgSrc  = post.mediaObj?.source_url || '';
            const imgAlt  = post.mediaObj?.alt_text   || title;
            const imgHtml = imgSrc
                ? `<div class="text-center"><img class="img-fluid mb-3" style="width:600px;max-width:100%;max-height:400px;" src="${imgSrc}" alt="${_esc(imgAlt)}"></div>`
                : '';

            // Author — with avatar if available
            const authorName   = '<i class="bi bi-person-circle"></i>  ' + post.authorObj?.name + ' &nbsp; ' || '';

            // Tags
            const tagsHtml = (post.tagObjs || [])
                .map((t) => `<a class="btn btn-sm btn-outline-success m-1" href="<?= base_url($locale . '/blog') ?>?m=tags&ms=${_esc(t.name)}&id=${_esc(t.id)}" target="_blank" rel="noopener">${_esc(t.name)}</a>`)
                .join('');
            $('#post-title').html(title);
            $container.html(`
      <article class="wp-post" data-id="${post.id}" data-slug="${_esc(post.slug)}">
        ${imgHtml}
        <div class="wp-post__body">
          <div class="wp-post__meta my-3">
            ${authorName}
            <time class="wp-post__date" datetime="${post.date_gmt}"><i class="bi bi-calendar-plus"></i>  ${date}</time>
          </div>
          ${tagsHtml ? `<div class="wp-post__tags">${tagsHtml}</div>` : ''}
          <div class="wp-post__content mt-4">${content}</div>
        </div>
      </article>
    `);
            _glightboxInit();
            _fixRowCol();
        }

        // ─── Utility helpers ─────────────────────────────────────────────────────

        function _toMap(arr) {
            return arr.reduce((acc, item) => { acc[item.id] = item; return acc; }, {});
        }

        function _setLoading(state) {
            $('#wordpress-post').toggleClass('is-loading', state);
        }

        function _renderError(err) {
            const msg = err?.responseJSON?.message || err?.statusText || 'Unknown error';
            $('#wordpress-post').html(`<p class="wp-error">Failed to load post: ${_esc(msg)}</p>`);
        }

        function _esc(str) {
            return String(str)
                .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
        }
        // ─── Public API ──────────────────────────────────────────────────────────
        return { init, loadById, loadBySlug, renderPost };
    })();
    $(function () {
      WPPost.init({ baseUrl: 'https://blog.ratinan.com' });
      WPPost.loadById(<?= $post_id ?>);
    });
</script>
</body>
</html>