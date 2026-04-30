<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="DevOcean — Custom web and mobile applications built for your business. Wedding apps, business systems, API integrations, and more." />

    <title>DevOcean — Custom Web & Mobile Applications</title>

    <link rel="shortcut icon" href="/themes/avo%20theme/avo/avo-dark/img/favicon.ico" />

    <!-- Outfit font for logo -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Avo Theme Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Avo Theme CSS -->
    <link rel="stylesheet" href="/themes/avo%20theme/avo/avo-dark/css/plugins.css" />
    <link rel="stylesheet" href="/themes/avo%20theme/avo/avo-dark/css/style.css" />

    <style>
        /* ── Ocean Blue Light Theme ─────────────────────────────────────── */
        :root {
            --do-blue: #1E90FF;
            --do-blue-light: #38BDF8;
            --do-blue-dark: #0A2540;
            --do-navy: #0A2540;
            --do-card-bg: #FFFFFF;
            --do-border: rgba(10,37,64,0.10);
            --do-text: #0F172A;
            --do-text-muted: rgba(15,23,42,0.55);
            --do-bg: #F8FAFC;
        }

        /* ── Avo-dark global overrides ──────────────────────────────────── */
        body { background: var(--do-bg) !important; color: var(--do-text) !important; font-family: 'Poppins', sans-serif; }
        .main-content { background: var(--do-bg); }
        h1, h2, h3, h4, h5, h6 { color: var(--do-text); }
        p { color: var(--do-text-muted); }
        .main-title { color: var(--do-text) !important; }
        a { color: var(--do-blue); }
        .color-font { color: var(--do-blue) !important; }
        .bg-color { background-color: var(--do-blue) !important; }
        .progress-wrap svg.progress-circle path { stroke: var(--do-blue); }
        .btn-curve.btn-lit:after, .btn-curve.btn-bord:after { background: var(--do-blue); }
        .btn-curve.btn-lit:hover span { color: #fff; }
        .btn-curve.btn-bord { color: var(--do-navy); border-color: rgba(10,37,64,0.25); }
        .btn-curve.btn-bord:hover span { color: #fff; }
        .btn-curve.btn-color { background: var(--do-blue); border-color: var(--do-blue); }
        .btn-curve.btn-color:after { background: var(--do-blue-dark); }
        .number-sec .item span.icon { color: var(--do-blue); }
        .footer-half a:hover { color: var(--do-blue) !important; }
        .call-action h6, .call-action h2 b { color: var(--do-blue); }
        .simple-btn { color: var(--do-blue); }
        .simple-btn:before, .simple-btn:after { background: var(--do-blue); }
        .social .icon:hover { background: var(--do-blue); }

        /* ── Navbar base — transparent at top (avo theme handles slide-down) */
        .navbar { background: transparent !important; box-shadow: none !important; }
        .navbar .logo { line-height: 1; }
        .navbar .nav-link { color: rgba(255,255,255,0.85) !important; }
        .navbar .nav-link:hover { color: #fff !important; }
        .navbar .dropdown-menu { background: rgba(6,21,38,0.95); border-color: rgba(255,255,255,0.1); }
        .navbar .dropdown-item { color: rgba(255,255,255,0.8) !important; }
        .navbar .icon-bar i { color: rgba(255,255,255,0.85) !important; }

        /* ── .nav-scroll — avo theme adds this on scroll; override colors ── */
        .nav-scroll { background: #ffffff !important; border-color: transparent !important; box-shadow: 0 2px 20px rgba(10,37,64,0.08) !important; }
        .nav-scroll .nav-link { color: #0F172A !important; }
        .nav-scroll .nav-link:hover { color: var(--do-blue) !important; }
        .nav-scroll .dropdown-menu { background: #fff !important; border: 1px solid var(--do-border) !important; box-shadow: 0 8px 24px rgba(10,37,64,0.10) !important; }
        .nav-scroll .dropdown-item { color: #0F172A !important; }
        .nav-scroll .icon-bar i { color: #0F172A !important; }

        /* ── Logo — white base at top, navy base when scrolled ───────────── */
        .navbar .do-logo-svg text { transition: fill .4s ease; }
        .navbar .do-logo-svg text:first-of-type { fill: white; }
        .nav-scroll .do-logo-svg text:first-of-type { fill: #0A2540; }

        /* ── Base ──────────────────────────────────────────────────────── */
        html { scroll-behavior: smooth; }
        .sub-bg { background: #EEF4FA !important; }
        .section-padding { padding: 80px 0; }
        .mt-60 { margin-top: 60px; }
        .mb-60 { margin-bottom: 60px; }

        /* ── SVG Logo ──────────────────────────────────────────────────── */
        .do-logo-svg { display: block; width: 140px; height: auto; }
        .do-logo-svg-lg { display: block; width: 200px; height: auto; }

        /* ── Ethereal Hero (stays deep navy for contrast) ───────────────── */
        #ethereal-hero {
            position: relative; width: 100%; height: 100vh; min-height: 650px;
            overflow: hidden; background: #061526;
            display: flex; align-items: center; justify-content: center;
        }
        #ethereal-filter-layer { position: absolute; inset: -100px; filter: url(#ethereal-filter) blur(4px); }
        #ethereal-shadow-mask {
            width: 100%; height: 100%;
            background-color: rgba(10,37,64,0.80);
            mask-image: url('https://framerusercontent.com/images/ceBGguIpUU8luwByxuQz79t7To.png');
            -webkit-mask-image: url('https://framerusercontent.com/images/ceBGguIpUU8luwByxuQz79t7To.png');
            mask-size: cover; -webkit-mask-size: cover;
            mask-repeat: no-repeat; -webkit-mask-repeat: no-repeat;
            mask-position: center; -webkit-mask-position: center;
        }
        #ethereal-noise {
            position: absolute; inset: 0;
            background-image: url('https://framerusercontent.com/images/g0QcWrxr87K0ufOxIUFBakwYA8.png');
            background-size: 240px; background-repeat: repeat;
            opacity: 0.45; pointer-events: none;
        }
        #ethereal-content { position: absolute; inset: 0; z-index: 10; display: flex; align-items: center; justify-content: center; }
        #ethereal-hero .caption h1 { font-size: clamp(2.4rem,5vw,4.8rem); font-weight: 800; line-height: 1.08; color: #fff; text-shadow: 0 4px 40px rgba(0,0,0,0.5); }
        #ethereal-hero .caption .eyebrow { font-size: 0.78rem; letter-spacing: .22em; text-transform: uppercase; color: var(--do-blue-light); margin-bottom: 1.1rem; display: block; }
        #ethereal-hero .caption p { font-size: 1.05rem; color: rgba(255,255,255,0.65); max-width: 540px; margin: 1.2rem auto 0; line-height: 1.75; }
        #ethereal-hero .hero-btns { margin-top: 2.2rem; display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
        #ethereal-hero .scroll-hint { position: absolute; bottom: 32px; left: 50%; transform: translateX(-50%); z-index: 20; text-align: center; color: rgba(255,255,255,0.4); font-size: 11px; letter-spacing: .15em; text-transform: uppercase; }
        #ethereal-hero .scroll-hint span { display: block; margin: 0 auto 6px; width: 1px; height: 40px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.3)); }
        .hero-social { position: absolute; left: 28px; bottom: 40px; z-index: 20; display: flex; flex-direction: column; gap: 14px; }
        .hero-social a { color: rgba(255,255,255,0.4); font-size: 12px; transition: color .3s; }
        .hero-social a:hover { color: var(--do-blue-light); }

        /* ── Section Head ───────────────────────────────────────────── */
        .sec-head .tbg { color: rgba(10,37,64,0.04); }
        .sec-head h3 { color: var(--do-text); }

        /* ── About ─────────────────────────────────────────────────── */
        .about-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 1px; background: var(--do-border); border: 1px solid var(--do-border); border-radius: 12px; overflow: hidden; margin-bottom: 2rem; box-shadow: 0 2px 12px rgba(10,37,64,0.06); }
        .about-stat-item { background: var(--do-card-bg); padding: 2rem 1.2rem; text-align: center; }
        .about-stat-item .num { font-size: 2.2rem; font-weight: 800; color: var(--do-blue); font-family: 'Outfit', sans-serif; line-height: 1; }
        .about-stat-item .label { font-size: 0.72rem; letter-spacing: .12em; text-transform: uppercase; color: rgba(15,23,42,0.45); margin-top: .5rem; }

        /* ── About feature row ──────────────────────────────────────── */
        .about-features { display: flex; gap: 1px; background: var(--do-border); border: 1px solid var(--do-border); border-radius: 12px; overflow: hidden; margin-top: 2rem; }
        @media(max-width:575px) { .about-features { flex-direction: column; } }
        .about-feat-item { flex: 1; background: var(--do-card-bg); padding: 1.5rem 1.2rem; display: flex; align-items: flex-start; gap: .9rem; transition: background .25s; }
        .about-feat-item:hover { background: #EEF5FF; }
        .about-feat-item .af-icon { width: 40px; height: 40px; border-radius: 10px; flex-shrink: 0; background: rgba(30,144,255,0.08); border: 1px solid rgba(30,144,255,0.18); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; color: var(--do-blue); }
        .about-feat-item .af-text h6 { font-size: 0.83rem; font-weight: 600; color: #0F172A; margin: 0 0 .2rem; line-height: 1.3; }
        .about-feat-item .af-text p { font-size: 0.71rem; color: rgba(15,23,42,0.50); margin: 0; line-height: 1.5; }

        /* ── Services ─────────────────────────────────────────────── */
        .service-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 1px; background: var(--do-border); border: 1px solid var(--do-border); border-radius: 16px; overflow: hidden; }
        @media(max-width:991px){ .service-grid { grid-template-columns: repeat(2,1fr); } }
        @media(max-width:575px){ .service-grid { grid-template-columns: 1fr; } }
        .service-card { background: var(--do-card-bg); padding: 2.2rem 1.8rem; transition: background .3s; }
        .service-card:hover { background: #EEF5FF; }
        .service-card .s-icon { width: 52px; height: 52px; border-radius: 12px; background: rgba(30,144,255,0.08); border: 1px solid rgba(30,144,255,0.15); display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem; font-size: 1.6rem; color: var(--do-blue); }
        .service-card h6 { font-size: 0.93rem; font-weight: 600; color: #0F172A; margin-bottom: .5rem; }
        .service-card p { font-size: 0.8rem; color: rgba(15,23,42,0.55); line-height: 1.65; margin: 0; }
        .service-card .s-tag { display: inline-block; margin-top: .9rem; font-size: 0.65rem; letter-spacing: .1em; text-transform: uppercase; color: var(--do-blue); opacity: .7; }

        /* ── Portfolio ────────────────────────────────────────────── */
        .portfolio-filters { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 2.5rem; }
        .pf-btn { padding: 6px 20px; border-radius: 100px; font-size: 0.78rem; font-weight: 500; border: 1px solid rgba(10,37,64,0.15); background: transparent; color: rgba(15,23,42,0.5); cursor: pointer; transition: all .25s; letter-spacing: .04em; }
        .pf-btn.active, .pf-btn:hover { background: var(--do-blue); border-color: var(--do-blue); color: #fff; }
        .portfolio-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; }
        @media(max-width:991px){ .portfolio-grid { grid-template-columns: repeat(2,1fr); } }
        @media(max-width:575px){ .portfolio-grid { grid-template-columns: 1fr; } }
        .pf-card { border-radius: 14px; overflow: hidden; background: var(--do-card-bg); border: 1px solid var(--do-border); transition: transform .3s, box-shadow .3s; box-shadow: 0 2px 12px rgba(10,37,64,0.06); }
        .pf-card:hover { transform: translateY(-5px); box-shadow: 0 16px 40px rgba(30,144,255,0.14); }
        .pf-card-img { position: relative; height: 200px; overflow: hidden; background: #D6E8F5; }
        .pf-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s; }
        .pf-card:hover .pf-card-img img { transform: scale(1.06); }
        .pf-card-img .pf-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(10,37,64,0.65) 0%, transparent 60%); }
        .pf-card-img .pf-badge { position: absolute; top: 12px; left: 12px; font-size: 0.65rem; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; padding: 4px 12px; border-radius: 100px; background: rgba(30,144,255,0.25); backdrop-filter: blur(8px); border: 1px solid rgba(30,144,255,0.4); color: #fff; }
        .pf-card-img .pf-link { position: absolute; top: 12px; right: 12px; width: 32px; height: 32px; border-radius: 50%; background: rgba(255,255,255,0.9); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; color: #0F172A; font-size: 12px; border: 1px solid rgba(255,255,255,0.5); transition: all .25s; }
        .pf-card:hover .pf-link { background: var(--do-blue); border-color: var(--do-blue); color: #fff; }
        .pf-card-body { padding: 1.3rem; }
        .pf-card-body h6 { font-size: 0.92rem; font-weight: 600; color: #0F172A; margin-bottom: .3rem; }
        .pf-card-body .pf-meta { font-size: 0.73rem; color: rgba(15,23,42,0.45); margin-bottom: .7rem; }
        .pf-card-body p { font-size: 0.78rem; color: rgba(15,23,42,0.60); line-height: 1.6; margin: 0; }
        .pf-card.coming-soon { opacity: 0.65; }
        .pf-card.coming-soon .pf-card-img { background: #D6E8F5; }
        .pf-placeholder { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 8px; }
        .pf-placeholder i { font-size: 2rem; color: rgba(10,37,64,0.2); }
        .pf-placeholder span { font-size: 0.7rem; color: rgba(10,37,64,0.35); letter-spacing: .12em; text-transform: uppercase; }

        /* ── Why Choose ───────────────────────────────────────────── */
        .why-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 1rem; }
        @media(max-width:575px){ .why-grid { grid-template-columns: 1fr; } }
        .why-item { background: var(--do-card-bg); border: 1px solid var(--do-border); border-radius: 12px; padding: 1.4rem; display: flex; align-items: flex-start; gap: 1rem; transition: border-color .3s, box-shadow .3s; box-shadow: 0 2px 8px rgba(10,37,64,0.05); }
        .why-item:hover { border-color: rgba(30,144,255,0.4); box-shadow: 0 4px 16px rgba(30,144,255,0.10); }
        .why-item .w-check { width: 36px; height: 36px; border-radius: 8px; background: rgba(30,144,255,0.1); display: flex; align-items: center; justify-content: center; color: var(--do-blue); font-size: 1rem; flex-shrink: 0; }
        .why-item h6 { font-size: 0.88rem; font-weight: 600; color: #0F172A; margin-bottom: .2rem; }
        .why-item p { font-size: 0.77rem; color: rgba(15,23,42,0.55); line-height: 1.6; margin: 0; }

        /* ── Process ─────────────────────────────────────────────── */
        .process-steps { display: grid; grid-template-columns: repeat(5,1fr); gap: 0; position: relative; }
        @media(max-width:991px){ .process-steps { grid-template-columns: repeat(3,1fr); gap: 1.5rem; } }
        @media(max-width:575px){ .process-steps { grid-template-columns: 1fr; gap: 1rem; } }
        .process-steps::before { content: ''; position: absolute; top: 28px; left: 10%; right: 10%; height: 1px; background: linear-gradient(to right, transparent, var(--do-border), var(--do-border), transparent); }
        @media(max-width:991px){ .process-steps::before { display: none; } }
        .process-step { text-align: center; padding: 0 1rem; position: relative; }
        .process-step .step-num { width: 56px; height: 56px; border-radius: 50%; margin: 0 auto 1.2rem; background: var(--do-card-bg); border: 2px solid var(--do-border); display: flex; align-items: center; justify-content: center; font-size: 1.1rem; font-weight: 800; color: var(--do-blue); font-family: 'Outfit', sans-serif; position: relative; z-index: 1; transition: all .3s; box-shadow: 0 2px 8px rgba(10,37,64,0.08); }
        .process-step:hover .step-num { background: var(--do-blue); border-color: var(--do-blue); color: #fff; }
        .process-step h6 { font-size: 0.88rem; font-weight: 600; color: #0F172A; margin-bottom: .4rem; }
        .process-step p { font-size: 0.75rem; color: rgba(15,23,42,0.55); line-height: 1.6; }

        /* ── Pricing ─────────────────────────────────────────────── */
        .pricing-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; }
        @media(max-width:767px){ .pricing-grid { grid-template-columns: 1fr; max-width: 380px; margin: 0 auto; } }
        .pricing-card { background: var(--do-card-bg); border: 1px solid var(--do-border); border-radius: 16px; padding: 2.2rem 1.8rem; position: relative; transition: all .3s; box-shadow: 0 2px 16px rgba(10,37,64,0.07); }
        .pricing-card.featured { border-color: var(--do-blue); box-shadow: 0 0 40px rgba(30,144,255,0.12); }
        .pricing-card:hover { border-color: rgba(30,144,255,0.5); transform: translateY(-3px); box-shadow: 0 8px 32px rgba(30,144,255,0.12); }
        .pricing-card .popular-badge { position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: var(--do-blue); color: #fff; font-size: 0.65rem; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; padding: 4px 16px; border-radius: 100px; white-space: nowrap; }
        .pricing-card .plan-name { font-size: 0.75rem; letter-spacing: .15em; text-transform: uppercase; color: var(--do-blue); margin-bottom: .5rem; }
        .pricing-card .plan-price { font-size: 1.4rem; font-weight: 800; color: #0F172A; font-family: 'Outfit', sans-serif; margin-bottom: .2rem; }
        .pricing-card .plan-note { font-size: 0.72rem; color: rgba(15,23,42,0.45); margin-bottom: 1.5rem; }
        .pricing-card ul { list-style: none; padding: 0; margin: 0 0 1.8rem; }
        .pricing-card ul li { font-size: 0.8rem; color: rgba(15,23,42,0.65); padding: .4rem 0; border-bottom: 1px solid rgba(10,37,64,0.06); display: flex; align-items: flex-start; gap: .6rem; }
        .pricing-card ul li:last-child { border: none; }
        .pricing-card ul li i { color: var(--do-blue); font-size: 0.85rem; margin-top: 1px; flex-shrink: 0; }

        /* ── Testimonials ──────────────────────────────────────── */
        .testim-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 1.5rem; }
        @media(max-width:767px){ .testim-grid { grid-template-columns: 1fr; } }
        .testim-card { background: var(--do-card-bg); border: 1px solid var(--do-border); border-radius: 14px; padding: 2rem; box-shadow: 0 2px 12px rgba(10,37,64,0.07); }
        .testim-card .stars { color: #f59e0b; font-size: .85rem; margin-bottom: 1rem; letter-spacing: 2px; }
        .testim-card blockquote { font-size: 0.88rem; color: rgba(15,23,42,0.70); line-height: 1.7; font-style: italic; margin: 0 0 1.4rem; }
        .testim-author { display: flex; align-items: center; gap: .9rem; }
        .testim-avatar { width: 44px; height: 44px; border-radius: 50%; background: linear-gradient(135deg, var(--do-blue-dark), var(--do-blue-light)); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; color: #fff; flex-shrink: 0; }
        .testim-author h6 { font-size: 0.85rem; font-weight: 600; color: #0F172A; margin: 0 0 .1rem; }
        .testim-author span { font-size: 0.72rem; color: rgba(15,23,42,0.45); }

        /* ── Contact Form ─────────────────────────────────────── */
        .contact-form-wrap { background: var(--do-card-bg); border: 1px solid var(--do-border); border-radius: 16px; padding: 2.5rem; box-shadow: 0 2px 16px rgba(10,37,64,0.07); }
        .cf-group { margin-bottom: 1.2rem; }
        .cf-group label { display: block; font-size: 0.75rem; letter-spacing: .08em; text-transform: uppercase; color: rgba(15,23,42,0.50); margin-bottom: .5rem; }
        .cf-group input, .cf-group select, .cf-group textarea { width: 100%; background: #F8FAFC; border: 1px solid rgba(10,37,64,0.15); border-radius: 8px; padding: .75rem 1rem; color: #0F172A; font-size: 0.88rem; font-family: 'Poppins', sans-serif; transition: border-color .25s; outline: none; resize: none; }
        .cf-group input:focus, .cf-group select:focus, .cf-group textarea:focus { border-color: var(--do-blue); }
        .cf-group select option { background: #FFFFFF; color: #0F172A; }
        .contact-info-item { display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.8rem; }
        .ci-icon { width: 46px; height: 46px; border-radius: 12px; background: rgba(30,144,255,0.08); border: 1px solid var(--do-border); display: flex; align-items: center; justify-content: center; font-size: 1.1rem; color: var(--do-blue); flex-shrink: 0; }
        .ci-label { font-size: 0.7rem; letter-spacing: .1em; text-transform: uppercase; color: rgba(15,23,42,0.40); margin-bottom: .2rem; }
        .ci-value { font-size: 0.88rem; color: rgba(15,23,42,0.75); }
        .ci-value a { color: rgba(15,23,42,0.75); transition: color .25s; }
        .ci-value a:hover { color: var(--do-blue); }
        .wa-btn { display: inline-flex; align-items: center; gap: .6rem; background: #25d366; color: #fff !important; padding: .65rem 1.5rem; border-radius: 8px; font-size: .82rem; font-weight: 600; margin-top: .4rem; transition: background .25s; }
        .wa-btn:hover { background: #1ebe5c; }

        /* ── CTA Band (stays dark navy) ───────────────────────── */
        .cta-band { background: linear-gradient(135deg, #071832 0%, #0A2540 50%, #071832 100%); border-top: 1px solid rgba(30,144,255,0.15); border-bottom: 1px solid rgba(30,144,255,0.15); }

        /* ── Footer (stays dark navy) ─────────────────────────── */
        .do-footer { background: #0A2540; padding: 60px 0 0; border-top: 1px solid rgba(255,255,255,0.05); }
        .do-footer-bottom { margin-top: 50px; border-top: 1px solid rgba(255,255,255,0.05); padding: 20px 0; }
        .do-footer h6.footer-head { font-size: 0.7rem; letter-spacing: .15em; text-transform: uppercase; color: rgba(255,255,255,0.3); margin-bottom: 1.4rem; }
        .do-footer ul.footer-links { list-style: none; padding: 0; margin: 0; }
        .do-footer ul.footer-links li { margin-bottom: .7rem; }
        .do-footer ul.footer-links a { font-size: 0.83rem; color: rgba(255,255,255,0.45); transition: color .25s; }
        .do-footer ul.footer-links a:hover { color: var(--do-blue); }
        .footer-social { display: flex; gap: 10px; margin-top: 1.4rem; }
        .footer-social a { width: 38px; height: 38px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.4); font-size: 13px; transition: all .25s; }
        .footer-social a:hover { background: var(--do-blue); border-color: var(--do-blue); color: #fff; }
        .footer-tagline { font-size: 0.8rem; color: rgba(255,255,255,0.35); line-height: 1.7; margin-top: .8rem; max-width: 280px; }

        /* ── Buttons — context-aware ─────────────────────────── */
        /* Hero (dark bg) — keep white */
        header .btn-curve.btn-lit { border-color: rgba(255,255,255,0.8) !important; }
        header .btn-curve.btn-lit span { color: #fff !important; }
        header .btn-curve.btn-lit:after { background: var(--do-blue) !important; }
        header .btn-curve.btn-bord { border-color: rgba(255,255,255,0.4) !important; }
        header .btn-curve.btn-bord span { color: rgba(255,255,255,0.85) !important; }
        header .btn-curve.btn-bord:after { background: rgba(255,255,255,0.12) !important; }
        header .btn-curve:hover span { color: #fff !important; }

        /* CTA band (dark bg) — keep white */
        .cta-band .btn-curve.btn-lit { border-color: rgba(255,255,255,0.8) !important; }
        .cta-band .btn-curve.btn-lit span { color: #fff !important; }
        .cta-band .btn-curve.btn-lit:after { background: var(--do-blue) !important; }
        .cta-band .btn-curve.btn-bord { border-color: rgba(255,255,255,0.4) !important; }
        .cta-band .btn-curve.btn-bord span { color: rgba(255,255,255,0.85) !important; }
        .cta-band .btn-curve:hover span { color: #fff !important; }

        /* Main content (light bg) — navy/blue */
        .main-content .btn-curve.btn-lit { border-color: var(--do-blue) !important; background: transparent; }
        .main-content .btn-curve.btn-lit span { color: var(--do-blue) !important; }
        .main-content .btn-curve.btn-lit:after { background: var(--do-blue) !important; }
        .main-content .btn-curve.btn-lit:hover span { color: #fff !important; }
        .main-content .btn-curve.btn-bord { border-color: var(--do-navy) !important; }
        .main-content .btn-curve.btn-bord span { color: var(--do-navy) !important; }
        .main-content .btn-curve.btn-bord:after { background: var(--do-navy) !important; }
        .main-content .btn-curve.btn-bord:hover span { color: #fff !important; }

        /* ── Fix icon colors overridden by avo-dark theme ──── */
        .service-card .s-icon i,
        .service-card .s-icon svg { color: var(--do-blue) !important; }
        .about-feat-item .af-icon i { color: var(--do-blue) !important; }
        .why-item .w-check i { color: var(--do-blue) !important; }
        .ci-icon i { color: var(--do-blue) !important; }

        /* ── Misc ─────────────────────────────────────────────── */
        .section-label { display: inline-block; font-size: 0.72rem; font-weight: 600; letter-spacing: .18em; text-transform: uppercase; color: var(--do-blue); margin-bottom: .7rem; }
        .hidden-filter { display: none !important; }
    </style>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Progress scroll -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Custom cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>


    <!-- ═══════════════════════════════════════════════════
         NAVBAR
    ═══════════════════════════════════════════════════ -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="logo" href="/">
                <svg viewBox="0 0 400 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="do-logo-svg">
                    <defs>
                        <clipPath id="waveTextClipNav">
                            <path d="M 0 55 C 100 30, 150 80, 250 55 C 320 35, 400 55, 400 55 L 400 150 L 0 150 Z"></path>
                        </clipPath>
                        <linearGradient id="waveTextGradNav" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#1E90FF"></stop>
                            <stop offset="100%" stop-color="#38BDF8"></stop>
                        </linearGradient>
                    </defs>
                    <text x="200" y="75" font-family="'Outfit', system-ui, sans-serif" font-weight="900" font-size="72" text-anchor="middle" fill="#0A2540">DevOcean</text>
                    <text x="200" y="75" font-family="'Outfit', system-ui, sans-serif" font-weight="900" font-size="72" text-anchor="middle" fill="url(#waveTextGradNav)" clip-path="url(#waveTextClipNav)">DevOcean</text>
                </svg>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDO"
                aria-controls="navbarDO" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDO">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Wedding</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/jp-el-wedding">JP &amp; EL Wedding</a>
                            <a class="dropdown-item" href="/rio-ansherina-wedding">Rio &amp; Ansherina</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- ═══════════════════════════════════════════════════
         HERO — Ethereal Shadows
    ═══════════════════════════════════════════════════ -->
    <header class="slider fixed-slider text-center">
        <div id="ethereal-hero">

            <svg style="position:absolute;width:0;height:0;overflow:hidden;" aria-hidden="true">
                <defs>
                    <filter id="ethereal-filter" x="-20%" y="-20%" width="140%" height="140%">
                        <feTurbulence result="undulation" numOctaves="2" baseFrequency="0.0005,0.002" seed="0" type="turbulence"/>
                        <feColorMatrix id="ethereal-hue-matrix" in="undulation" type="hueRotate" values="180"/>
                        <feColorMatrix in="dist" result="circulation" type="matrix" values="4 0 0 0 1  4 0 0 0 1  4 0 0 0 1  1 0 0 0 0"/>
                        <feDisplacementMap in="SourceGraphic" in2="circulation" scale="100" result="dist"/>
                        <feDisplacementMap in="dist" in2="undulation" scale="100" result="output"/>
                    </filter>
                </defs>
            </svg>

            <div id="ethereal-filter-layer">
                <div id="ethereal-shadow-mask"></div>
            </div>
            <div id="ethereal-noise"></div>

            <div id="ethereal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="caption center">
                                <span class="eyebrow wow fadeIn" data-wow-delay=".2s">Software Development Studio</span>
                                <h1 data-splitting>Custom Web &amp; Mobile<br>Applications Built for<br>Your Business</h1>
                                <p class="wow fadeIn" data-wow-delay=".5s">
                                    From wedding apps to full-scale business systems — tailored, scalable, and built to last.
                                </p>
                                <div class="hero-btns">
                                    <a href="#contact" class="btn-curve btn-lit wow fadeInUp" data-wow-delay=".6s">
                                        <span>Get a Quote</span>
                                    </a>
                                    <a href="#portfolio" class="btn-curve btn-bord wow fadeInUp" data-wow-delay=".7s">
                                        <span>View Portfolio</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-social">
                <a href="mailto:contactus@devocean.website" title="Email"><i class="fas fa-envelope"></i></a>
                <a href="https://wa.me/639201900963" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://github.com" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            </div>

            <div class="scroll-hint">
                <span></span> Scroll
            </div>

        </div>
    </header>


    <div class="main-content">

        <!-- ═══════════════════════════════════════════════════
             ABOUT
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-40">
                        <div class="about-stats wow fadeInLeft" data-wow-delay=".3s">
                            <div class="about-stat-item">
                                <div class="num">7+</div>
                                <div class="label">Years Experience</div>
                            </div>
                            <div class="about-stat-item">
                                <div class="num">15+</div>
                                <div class="label">Projects Delivered</div>
                            </div>
                            <div class="about-stat-item">
                                <div class="num">100%</div>
                                <div class="label">Custom Built</div>
                            </div>
                        </div>
                        <div class="wow fadeInLeft" data-wow-delay=".5s"
                            style="background:var(--do-card-bg);border:1px solid var(--do-border);border-radius:12px;padding:1.8rem;margin-top:1px;">
                            <div class="about-stat-item" style="padding:0;background:none;text-align:left;display:flex;align-items:center;gap:1rem;">
                                <div style="width:46px;height:46px;border-radius:10px;background:rgba(30,144,255,0.1);border:1px solid var(--do-border);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <i class="fas fa-anchor" style="font-size:1.4rem;color:var(--do-blue);"></i>
                                </div>
                                <div>
                                    <div style="font-size:.78rem;font-weight:600;color:#0F172A;">Built with purpose</div>
                                    <div style="font-size:.72rem;color:rgba(15,23,42,0.50);">Development &amp; Devotion</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="content wow fadeInRight" data-wow-delay=".3s">
                            <span class="section-label">About DevOcean</span>
                            <h3 class="main-title" data-splitting>More than a studio —<br>a devotion to craft.</h3>
                            <p style="color:rgba(15,23,42,0.65);line-height:1.8;margin-bottom:1.2rem;">
                                DevOcean is a software development service focused on building <strong style="color:#0A2540;">scalable and customizable digital solutions</strong> for businesses and individuals.
                            </p>
                            <p style="color:rgba(15,23,42,0.65);line-height:1.8;margin-bottom:1.5rem;">
                                Whether you need a custom web application, a business management system, or a beautifully crafted wedding site — we build it from scratch, aligned to your specific workflow and goals.
                            </p>
                            <div class="about-features wow fadeInUp" data-wow-delay=".5s">
                                <div class="about-feat-item">
                                    <div class="af-icon"><i class="fas fa-code"></i></div>
                                    <div class="af-text">
                                        <h6>Full-Stack Development</h6>
                                        <p>Laravel · Flutter · Tailwind · MySQL</p>
                                    </div>
                                </div>
                                <div class="about-feat-item">
                                    <div class="af-icon"><i class="fas fa-briefcase"></i></div>
                                    <div class="af-text">
                                        <h6>Business Oriented</h6>
                                        <p>Systems built around your workflow</p>
                                    </div>
                                </div>
                                <div class="about-feat-item">
                                    <div class="af-icon"><i class="fas fa-cubes"></i></div>
                                    <div class="af-text">
                                        <h6>Scalable Architecture</h6>
                                        <p>Built to grow with your business</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             SERVICES
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding sub-bg" id="services">
            <div class="container">
                <div class="sec-head custom-font text-center mb-60 wow fadeIn" data-wow-delay=".3s">
                    <span class="section-label">What We Do</span>
                    <h3 data-splitting>Services.</h3>
                    <span class="tbg">Services</span>
                    <p style="color:rgba(15,23,42,0.55);font-size:.9rem;max-width:500px;margin:1rem auto 0;line-height:1.7;">
                        End-to-end digital solutions — from idea to deployment, tailored for your business.
                    </p>
                </div>

                <div class="service-grid wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-code"></i></div>
                        <h6>Custom Web Applications</h6>
                        <p>Tailored web platforms built around your business logic. Dashboards, portals, and full-stack systems.</p>
                        <span class="s-tag">Laravel · PHP · Livewire</span>
                    </div>
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-mobile-alt"></i></div>
                        <h6>Mobile App Development</h6>
                        <p>Cross-platform mobile apps for iOS and Android. Built with Flutter for native performance.</p>
                        <span class="s-tag">Flutter · Dart</span>
                    </div>
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-cogs"></i></div>
                        <h6>Business Systems</h6>
                        <p>Inventory management, HR systems, reporting dashboards — designed around your exact workflow.</p>
                        <span class="s-tag">ERP · CRM · Custom</span>
                    </div>
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-calendar-check"></i></div>
                        <h6>Booking Systems</h6>
                        <p>Appointment and reservation platforms for salons, clinics, events, and hospitality businesses.</p>
                        <span class="s-tag">Real-time · Automated</span>
                    </div>
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-hand-holding-usd"></i></div>
                        <h6>Loan &amp; Financial Systems</h6>
                        <p>Loan tracking, payment scheduling, and financial reporting systems built for cooperatives and lenders.</p>
                        <span class="s-tag">Finance · Lending</span>
                    </div>
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-heart"></i></div>
                        <h6>Wedding &amp; Event Apps</h6>
                        <p>Custom wedding websites with RSVP, guest management, digital invitations, love story timelines, and galleries.</p>
                        <span class="s-tag">RSVP · Gallery · Invites</span>
                    </div>
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-plug"></i></div>
                        <h6>API &amp; System Integrations</h6>
                        <p>Connect your apps to SAP, Firebase, payment gateways, and third-party services via robust API architecture.</p>
                        <span class="s-tag">REST · Firebase · SAP</span>
                    </div>
                    <div class="service-card">
                        <div class="s-icon"><i class="fas fa-globe"></i></div>
                        <h6>Landing Pages &amp; Websites</h6>
                        <p>Professional marketing websites, company profiles, and product landing pages that convert visitors into clients.</p>
                        <span class="s-tag">SEO · Fast · Responsive</span>
                    </div>
                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             PORTFOLIO
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding" id="portfolio">
            <div class="container">
                <div class="sec-head custom-font text-center mb-60 wow fadeIn" data-wow-delay=".3s">
                    <span class="section-label">Our Work</span>
                    <h3 data-splitting>Portfolio.</h3>
                    <span class="tbg">Portfolio</span>
                    <p style="color:rgba(15,23,42,0.55);font-size:.9rem;max-width:500px;margin:1rem auto 0;line-height:1.7;">
                        Real projects, real problems solved. Here's what we've built.
                    </p>
                </div>

                <div class="portfolio-filters wow fadeIn" data-wow-delay=".3s" id="pf-filters">
                    <button class="pf-btn active" data-filter="all">All</button>
                    <button class="pf-btn" data-filter="wedding">Wedding Apps</button>
                    <button class="pf-btn" data-filter="business">Business Applications</button>
                    <button class="pf-btn" data-filter="mobile">Mobile Apps</button>
                </div>

                <div class="portfolio-grid wow fadeInUp" data-wow-delay=".4s" id="pf-grid">

                    <!-- JP & EL -->
                    <div class="pf-card" data-category="wedding">
                        <div class="pf-card-img">
                            <img src="/wedding/banner12.jpg" alt="JP & EL Wedding">
                            <div class="pf-overlay"></div>
                            <span class="pf-badge">Wedding App</span>
                            <a href="/jp-el-wedding" class="pf-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                        <div class="pf-card-body">
                            <h6>John Paul &amp; Elsheryn Wedding</h6>
                            <div class="pf-meta">April 11, 2025 · The Pulo Events Place, Cavite</div>
                            <p>Custom wedding website with RSVP management, love story timeline, entourage showcase, gift registry, and countdown timer.</p>
                        </div>
                    </div>

                    <!-- Rio & Ansherina -->
                    <div class="pf-card" data-category="wedding">
                        <div class="pf-card-img">
                            <img src="/wedding/rio-ansherina/1920-1.png" alt="Rio & Ansherina Wedding" onerror="this.src='/wedding/banner2.jpg'">
                            <div class="pf-overlay"></div>
                            <span class="pf-badge">Wedding App</span>
                            <a href="/rio-ansherina-wedding" class="pf-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                        <div class="pf-card-body">
                            <h6>Rio &amp; Ansherina Wedding</h6>
                            <div class="pf-meta">October 6, 2025 · Stalla Suites Events Place</div>
                            <p>Elegant wedding site with full gallery, love story sections, entourage portraits, lavender attire guide, and guest RSVP system.</p>
                        </div>
                    </div>

                    <!-- Business coming soon -->
                    <div class="pf-card coming-soon" data-category="business">
                        <div class="pf-card-img">
                            <div class="pf-placeholder">
                                <i class="pe-7s-portfolio"></i>
                                <span>Business App — Coming Soon</span>
                            </div>
                            <span class="pf-badge">Business App</span>
                        </div>
                        <div class="pf-card-body">
                            <h6>Inventory Management System</h6>
                            <div class="pf-meta">PHP · Laravel · MySQL</div>
                            <p>Custom inventory and order management system for a local retail business. In progress.</p>
                        </div>
                    </div>

                    <!-- Business coming soon 2 -->
                    <div class="pf-card coming-soon" data-category="business">
                        <div class="pf-card-img">
                            <div class="pf-placeholder">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Booking System — Coming Soon</span>
                            </div>
                            <span class="pf-badge">Business App</span>
                        </div>
                        <div class="pf-card-body">
                            <h6>Salon Booking Platform</h6>
                            <div class="pf-meta">Laravel · Livewire · Tailwind</div>
                            <p>Online appointment booking system for a beauty salon with automated email confirmations.</p>
                        </div>
                    </div>

                    <!-- Mobile coming soon -->
                    <div class="pf-card coming-soon" data-category="mobile">
                        <div class="pf-card-img">
                            <div class="pf-placeholder">
                                <i class="pe-7s-phone"></i>
                                <span>Mobile App — Coming Soon</span>
                            </div>
                            <span class="pf-badge">Mobile App</span>
                        </div>
                        <div class="pf-card-body">
                            <h6>Flutter Mobile App</h6>
                            <div class="pf-meta">Flutter · Dart · Firebase</div>
                            <p>Cross-platform mobile application for business operations. Currently in development.</p>
                        </div>
                    </div>

                    <!-- Your project card -->
                    <div class="pf-card coming-soon" data-category="all">
                        <div class="pf-card-img">
                            <div class="pf-placeholder">
                                <i class="pe-7s-plus"></i>
                                <span>Your Project Here</span>
                            </div>
                        </div>
                        <div class="pf-card-body">
                            <h6>Your Next Project</h6>
                            <div class="pf-meta">Let's build it together</div>
                            <p>Have an idea? Let's turn it into a fully functional, beautiful application tailored to your needs.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             WHY CHOOSE
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding sub-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-40 wow fadeInLeft" data-wow-delay=".3s">
                        <span class="section-label">Why DevOcean</span>
                        <h3 class="main-title" data-splitting>Why clients<br>choose us.</h3>
                        <p style="color:rgba(15,23,42,0.60);line-height:1.8;margin-top:1.2rem;">
                            We don't just build websites — we build solutions aligned to your business workflow. Here's what sets us apart.
                        </p>
                        <a href="#contact" class="btn-curve btn-lit mt-40 wow fadeInUp" data-wow-delay=".5s">
                            <span>Start a Project</span>
                        </a>
                    </div>
                    <div class="col-lg-6 offset-lg-1 wow fadeInRight" data-wow-delay=".3s">
                        <div class="why-grid">
                            <div class="why-item">
                                <div class="w-check"><i class="fas fa-check"></i></div>
                                <div>
                                    <h6>Fully Customizable</h6>
                                    <p>Every solution is built from scratch based on your specific needs — no generic templates.</p>
                                </div>
                            </div>
                            <div class="why-item">
                                <div class="w-check"><i class="fas fa-check"></i></div>
                                <div>
                                    <h6>Business-Workflow Focused</h6>
                                    <p>We study how your business operates and build the system around your exact processes.</p>
                                </div>
                            </div>
                            <div class="why-item">
                                <div class="w-check"><i class="fas fa-check"></i></div>
                                <div>
                                    <h6>Scalable Architecture</h6>
                                    <p>Systems designed to grow with your business — adding features without breaking what works.</p>
                                </div>
                            </div>
                            <div class="why-item">
                                <div class="w-check"><i class="fas fa-check"></i></div>
                                <div>
                                    <h6>Direct Developer Communication</h6>
                                    <p>Work directly with the developer — no middlemen, no misunderstandings, faster delivery.</p>
                                </div>
                            </div>
                            <div class="why-item">
                                <div class="w-check"><i class="fas fa-check"></i></div>
                                <div>
                                    <h6>Fast &amp; Reliable Delivery</h6>
                                    <p>Clear timelines, regular updates, and on-time delivery — with full post-launch support.</p>
                                </div>
                            </div>
                            <div class="why-item">
                                <div class="w-check"><i class="fas fa-check"></i></div>
                                <div>
                                    <h6>Post-Launch Support</h6>
                                    <p>We don't disappear after deployment. Maintenance, updates, and improvements are part of the deal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             PROCESS
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding" id="process">
            <div class="container">
                <div class="sec-head custom-font text-center mb-60 wow fadeIn" data-wow-delay=".3s">
                    <span class="section-label">How It Works</span>
                    <h3 data-splitting>Our Process.</h3>
                    <span class="tbg">Process</span>
                    <p style="color:rgba(15,23,42,0.55);font-size:.9rem;max-width:500px;margin:1rem auto 0;line-height:1.7;">
                        A clear, collaborative process — so you always know what's happening.
                    </p>
                </div>
                <div class="process-steps wow fadeInUp" data-wow-delay=".3s">
                    <div class="process-step">
                        <div class="step-num">01</div>
                        <h6>Requirement Discussion</h6>
                        <p>We start by deeply understanding your business, goals, and what the system needs to accomplish.</p>
                    </div>
                    <div class="process-step">
                        <div class="step-num">02</div>
                        <h6>Planning &amp; Design</h6>
                        <p>We map out the architecture, user flows, and UI design before a single line of code is written.</p>
                    </div>
                    <div class="process-step">
                        <div class="step-num">03</div>
                        <h6>Development</h6>
                        <p>We build your application with clean, maintainable code — keeping you updated throughout.</p>
                    </div>
                    <div class="process-step">
                        <div class="step-num">04</div>
                        <h6>Testing &amp; Feedback</h6>
                        <p>Rigorous QA testing, your review rounds, and revisions before anything goes live.</p>
                    </div>
                    <div class="process-step">
                        <div class="step-num">05</div>
                        <h6>Deployment &amp; Support</h6>
                        <p>We deploy your app, train your team, and remain available for ongoing support and updates.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             PRICING
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding sub-bg">
            <div class="container">
                <div class="sec-head custom-font text-center mb-60 wow fadeIn" data-wow-delay=".3s">
                    <span class="section-label">Investment</span>
                    <h3 data-splitting>Pricing.</h3>
                    <span class="tbg">Pricing</span>
                    <p style="color:rgba(15,23,42,0.55);font-size:.9rem;max-width:500px;margin:1rem auto 0;line-height:1.7;">
                        Transparent packages or a fully custom quote based on your project scope.
                    </p>
                </div>
                <div class="pricing-grid wow fadeInUp" data-wow-delay=".3s">

                    <div class="pricing-card">
                        <div class="plan-name">Starter</div>
                        <div class="plan-price">Custom Quote</div>
                        <div class="plan-note">Simple websites &amp; landing pages</div>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Responsive website or landing page</li>
                            <li><i class="fas fa-check-circle"></i> Up to 5 sections / pages</li>
                            <li><i class="fas fa-check-circle"></i> Contact form integration</li>
                            <li><i class="fas fa-check-circle"></i> SEO-ready structure</li>
                            <li><i class="fas fa-check-circle"></i> 30 days post-launch support</li>
                        </ul>
                        <a href="#contact" class="btn-curve btn-bord" style="width:100%;text-align:center;"><span>Get a Quote</span></a>
                    </div>

                    <div class="pricing-card featured">
                        <div class="popular-badge">Most Popular</div>
                        <div class="plan-name">Business</div>
                        <div class="plan-price">Custom Quote</div>
                        <div class="plan-note">Web applications &amp; business systems</div>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Custom web application</li>
                            <li><i class="fas fa-check-circle"></i> Database design &amp; management</li>
                            <li><i class="fas fa-check-circle"></i> Admin dashboard &amp; panel</li>
                            <li><i class="fas fa-check-circle"></i> User authentication system</li>
                            <li><i class="fas fa-check-circle"></i> API integrations</li>
                            <li><i class="fas fa-check-circle"></i> 60 days post-launch support</li>
                        </ul>
                        <a href="#contact" class="btn-curve btn-lit" style="width:100%;text-align:center;"><span>Get a Quote</span></a>
                    </div>

                    <div class="pricing-card">
                        <div class="plan-name">Enterprise</div>
                        <div class="plan-price">Custom Quote</div>
                        <div class="plan-note">Complex systems &amp; mobile apps</div>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Full-scale web + mobile application</li>
                            <li><i class="fas fa-check-circle"></i> Multi-role user management</li>
                            <li><i class="fas fa-check-circle"></i> Advanced reporting &amp; analytics</li>
                            <li><i class="fas fa-check-circle"></i> Third-party system integrations</li>
                            <li><i class="fas fa-check-circle"></i> Cloud deployment &amp; DevOps</li>
                            <li><i class="fas fa-check-circle"></i> Ongoing maintenance &amp; SLA</li>
                        </ul>
                        <a href="#contact" class="btn-curve btn-bord" style="width:100%;text-align:center;"><span>Get a Quote</span></a>
                    </div>

                </div>
                <p class="text-center mt-40" style="color:rgba(15,23,42,0.40);font-size:.82rem;">
                    * All pricing is project-specific. Request a free consultation and we'll provide a detailed proposal.
                </p>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             TESTIMONIALS
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding">
            <div class="container">
                <div class="sec-head custom-font text-center mb-60 wow fadeIn" data-wow-delay=".3s">
                    <span class="section-label">Client Feedback</span>
                    <h3 data-splitting>Testimonials.</h3>
                    <span class="tbg">Reviews</span>
                </div>
                <div class="testim-grid wow fadeInUp" data-wow-delay=".3s">

                    <div class="testim-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>"The wedding website devOcean built for us was absolutely stunning. Everything was exactly as we envisioned — the RSVP system worked flawlessly, and our guests loved it. John Paul was responsive and delivered on time. We couldn't be happier!"</blockquote>
                        <div class="testim-author">
                            <div class="testim-avatar">JP</div>
                            <div>
                                <h6>John Paul &amp; Elsheryn De Jesus</h6>
                                <span>Wedding Client · April 2025</span>
                            </div>
                        </div>
                    </div>

                    <div class="testim-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>"From the elegant design to the seamless RSVP flow — our wedding site was everything we dreamed of. The love story section and photo gallery made our guests feel so welcome even before the big day. Truly dedicated work!"</blockquote>
                        <div class="testim-author">
                            <div class="testim-avatar">RA</div>
                            <div>
                                <h6>Rio &amp; Ansherina Privado</h6>
                                <span>Wedding Client · October 2025</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             CTA BAND
        ═══════════════════════════════════════════════════ -->
        <section class="cta-band section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-30 wow fadeInLeft" data-wow-delay=".3s">
                        <p style="font-size:.78rem;letter-spacing:.2em;text-transform:uppercase;color:var(--do-blue);margin-bottom:.6rem;">Let's Build Your Idea</p>
                        <h2 class="custom-font" style="font-size:clamp(1.8rem,4vw,3rem);font-weight:800;color:#fff;line-height:1.15;">
                            Tell us about your project<br>and we'll bring it to life.
                        </h2>
                    </div>
                    <div class="col-lg-4 text-lg-right wow fadeInRight" data-wow-delay=".4s">
                        <a href="https://wa.me/639201900963?text=Hi%2C%20I'm%20interested%20in%20building%20a%20project%20with%20DevOcean."
                            target="_blank"
                            class="btn-curve btn-lit mb-10" style="display:inline-block;margin-right:10px;">
                            <span>WhatsApp Us</span>
                        </a>
                        <a href="#contact" class="btn-curve btn-bord" style="display:inline-block;">
                            <span>Contact Form</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             CONTACT
        ═══════════════════════════════════════════════════ -->
        <section class="section-padding sub-bg" id="contact">
            <div class="container">
                <div class="sec-head custom-font text-center mb-60 wow fadeIn" data-wow-delay=".3s">
                    <span class="section-label">Get In Touch</span>
                    <h3 data-splitting>Contact Us.</h3>
                    <span class="tbg">Contact</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-50 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="contact-info-item">
                            <div class="ci-icon"><i class="pe-7s-mail"></i></div>
                            <div>
                                <div class="ci-label">Email</div>
                                <div class="ci-value"><a href="mailto:contactus@devocean.website">contactus@devocean.website</a></div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="ci-icon"><i class="pe-7s-call"></i></div>
                            <div>
                                <div class="ci-label">Phone / WhatsApp</div>
                                <div class="ci-value">
                                    <a href="tel:+639201900963">+63 920 190 0963</a><br>
                                    <a href="https://wa.me/639201900963" target="_blank" class="wa-btn mt-10">
                                        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="ci-icon"><i class="pe-7s-map-marker"></i></div>
                            <div>
                                <div class="ci-label">Based In</div>
                                <div class="ci-value">Philippines</div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="ci-icon"><i class="pe-7s-clock"></i></div>
                            <div>
                                <div class="ci-label">Availability</div>
                                <div class="ci-value">Mon – Sat, 9AM – 6PM PHT</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 wow fadeInRight" data-wow-delay=".3s">
                        <div class="contact-form-wrap">
                            <h5 style="color:#0F172A;font-weight:600;margin-bottom:1.5rem;font-size:1.05rem;">Send a Message</h5>
                            <form id="contactForm" onsubmit="handleContactSubmit(event)">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cf-group">
                                            <label for="cf-name">Your Name *</label>
                                            <input type="text" id="cf-name" placeholder="John Doe" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cf-group">
                                            <label for="cf-email">Email Address</label>
                                            <input type="email" id="cf-email" placeholder="john@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cf-group">
                                            <label for="cf-phone">Phone / WhatsApp</label>
                                            <input type="text" id="cf-phone" placeholder="+63 912 345 6789">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cf-group">
                                            <label for="cf-service">Service Needed *</label>
                                            <select id="cf-service" required>
                                                <option value="" disabled selected>Select a service</option>
                                                <option>Custom Web Application</option>
                                                <option>Mobile App Development</option>
                                                <option>Business / Inventory System</option>
                                                <option>Booking System</option>
                                                <option>Loan / Financial System</option>
                                                <option>Wedding &amp; Event App</option>
                                                <option>API / System Integration</option>
                                                <option>Landing Page / Website</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="cf-group">
                                    <label for="cf-message">Project Description *</label>
                                    <textarea id="cf-message" rows="4" placeholder="Tell us about your project — what it should do, who will use it, and any specific requirements..." required></textarea>
                                </div>
                                <button type="submit" class="btn-curve btn-lit" style="width:100%;margin-top:.5rem;">
                                    <span>Send Message via WhatsApp</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════════
             FOOTER
        ═══════════════════════════════════════════════════ -->
        <footer class="do-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 mb-50">
                        <svg viewBox="0 0 400 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="do-logo-svg-lg" style="margin-bottom:1.2rem;">
                            <defs>
                                <clipPath id="waveTextClipFt">
                                    <path d="M 0 55 C 100 30, 150 80, 250 55 C 320 35, 400 55, 400 55 L 400 150 L 0 150 Z"></path>
                                </clipPath>
                                <linearGradient id="waveTextGradFt" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0%" stop-color="#1E90FF"></stop>
                                    <stop offset="100%" stop-color="#38bdf8"></stop>
                                </linearGradient>
                            </defs>
                            <text x="200" y="75" font-family="'Outfit', system-ui, sans-serif" font-weight="900" font-size="72" text-anchor="middle" fill="#ffffff">DevOcean</text>
                            <text x="200" y="75" font-family="'Outfit', system-ui, sans-serif" font-weight="900" font-size="72" text-anchor="middle" fill="url(#waveTextGradFt)" clip-path="url(#waveTextClipFt)">DevOcean</text>
                        </svg>
                        <p class="footer-tagline">
                            Custom web &amp; mobile applications built for your business. Development meets devotion.
                        </p>
                        <div class="footer-social">
                            <a href="https://github.com" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                            <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://wa.me/639201900963" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            <a href="mailto:contactus@devocean.website title="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 mb-40 offset-lg-1">
                        <h6 class="footer-head">Services</h6>
                        <ul class="footer-links">
                            <li><a href="#services">Web Applications</a></li>
                            <li><a href="#services">Mobile Apps</a></li>
                            <li><a href="#services">Business Systems</a></li>
                            <li><a href="#services">Wedding Apps</a></li>
                            <li><a href="#services">API Integrations</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 mb-40">
                        <h6 class="footer-head">Portfolio</h6>
                        <ul class="footer-links">
                            <li><a href="/jp-el-wedding">JP &amp; EL Wedding</a></li>
                            <li><a href="/rio-ansherina-wedding">Rio &amp; Ansherina</a></li>
                            <li><a href="#portfolio">All Projects</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 mb-40">
                        <h6 class="footer-head">Company</h6>
                        <ul class="footer-links">
                            <li><a href="#about">About DevOcean</a></li>
                            <li><a href="#process">Our Process</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="do-footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p style="color:rgba(255,255,255,0.25);font-size:.78rem;margin:0;">
                                &copy; {{ date('Y') }} DevOcean. All rights reserved.
                            </p>
                        </div>
                        <div class="col-md-6 text-md-right">
                            {{-- <p style="color:rgba(255,255,255,0.2);font-size:.75rem;margin:0;">
                                Built with development &amp; devotion by John Paul De Jesus.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- end .main-content -->


    <!-- jQuery -->
    <script src="/themes/avo%20theme/avo/avo-dark/js/jquery-3.0.0.min.js"></script>
    <script src="/themes/avo%20theme/avo/avo-dark/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="/themes/avo%20theme/avo/avo-dark/js/plugins.js"></script>
    <script src="/themes/avo%20theme/avo/avo-dark/js/scripts.js"></script>

    <!-- ── Ethereal Shadows Animation ───────────────────────── -->
    <script>
    (function () {
        var matrix = document.getElementById('ethereal-hue-matrix');
        if (!matrix) return;
        var hue = 180, lastTime = null;
        var degsPerMs = 360 / (5.84 * 1000);
        function tick(ts) {
            if (lastTime !== null) {
                hue = (hue + degsPerMs * (ts - lastTime)) % 360;
                matrix.setAttribute('values', hue.toFixed(2));
            }
            lastTime = ts;
            requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
    })();
    </script>

    <!-- ── Portfolio Filter ──────────────────────────────────── -->
    <script>
    (function () {
        var btns = document.querySelectorAll('#pf-filters .pf-btn');
        var cards = document.querySelectorAll('#pf-grid .pf-card');
        btns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                btns.forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');
                var filter = btn.getAttribute('data-filter');
                cards.forEach(function (card) {
                    var cat = card.getAttribute('data-category');
                    if (filter === 'all' || cat === filter || cat === 'all') {
                        card.classList.remove('hidden-filter');
                    } else {
                        card.classList.add('hidden-filter');
                    }
                });
            });
        });
    })();
    </script>

    <!-- ── Contact Form → WhatsApp ───────────────────────────── -->
    <script>
    function handleContactSubmit(e) {
        e.preventDefault();
        var name    = document.getElementById('cf-name').value.trim();
        var email   = document.getElementById('cf-email').value.trim();
        var phone   = document.getElementById('cf-phone').value.trim();
        var service = document.getElementById('cf-service').value;
        var message = document.getElementById('cf-message').value.trim();

        var text = 'Hi DevOcean! 👋\n\n'
            + 'Name: ' + name + '\n'
            + (email ? 'Email: ' + email + '\n' : '')
            + (phone ? 'Phone: ' + phone + '\n' : '')
            + 'Service Needed: ' + service + '\n\n'
            + 'Project Description:\n' + message;

        window.open('https://wa.me/639201900963?text=' + encodeURIComponent(text), '_blank');
    }
    </script>

</body>
</html>
