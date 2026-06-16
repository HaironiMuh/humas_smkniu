<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karir & Masa Depan — SMKN Ihya Ulummudin Singojuruh</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;900&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

    <style>
        :root {
            --gold: #C9A84C;
            --gold-light: #E8C97A;
            --navy: #0D1F3C;
            --navy-mid: #162B50;
            --navy-light: #1E3A6E;
            --cream: #F8F4EE;
            --white: #FFFFFF;
            --text-muted: #8A9BBF;
            --green: #1A6B4A;
            --green-light: #22915F;
            --purple: #4A2C8A;
            --purple-light: #6B3EBA;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--cream);
            color: var(--navy);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Playfair Display', serif;
        }

        /* ── NAVBAR ── */
        .navbar-custom {
            background: rgba(13, 31, 60, 0.97) !important;
            backdrop-filter: blur(12px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
            border-bottom: 1px solid rgba(201, 168, 76, 0.2);
        }

        .navbar-brand-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            color: var(--gold) !important;
            font-weight: 700;
            letter-spacing: .02em;
        }

        .navbar-brand-sub {
            font-size: .7rem;
            color: var(--text-muted);
            letter-spacing: .08em;
            text-transform: uppercase;
            display: block;
            margin-top: -2px;
        }

        .nav-link-custom {
            color: rgba(255, 255, 255, .75) !important;
            font-size: .85rem;
            font-weight: 500;
            letter-spacing: .04em;
            padding: 8px 14px !important;
            transition: color .25s;
        }

        .nav-link-custom:hover {
            color: var(--gold) !important;
        }

        .btn-nav {
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: var(--navy) !important;
            font-weight: 700;
            border-radius: 30px;
            padding: 8px 22px !important;
            font-size: .85rem;
        }

        /* ── NAVBAR EXTRA ── */
        .navbar-custom {
            padding: 0;
        }

        .navbar-custom .container {
            padding: 14px 12px;
        }

        .navbar-toggler {
            border: none;
            background: transparent;
            display: flex;
            flex-direction: column;
            gap: 5px;
            padding: 6px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .toggler-icon {
            display: block;
            width: 22px;
            height: 2px;
            background: rgba(255, 255, 255, .7);
            border-radius: 2px;
            transition: background .2s;
        }

        .navbar-toggler:hover .toggler-icon {
            background: var(--gold);
        }

        /* Mobile collapse area */
        .navbar-collapse {
            background: var(--navy);
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                border-top: 1px solid rgba(201, 168, 76, .15);
                padding: 12px 0 16px;
                margin-top: 8px;
            }
        }

        /* Dropdown menu */
        .dropdown-menu-custom {
            background: var(--navy-mid);
            border: 1px solid rgba(201, 168, 76, .2);
            border-radius: 16px;
            padding: 10px;
            min-width: 250px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, .35);
            margin-top: 8px !important;
        }

        .dropdown-item-custom {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 10px 12px;
            border-radius: 10px;
            text-decoration: none;
            transition: background .2s;
        }

        .dropdown-item-custom:hover {
            background: rgba(255, 255, 255, .06);
        }

        .dd-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .9rem;
            flex-shrink: 0;
        }

        .dd-work {
            background: rgba(30, 58, 110, .5);
            color: var(--gold);
        }

        .dd-college {
            background: rgba(26, 107, 74, .3);
            color: #5ECDA0;
        }

        .dd-biz {
            background: rgba(74, 44, 138, .3);
            color: #B89EF0;
        }

        .dd-title {
            color: var(--white);
            font-size: .88rem;
            font-weight: 600;
        }

        .dd-desc {
            color: var(--text-muted);
            font-size: .75rem;
            margin-top: 1px;
        }

        /* active nav highlight */
        .nav-link-custom.active {
            color: var(--gold) !important;
        }

        /* ── HERO ── */
        .hero {
            min-height: 100vh;
            background: linear-gradient(160deg, var(--navy) 0%, var(--navy-mid) 55%, #0A3060 100%);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 50% at 80% 40%, rgba(201, 168, 76, .12) 0%, transparent 70%),
                radial-gradient(ellipse 40% 60% at 20% 80%, rgba(30, 58, 110, .6) 0%, transparent 70%);
        }

        .hero-grid-lines {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(201, 168, 76, .04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(201, 168, 76, .04) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(201, 168, 76, .12);
            border: 1px solid rgba(201, 168, 76, .3);
            border-radius: 30px;
            padding: 6px 18px;
            font-size: .78rem;
            color: var(--gold-light);
            letter-spacing: .08em;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 24px;
        }

        .hero-title {
            font-size: clamp(2.4rem, 5.5vw, 4.2rem);
            color: var(--white);
            line-height: 1.1;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .hero-title .accent {
            color: var(--gold);
        }

        .hero-subtitle {
            font-size: 1.05rem;
            color: rgba(255, 255, 255, .65);
            line-height: 1.75;
            max-width: 520px;
            margin-bottom: 38px;
            font-weight: 400;
        }

        .hero-cta-group {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: var(--navy);
            font-weight: 700;
            border-radius: 50px;
            padding: 14px 32px;
            font-size: .95rem;
            border: none;
            box-shadow: 0 8px 28px rgba(201, 168, 76, .35);
            transition: transform .2s, box-shadow .2s;
        }

        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 36px rgba(201, 168, 76, .45);
            color: var(--navy);
        }

        .btn-outline-light-custom {
            background: transparent;
            border: 1.5px solid rgba(255, 255, 255, .35);
            color: var(--white);
            border-radius: 50px;
            padding: 14px 32px;
            font-size: .95rem;
            font-weight: 600;
            transition: background .2s, border-color .2s;
        }

        .btn-outline-light-custom:hover {
            background: rgba(255, 255, 255, .07);
            border-color: rgba(255, 255, 255, .6);
            color: var(--white);
        }

        /* floating stat cards */
        .hero-stats {
            display: flex;
            flex-direction: column;
            gap: 16px;
            position: relative;
            z-index: 2;
        }

        .stat-card {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(201, 168, 76, .2);
            border-radius: 16px;
            padding: 20px 24px;
            backdrop-filter: blur(8px);
            transition: transform .3s;
        }

        .stat-card:hover {
            transform: translateX(-6px);
        }

        .stat-card .number {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 900;
            color: var(--gold);
            line-height: 1;
        }

        .stat-card .label {
            font-size: .8rem;
            color: rgba(255, 255, 255, .55);
            text-transform: uppercase;
            letter-spacing: .06em;
            margin-top: 4px;
        }

        .ornament-circle {
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(201, 168, 76, .15);
        }

        .orn-1 {
            width: 420px;
            height: 420px;
            top: -80px;
            right: -120px;
        }

        .orn-2 {
            width: 220px;
            height: 220px;
            top: 80px;
            right: 80px;
        }

        .orn-3 {
            width: 100px;
            height: 100px;
            bottom: 120px;
            right: 250px;
            background: rgba(201, 168, 76, .06);
        }

        /* ── SECTION TITLES ── */
        .section-eyebrow {
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 10px;
        }

        .section-title {
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            font-weight: 900;
            color: var(--navy);
            line-height: 1.18;
        }

        .divider-gold {
            width: 52px;
            height: 3px;
            background: linear-gradient(90deg, var(--gold), transparent);
            border-radius: 4px;
            margin: 18px 0;
        }

        /* ── PATH CARDS ── */
        .paths-section {
            padding: 110px 0 80px;
            background: var(--cream);
        }

        .path-card {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 4px 30px rgba(13, 31, 60, .08);
            transition: transform .3s, box-shadow .3s;
            height: 100%;
            border: 1px solid rgba(13, 31, 60, .07);
            background: var(--white);
        }

        .path-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(13, 31, 60, .14);
        }

        .path-card-header {
            padding: 40px 32px 30px;
            position: relative;
            overflow: hidden;
        }

        .path-card-header.work-hdr {
            background: linear-gradient(140deg, var(--navy) 0%, var(--navy-light) 100%);
        }

        .path-card-header.college-hdr {
            background: linear-gradient(140deg, var(--green) 0%, var(--green-light) 100%);
        }

        .path-card-header.biz-hdr {
            background: linear-gradient(140deg, var(--purple) 0%, var(--purple-light) 100%);
        }

        .path-icon {
            width: 68px;
            height: 68px;
            background: rgba(255, 255, 255, .12);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--white);
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, .2);
        }

        .path-card-header h3 {
            color: var(--white);
            font-size: 1.55rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .path-card-header p {
            color: rgba(255, 255, 255, .7);
            font-size: .88rem;
            line-height: 1.6;
        }

        .hdr-ornament {
            position: absolute;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .05);
            top: -50px;
            right: -50px;
        }

        .path-card-body {
            padding: 28px 32px 32px;
        }

        .path-feature {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 14px;
        }

        .path-feature-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .8rem;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .work-fi {
            background: rgba(13, 31, 60, .08);
            color: var(--navy);
        }

        .college-fi {
            background: rgba(26, 107, 74, .1);
            color: var(--green);
        }

        .biz-fi {
            background: rgba(74, 44, 138, .1);
            color: var(--purple);
        }

        .path-feature p {
            font-size: .88rem;
            color: #4A5568;
            line-height: 1.55;
            margin: 0;
        }

        .path-cta {
            display: block;
            width: 100%;
            margin-top: 24px;
            padding: 13px;
            border-radius: 12px;
            font-weight: 700;
            font-size: .9rem;
            text-align: center;
            text-decoration: none;
            transition: opacity .2s, transform .2s;
        }

        .path-cta:hover {
            opacity: .85;
            transform: scale(.99);
        }

        .cta-work {
            background: var(--navy);
            color: var(--white);
        }

        .cta-college {
            background: var(--green);
            color: var(--white);
        }

        .cta-biz {
            background: var(--purple);
            color: var(--white);
        }

        /* ── DOWNLOAD SECTION ── */
        .download-section {
            padding: 100px 0;
            background: linear-gradient(160deg, var(--navy) 0%, var(--navy-mid) 100%);
            position: relative;
            overflow: hidden;
        }

        .download-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 50% 60% at 90% 20%, rgba(201, 168, 76, .1) 0%, transparent 60%),
                radial-gradient(ellipse 40% 40% at 10% 90%, rgba(201, 168, 76, .07) 0%, transparent 60%);
        }

        .download-section .section-title {
            color: var(--white);
        }

        .download-section .section-eyebrow {
            color: var(--gold);
        }

        .download-section p.lead-text {
            color: rgba(255, 255, 255, .65);
            font-size: .95rem;
            line-height: 1.75;
        }

        /* tab pills */
        .dl-tabs {
            display: flex;
            gap: 8px;
            background: rgba(255, 255, 255, .06);
            border-radius: 50px;
            padding: 5px;
            margin-bottom: 28px;
            width: fit-content;
        }

        .dl-tab {
            padding: 9px 22px;
            border-radius: 50px;
            font-size: .83rem;
            font-weight: 600;
            color: rgba(255, 255, 255, .55);
            cursor: pointer;
            transition: background .2s, color .2s;
            border: none;
            background: transparent;
        }

        .dl-tab.active {
            background: var(--gold);
            color: var(--navy);
        }

        .dl-file-card {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 16px;
            padding: 18px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: background .2s, border-color .2s;
            margin-bottom: 12px;
            cursor: pointer;
            text-decoration: none;
        }

        .dl-file-card:hover {
            background: rgba(201, 168, 76, .08);
            border-color: rgba(201, 168, 76, .3);
        }

        .dl-file-icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: rgba(201, 168, 76, .15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--gold);
            flex-shrink: 0;
        }

        .dl-file-info {
            flex: 1;
        }

        .dl-file-name {
            color: var(--white);
            font-weight: 600;
            font-size: .9rem;
            margin-bottom: 3px;
        }

        .dl-file-meta {
            color: var(--text-muted);
            font-size: .75rem;
        }

        .dl-file-btn {
            background: rgba(201, 168, 76, .15);
            border: 1px solid rgba(201, 168, 76, .3);
            color: var(--gold);
            border-radius: 8px;
            padding: 7px 14px;
            font-size: .78rem;
            font-weight: 700;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dl-hidden {
            display: none;
        }

        /* ── STEPS / HOW IT WORKS ── */
        .steps-section {
            padding: 100px 0;
            background: var(--white);
        }

        .step-item {
            display: flex;
            gap: 24px;
            align-items: flex-start;
            margin-bottom: 40px;
        }

        .step-num {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: var(--navy);
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 900;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 18px rgba(201, 168, 76, .3);
        }

        .step-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 6px;
        }

        .step-content p {
            font-size: .88rem;
            color: #5A6A85;
            line-height: 1.65;
        }

        /* ── QUOTE / MOTIVATION ── */
        .quote-section {
            padding: 80px 0;
            background: var(--cream);
            text-align: center;
        }

        .quote-mark {
            font-family: 'Playfair Display', serif;
            font-size: 6rem;
            line-height: .5;
            color: var(--gold);
            opacity: .3;
        }

        .quote-text {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.3rem, 3vw, 2rem);
            color: var(--navy);
            font-style: italic;
            max-width: 700px;
            margin: 0 auto 16px;
            line-height: 1.5;
        }

        .quote-author {
            font-size: .85rem;
            color: var(--text-muted);
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        /* ── FOOTER ── */
        .footer {
            background: var(--navy);
            padding: 60px 0 28px;
            color: rgba(255, 255, 255, .6);
        }

        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: var(--gold);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .footer-desc {
            font-size: .83rem;
            line-height: 1.7;
            max-width: 280px;
        }

        .footer-divider {
            border-color: rgba(255, 255, 255, .08);
            margin: 40px 0 20px;
        }

        .footer-bottom {
            font-size: .78rem;
            color: rgba(255, 255, 255, .35);
            text-align: center;
        }

        .footer-heading {
            color: var(--white);
            font-size: .88rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .footer-link {
            display: block;
            color: rgba(255, 255, 255, .55);
            font-size: .83rem;
            text-decoration: none;
            margin-bottom: 9px;
            transition: color .2s;
        }

        .footer-link:hover {
            color: var(--gold);
        }

        .social-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .07);
            border: 1px solid rgba(255, 255, 255, .12);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, .55);
            font-size: .85rem;
            margin-right: 8px;
            text-decoration: none;
            transition: background .2s, color .2s;
        }

        .social-btn:hover {
            background: var(--gold);
            color: var(--navy);
            border-color: var(--gold);
        }

        /* ── LOWONGAN KERJA ── */
        .lowongan-section {
            padding: 100px 0;
            background: var(--cream);
        }

        .filter-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
            margin-bottom: 32px;
        }

        .filter-search {
            flex: 1;
            min-width: 220px;
            background: var(--white);
            border: 1.5px solid rgba(13, 31, 60, .12);
            border-radius: 50px;
            padding: 11px 20px 11px 44px;
            font-size: .88rem;
            color: var(--navy);
            outline: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: border-color .2s;
            position: relative;
        }

        .filter-search:focus {
            border-color: var(--gold);
        }

        .search-wrap {
            position: relative;
            flex: 1;
            min-width: 220px;
        }

        .search-wrap i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: .85rem;
        }

        .filter-select {
            background: var(--white);
            border: 1.5px solid rgba(13, 31, 60, .12);
            border-radius: 50px;
            padding: 11px 18px;
            font-size: .85rem;
            color: var(--navy);
            outline: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
            cursor: pointer;
            transition: border-color .2s;
            appearance: none;
            padding-right: 36px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%238A9BBF' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
        }

        .filter-select:focus {
            border-color: var(--gold);
        }

        .job-card {
            background: var(--white);
            border: 1px solid rgba(13, 31, 60, .07);
            border-radius: 20px;
            padding: 24px 26px;
            display: flex;
            gap: 18px;
            align-items: flex-start;
            transition: transform .25s, box-shadow .25s, border-color .25s;
            margin-bottom: 16px;
        }

        .job-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 36px rgba(13, 31, 60, .1);
            border-color: rgba(201, 168, 76, .3);
        }

        .job-logo {
            width: 58px;
            height: 58px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
        }

        .job-info {
            flex: 1;
            min-width: 0;
        }

        .job-title {
            font-size: 1rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 3px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .job-company {
            font-size: .83rem;
            color: var(--text-muted);
            margin-bottom: 10px;
        }

        .job-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 10px;
        }

        .job-tag {
            font-size: .73rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: .02em;
        }

        .tag-loc {
            background: rgba(13, 31, 60, .07);
            color: var(--navy);
        }

        .tag-type {
            background: rgba(26, 107, 74, .1);
            color: var(--green);
        }

        .tag-field {
            background: rgba(201, 168, 76, .12);
            color: #9A7030;
        }

        .tag-new {
            background: rgba(220, 53, 69, .1);
            color: #DC3545;
        }

        .job-deadline {
            font-size: .75rem;
            color: var(--text-muted);
        }

        .job-deadline i {
            margin-right: 4px;
        }

        .job-action {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
            flex-shrink: 0;
        }

        .job-salary {
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--green);
        }

        .job-salary span {
            font-size: .72rem;
            color: var(--text-muted);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 400;
            display: block;
            text-align: right;
        }

        .btn-apply {
            background: linear-gradient(135deg, var(--navy), var(--navy-light));
            color: var(--white);
            border: none;
            border-radius: 10px;
            padding: 9px 20px;
            font-size: .82rem;
            font-weight: 700;
            cursor: pointer;
            transition: opacity .2s, transform .2s;
            white-space: nowrap;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .btn-apply:hover {
            opacity: .85;
            transform: scale(.97);
        }

        .btn-apply-outline {
            background: transparent;
            color: var(--navy);
            border: 1.5px solid rgba(13, 31, 60, .2);
            border-radius: 10px;
            padding: 8px 18px;
            font-size: .82rem;
            font-weight: 600;
            cursor: pointer;
            transition: border-color .2s, background .2s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .btn-apply-outline:hover {
            border-color: var(--gold);
            background: rgba(201, 168, 76, .05);
        }

        .load-more-wrap {
            text-align: center;
            margin-top: 36px;
        }

        .btn-load-more {
            background: transparent;
            border: 2px solid rgba(13, 31, 60, .15);
            color: var(--navy);
            border-radius: 50px;
            padding: 13px 36px;
            font-size: .9rem;
            font-weight: 700;
            cursor: pointer;
            transition: border-color .2s, background .2s, color .2s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .btn-load-more:hover {
            border-color: var(--gold);
            background: var(--gold);
            color: var(--navy);
        }

        .job-count-label {
            font-size: .83rem;
            color: var(--text-muted);
            margin-top: 12px;
        }

        .job-hidden {
            display: none !important;
        }

        @media (max-width: 576px) {
            .job-card {
                flex-direction: column;
                gap: 12px;
            }

            .job-action {
                flex-direction: row;
                align-items: center;
                width: 100%;
                justify-content: space-between;
            }
        }

        /* ── QUOTE ── */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .6s ease, transform .6s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* responsive */
        @media (max-width: 768px) {
            .hero {
                min-height: auto;
                padding: 120px 0 80px;
            }

            .hero-stats {
                flex-direction: row;
                flex-wrap: wrap;
            }

            .stat-card {
                flex: 1;
                min-width: 130px;
            }

            .path-card-body {
                padding: 22px 22px 26px;
            }

            .dl-tabs {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <!-- ══════════════ NAVBAR ══════════════ -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand text-decoration-none" href="#">
                <span class="navbar-brand-text"><img src="./assets/img/logo.png" alt="Logo SMKN Ihya Ulummudin" width="80px"> KARIR SMKNIU</span>
                <!-- <span class="navbar-brand-sub">Singojuruh · Banyuwangi</span> -->
            </a>

            <!-- Hamburger toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>

            <!-- Menu items -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">

                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#">Beranda</a>
                    </li>

                    <!-- Jalur Karir dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle" href="#jalur" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Jalur Karir
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom">
                            <li>
                                <a class="dropdown-item-custom" href="#jalur">
                                    <div class="dd-icon dd-work"><i class="fas fa-briefcase"></i></div>
                                    <div>
                                        <div class="dd-title">Bekerja</div>
                                        <div class="dd-desc">Langsung terjun ke dunia industri</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item-custom" href="#jalur">
                                    <div class="dd-icon dd-college"><i class="fas fa-graduation-cap"></i></div>
                                    <div>
                                        <div class="dd-title">Kuliah</div>
                                        <div class="dd-desc">Lanjutkan ke perguruan tinggi</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item-custom" href="#jalur">
                                    <div class="dd-icon dd-biz"><i class="fas fa-rocket"></i></div>
                                    <div>
                                        <div class="dd-title">Wirausaha</div>
                                        <div class="dd-desc">Bangun bisnis sendiri dari nol</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Lowongan -->
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#lowongan">Lowongan Kerja</a>
                    </li>

                    <!-- Panduan dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle" href="#langkah" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Panduan
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom">
                            <li>
                                <a class="dropdown-item-custom" href="#langkah">
                                    <div class="dd-icon dd-work"><i class="fas fa-list-ol"></i></div>
                                    <div>
                                        <div class="dd-title">Langkah-Langkah</div>
                                        <div class="dd-desc">Cara menggunakan portal ini</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item-custom" href="#unduh">
                                    <div class="dd-icon dd-college"><i class="fas fa-file-download"></i></div>
                                    <div>
                                        <div class="dd-title">Unduh Berkas</div>
                                        <div class="dd-desc">Template &amp; formulir lengkap</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Tentang -->
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#tentang">Tentang</a>
                    </li>

                    <!-- CTA button -->
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="nav-link nav-link-custom btn-nav" href="#jalur">
                            Mulai Sekarang &nbsp;<i class="fas fa-arrow-right" style="font-size:.75rem;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ══════════════ HERO ══════════════ -->
    <section class="hero">
        <div class="hero-grid-lines"></div>
        <div class="ornament-circle orn-1"></div>
        <div class="ornament-circle orn-2"></div>
        <div class="ornament-circle orn-3"></div>

        <div class="container position-relative" style="z-index:2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="hero-badge">
                        <i class="fas fa-star" style="font-size:.6rem;"></i>
                        Portal Karir & Masa Depan Siswa
                    </div>
                    <h1 class="hero-title">
                        Tentukan<br />
                        <span class="accent">Jalur Suksesmu</span><br />
                        Setelah SMK
                    </h1>
                    <p class="hero-subtitle">
                        SMKN Ihya Ulummudin Singojuruh hadir memandu kamu menapaki tiga jalur masa depan —
                        bekerja, kuliah, atau berwirausaha — dengan dukungan berkas dan panduan lengkap.
                    </p>
                    <div class="hero-cta-group">
                        <a href="#jalur" class="btn-gold text-decoration-none">
                            Pilih Jalurku &nbsp;<i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#unduh" class="btn-outline-light-custom text-decoration-none">
                            <i class="fas fa-download me-2"></i>Unduh Berkas
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-stats">
                        <div class="stat-card">
                            <div class="number">3</div>
                            <div class="label">Jalur Pilihan Masa Depan</div>
                        </div>
                        <div class="stat-card">
                            <div class="number">30+</div>
                            <div class="label">Berkas &amp; Template Siap Unduh</div>
                        </div>
                        <div class="stat-card">
                            <div class="number">100%</div>
                            <div class="label">Gratis &amp; Siap Pakai</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════ 3 PATH CARDS ══════════════ -->
    <section class="paths-section" id="jalur">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <div class="section-eyebrow">Jalur Masa Depan</div>
                <h2 class="section-title">Tiga Pilihan, Satu Tujuan:<br />Sukses Setelah Lulus</h2>
                <div class="divider-gold mx-auto"></div>
                <p class="text-muted" style="max-width:560px; margin:0 auto; font-size:.93rem; line-height:1.75;">
                    Pilih jalur yang paling sesuai dengan minat, bakat, dan impianmu.
                    Kami siapkan panduan dan berkas lengkap untuk setiap jalur.
                </p>
            </div>

            <div class="row g-4">
                <!-- KERJA -->
                <div class="col-lg-4 reveal">
                    <div class="path-card">
                        <div class="path-card-header work-hdr">
                            <div class="hdr-ornament"></div>
                            <div class="path-icon"><i class="fas fa-briefcase"></i></div>
                            <h3>Bekerja</h3>
                            <p>Langsung terjun ke dunia industri dan mulai karir profesionalmu.</p>
                        </div>
                        <div class="path-card-body">
                            <div class="path-feature">
                                <div class="path-feature-icon work-fi"><i class="fas fa-file-alt"></i></div>
                                <p>Persiapkan CV, surat lamaran, dan portofolio yang menarik perhatian HRD.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon work-fi"><i class="fas fa-search"></i></div>
                                <p>Panduan mencari lowongan kerja dari sumber terpercaya sesuai kompetensi.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon work-fi"><i class="fas fa-comments"></i></div>
                                <p>Tips sukses wawancara kerja dan cara mempresentasikan diri dengan percaya diri.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon work-fi"><i class="fas fa-certificate"></i></div>
                                <p>Daftar sertifikasi kompetensi yang meningkatkan nilai jual di pasar kerja.</p>
                            </div>
                            <a href="#unduh" class="path-cta cta-work">
                                Lihat Berkas Kerja &nbsp;<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KULIAH -->
                <div class="col-lg-4 reveal" style="transition-delay:.12s;">
                    <div class="path-card">
                        <div class="path-card-header college-hdr">
                            <div class="hdr-ornament"></div>
                            <div class="path-icon"><i class="fas fa-graduation-cap"></i></div>
                            <h3>Kuliah</h3>
                            <p>Tingkatkan kompetensi dan raih gelar akademik untuk masa depan lebih cerah.</p>
                        </div>
                        <div class="path-card-body">
                            <div class="path-feature">
                                <div class="path-feature-icon college-fi"><i class="fas fa-university"></i></div>
                                <p>Panduan memilih program studi dan perguruan tinggi yang tepat sesuai jurusan SMK.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon college-fi"><i class="fas fa-money-bill-wave"></i></div>
                                <p>Informasi beasiswa KIP Kuliah, Bidikmisi, dan beasiswa swasta lainnya.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon college-fi"><i class="fas fa-clipboard-list"></i></div>
                                <p>Persiapan UTBK/SNBT, jalur mandiri, dan syarat pendaftaran perguruan tinggi.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon college-fi"><i class="fas fa-file-signature"></i></div>
                                <p>Template surat rekomendasi, transkrip, dan dokumen pendaftaran kuliah.</p>
                            </div>
                            <a href="#unduh" class="path-cta cta-college">
                                Lihat Berkas Kuliah &nbsp;<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- WIRAUSAHA -->
                <div class="col-lg-4 reveal" style="transition-delay:.24s;">
                    <div class="path-card">
                        <div class="path-card-header biz-hdr">
                            <div class="hdr-ornament"></div>
                            <div class="path-icon"><i class="fas fa-rocket"></i></div>
                            <h3>Wirausaha</h3>
                            <p>Jadilah pencipta lapangan kerja dengan membangun usahamu sendiri.</p>
                        </div>
                        <div class="path-card-body">
                            <div class="path-feature">
                                <div class="path-feature-icon biz-fi"><i class="fas fa-lightbulb"></i></div>
                                <p>Panduan validasi ide bisnis dan riset pasar sederhana yang bisa langsung dipraktikkan.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon biz-fi"><i class="fas fa-chart-line"></i></div>
                                <p>Template business plan dan proyeksi keuangan untuk mengajukan modal usaha.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon biz-fi"><i class="fas fa-hand-holding-usd"></i></div>
                                <p>Informasi program permodalan UMKM, inkubator bisnis, dan bantuan pemerintah.</p>
                            </div>
                            <div class="path-feature">
                                <div class="path-feature-icon biz-fi"><i class="fas fa-store"></i></div>
                                <p>Panduan legalitas usaha, pembuatan NIB, dan pendaftaran NPWP untuk pemula.</p>
                            </div>
                            <a href="#unduh" class="path-cta cta-biz">
                                Lihat Berkas Wirausaha &nbsp;<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════ STEPS ══════════════ -->
    <section class="steps-section" id="langkah">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 reveal">
                    <div class="section-eyebrow">Cara Kerja Portal</div>
                    <h2 class="section-title">Empat Langkah Menuju Masa Depanmu</h2>
                    <div class="divider-gold"></div>
                    <p style="color:#5A6A85; font-size:.9rem; line-height:1.75;">
                        Ikuti langkah sederhana ini untuk memaksimalkan fitur portal karir SMKN Ihya Ulummudin
                        dan mempersiapkan dirimu sebaik mungkin sebelum lulus.
                    </p>
                </div>
                <div class="col-lg-7 reveal" style="transition-delay:.1s;">
                    <div class="step-item">
                        <div class="step-num">1</div>
                        <div class="step-content">
                            <h4>Kenali Diri &amp; Pilihanmu</h4>
                            <p>Pelajari ketiga jalur yang tersedia — kerja, kuliah, atau wirausaha — dan kenali mana yang paling sesuai dengan minat, kemampuan, dan kondisimu saat ini.</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-num">2</div>
                        <div class="step-content">
                            <h4>Unduh Berkas yang Kamu Butuhkan</h4>
                            <p>Kunjungi area unduhan, pilih jalurmu, lalu unduh semua template berkas yang diperlukan — mulai dari CV, surat lamaran, formulir beasiswa, hingga business plan.</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-num">3</div>
                        <div class="step-content">
                            <h4>Lengkapi &amp; Siapkan Berkasmu</h4>
                            <p>Isi semua dokumen dengan informasi yang benar dan lengkap. Konsultasikan dengan guru BK atau wali kelas bila ada yang perlu ditandatangani atau dilegalisir sekolah.</p>
                        </div>
                    </div>
                    <div class="step-item" style="margin-bottom:0;">
                        <div class="step-num">4</div>
                        <div class="step-content">
                            <h4>Daftar &amp; Raih Impianmu!</h4>
                            <p>Ajukan lamaranmu, daftarkan diri ke perguruan tinggi pilihanmu, atau mulai bisnismu. Sekolah siap memberikan dukungan penuh untuk setiap jalur yang kamu pilih.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════ DOWNLOAD SECTION ══════════════ -->
    <section class="download-section" id="unduh">
        <div class="container position-relative" style="z-index:2;">
            <div class="row justify-content-center mb-5 reveal">
                <div class="col-lg-7 text-center">
                    <div class="section-eyebrow">Area Unduhan</div>
                    <h2 class="section-title" style="color:#fff;">Berkas Lengkap, Siap Unduh Gratis</h2>
                    <div class="divider-gold mx-auto"></div>
                    <p class="lead-text">
                        Semua template, formulir, dan panduan yang kamu butuhkan sudah kami siapkan.
                        Pilih kategori jalurmu dan unduh sekarang.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center reveal" style="transition-delay:.1s;">
                <div class="col-lg-10">
                    <!-- Tab Switcher -->
                    <div class="dl-tabs mb-4">
                        <button class="dl-tab active" onclick="switchTab('kerja', this)">
                            <i class="fas fa-briefcase me-2"></i>Bekerja
                        </button>
                        <button class="dl-tab" onclick="switchTab('kuliah', this)">
                            <i class="fas fa-graduation-cap me-2"></i>Kuliah
                        </button>
                        <button class="dl-tab" onclick="switchTab('wirausaha', this)">
                            <i class="fas fa-rocket me-2"></i>Wirausaha
                        </button>
                    </div>

                    <!-- KERJA FILES -->
                    <div id="tab-kerja">
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-word"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Template CV Modern (Curriculum Vitae)</div>
                                <div class="dl-file-meta">Format .docx · Siap isi · 2 halaman</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-word"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Template Surat Lamaran Kerja</div>
                                <div class="dl-file-meta">Format .docx · Bahasa formal · 1 halaman</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Panduan Wawancara Kerja untuk Lulusan SMK</div>
                                <div class="dl-file-meta">Format .pdf · 15 halaman · Tips &amp; contoh</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Daftar Sertifikasi Kompetensi (BNSP)</div>
                                <div class="dl-file-meta">Format .pdf · Info pendaftaran &amp; jadwal</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-word"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Surat Keterangan Lulus (SKL) — Formulir Sekolah</div>
                                <div class="dl-file-meta">Format .docx · Ditandatangani kepala sekolah</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-excel"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Daftar Perusahaan Mitra Sekolah (BKK)</div>
                                <div class="dl-file-meta">Format .xlsx · Alamat &amp; kontak HRD</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                    </div>

                    <!-- KULIAH FILES -->
                    <div id="tab-kuliah" class="dl-hidden">
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Panduan SNBP &amp; SNBT 2025 untuk Lulusan SMK</div>
                                <div class="dl-file-meta">Format .pdf · Jadwal &amp; syarat lengkap</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-word"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Template Surat Rekomendasi Kepala Sekolah</div>
                                <div class="dl-file-meta">Format .docx · Untuk pendaftaran PTN/PTS</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Panduan Pendaftaran KIP Kuliah 2025</div>
                                <div class="dl-file-meta">Format .pdf · Syarat &amp; cara daftar</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-word"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Template Esai Motivasi Beasiswa</div>
                                <div class="dl-file-meta">Format .docx · Contoh &amp; panduan penulisan</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-excel"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Daftar Perguruan Tinggi Menerima Lulusan SMK</div>
                                <div class="dl-file-meta">Format .xlsx · PTN &amp; PTS terkemuka</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Checklist Berkas Pendaftaran Kuliah</div>
                                <div class="dl-file-meta">Format .pdf · Jangan sampai ada yang kurang!</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                    </div>

                    <!-- WIRAUSAHA FILES -->
                    <div id="tab-wirausaha" class="dl-hidden">
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-word"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Template Business Plan Pemula</div>
                                <div class="dl-file-meta">Format .docx · Lengkap dengan analisis SWOT</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-excel"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Template Proyeksi Keuangan Usaha (1 Tahun)</div>
                                <div class="dl-file-meta">Format .xlsx · Otomatis hitung laba/rugi</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Panduan Daftar NIB (Nomor Induk Berusaha)</div>
                                <div class="dl-file-meta">Format .pdf · Via OSS — step by step</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Panduan Program Permodalan UMKM &amp; KUR</div>
                                <div class="dl-file-meta">Format .pdf · Bank &amp; non-bank</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-word"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Template Proposal Bantuan Modal Wirausaha Muda</div>
                                <div class="dl-file-meta">Format .docx · Untuk dinas/kemenpora</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                        <div class="dl-file-card">
                            <div class="dl-file-icon"><i class="fas fa-file-pdf"></i></div>
                            <div class="dl-file-info">
                                <div class="dl-file-name">Strategi Pemasaran Digital untuk UMKM Pemula</div>
                                <div class="dl-file-meta">Format .pdf · Media sosial &amp; marketplace</div>
                            </div>
                            <div class="dl-file-btn"><i class="fas fa-download"></i> Unduh</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════ LOWONGAN KERJA ══════════════ -->
    <section class="lowongan-section" id="lowongan">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <div class="section-eyebrow">Peluang Kerja</div>
                <h2 class="section-title">Lowongan Kerja Terkini<br />untuk Lulusan SMK</h2>
                <div class="divider-gold mx-auto"></div>
                <p class="text-muted" style="max-width:540px; margin:0 auto; font-size:.93rem; line-height:1.75;">
                    Temukan peluang karir terbaik yang sesuai dengan keahlianmu. Diperbarui secara berkala oleh tim BKK sekolah.
                </p>
            </div>

            <!-- Filter Bar -->
            <div class="filter-bar reveal">
                <div class="search-wrap">
                    <i class="fas fa-search"></i>
                    <input type="text" class="filter-search" id="jobSearch" placeholder="Cari posisi atau perusahaan..." oninput="filterJobs()">
                </div>
                <select class="filter-select" id="filterBidang" onchange="filterJobs()">
                    <option value="">Semua Bidang</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Perhotelan">Perhotelan</option>
                    <option value="Kuliner">Kuliner</option>
                    <option value="Otomotif">Otomotif</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Retail">Retail</option>
                </select>
                <select class="filter-select" id="filterTipe" onchange="filterJobs()">
                    <option value="">Semua Tipe</option>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Magang">Magang</option>
                    <option value="Kontrak">Kontrak</option>
                </select>
                <select class="filter-select" id="filterLokasi" onchange="filterJobs()">
                    <option value="">Semua Lokasi</option>
                    <option value="Banyuwangi">Banyuwangi</option>
                    <option value="Jember">Jember</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Bali">Bali</option>
                    <option value="Jakarta">Jakarta</option>
                </select>
            </div>

            <!-- Job Cards -->
            <div id="jobList">

                <div class="job-card reveal" data-bidang="Teknologi" data-tipe="Full-time" data-lokasi="Banyuwangi">
                    <div class="job-logo" style="background:rgba(13,31,60,.08); color:var(--navy);">PT</div>
                    <div class="job-info">
                        <div class="job-title">Teknisi Komputer & Jaringan</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>PT Telkom Indonesia — Cabang Banyuwangi</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Banyuwangi</span>
                            <span class="job-tag tag-type">Full-time</span>
                            <span class="job-tag tag-field">Teknologi</span>
                            <span class="job-tag tag-new">Baru</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 30 Juli 2025 · Min. SMA/SMK sederajat</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 3,5 Jt<span>per bulan</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

                <div class="job-card reveal" data-bidang="Perhotelan" data-tipe="Full-time" data-lokasi="Bali">
                    <div class="job-logo" style="background:rgba(26,107,74,.1); color:var(--green);">BH</div>
                    <div class="job-info">
                        <div class="job-title">Front Office Staff / Resepsionis</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>Bali Hai Resort & Spa — Kuta, Bali</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Bali</span>
                            <span class="job-tag tag-type">Full-time</span>
                            <span class="job-tag tag-field">Perhotelan</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 15 Agustus 2025 · Bisa bahasa Inggris</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 4,2 Jt<span>per bulan</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

                <div class="job-card reveal" data-bidang="Kuliner" data-tipe="Full-time" data-lokasi="Banyuwangi">
                    <div class="job-logo" style="background:rgba(201,168,76,.15); color:#9A7030;">DG</div>
                    <div class="job-info">
                        <div class="job-title">Chef de Partie / Juru Masak</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>Dapur Gourmet Banyuwangi</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Banyuwangi</span>
                            <span class="job-tag tag-type">Full-time</span>
                            <span class="job-tag tag-field">Kuliner</span>
                            <span class="job-tag tag-new">Baru</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 10 Agustus 2025 · Pengalaman diutamakan</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 3,0 Jt<span>per bulan</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

                <div class="job-card reveal" data-bidang="Otomotif" data-tipe="Full-time" data-lokasi="Jember">
                    <div class="job-logo" style="background:rgba(74,44,138,.1); color:var(--purple);">AJ</div>
                    <div class="job-info">
                        <div class="job-title">Mekanik Kendaraan Roda Empat</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>Auto Jaya Service Center — Jember</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Jember</span>
                            <span class="job-tag tag-type">Full-time</span>
                            <span class="job-tag tag-field">Otomotif</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 25 Juli 2025 · Sertifikat BNSP nilai plus</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 3,8 Jt<span>per bulan</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

                <div class="job-card reveal" data-bidang="Teknologi" data-tipe="Magang" data-lokasi="Surabaya">
                    <div class="job-logo" style="background:rgba(13,110,253,.1); color:#0d6efd;">GS</div>
                    <div class="job-info">
                        <div class="job-title">Magang — Junior Web Developer</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>GoSolusi Digital — Surabaya</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Surabaya</span>
                            <span class="job-tag tag-type">Magang</span>
                            <span class="job-tag tag-field">Teknologi</span>
                            <span class="job-tag tag-new">Baru</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 5 Agustus 2025 · Durasi 3 bulan</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 1,5 Jt<span>per bulan (uang saku)</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

                <div class="job-card reveal" data-bidang="Kesehatan" data-tipe="Full-time" data-lokasi="Banyuwangi">
                    <div class="job-logo" style="background:rgba(220,53,69,.1); color:#DC3545;">RS</div>
                    <div class="job-info">
                        <div class="job-title">Asisten Apoteker / Farmasi Klinis</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>RSUD Blambangan — Banyuwangi</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Banyuwangi</span>
                            <span class="job-tag tag-type">Full-time</span>
                            <span class="job-tag tag-field">Kesehatan</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 20 Agustus 2025 · Jurusan Farmasi</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 3,2 Jt<span>per bulan</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

                <div class="job-card reveal job-hidden" data-bidang="Retail" data-tipe="Part-time" data-lokasi="Banyuwangi">
                    <div class="job-logo" style="background:rgba(255,193,7,.15); color:#d39e00;">MM</div>
                    <div class="job-info">
                        <div class="job-title">Kasir & Customer Service</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>Minimarket Maju Mundur — Banyuwangi</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Banyuwangi</span>
                            <span class="job-tag tag-type">Part-time</span>
                            <span class="job-tag tag-field">Retail</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 31 Juli 2025 · Shift pagi/sore</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 1,8 Jt<span>per bulan</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

                <div class="job-card reveal job-hidden" data-bidang="Teknologi" data-tipe="Kontrak" data-lokasi="Jakarta">
                    <div class="job-logo" style="background:rgba(13,31,60,.08); color:var(--navy);">IT</div>
                    <div class="job-info">
                        <div class="job-title">IT Support Technician</div>
                        <div class="job-company"><i class="fas fa-building me-1"></i>Indosat Ooredoo Hutchison — Jakarta</div>
                        <div class="job-tags">
                            <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>Jakarta</span>
                            <span class="job-tag tag-type">Kontrak</span>
                            <span class="job-tag tag-field">Teknologi</span>
                        </div>
                        <div class="job-deadline"><i class="fas fa-calendar-alt"></i> Batas lamar: 12 Agustus 2025 · Kontrak 1 tahun</div>
                    </div>
                    <div class="job-action">
                        <div class="job-salary">Rp 5,0 Jt<span>per bulan</span></div>
                        <button class="btn-apply" onclick="applyJob(this)">Lamar Sekarang</button>
                        <a href="lowongan-detail.php" class="btn-apply-outline">Detail</a>
                    </div>
                </div>

            </div><!-- /#jobList -->

            <div class="load-more-wrap reveal">
                <button class="btn-load-more" id="btnLoadMore" onclick="loadMoreJobs()">
                    <i class="fas fa-chevron-down me-2"></i>Tampilkan Lebih Banyak
                </button>
                <div class="job-count-label" id="jobCountLabel">Menampilkan 6 dari 8 lowongan</div>
            </div>
        </div>
    </section>


    <section class="quote-section">
        <div class="container">
            <div class="reveal">
                <div class="quote-mark">"</div>
                <p class="quote-text">
                    Kesuksesan bukan tentang seberapa cepat kamu berlari,
                    tapi seberapa tepat kamu memilih jalur yang benar sejak awal.
                </p>
                <div class="quote-author">— Semangat dari Keluarga Besar SMKN Ihya Ulummudin</div>
            </div>
        </div>
    </section>

    <!-- ══════════════ FOOTER ══════════════ -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-brand">SMKN Ihya Ulummudin</div>
                    <p class="footer-desc">
                        Sekolah Menengah Kejuruan Negeri Ihya Ulummudin Singojuruh, Banyuwangi.
                        Mendidik generasi berkarakter, kompeten, dan siap bersaing.
                    </p>
                    <div class="mt-3">
                        <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1">
                    <div class="footer-heading">Jalur Karir</div>
                    <a href="#jalur" class="footer-link">Bekerja</a>
                    <a href="#jalur" class="footer-link">Kuliah</a>
                    <a href="#jalur" class="footer-link">Wirausaha</a>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="footer-heading">Unduhan</div>
                    <a href="#unduh" class="footer-link">Berkas Kerja</a>
                    <a href="#unduh" class="footer-link">Berkas Kuliah</a>
                    <a href="#unduh" class="footer-link">Berkas Wirausaha</a>
                </div>
                <div class="col-lg-3">
                    <div class="footer-heading">Kontak Sekolah</div>
                    <p style="font-size:.82rem; color:rgba(255,255,255,.5); line-height:1.7;">
                        <i class="fas fa-map-marker-alt me-2" style="color:var(--gold);"></i>
                        Jl. Singojuruh, Banyuwangi, Jawa Timur<br />
                        <i class="fas fa-phone me-2" style="color:var(--gold);"></i>
                        (0333) 000-0000<br />
                        <i class="fas fa-envelope me-2" style="color:var(--gold);"></i>
                        info@smknihyaulummudin.sch.id
                    </p>
                </div>
            </div>
            <hr class="footer-divider" />
            <div class="footer-bottom">
                © 2025 SMKN Ihya Ulummudin Singojuruh · Portal Karir &amp; Masa Depan Siswa ·
                Dibuat dengan <i class="fas fa-heart" style="color:var(--gold);"></i> untuk masa depan kalian
            </div>
        </div>
    </footer>

    <!-- ══════════════ JS ══════════════ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        /* --- Tab switcher --- */
        function switchTab(tab, btn) {
            ['kerja', 'kuliah', 'wirausaha'].forEach(t => {
                document.getElementById('tab-' + t).classList.add('dl-hidden');
            });
            document.querySelectorAll('.dl-tab').forEach(b => b.classList.remove('active'));
            document.getElementById('tab-' + tab).classList.remove('dl-hidden');
            btn.classList.add('active');
        }

        /* --- Download button click (placeholder) --- */
        document.querySelectorAll('.dl-file-card').forEach(card => {
            card.addEventListener('click', () => {
                const name = card.querySelector('.dl-file-name').textContent;
                const btn = card.querySelector('.dl-file-btn');
                btn.innerHTML = '<i class="fas fa-check"></i> Berhasil';
                btn.style.background = 'rgba(34,145,95,.25)';
                btn.style.color = '#22915F';
                btn.style.borderColor = 'rgba(34,145,95,.4)';
                setTimeout(() => {
                    btn.innerHTML = '<i class="fas fa-download"></i> Unduh';
                    btn.style.background = '';
                    btn.style.color = '';
                    btn.style.borderColor = '';
                }, 2000);
            });
        });

        /* --- Job filtering --- */
        function filterJobs() {
            const search = document.getElementById('jobSearch').value.toLowerCase();
            const bidang = document.getElementById('filterBidang').value;
            const tipe = document.getElementById('filterTipe').value;
            const lokasi = document.getElementById('filterLokasi').value;
            let visible = 0,
                total = 0;
            document.querySelectorAll('#jobList .job-card').forEach(card => {
                const title = card.querySelector('.job-title').textContent.toLowerCase();
                const company = card.querySelector('.job-company').textContent.toLowerCase();
                const mBidang = card.dataset.bidang || '';
                const mTipe = card.dataset.tipe || '';
                const mLokasi = card.dataset.lokasi || '';
                const matchSearch = !search || title.includes(search) || company.includes(search);
                const matchBidang = !bidang || mBidang === bidang;
                const matchTipe = !tipe || mTipe === tipe;
                const matchLokasi = !lokasi || mLokasi === lokasi;
                const show = matchSearch && matchBidang && matchTipe && matchLokasi;
                card.style.display = show ? '' : 'none';
                if (show) visible++;
                total++;
            });
            document.getElementById('jobCountLabel').textContent =
                `Menampilkan ${visible} dari ${total} lowongan`;
        }

        /* --- Load more jobs --- */
        let allShown = false;

        function loadMoreJobs() {
            if (!allShown) {
                document.querySelectorAll('#jobList .job-hidden').forEach(c => {
                    c.classList.remove('job-hidden');
                    c.style.display = '';
                });
                allShown = true;
                document.getElementById('btnLoadMore').innerHTML = '<a style="color:black;text-decoration:none;" href="semua-lowongan.php"><i class="fas fa-check me-2"></i>Semua Lowongan Ditampilkan</a>';
                document.getElementById('btnLoadMore').style.borderColor = 'var(--gold)';
                document.getElementById('jobCountLabel').textContent = 'Menampilkan 8 dari 8 lowongan';
            }
        }

        /* --- Apply job --- */
        function applyJob(btn) {
            const card = btn.closest('.job-card');
            const title = card.querySelector('.job-title').textContent;
            btn.textContent = '✓ Sudah Dilamar';
            btn.style.background = 'linear-gradient(135deg,var(--green),var(--green-light))';
            btn.disabled = true;
        }


        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.12
        });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>

</html>