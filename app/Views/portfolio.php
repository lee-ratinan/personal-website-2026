<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.sections.portfolio.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="This page contains my portfolio, aiming to showcase my journey as a Scrum Master, Tech Lead, and Project Manager.">
    <meta name="keywords" content="Portfolio, scrum, scrum master, tech lead, project manager, project management">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/portfolio') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/portfolio') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/portfolio') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/portfolio') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('portfolio') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        img.max-400 { margin:0 auto; width:80%; max-width:400px; }
    </style>
</head>
<body class="index-page portfolio-page <?= $locale ?>">
<?php include "_header.php"; ?>
<main class="main mt-5 pt-5">
    <section id="about" class="about section mt-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 text-center">
                    <p>PORTFOLIO</p>
                    <h1>Ratinan “Nat” Lee</h1>
                    <h2>Scrum in Action | My Journey as a Scrum Master, Tech Lead, Project Manager</h2>
                    <img class="img-fluid max-400 rounded my-3" src="<?= base_url('assets/img/portfolio-page/cover-1.jpg') ?>" alt="Portfolio Cover - Tokyo 2026" />
                </div>
                <div class="col-12">
                    <p>
                        <b>Ratinan “Nat” Leela-Ngamwongsa</b><br>
                        รตินันท์ ลีลางามวงศา (นัท) &middot; 李榮欽 &middot; 力川栄欽
                    </p>
                    <p>
                        Nationality: <b>Thai</b><br>
                        Residency: <b>Singapore (permanent residence)</b><br>
                        Language: <b>Thai</b> (native), <b>English</b> (fluent; CEFR C2 level)<br>
                        LinkedIn: <a href="https://www.linkedin.com/in/ratinanlee/" target="_blank">/ratinanlee</a><br>
                        Business Card: <a href="https://connect.ratinan.com/" target="_blank">connect.ratinan.com/</a>
                    </p>
                    <div class="row justify-content-end">
                        <div class="col-12 col-md-10 col-lg-8 text-end my-5">
                            <h3>Who Am I?</h3>
                            <?php
                            $year = (int)date('Y');
                            $in_industry_yrs = $year - 2012;
                            $leading_yrs = $year - 2017;
                            ?>
                            <p>With <b><?= $in_industry_yrs ?> years</b> of industry experience—including <b><?= $leading_yrs ?> years</b> leading high-performing development teams in <b>e-Commerce</b> and <b>FinTech</b> — I specialize in driving <b>Agile</b> transformations that deliver high-impact products. A champion of continuous optimization, I combine hands-on technical leadership with advanced governance, backed by <b>PSM</b> II, <b>PSPO</b> II, <b>CSM</b>, Google <b>AI Essentials</b> and Google <b>Project Management</b> certifications. My expertise lies in building resilient cross-functional teams, streamlining workflows, and fostering a collaborative culture that translates complex engineering efforts into tangible business value.</p>
                        </div>
                    </div>
                    <div class="text-center my-5">
                        <?php include "_professional_certifications.php"; ?>
                        <div class="mt-3">
                            <a class="btn btn-primary" href="https://www.scrum.org/user/1457291" target="_blank">Scrum.org Profile</a>
                            <a class="btn btn-primary" href="https://www.scrumalliance.org/members/1729850" target="_blank">Scrum Alliance Profile</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <!-- education -->
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <h3>Education</h3>
                                    <p>
                                        <b>M.Sc. (Information Systems)</b><br>
                                        Wee Kim Wee School of Communication and Information<br>
                                        Nanyang Technological University<br>
                                        Singapore<br>
                                        Class of 2015
                                    </p>
                                    <p>
                                        <b>B.Sc. (Computer Science) - First Class Honors</b><br>
                                        Sirindhorn International Institute of Technology<br>
                                        Thammasat University<br>
                                        Pathum Thani, Thailand<br>
                                        Class of 2012
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6 text-center text-lg-end mb-3">
                                    <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/education-msc-graduation.jpg') ?>" alt="MSc Graduation" />
                                </div>
                            </div>
                            <!-- experience -->
                            <div class="row">
                                <div class="col-12 col-lg-6 text-lg-end order-lg-2 mb-3">
                                    <h3>Experience</h3>
                                    <p>
                                        <b>Technical Team Leader, Project Manager</b><br>
                                        Moolahgo, Irvins, Secretlab<br>
                                        Singapore<br>
                                        2018 - Present
                                    </p>
                                    <p>
                                        <b>Independent Technology Consultant</b><br>
                                        Freelance<br>
                                        Singapore<br>
                                        2024 - Present
                                    </p>
                                    <p>
                                        <b>Software Engineer</b><br>
                                        Mobads, BuzzCity, DST<br>
                                        Singapore, Bangkok<br>
                                        2012 - 2017
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6 text-center text-lg-start order-lg-1 mb-3">
                                    <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/experience-buzzcity.jpg') ?>" alt="BuzzCity Team" />
                                </div>
                            </div>
                            <div class="text-center my-5">* * *</div>
                            <p class="text-center">As a <b>Scrum Master</b>, I focus on optimizing team dynamics, removing systemic impediments, and expanding cross-functional capabilities. As a <b>Product Owner</b>, I ensure we maximize product value with every sprint. Wearing the <b>Project Manager</b> hat, I balance the project management triangle—aligning scope, time, and cost to deliver predictable outcomes for stakeholders, engineers, and customers alike. I firmly believe that high performance shouldn’t come at the cost of sustainability; I actively manage boundaries to prevent scope creep and eliminate artificial urgency. My ultimate goal is to foster an environment where a team can deliver high-impact products consistently — without burnout.</p>
                            <div class="text-center my-5">* * *</div>
                            <h3 class="text-center">Case Studies</h3>
                            <div class="resume mt-5">
                                <div class="experience-section">
                                    <div class="experience-cards">
                                        <!-- 1 -->
                                        <div class="exp-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                            <div class="card-header">
                                                <div class="company-logo">
                                                    &nbsp; 1 &nbsp;
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h4>From Chaos to Clarity – Implementing Agile Governance</h4>
                                                <h5>The Challenge</h5>
                                                <p>The organization suffered from severe delivery friction caused by a lack of structured scheduling and premature project initiation. Without stabilized requirements, teams experienced constant mid-sprint pivots, leading to chronic scope creep and missed milestones. Because the structural flaws were invisible, developers were unfairly held accountable for systemic delivery delays, destroying team morale.</p>
                                                <h5>The Solution</h5>
                                                <ul>
                                                    <li>Established Structured Governance: Introduced a rigorous cadence of Scrum events to stabilize the delivery pipeline, establish predictable scheduling, and eliminate daily ambiguity.</li>
                                                    <li>Cultivated Engineering Accountability: Anchored the transformation in core Scrum values—Commitment, Openness, Focus, Respect, and Courage—shifting the team culture from passive task-execution to true ownership.</li>
                                                    <li>Implemented Active Scope Management: Enforced a strict trade-off negotiation framework for incoming requirements. New features were welcomed into the product backlog but were barred from disrupting active Sprint Goals unless matching scope was swapped out.</li>
                                                </ul>
                                                <h5>The Impact</h5>
                                                <ul>
                                                    <li>Eliminated Execution Ambiguity: Developers gained complete clarity on upcoming priorities, drastically reducing context-switching and operational frustration.</li>
                                                    <li>Stabilized the Delivery Pipeline: Transformed scope creep from a disruptive risk into a manageable, transparent negotiation process, protecting the integrity of the release cycle.</li>
                                                    <li>Achieved Predictable Velocity: By protecting Sprint Goals from external volatility, the team consistently met its deliverables and stabilized project timelines.</li>
                                                </ul>
                                                <div class="text-center my-3">
                                                    <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/decoration-04.jpg') ?>" alt="Agile Board" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 2 -->
                                        <div class="exp-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                                            <div class="card-header">
                                                <div class="company-logo">
                                                    &nbsp; 2 &nbsp;
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h4>Case Study: Taming Complex Requirements – Architectural Alignment & Cost Optimization</h4>
                                                <h5>The Challenge</h5>
                                                <p>The platform suffered from severe performance degradation and daily system outages driven by a misalignment between business requirements and technical constraints. Non-technical stakeholders routinely requested impractical, synchronous real-time features that choked system resources. This structural overload resulted in chronic instability, impaired critical warehouse operations, and caused server infrastructure costs to skyrocket due to highly inefficient processing patterns.</p>
                                                <h5>The Solution</h5>
                                                <ul>
                                                    <li>Architected Async Decoupling: Spearheaded the refactoring of the system architecture by eliminating unneeded real-time synchronous dependencies and enforcing asynchronous processing for resource-heavy operations.</li>
                                                    <li>Optimized Core Algorithms: Directed targeted engineering interventions to optimize legacy data structures and processing algorithms, fundamentally improving system throughput, scalability, and baseline stability.</li>
                                                    <li>Established Cross-Functional Governance: Implemented a continuous requirement-review framework with business teams, educating stakeholders on technical boundaries and ensuring all feature requests were value-driven and architecturally viable.</li>
                                                    <li>Executed Targeted Triage: Stabilized the immediate production environment by introducing a disciplined, single-issue triage methodology to systematically eliminate active failure points without introducing regression risks.</li>
                                                </ul>
                                                <h5>The Impact</h5>
                                                <ul>
                                                    <li>Restored System Integrity: Transformed a volatile environment into a highly stable infrastructure, completely eliminating daily system crashes and vastly improving platform speed.</li>
                                                    <li>Halved Infrastructure Overhead: Reduced server operational costs by 50%, delivering immediate, compounding fiscal savings to the company’s bottom line.</li>
                                                    <li>Enhanced Operational Velocity: Greatly improved end-user satisfaction by streamlining the platform, directly enabling faster, friction-free warehouse logistics.</li>
                                                </ul>
                                                <div class="text-center my-3">
                                                    <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/decoration-01.jpg') ?>" alt="Office Desk" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 3 -->
                                        <div class="exp-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                                            <div class="card-header">
                                                <div class="company-logo">
                                                    &nbsp; 3 &nbsp;
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h4>Case Study: Reifying Infrastructure Scalability – Resolving Cross-Functional Communication Silos</h4>
                                                <h5>The Challenge</h5>
                                                <p>A critical communication disconnect between business intelligence and engineering led to a catastrophic production failure during a high-profile product launch. Marketing data regarding an impending, massive traffic surge (driven by a major franchise campaign) was never shared with the technical team. Consequently, engineering optimized exclusively at the source-code level without scaling the underlying infrastructure. Upon launch, the unprecedented concurrent user traffic overwhelmed the network layer, triggering server crashes despite highly efficient code execution.</p>
                                                <h5>The Solution</h5>
                                                <ul>
                                                    <li>Architected Cloud Auto-Scaling: Spearheaded the modernization of the deployment architecture by implementing AWS Elastic Beanstalk to dynamically handle high-traffic volatility and ensure high availability for customer-facing applications.</li>
                                                    <li>Decoupled System Environments: Mitigated architectural risk by isolating internal operational systems on dedicated Amazon EC2 instances, ensuring core business functions remained unaffected by external traffic spikes on customer-facing layers.</li>
                                                    <li>Established Dedicated DevOps Governance: Onboarded dedicated infrastructure engineering expertise to design proactive monitoring, capacity planning, and predictive system-load trending models.</li>
                                                    <li>Educated Executive Stakeholders: Leveraged the post-mortem analysis to demonstrate the critical link between infrastructure investment and business continuity, securing executive buy-in for long-term cloud infrastructure funding.</li>
                                                </ul>
                                                <h5>The Impact</h5>
                                                <ul>
                                                    <li>Eliminated Single Points of Failure: Successfully prevented any recurrence of traffic-driven outages, establishing a reliable, seamless digital experience for end-users.</li>
                                                    <li>Automated Elastic Volatility Management: Empowered the platform to automatically scale compute resources dynamically ahead of traffic curves, mitigating the risk of future campaign spikes.</li>
                                                    <li>Secured Strategic Infrastructure Buy-In: Transformed organizational culture by permanently closing the gap between marketing planning and engineering preparation, ensuring all future product launches are backed by aligned capacity planning.</li>
                                                </ul>
                                                <div class="text-center my-3">
                                                    <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/decoration-03.jpg') ?>" alt="Thumbs Up" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-5">* * *</div>
                            <h3 class="text-center">Empowering Teams for Sustainable Excellence</h3>
                            <p class="text-center my-5">
                                True leadership is about unlocking potential through structured enablement. As a Project Manager, I optimize the triple constraints of time, resources, and scope to build a predictable engineering environment. As a Scrum Master, I protect the team's focus, remove systemic impediments, and champion agile principles to steadily increase delivery velocity. Simultaneously, as a Product Owner, I maximize product value per sprint by ensuring developers operate with absolute requirement clarity. My ultimate goal is to remove friction and cultivate a resilient, self-organizing team equipped to deliver high-impact engineering excellence.
                            </p>
                            <div class="text-center my-3">
                                <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/decoration-02.jpg') ?>" alt="Team at Dinner" />
                            </div>
                        </div>
                        <div class="col-12 my-5">
                            <h3 class="text-center">Read My Blog</h3>
                            <div class="my-5" id="wordpress-posts"></div>
                            <div class="text-center"><a href="<?= base_url($locale . "/blog?m=tags&ms=portfolio&id=62") ?>" class="btn btn-primary">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "_footer.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    /**
     * WordPress REST API — Posts Fetcher & Renderer
     * Requires: jQuery
     * Usage:
     *   WPPosts.init({ baseUrl: 'https://your-site.com' });
     */
    const WPPosts = (() => {
        // ─── Config ──────────────────────────────────────────────────────────────

        const CONFIG = {
            baseUrl: '',
            perPage: 2,
            currentPage: 1,
            totalPages: 1,
        };

        // ─── Public: Initialise ──────────────────────────────────────────────────

        function init(options = {}) {
            CONFIG.baseUrl = (options.baseUrl || '').replace(/\/$/, '');
            CONFIG.perPage = options.perPage || 2;
            CONFIG.currentPage = 1;

            _bindControls();
            loadPage(1);
        }

        // ─── Core: Load a page ───────────────────────────────────────────────────

        async function loadPage(page) {
            CONFIG.currentPage = page;
            _setLoading(true);

            try {
                // ── Step 1: fetch posts ─────────────────────────────────────────────
                const posts = await _fetchPosts(page);

                // ── Step 2: collect all unique IDs across every post ────────────────
                const mediaIds  = _unique(posts.map((p) => p.featured_media).filter(Boolean));
                const authorIds = _unique(posts.map((p) => p.author).filter(Boolean));
                const tagIds    = _unique(posts.flatMap((p) => p.tags || []).filter(Boolean));

                // ── Step 3: one batch request per resource type, all in parallel ─────
                const [mediaMap, authorMap, tagMap] = await Promise.all([
                    fetchMediaBatch(mediaIds),
                    fetchAuthorBatch(authorIds),
                    fetchTagBatch(tagIds),
                ]);

                // ── Step 4: merge lookup data back into each post ───────────────────
                const enriched = posts.map((post) => ({
                    ...post,
                    mediaObj:  mediaMap[post.featured_media] || null,
                    authorObj: authorMap[post.author]        || null,
                    tagObjs:   (post.tags || []).map((id) => tagMap[id]).filter(Boolean),
                }));

                renderPosts(enriched);
                _updatePagination();
            } catch (err) {
                _renderError(err);
            } finally {
                _setLoading(false);
            }
        }

        // ─── Step 1: fetch raw posts ─────────────────────────────────────────────
        function _fetchPosts(page) {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/posts`,
                    method: 'GET',
                    data: {
                        _fields: 'id,date_gmt,excerpt,title,featured_media,slug,tags,author',
                        per_page: CONFIG.perPage,
                        tags: 62,
                        page,
                    },
                    complete(xhr) {
                        CONFIG.totalPages = parseInt(xhr.getResponseHeader('X-WP-TotalPages'), 10) || 1;
                    },
                    success: resolve,
                    error: reject,
                });
            });
        }

        // ─── Batch sub-fetchers (each returns an id → object lookup map) ─────────

        /**
         * Fetch multiple media objects in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: mediaObject }
         */
        async function fetchMediaBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/media`,
                    method: 'GET',
                    data: {
                        include:  ids.join(','),
                        per_page: ids.length,
                        _fields:  'id,source_url,alt_text,media_details',
                    },
                });
                return _toMap(results);
            } catch {
                return {};
            }
        }

        /**
         * Fetch multiple authors in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: authorObject }
         */
        async function fetchAuthorBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/users`,
                    method: 'GET',
                    data: {
                        include:  ids.join(','),
                        per_page: ids.length,
                        _fields:  'id,name,slug,link',
                    },
                });
                return _toMap(results);
            } catch {
                return {};
            }
        }

        /**
         * Fetch multiple tags in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: tagObject }
         */
        async function fetchTagBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/tags`,
                    method: 'GET',
                    data: {
                        include:  ids.join(','),
                        per_page: ids.length,
                        _fields:  'id,name,slug,link',
                    },
                });
                return _toMap(results);
            } catch {
                return {};
            }
        }

        // ─── Renderer ────────────────────────────────────────────────────────────

        function renderPosts(posts) {
            const $container = $('#wordpress-posts');
            $container.empty();

            if (!posts.length) {
                $container.html('<p class="wp-no-posts">No posts found.</p>');
                return;
            }

            posts.forEach((post) => {
                const title   = post.title?.rendered   || '(Untitled)';
                const excerpt = post.excerpt?.rendered || '';
                const date    = post.date_gmt
                    ? '<i class="bi bi-calendar-plus"></i> ' + new Date(post.date_gmt).toLocaleDateString(undefined, {
                    year: 'numeric', month: 'long', day: 'numeric',
                })
                    : '';

                const imgSrc  = post.mediaObj?.source_url || '';
                const imgAlt  = post.mediaObj?.alt_text   || title;
                const imgHtml = imgSrc
                    ? `<a href="<?= base_url($locale . '/blog-post') ?>/${_esc(post.id)}/${_esc(post.slug)}"><img class="img-fluid rounded" src="${imgSrc}" alt="${_esc(imgAlt)}"></a>`
                    : '';

                const authorName = post.authorObj?.name || '';
                const authorHtml = authorName
                    ? `<i class="bi bi-person-circle"></i> ${_esc(authorName)} &nbsp; `
                    : '';

                const tagsHtml = (post.tagObjs || [])
                    .map((t) => `<a class="wp-post__tag btn btn-sm btn-outline-success m-1" href="?m=tags&ms=${_esc(t.name)}&id=${_esc(t.id)}">${_esc(t.name)}</a>`)
                    .join('');
                const postLink = `<?= base_url($locale . '/blog-post') ?>/${_esc(post.id)}/${_esc(post.slug)}`;

                const $card = $(`
        <article class="wp-post row" data-id="${post.id}" data-slug="${_esc(post.slug)}">
          <div class="col-12 col-md-4 col-lg-3 col-xl-2 mb-3 wp-post__img">${imgHtml}</div>
          <div class="col-12 col-md-8 col-lg-9 col-xl-10 mb-3 wp-post__body">
            <h2 class="wp-post__title">
              <a href="${postLink}">${title}</a>
            </h2>
            <div class="wp-post__meta">
              ${authorHtml}
              <time class="wp-post__date" datetime="${post.date_gmt}">${date}</time>
            </div>
            <div class="wp-post__excerpt">${excerpt}</div>
            ${tagsHtml ? `<div class="wp-post__tags">${tagsHtml}</div>` : ''}
          </div>
          <hr />
        </article>
      `);

                $container.append($card);
            });
        }

        // ─── Pagination ──────────────────────────────────────────────────────────

        function _updatePagination() {
            const { currentPage, totalPages } = CONFIG;

            $('#wp-page-info').text(`Page ${currentPage} of ${totalPages}`);

            const $prev = $('#wp-prev');
            if (currentPage <= 1) {
                $prev.addClass('is-disabled btn-outline-secondary').removeClass('btn-success').attr({ 'aria-disabled': 'true', tabindex: '-1' });
            } else {
                $prev.addClass('btn-success').removeClass('is-disabled btn-outline-secondary').removeAttr('aria-disabled').attr('tabindex', '0');
            }
            $prev.addClass('btn-sm me-3');

            const $next = $('#wp-next');
            if (currentPage >= totalPages) {
                $next.addClass('is-disabled btn-outline-secondary').removeClass('btn-success').attr({ 'aria-disabled': 'true', tabindex: '-1' });
            } else {
                $next.addClass('btn-success').removeClass('is-disabled btn-outline-secondary').removeAttr('aria-disabled').attr('tabindex', '0');
            }
            $next.addClass('btn-sm ms-3');
        }

        function _bindControls() {
            $(document).on('click', '#wp-prev', function () {
                if (!$(this).hasClass('is-disabled')) loadPage(CONFIG.currentPage - 1);
            });

            $(document).on('click', '#wp-next', function () {
                if (!$(this).hasClass('is-disabled')) loadPage(CONFIG.currentPage + 1);
            });
        }

        // ─── Utility helpers ─────────────────────────────────────────────────────

        /** Convert an array of objects with .id into a keyed lookup map. */
        function _toMap(arr) {
            return arr.reduce((acc, item) => { acc[item.id] = item; return acc; }, {});
        }

        /** Deduplicate an array of primitives. */
        function _unique(arr) {
            return [...new Set(arr)];
        }

        function _setLoading(state) {
            $('#wordpress-posts').toggleClass('is-loading', state);
            $('#wp-prev, #wp-next').prop('disabled', state);
        }

        function _renderError(err) {
            const msg = err?.responseJSON?.message || err?.statusText || 'Unknown error';
            $('#wordpress-posts').html(`<p class="wp-error">Failed to load posts: ${_esc(msg)}</p>`);
        }

        function _esc(str) {
            return String(str)
                .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
        }

        // ─── Public API ──────────────────────────────────────────────────────────

        return { init, loadPage, fetchMediaBatch, fetchAuthorBatch, fetchTagBatch, renderPosts };
    })();
    $(function () {
        WPPosts.init({ baseUrl: 'https://blog.ratinan.com' });
    });
</script>
</body>
</html>