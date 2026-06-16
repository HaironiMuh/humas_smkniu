<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Semua Lowongan Kerja — SMKN Ihya Ulummudin</title>
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
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Playfair Display', serif;
        }

        /* NAVBAR */
        .navbar-custom {
            background: rgba(13, 31, 60, .97) !important;
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(201, 168, 76, .2);
        }

        .navbar-brand-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: var(--gold) !important;
            font-weight: 700;
        }

        .navbar-brand-sub {
            font-size: .68rem;
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
            padding: 8px 14px !important;
            transition: color .2s;
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

        .toggler-icon {
            display: block;
            width: 22px;
            height: 2px;
            background: rgba(255, 255, 255, .7);
            border-radius: 2px;
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

        /* PAGE HERO */
        .page-hero {
            background: linear-gradient(160deg, var(--navy) 0%, var(--navy-mid) 100%);
            padding: 120px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 50% 60% at 80% 50%, rgba(201, 168, 76, .1) 0%, transparent 70%);
        }

        .page-hero-grid {
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(201, 168, 76, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(201, 168, 76, .04) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .breadcrumb-custom a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: .82rem;
        }

        .breadcrumb-custom a:hover {
            color: var(--gold);
        }

        .breadcrumb-custom span {
            color: var(--text-muted);
            font-size: .82rem;
            margin: 0 8px;
        }

        .breadcrumb-custom .current {
            color: var(--gold-light);
            font-size: .82rem;
        }

        /* MAIN CONTENT */
        .main-content {
            padding: 48px 0 80px;
        }

        /* FILTER SIDEBAR */
        .filter-sidebar {
            background: var(--white);
            border-radius: 20px;
            padding: 28px 24px;
            border: 1px solid rgba(13, 31, 60, .07);
            position: sticky;
            top: 90px;
        }

        .filter-sidebar-title {
            font-size: 1rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 20px;
            padding-bottom: 14px;
            border-bottom: 2px solid var(--cream);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-group {
            margin-bottom: 22px;
        }

        .filter-group-label {
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 12px;
        }

        .filter-chip-group {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .filter-chip {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: .78rem;
            font-weight: 600;
            border: 1.5px solid rgba(13, 31, 60, .12);
            background: transparent;
            color: #5A6A85;
            cursor: pointer;
            transition: all .2s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .filter-chip.active,
        .filter-chip:hover {
            background: var(--navy);
            color: var(--white);
            border-color: var(--navy);
        }

        .filter-chip.active.chip-full {
            background: var(--green);
            border-color: var(--green);
        }

        .filter-chip.active.chip-part {
            background: var(--purple);
            border-color: var(--purple);
        }

        .filter-chip.active.chip-mag {
            background: #d39e00;
            border-color: #d39e00;
            color: var(--white);
        }

        .filter-chip.active.chip-kon {
            background: #0d6efd;
            border-color: #0d6efd;
        }

        .range-slider {
            width: 100%;
            accent-color: var(--gold);
        }

        .range-label {
            display: flex;
            justify-content: space-between;
            font-size: .78rem;
            color: var(--text-muted);
            margin-top: 6px;
        }

        .btn-reset-filter {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1.5px solid rgba(13, 31, 60, .15);
            background: transparent;
            color: var(--navy);
            font-size: .85rem;
            font-weight: 600;
            cursor: pointer;
            transition: all .2s;
            font-family: 'Plus Jakarta Sans', sans-serif;
            margin-top: 8px;
        }

        .btn-reset-filter:hover {
            background: var(--navy);
            color: var(--white);
        }

        /* SEARCH & SORT BAR */
        .topbar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
            background: var(--white);
            border-radius: 16px;
            padding: 16px 20px;
            border: 1px solid rgba(13, 31, 60, .07);
            margin-bottom: 20px;
        }

        .search-wrap {
            position: relative;
            flex: 1;
            min-width: 200px;
        }

        .search-wrap i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: .85rem;
        }

        .topbar-search {
            width: 100%;
            background: var(--cream);
            border: 1.5px solid rgba(13, 31, 60, .1);
            border-radius: 10px;
            padding: 10px 16px 10px 38px;
            font-size: .87rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--navy);
            outline: none;
            transition: border-color .2s;
        }

        .topbar-search:focus {
            border-color: var(--gold);
        }

        .sort-select {
            background: var(--cream);
            border: 1.5px solid rgba(13, 31, 60, .1);
            border-radius: 10px;
            padding: 10px 34px 10px 14px;
            font-size: .85rem;
            color: var(--navy);
            outline: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%238A9BBF' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
        }

        .result-count {
            font-size: .83rem;
            color: var(--text-muted);
            margin-left: auto;
            white-space: nowrap;
        }

        .view-toggle {
            display: flex;
            gap: 4px;
        }

        .view-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            border: 1.5px solid rgba(13, 31, 60, .12);
            background: transparent;
            color: var(--text-muted);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .85rem;
            transition: all .2s;
        }

        .view-btn.active {
            background: var(--navy);
            color: var(--white);
            border-color: var(--navy);
        }

        /* JOB CARDS */
        .job-card {
            background: var(--white);
            border: 1px solid rgba(13, 31, 60, .07);
            border-radius: 18px;
            padding: 22px 24px;
            display: flex;
            gap: 16px;
            align-items: flex-start;
            transition: transform .25s, box-shadow .25s, border-color .25s;
            margin-bottom: 14px;
            position: relative;
            overflow: hidden;
        }

        .job-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: transparent;
            transition: background .2s;
            border-radius: 0 0 0 18px;
        }

        .job-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(13, 31, 60, .1);
            border-color: rgba(201, 168, 76, .25);
        }

        .job-card:hover::before {
            background: var(--gold);
        }

        .job-logo {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            flex-shrink: 0;
        }

        .job-info {
            flex: 1;
            min-width: 0;
        }

        .job-title {
            font-size: .95rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 2px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .job-company {
            font-size: .8rem;
            color: var(--text-muted);
            margin-bottom: 9px;
        }

        .job-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-bottom: 9px;
        }

        .job-tag {
            font-size: .7rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 20px;
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
            font-size: .73rem;
            color: var(--text-muted);
        }

        .job-action {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 8px;
            flex-shrink: 0;
        }

        .job-salary {
            font-family: 'Playfair Display', serif;
            font-size: .95rem;
            font-weight: 700;
            color: var(--green);
        }

        .job-salary span {
            font-size: .7rem;
            color: var(--text-muted);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 400;
            display: block;
            text-align: right;
        }

        .btn-detail {
            background: linear-gradient(135deg, var(--navy), var(--navy-light));
            color: var(--white);
            border: none;
            border-radius: 9px;
            padding: 8px 18px;
            font-size: .8rem;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-decoration: none;
            display: inline-block;
            transition: opacity .2s;
        }

        .btn-detail:hover {
            opacity: .85;
            color: var(--white);
        }

        .btn-save {
            background: transparent;
            border: 1.5px solid rgba(13, 31, 60, .15);
            border-radius: 9px;
            padding: 7px 14px;
            font-size: .78rem;
            font-weight: 600;
            cursor: pointer;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-muted);
            transition: all .2s;
        }

        .btn-save:hover {
            border-color: var(--gold);
            color: var(--gold);
        }

        .btn-save.saved {
            border-color: var(--gold);
            color: var(--gold);
            background: rgba(201, 168, 76, .08);
        }

        /* GRID VIEW */
        #jobContainer.grid-view {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        #jobContainer.grid-view .job-card {
            flex-direction: column;
            margin-bottom: 0;
        }

        #jobContainer.grid-view .job-action {
            flex-direction: row;
            align-items: center;
            width: 100%;
            justify-content: space-between;
            margin-top: 8px;
        }

        @media (max-width:767px) {
            #jobContainer.grid-view {
                grid-template-columns: 1fr;
            }
        }

        /* PAGINATION */
        .pagination-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            margin-top: 36px;
        }

        .page-btn {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            border: 1.5px solid rgba(13, 31, 60, .12);
            background: var(--white);
            color: var(--navy);
            font-size: .85rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: all .2s;
        }

        .page-btn:hover {
            border-color: var(--gold);
        }

        .page-btn.active {
            background: var(--navy);
            color: var(--white);
            border-color: var(--navy);
        }

        .page-btn:disabled {
            opacity: .4;
            cursor: not-allowed;
        }

        /* NO RESULT */
        .no-result {
            text-align: center;
            padding: 60px 20px;
        }

        .no-result i {
            font-size: 3rem;
            color: rgba(13, 31, 60, .15);
            margin-bottom: 16px;
            display: block;
        }

        .no-result h4 {
            color: var(--navy);
            margin-bottom: 8px;
        }

        .no-result p {
            color: var(--text-muted);
            font-size: .88rem;
        }

        /* FOOTER */
        .footer {
            background: var(--navy);
            padding: 50px 0 24px;
        }

        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            color: var(--gold);
            font-weight: 700;
            margin-bottom: 8px;
        }

        .footer-desc {
            font-size: .82rem;
            color: rgba(255, 255, 255, .5);
            line-height: 1.7;
            max-width: 280px;
        }

        .footer-divider {
            border-color: rgba(255, 255, 255, .08);
            margin: 36px 0 18px;
        }

        .footer-bottom {
            font-size: .77rem;
            color: rgba(255, 255, 255, .3);
            text-align: center;
        }

        .footer-heading {
            color: var(--white);
            font-size: .85rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .footer-link {
            display: block;
            color: rgba(255, 255, 255, .5);
            font-size: .82rem;
            text-decoration: none;
            margin-bottom: 8px;
            transition: color .2s;
        }

        .footer-link:hover {
            color: var(--gold);
        }

        .social-btn {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .07);
            border: 1px solid rgba(255, 255, 255, .1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, .5);
            font-size: .82rem;
            margin-right: 6px;
            text-decoration: none;
            transition: all .2s;
        }

        .social-btn:hover {
            background: var(--gold);
            color: var(--navy);
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand text-decoration-none" href="karir-smkn-ihya.html">
                <span class="navbar-brand-text">SMKN Ihya Ulummudin</span>
                <span class="navbar-brand-sub">Singojuruh · Banyuwangi</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="toggler-icon"></span><span class="toggler-icon"></span><span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="karir-smkn-ihya.html">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle" href="#" data-bs-toggle="dropdown">Jalur Karir</a>
                        <ul class="dropdown-menu dropdown-menu-custom">
                            <li><a class="dropdown-item-custom" href="karir-smkn-ihya.html#jalur">
                                    <div class="dd-icon dd-work"><i class="fas fa-briefcase"></i></div>
                                    <div>
                                        <div class="dd-title">Bekerja</div>
                                        <div class="dd-desc">Terjun ke dunia industri</div>
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item-custom" href="karir-smkn-ihya.html#jalur">
                                    <div class="dd-icon dd-college"><i class="fas fa-graduation-cap"></i></div>
                                    <div>
                                        <div class="dd-title">Kuliah</div>
                                        <div class="dd-desc">Lanjut ke perguruan tinggi</div>
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item-custom" href="karir-smkn-ihya.html#jalur">
                                    <div class="dd-icon dd-biz"><i class="fas fa-rocket"></i></div>
                                    <div>
                                        <div class="dd-title">Wirausaha</div>
                                        <div class="dd-desc">Bangun bisnis sendiri</div>
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="semua-lowongan.html" style="color:var(--gold)!important;">Lowongan Kerja</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="tentang.html">Tentang</a></li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0"><a class="nav-link nav-link-custom btn-nav" href="karir-smkn-ihya.html#jalur">Mulai Sekarang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="page-hero-grid"></div>
        <div class="container position-relative" style="z-index:2;">
            <div class="breadcrumb-custom mb-3">
                <a href="karir-smkn-ihya.html">Beranda</a>
                <span>›</span>
                <span class="current">Semua Lowongan Kerja</span>
            </div>
            <h1 style="color:#fff; font-size:clamp(1.8rem,4vw,3rem); font-weight:900; margin-bottom:12px;">
                Semua <span style="color:var(--gold);">Lowongan Kerja</span>
            </h1>
            <p style="color:rgba(255,255,255,.65); font-size:.95rem; max-width:520px; line-height:1.75;">
                Jelajahi seluruh peluang kerja yang cocok untuk lulusan SMK. Filter berdasarkan bidang, lokasi, atau tipe pekerjaan.
            </p>
            <div style="display:flex; gap:20px; margin-top:24px; flex-wrap:wrap;">
                <div style="background:rgba(255,255,255,.07); border:1px solid rgba(201,168,76,.2); border-radius:12px; padding:14px 20px; text-align:center;">
                    <div style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:900; color:var(--gold);" id="heroCount">24</div>
                    <div style="font-size:.73rem; color:rgba(255,255,255,.5); text-transform:uppercase; letter-spacing:.06em;">Total Lowongan</div>
                </div>
                <div style="background:rgba(255,255,255,.07); border:1px solid rgba(201,168,76,.2); border-radius:12px; padding:14px 20px; text-align:center;">
                    <div style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:900; color:var(--gold);">12</div>
                    <div style="font-size:.73rem; color:rgba(255,255,255,.5); text-transform:uppercase; letter-spacing:.06em;">Kota / Wilayah</div>
                </div>
                <div style="background:rgba(255,255,255,.07); border:1px solid rgba(201,168,76,.2); border-radius:12px; padding:14px 20px; text-align:center;">
                    <div style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:900; color:var(--gold);">8</div>
                    <div style="font-size:.73rem; color:rgba(255,255,255,.5); text-transform:uppercase; letter-spacing:.06em;">Bidang Industri</div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="main-content">
        <div class="container">
            <div class="row g-4">

                <!-- SIDEBAR FILTER -->
                <div class="col-lg-3">
                    <div class="filter-sidebar">
                        <div class="filter-sidebar-title"><i class="fas fa-sliders-h" style="color:var(--gold);"></i> Filter Lowongan</div>

                        <div class="filter-group">
                            <div class="filter-group-label">Tipe Pekerjaan</div>
                            <div class="filter-chip-group">
                                <button class="filter-chip chip-all active" onclick="toggleChip(this,'tipe','')">Semua</button>
                                <button class="filter-chip chip-full" onclick="toggleChip(this,'tipe','Full-time')">Full-time</button>
                                <button class="filter-chip chip-part" onclick="toggleChip(this,'tipe','Part-time')">Part-time</button>
                                <button class="filter-chip chip-mag" onclick="toggleChip(this,'tipe','Magang')">Magang</button>
                                <button class="filter-chip chip-kon" onclick="toggleChip(this,'tipe','Kontrak')">Kontrak</button>
                            </div>
                        </div>

                        <div class="filter-group">
                            <div class="filter-group-label">Bidang Industri</div>
                            <div class="filter-chip-group">
                                <button class="filter-chip active" onclick="toggleChip(this,'bidang','')">Semua</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Teknologi')">Teknologi</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Perhotelan')">Perhotelan</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Kuliner')">Kuliner</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Otomotif')">Otomotif</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Kesehatan')">Kesehatan</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Retail')">Retail</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Keuangan')">Keuangan</button>
                                <button class="filter-chip" onclick="toggleChip(this,'bidang','Pendidikan')">Pendidikan</button>
                            </div>
                        </div>

                        <div class="filter-group">
                            <div class="filter-group-label">Lokasi</div>
                            <div class="filter-chip-group">
                                <button class="filter-chip active" onclick="toggleChip(this,'lokasi','')">Semua</button>
                                <button class="filter-chip" onclick="toggleChip(this,'lokasi','Banyuwangi')">Banyuwangi</button>
                                <button class="filter-chip" onclick="toggleChip(this,'lokasi','Jember')">Jember</button>
                                <button class="filter-chip" onclick="toggleChip(this,'lokasi','Bali')">Bali</button>
                                <button class="filter-chip" onclick="toggleChip(this,'lokasi','Surabaya')">Surabaya</button>
                                <button class="filter-chip" onclick="toggleChip(this,'lokasi','Jakarta')">Jakarta</button>
                            </div>
                        </div>

                        <div class="filter-group">
                            <div class="filter-group-label">Gaji Minimum (Juta)</div>
                            <input type="range" class="range-slider" id="salaryRange" min="1" max="10" value="1" oninput="updateSalary(this)">
                            <div class="range-label">
                                <span>Rp 1 Jt</span>
                                <span id="salaryVal" style="color:var(--gold); font-weight:700;">Semua Gaji</span>
                                <span>Rp 10 Jt</span>
                            </div>
                        </div>

                        <button class="btn-reset-filter" onclick="resetFilters()">
                            <i class="fas fa-undo me-2"></i>Reset Semua Filter
                        </button>
                    </div>
                </div>

                <!-- JOB LIST -->
                <div class="col-lg-9">
                    <!-- Top Bar -->
                    <div class="topbar">
                        <div class="search-wrap">
                            <i class="fas fa-search"></i>
                            <input type="text" class="topbar-search" id="mainSearch" placeholder="Cari posisi, perusahaan, atau kota..." oninput="applyFilters()">
                        </div>
                        <select class="sort-select" id="sortBy" onchange="applyFilters()">
                            <option value="newest">Terbaru</option>
                            <option value="salary_high">Gaji Tertinggi</option>
                            <option value="salary_low">Gaji Terendah</option>
                            <option value="az">A – Z</option>
                        </select>
                        <span class="result-count" id="resultCount">24 lowongan ditemukan</span>
                        <div class="view-toggle">
                            <button class="view-btn active" id="listBtn" onclick="setView('list')" title="List"><i class="fas fa-list"></i></button>
                            <button class="view-btn" id="gridBtn" onclick="setView('grid')" title="Grid"><i class="fas fa-th-large"></i></button>
                        </div>
                    </div>

                    <!-- Job Cards Container -->
                    <div id="jobContainer">
                        <!-- Cards injected by JS -->
                    </div>

                    <!-- No Result -->
                    <div class="no-result" id="noResult" style="display:none;">
                        <i class="fas fa-search-minus"></i>
                        <h4>Lowongan Tidak Ditemukan</h4>
                        <p>Coba ubah kata kunci atau filter untuk melihat hasil lainnya.</p>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrap" id="pagination"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-brand">SMKN Ihya Ulummudin</div>
                    <p class="footer-desc">Portal Karir resmi SMKN Ihya Ulummudin Singojuruh, Banyuwangi.</p>
                    <div class="mt-3">
                        <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1">
                    <div class="footer-heading">Navigasi</div>
                    <a href="karir-smkn-ihya.html" class="footer-link">Beranda</a>
                    <a href="semua-lowongan.html" class="footer-link">Lowongan Kerja</a>
                    <a href="tentang.html" class="footer-link">Tentang</a>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="footer-heading">Jalur Karir</div>
                    <a href="karir-smkn-ihya.html#jalur" class="footer-link">Bekerja</a>
                    <a href="karir-smkn-ihya.html#jalur" class="footer-link">Kuliah</a>
                    <a href="karir-smkn-ihya.html#jalur" class="footer-link">Wirausaha</a>
                </div>
                <div class="col-lg-3">
                    <div class="footer-heading">Kontak</div>
                    <p style="font-size:.8rem; color:rgba(255,255,255,.5); line-height:1.8;">
                        <i class="fas fa-map-marker-alt me-2" style="color:var(--gold);"></i>Jl. Singojuruh, Banyuwangi<br>
                        <i class="fas fa-envelope me-2" style="color:var(--gold);"></i>info@smknihyaulummudin.sch.id
                    </p>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="footer-bottom">© 2025 SMKN Ihya Ulummudin Singojuruh · Portal Karir &amp; Masa Depan Siswa</div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // ── DATA LOWONGAN ──
        const jobs = [{
                id: 1,
                title: 'Teknisi Komputer & Jaringan',
                company: 'PT Telkom Indonesia',
                loc: 'Banyuwangi',
                tipe: 'Full-time',
                bidang: 'Teknologi',
                salary: 3.5,
                logo: 'PT',
                logoColor: 'rgba(13,31,60,.08)',
                logoTxt: 'var(--navy)',
                deadline: '30 Juli 2025',
                syarat: 'Min. SMA/SMK sederajat',
                isNew: true
            },
            {
                id: 2,
                title: 'Front Office Staff / Resepsionis',
                company: 'Bali Hai Resort & Spa',
                loc: 'Bali',
                tipe: 'Full-time',
                bidang: 'Perhotelan',
                salary: 4.2,
                logo: 'BH',
                logoColor: 'rgba(26,107,74,.1)',
                logoTxt: 'var(--green)',
                deadline: '15 Agustus 2025',
                syarat: 'Bisa bahasa Inggris',
                isNew: false
            },
            {
                id: 3,
                title: 'Chef de Partie / Juru Masak',
                company: 'Dapur Gourmet Banyuwangi',
                loc: 'Banyuwangi',
                tipe: 'Full-time',
                bidang: 'Kuliner',
                salary: 3.0,
                logo: 'DG',
                logoColor: 'rgba(201,168,76,.15)',
                logoTxt: '#9A7030',
                deadline: '10 Agustus 2025',
                syarat: 'Pengalaman diutamakan',
                isNew: true
            },
            {
                id: 4,
                title: 'Mekanik Kendaraan Roda Empat',
                company: 'Auto Jaya Service Center',
                loc: 'Jember',
                tipe: 'Full-time',
                bidang: 'Otomotif',
                salary: 3.8,
                logo: 'AJ',
                logoColor: 'rgba(74,44,138,.1)',
                logoTxt: 'var(--purple)',
                deadline: '25 Juli 2025',
                syarat: 'Sertifikat BNSP nilai plus',
                isNew: false
            },
            {
                id: 5,
                title: 'Magang — Junior Web Developer',
                company: 'GoSolusi Digital',
                loc: 'Surabaya',
                tipe: 'Magang',
                bidang: 'Teknologi',
                salary: 1.5,
                logo: 'GS',
                logoColor: 'rgba(13,110,253,.1)',
                logoTxt: '#0d6efd',
                deadline: '5 Agustus 2025',
                syarat: 'Durasi 3 bulan',
                isNew: true
            },
            {
                id: 6,
                title: 'Asisten Apoteker / Farmasi Klinis',
                company: 'RSUD Blambangan',
                loc: 'Banyuwangi',
                tipe: 'Full-time',
                bidang: 'Kesehatan',
                salary: 3.2,
                logo: 'RS',
                logoColor: 'rgba(220,53,69,.1)',
                logoTxt: '#DC3545',
                deadline: '20 Agustus 2025',
                syarat: 'Jurusan Farmasi',
                isNew: false
            },
            {
                id: 7,
                title: 'Kasir & Customer Service',
                company: 'Minimarket Maju Mundur',
                loc: 'Banyuwangi',
                tipe: 'Part-time',
                bidang: 'Retail',
                salary: 1.8,
                logo: 'MM',
                logoColor: 'rgba(255,193,7,.15)',
                logoTxt: '#d39e00',
                deadline: '31 Juli 2025',
                syarat: 'Shift pagi/sore',
                isNew: false
            },
            {
                id: 8,
                title: 'IT Support Technician',
                company: 'Indosat Ooredoo Hutchison',
                loc: 'Jakarta',
                tipe: 'Kontrak',
                bidang: 'Teknologi',
                salary: 5.0,
                logo: 'IT',
                logoColor: 'rgba(13,31,60,.08)',
                logoTxt: 'var(--navy)',
                deadline: '12 Agustus 2025',
                syarat: 'Kontrak 1 tahun',
                isNew: false
            },
            {
                id: 9,
                title: 'Staf Administrasi & Keuangan',
                company: 'Koperasi Simpan Pinjam Sejahtera',
                loc: 'Banyuwangi',
                tipe: 'Full-time',
                bidang: 'Keuangan',
                salary: 2.8,
                logo: 'KS',
                logoColor: 'rgba(201,168,76,.12)',
                logoTxt: '#9A7030',
                deadline: '18 Agustus 2025',
                syarat: 'Jurusan Akuntansi/Perbankan',
                isNew: true
            },
            {
                id: 10,
                title: 'Operator Mesin Produksi',
                company: 'PT Sido Muncul Jember',
                loc: 'Jember',
                tipe: 'Full-time',
                bidang: 'Teknologi',
                salary: 3.3,
                logo: 'SM',
                logoColor: 'rgba(26,107,74,.1)',
                logoTxt: 'var(--green)',
                deadline: '22 Agustus 2025',
                syarat: 'Disiplin & teliti',
                isNew: false
            },
            {
                id: 11,
                title: 'Pramusaji & Barista',
                company: 'Kopi Nusantara Banyuwangi',
                loc: 'Banyuwangi',
                tipe: 'Part-time',
                bidang: 'Kuliner',
                salary: 2.0,
                logo: 'KN',
                logoColor: 'rgba(201,168,76,.15)',
                logoTxt: '#9A7030',
                deadline: '28 Juli 2025',
                syarat: 'Ramah & komunikatif',
                isNew: true
            },
            {
                id: 12,
                title: 'Sales & Marketing Executive',
                company: 'PT Asuransi Jiwa Bersama',
                loc: 'Surabaya',
                tipe: 'Full-time',
                bidang: 'Keuangan',
                salary: 4.5,
                logo: 'AJ',
                logoColor: 'rgba(74,44,138,.1)',
                logoTxt: 'var(--purple)',
                deadline: '30 Agustus 2025',
                syarat: 'Target oriented',
                isNew: false
            },
            {
                id: 13,
                title: 'Teknisi Listrik & Elektronika',
                company: 'PLN UP3 Banyuwangi',
                loc: 'Banyuwangi',
                tipe: 'Kontrak',
                bidang: 'Teknologi',
                salary: 4.0,
                logo: 'PL',
                logoColor: 'rgba(255,193,7,.15)',
                logoTxt: '#d39e00',
                deadline: '15 Agustus 2025',
                syarat: 'Jurusan TITL / EI',
                isNew: true
            },
            {
                id: 14,
                title: 'Guru / Tentor Privat',
                company: 'Bimbel Prestasi Gemilang',
                loc: 'Banyuwangi',
                tipe: 'Part-time',
                bidang: 'Pendidikan',
                salary: 1.5,
                logo: 'PG',
                logoColor: 'rgba(13,31,60,.08)',
                logoTxt: 'var(--navy)',
                deadline: '10 September 2025',
                syarat: 'IPK min 3.0 / berpengalaman',
                isNew: false
            },
            {
                id: 15,
                title: 'Driver & Kurir Logistik',
                company: 'JNE Express Banyuwangi',
                loc: 'Banyuwangi',
                tipe: 'Full-time',
                bidang: 'Retail',
                salary: 3.0,
                logo: 'JN',
                logoColor: 'rgba(220,53,69,.1)',
                logoTxt: '#DC3545',
                deadline: '5 September 2025',
                syarat: 'Punya SIM A/C',
                isNew: false
            },
            {
                id: 16,
                title: 'Graphic Designer & Content Creator',
                company: 'Kreatif Studio Bali',
                loc: 'Bali',
                tipe: 'Full-time',
                bidang: 'Teknologi',
                salary: 4.5,
                logo: 'KS',
                logoColor: 'rgba(74,44,138,.1)',
                logoTxt: 'var(--purple)',
                deadline: '20 Agustus 2025',
                syarat: 'Portfolio kreatif',
                isNew: true
            },
            {
                id: 17,
                title: 'Security / Satuan Pengamanan',
                company: 'PT Securindo Jember',
                loc: 'Jember',
                tipe: 'Full-time',
                bidang: 'Retail',
                salary: 3.2,
                logo: 'SC',
                logoColor: 'rgba(13,31,60,.08)',
                logoTxt: 'var(--navy)',
                deadline: '25 Agustus 2025',
                syarat: 'Fisik sehat, min 170cm',
                isNew: false
            },
            {
                id: 18,
                title: 'Housekeeping Supervisor',
                company: 'The Balian Hotel Bali',
                loc: 'Bali',
                tipe: 'Full-time',
                bidang: 'Perhotelan',
                salary: 4.8,
                logo: 'TB',
                logoColor: 'rgba(26,107,74,.1)',
                logoTxt: 'var(--green)',
                deadline: '12 September 2025',
                syarat: 'Pengalaman 1 tahun',
                isNew: false
            },
            {
                id: 19,
                title: 'Data Entry & Administrasi',
                company: 'Kantor Pajak Pratama Banyuwangi',
                loc: 'Banyuwangi',
                tipe: 'Kontrak',
                bidang: 'Keuangan',
                salary: 2.5,
                logo: 'KP',
                logoColor: 'rgba(201,168,76,.12)',
                logoTxt: '#9A7030',
                deadline: '31 Agustus 2025',
                syarat: 'Teliti, cekatan, MS Office',
                isNew: true
            },
            {
                id: 20,
                title: 'Mekanik Sepeda Motor',
                company: 'Honda Wahana Jember',
                loc: 'Jember',
                tipe: 'Full-time',
                bidang: 'Otomotif',
                salary: 3.5,
                logo: 'HW',
                logoColor: 'rgba(220,53,69,.1)',
                logoTxt: '#DC3545',
                deadline: '7 September 2025',
                syarat: 'Sertifikasi AHM',
                isNew: false
            },
            {
                id: 21,
                title: 'Magang — Administrasi Rumah Sakit',
                company: 'RS Fatimah Banyuwangi',
                loc: 'Banyuwangi',
                tipe: 'Magang',
                bidang: 'Kesehatan',
                salary: 1.2,
                logo: 'RF',
                logoColor: 'rgba(220,53,69,.08)',
                logoTxt: '#DC3545',
                deadline: '20 September 2025',
                syarat: 'Jurusan Adm. Kesehatan',
                isNew: true
            },
            {
                id: 22,
                title: 'Baker & Pastry Chef',
                company: 'Breadtalk Surabaya',
                loc: 'Surabaya',
                tipe: 'Full-time',
                bidang: 'Kuliner',
                salary: 3.5,
                logo: 'BT',
                logoColor: 'rgba(201,168,76,.15)',
                logoTxt: '#9A7030',
                deadline: '15 September 2025',
                syarat: 'Pengalaman bakery',
                isNew: false
            },
            {
                id: 23,
                title: 'Guru Komputer SD/SMP',
                company: 'Yayasan Pendidikan Nusantara',
                loc: 'Banyuwangi',
                tipe: 'Full-time',
                bidang: 'Pendidikan',
                salary: 3.0,
                logo: 'YP',
                logoColor: 'rgba(13,31,60,.08)',
                logoTxt: 'var(--navy)',
                deadline: '30 September 2025',
                syarat: 'Jurusan TKJ / RPL',
                isNew: false
            },
            {
                id: 24,
                title: 'Network Engineer Junior',
                company: 'Biznet Networks Surabaya',
                loc: 'Surabaya',
                tipe: 'Full-time',
                bidang: 'Teknologi',
                salary: 6.0,
                logo: 'BN',
                logoColor: 'rgba(13,110,253,.1)',
                logoTxt: '#0d6efd',
                deadline: '10 Oktober 2025',
                syarat: 'Cisco CCNA diutamakan',
                isNew: true
            },
        ];

        // ── STATE ──
        let filters = {
            tipe: '',
            bidang: '',
            lokasi: '',
            salary: 1,
            search: ''
        };
        let currentPage = 1;
        const perPage = 8;
        let currentView = 'list';

        // ── FILTER CHIPS ──
        function toggleChip(el, key, val) {
            const group = el.parentElement;
            group.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
            filters[key] = val;
            currentPage = 1;
            applyFilters();
        }

        function updateSalary(el) {
            const v = parseFloat(el.value);
            filters.salary = v;
            document.getElementById('salaryVal').textContent = v === 1 ? 'Semua Gaji' : `≥ Rp ${v} Jt`;
            applyFilters();
        }

        function resetFilters() {
            filters = {
                tipe: '',
                bidang: '',
                lokasi: '',
                salary: 1,
                search: ''
            };
            document.getElementById('mainSearch').value = '';
            document.getElementById('salaryRange').value = 1;
            document.getElementById('salaryVal').textContent = 'Semua Gaji';
            document.querySelectorAll('.filter-chip').forEach(c => {
                c.classList.remove('active');
                if (c.textContent.trim() === 'Semua') c.classList.add('active');
            });
            currentPage = 1;
            applyFilters();
        }

        // ── MAIN FILTER + RENDER ──
        function applyFilters() {
            filters.search = document.getElementById('mainSearch').value.toLowerCase();
            const sort = document.getElementById('sortBy').value;

            let result = jobs.filter(j => {
                const s = filters.search;
                const matchSearch = !s || j.title.toLowerCase().includes(s) || j.company.toLowerCase().includes(s) || j.loc.toLowerCase().includes(s);
                return matchSearch &&
                    (!filters.tipe || j.tipe === filters.tipe) &&
                    (!filters.bidang || j.bidang === filters.bidang) &&
                    (!filters.lokasi || j.loc === filters.lokasi) &&
                    (filters.salary <= 1 || j.salary >= filters.salary);
            });

            if (sort === 'salary_high') result.sort((a, b) => b.salary - a.salary);
            else if (sort === 'salary_low') result.sort((a, b) => a.salary - b.salary);
            else if (sort === 'az') result.sort((a, b) => a.title.localeCompare(b.title));

            renderJobs(result);
        }

        function renderJobs(data) {
            const container = document.getElementById('jobContainer');
            const noResult = document.getElementById('noResult');
            document.getElementById('resultCount').textContent = `${data.length} lowongan ditemukan`;

            if (data.length === 0) {
                container.innerHTML = '';
                noResult.style.display = 'block';
                document.getElementById('pagination').innerHTML = '';
                return;
            }
            noResult.style.display = 'none';

            const total = Math.ceil(data.length / perPage);
            if (currentPage > total) currentPage = 1;
            const pageData = data.slice((currentPage - 1) * perPage, currentPage * perPage);

            container.innerHTML = pageData.map(j => `
    <div class="job-card">
      <div class="job-logo" style="background:${j.logoColor}; color:${j.logoTxt};">${j.logo}</div>
      <div class="job-info">
        <div class="job-title">${j.title}</div>
        <div class="job-company"><i class="fas fa-building me-1"></i>${j.company}</div>
        <div class="job-tags">
          <span class="job-tag tag-loc"><i class="fas fa-map-marker-alt me-1"></i>${j.loc}</span>
          <span class="job-tag tag-type">${j.tipe}</span>
          <span class="job-tag tag-field">${j.bidang}</span>
          ${j.isNew ? '<span class="job-tag tag-new">Baru</span>' : ''}
        </div>
        <div class="job-deadline"><i class="fas fa-calendar-alt me-1"></i>Deadline: ${j.deadline} · ${j.syarat}</div>
      </div>
      <div class="job-action">
        <div class="job-salary">Rp ${j.salary.toFixed(1).replace('.',',')} Jt<span>per bulan</span></div>
        <a href="lowongan-detail.html?id=${j.id}" class="btn-detail">Lihat Detail</a>
        <button class="btn-save" onclick="toggleSave(this)"><i class="far fa-bookmark me-1"></i>Simpan</button>
      </div>
    </div>
  `).join('');

            if (currentView === 'grid') container.classList.add('grid-view');
            else container.classList.remove('grid-view');

            renderPagination(total, data);
        }

        function renderPagination(total, data) {
            const pg = document.getElementById('pagination');
            if (total <= 1) {
                pg.innerHTML = '';
                return;
            }
            let html = `<button class="page-btn" onclick="goPage(${currentPage-1},event)" ${currentPage===1?'disabled':''}><i class="fas fa-chevron-left"></i></button>`;
            for (let i = 1; i <= total; i++) {
                html += `<button class="page-btn ${i===currentPage?'active':''}" onclick="goPage(${i},event)">${i}</button>`;
            }
            html += `<button class="page-btn" onclick="goPage(${currentPage+1},event)" ${currentPage===total?'disabled':''}><i class="fas fa-chevron-right"></i></button>`;
            pg.innerHTML = html;
        }

        function goPage(p, e) {
            e.preventDefault();
            currentPage = p;
            applyFilters();
            document.querySelector('.main-content').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function setView(v) {
            currentView = v;
            document.getElementById('listBtn').classList.toggle('active', v === 'list');
            document.getElementById('gridBtn').classList.toggle('active', v === 'grid');
            applyFilters();
        }

        function toggleSave(btn) {
            btn.classList.toggle('saved');
            const saved = btn.classList.contains('saved');
            btn.innerHTML = `<i class="${saved?'fas':'far'} fa-bookmark me-1"></i>${saved?'Tersimpan':'Simpan'}`;
        }

        // Init
        applyFilters();
    </script>
</body>

</html>