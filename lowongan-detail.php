<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Lowongan — SMKN Ihya Ulummudin</title>
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
        .detail-hero {
            background: linear-gradient(160deg, var(--navy) 0%, var(--navy-mid) 100%);
            padding: 120px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .detail-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 60% 70% at 90% 30%, rgba(201, 168, 76, .1) 0%, transparent 65%);
        }

        .hero-grid {
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(201, 168, 76, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(201, 168, 76, .04) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .breadcrumb-custom a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: .82rem;
            transition: color .2s;
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
            color: rgba(255, 255, 255, .6);
            font-size: .82rem;
        }

        .company-logo-lg {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 900;
            font-family: 'Playfair Display', serif;
            border: 2px solid rgba(255, 255, 255, .15);
        }

        .hero-job-title {
            font-size: clamp(1.6rem, 3.5vw, 2.6rem);
            font-weight: 900;
            color: #fff;
            margin-bottom: 8px;
        }

        .hero-company-name {
            font-size: 1rem;
            color: rgba(255, 255, 255, .7);
            margin-bottom: 16px;
        }

        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .hero-meta-item {
            display: flex;
            align-items: center;
            gap: 7px;
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 8px;
            padding: 7px 14px;
            font-size: .82rem;
            color: rgba(255, 255, 255, .8);
        }

        .hero-meta-item i {
            color: var(--gold);
            font-size: .8rem;
        }

        /* MAIN */
        .main-section {
            padding: 48px 0 80px;
        }

        /* DETAIL CARD */
        .detail-card {
            background: var(--white);
            border: 1px solid rgba(13, 31, 60, .07);
            border-radius: 20px;
            padding: 32px;
            margin-bottom: 20px;
        }

        .detail-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 20px;
            padding-bottom: 14px;
            border-bottom: 2px solid var(--cream);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-card-title i {
            color: var(--gold);
            font-size: 1rem;
        }

        .req-list {
            list-style: none;
            padding: 0;
        }

        .req-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 11px;
            font-size: .88rem;
            color: #4A5568;
            line-height: 1.55;
        }

        .req-list li::before {
            content: '✓';
            color: var(--green);
            font-weight: 700;
            font-size: .9rem;
            margin-top: 1px;
            flex-shrink: 0;
        }

        .req-list li.cross::before {
            content: '✗';
            color: #DC3545;
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .benefit-item {
            background: var(--cream);
            border-radius: 12px;
            padding: 14px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .benefit-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgba(201, 168, 76, .15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold);
            font-size: .85rem;
            flex-shrink: 0;
        }

        .benefit-label {
            font-size: .82rem;
            font-weight: 600;
            color: var(--navy);
        }

        .benefit-val {
            font-size: .75rem;
            color: var(--text-muted);
            margin-top: 2px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        .info-item {}

        .info-key {
            font-size: .75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--text-muted);
            margin-bottom: 4px;
        }

        .info-val {
            font-size: .88rem;
            font-weight: 600;
            color: var(--navy);
        }

        /* SIDEBAR APPLY */
        .apply-card {
            background: var(--white);
            border: 1px solid rgba(13, 31, 60, .07);
            border-radius: 20px;
            padding: 28px 26px;
            position: sticky;
            top: 90px;
        }

        .salary-big {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 900;
            color: var(--green);
            line-height: 1;
        }

        .salary-big span {
            font-size: .8rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 400;
            color: var(--text-muted);
            display: block;
            margin-top: 4px;
        }

        .deadline-box {
            background: rgba(220, 53, 69, .06);
            border: 1px solid rgba(220, 53, 69, .15);
            border-radius: 12px;
            padding: 12px 16px;
            margin: 16px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .deadline-box i {
            color: #DC3545;
        }

        .deadline-box span {
            font-size: .82rem;
            color: #DC3545;
            font-weight: 600;
        }

        .btn-apply-big {
            display: block;
            width: 100%;
            padding: 15px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--navy), var(--navy-light));
            color: var(--white);
            font-size: .95rem;
            font-weight: 700;
            text-align: center;
            border: none;
            cursor: pointer;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: opacity .2s, transform .2s;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .btn-apply-big:hover {
            opacity: .88;
            transform: translateY(-2px);
            color: var(--white);
        }

        .btn-share {
            display: block;
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: 1.5px solid rgba(13, 31, 60, .15);
            background: transparent;
            color: var(--navy);
            font-size: .88rem;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: all .2s;
        }

        .btn-share:hover {
            border-color: var(--gold);
            background: rgba(201, 168, 76, .05);
        }

        .sidebar-info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--cream);
            font-size: .82rem;
        }

        .sidebar-info-row:last-child {
            border: none;
        }

        .sidebar-info-row .key {
            color: var(--text-muted);
        }

        .sidebar-info-row .val {
            font-weight: 600;
            color: var(--navy);
            text-align: right;
        }

        /* APPLY MODAL */
        .modal-header-custom {
            background: linear-gradient(135deg, var(--navy), var(--navy-light));
        }

        .modal-title-custom {
            color: var(--white);
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
        }

        .form-label-custom {
            font-size: .83rem;
            font-weight: 600;
            color: var(--navy);
            margin-bottom: 6px;
        }

        .form-control-custom {
            border: 1.5px solid rgba(13, 31, 60, .12);
            border-radius: 10px;
            padding: 11px 14px;
            font-size: .88rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--navy);
            background: var(--cream);
            transition: border-color .2s;
            width: 100%;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: var(--gold);
            background: var(--white);
        }

        .upload-area {
            border: 2px dashed rgba(13, 31, 60, .15);
            border-radius: 12px;
            padding: 28px;
            text-align: center;
            cursor: pointer;
            transition: border-color .2s, background .2s;
        }

        .upload-area:hover {
            border-color: var(--gold);
            background: rgba(201, 168, 76, .04);
        }

        .upload-area i {
            font-size: 2rem;
            color: var(--text-muted);
            margin-bottom: 10px;
            display: block;
        }

        .upload-area p {
            font-size: .83rem;
            color: var(--text-muted);
            margin: 0;
        }

        .btn-submit-apply {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: var(--navy);
            font-weight: 700;
            font-size: .95rem;
            border: none;
            cursor: pointer;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: opacity .2s;
        }

        .btn-submit-apply:hover {
            opacity: .88;
        }

        /* RELATED JOBS */
        .related-card {
            background: var(--white);
            border: 1px solid rgba(13, 31, 60, .07);
            border-radius: 14px;
            padding: 18px 20px;
            margin-bottom: 12px;
            display: flex;
            gap: 14px;
            align-items: center;
            transition: all .2s;
            text-decoration: none;
        }

        .related-card:hover {
            border-color: rgba(201, 168, 76, .3);
            transform: translateX(4px);
        }

        .related-logo {
            width: 44px;
            height: 44px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            flex-shrink: 0;
        }

        .related-title {
            font-size: .88rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 3px;
        }

        .related-meta {
            font-size: .75rem;
            color: var(--text-muted);
        }

        .related-salary {
            font-size: .85rem;
            font-weight: 700;
            color: var(--green);
            margin-left: auto;
            white-space: nowrap;
        }

        /* SUCCESS STATE */
        .success-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(13, 31, 60, .85);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .success-overlay.show {
            display: flex;
        }

        .success-box {
            background: var(--white);
            border-radius: 24px;
            padding: 48px 40px;
            text-align: center;
            max-width: 420px;
            width: 90%;
        }

        .success-icon {
            font-size: 3.5rem;
            color: var(--green);
            margin-bottom: 16px;
        }

        .success-box h3 {
            font-size: 1.5rem;
            color: var(--navy);
            margin-bottom: 10px;
        }

        .success-box p {
            font-size: .88rem;
            color: #5A6A85;
            margin-bottom: 24px;
            line-height: 1.65;
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
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="semua-lowongan.html">Lowongan Kerja</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="tentang.html">Tentang</a></li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0"><a class="nav-link nav-link-custom btn-nav" href="karir-smkn-ihya.html#jalur">Mulai Sekarang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- DETAIL HERO (filled by JS) -->
    <section class="detail-hero" id="detailHero">
        <div class="hero-grid"></div>
        <div class="container position-relative" style="z-index:2;" id="heroContent">
            <div style="color:rgba(255,255,255,.5); padding:80px 0;">Memuat data lowongan...</div>
        </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="main-section">
        <div class="container">
            <div class="row g-4" id="mainRow">
                <div class="col-12 text-center py-5" style="color:var(--text-muted);">
                    <i class="fas fa-spinner fa-spin fa-2x mb-3 d-block"></i>Memuat detail lowongan...
                </div>
            </div>
        </div>
    </section>

    <!-- APPLY MODAL -->
    <div class="modal fade" id="applyModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius:20px; overflow:hidden; border:none;">
                <div class="modal-header modal-header-custom border-0 pb-0">
                    <h5 class="modal-title modal-title-custom" id="applyModalTitle">Form Lamaran Kerja</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <p style="font-size:.83rem; color:var(--text-muted); margin-bottom:24px;" id="applySubtitle">Lengkapi data dirimu untuk melamar posisi ini.</p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label-custom">Nama Lengkap *</label>
                            <input type="text" class="form-control-custom" placeholder="Nama sesuai KTP">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-custom">Nomor HP / WhatsApp *</label>
                            <input type="text" class="form-control-custom" placeholder="08xxxxxxxxxx">
                        </div>
                        <div class="col-12">
                            <label class="form-label-custom">Email Aktif *</label>
                            <input type="email" class="form-control-custom" placeholder="email@kamu.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-custom">Jurusan SMK</label>
                            <input type="text" class="form-control-custom" placeholder="Mis: Teknik Komputer & Jaringan">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-custom">Tahun Lulus</label>
                            <select class="form-control-custom">
                                <option>2025</option>
                                <option>2024</option>
                                <option>2023</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label-custom">Upload CV / Lamaran (PDF/Word)</label>
                            <div class="upload-area" onclick="document.getElementById('cvInput').click()">
                                <i class="fas fa-file-upload"></i>
                                <p><strong>Klik untuk unggah</strong> atau seret file ke sini<br><span style="font-size:.75rem;">PDF, DOC, DOCX · Maks 5MB</span></p>
                                <input type="file" id="cvInput" style="display:none" accept=".pdf,.doc,.docx" onchange="showFileName(this)">
                            </div>
                            <div id="fileNameDisplay" style="font-size:.78rem; color:var(--green); margin-top:6px; display:none;"></div>
                        </div>
                        <div class="col-12">
                            <label class="form-label-custom">Surat Motivasi Singkat (opsional)</label>
                            <textarea class="form-control-custom" rows="3" placeholder="Ceritakan kenapa kamu cocok untuk posisi ini..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0 px-4 pb-4">
                    <button class="btn-submit-apply" onclick="submitApplication()">
                        <i class="fas fa-paper-plane me-2"></i>Kirim Lamaran Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- SUCCESS OVERLAY -->
    <div class="success-overlay" id="successOverlay">
        <div class="success-box">
            <div class="success-icon"><i class="fas fa-check-circle"></i></div>
            <h3>Lamaran Terkirim!</h3>
            <p>Lamaranmu telah berhasil dikirim. Tim BKK sekolah dan perusahaan akan menghubungimu melalui WhatsApp atau email dalam 3–5 hari kerja.</p>
            <a href="semua-lowongan.html" style="display:inline-block; background:linear-gradient(135deg,var(--navy),var(--navy-light)); color:var(--white); border-radius:12px; padding:12px 28px; font-weight:700; text-decoration:none; font-size:.9rem;">
                Lihat Lowongan Lainnya
            </a>
        </div>
    </div>

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
        const jobs = [{
                id: 1,
                title: 'Teknisi Komputer & Jaringan',
                company: 'PT Telkom Indonesia',
                companyFull: 'PT Telkom Indonesia — Cabang Banyuwangi',
                loc: 'Banyuwangi, Jawa Timur',
                tipe: 'Full-time',
                bidang: 'Teknologi',
                salary: 3.5,
                logo: 'PT',
                logoColor: 'rgba(13,31,60,.08)',
                logoTxt: '#0D1F3C',
                deadline: '30 Juli 2025',
                syarat: 'Min. SMA/SMK sederajat',
                isNew: true,
                posted: '5 Juli 2025',
                exp: '0–1 tahun',
                pendidikan: 'SMA/SMK Sederajat',
                jml: 3,
                desc: 'PT Telkom Indonesia cabang Banyuwangi membuka peluang bagi lulusan SMK Teknik Komputer & Jaringan untuk bergabung sebagai Teknisi Komputer & Jaringan. Kamu akan bertanggung jawab dalam perawatan, instalasi, dan perbaikan infrastruktur jaringan perusahaan.',
                tugas: ['Melakukan instalasi dan konfigurasi jaringan komputer (LAN/WAN)', 'Troubleshooting dan pemeliharaan perangkat keras dan lunak', 'Monitoring performa jaringan secara berkala', 'Mendokumentasikan setiap pekerjaan teknis yang dilakukan', 'Berkoordinasi dengan tim IT pusat untuk eskalasi masalah', 'Mendukung pengguna internal dalam penggunaan perangkat IT'],
                reqs: ['Lulusan SMK jurusan TKJ, RPL, atau sederajat', 'Memahami konsep dasar jaringan komputer (TCP/IP, DNS, DHCP)', 'Memiliki sertifikasi BNSP atau Cisco CCNA (nilai plus)', 'Mampu bekerja dalam tim maupun mandiri', 'Berdomisili di atau bersedia pindah ke Banyuwangi'],
                notReqs: ['Tidak harus berpengalaman — fresh graduate diterima', 'Tidak wajib memiliki kendaraan (lokasi terjangkau transportasi umum)'],
                benefits: ['Gaji pokok + tunjangan kinerja', 'BPJS Kesehatan & Ketenagakerjaan', 'Pelatihan teknis & sertifikasi', 'Jenjang karir jelas'],
                related: [2, 5, 8, 13]
            },
            {
                id: 2,
                title: 'Front Office Staff / Resepsionis',
                company: 'Bali Hai Resort & Spa',
                companyFull: 'Bali Hai Resort & Spa — Kuta, Bali',
                loc: 'Kuta, Bali',
                tipe: 'Full-time',
                bidang: 'Perhotelan',
                salary: 4.2,
                logo: 'BH',
                logoColor: 'rgba(26,107,74,.1)',
                logoTxt: '#1A6B4A',
                deadline: '15 Agustus 2025',
                syarat: 'Bisa bahasa Inggris',
                isNew: false,
                posted: '20 Juni 2025',
                exp: '0–2 tahun',
                pendidikan: 'SMA/SMK Perhotelan',
                jml: 2,
                desc: 'Bergabunglah dengan tim Bali Hai Resort & Spa sebagai Front Office Staff! Kamu akan menjadi wajah pertama resort kami yang menyambut tamu dari dalam dan luar negeri. Lingkungan kerja profesional, internasional, dan penuh pembelajaran.',
                tugas: ['Menyambut dan check-in/check-out tamu dengan ramah', 'Menangani reservasi via telepon, email, dan sistem PMS', 'Memberikan informasi fasilitas resort dan rekomendasi wisata', 'Menangani keluhan tamu secara profesional', 'Mengelola data tamu dan administrasi front desk', 'Berkoordinasi dengan housekeeping dan departemen lain'],
                reqs: ['Lulusan SMK jurusan Perhotelan / Pariwisata', 'Mampu berkomunikasi dalam Bahasa Inggris (aktif diutamakan)', 'Berpenampilan menarik, rapi, dan ramah', 'Bersedia bekerja shift (pagi/siang/malam)', 'Bersedia ditempatkan di Kuta, Bali'],
                notReqs: ['Fresh graduate sangat diterima — kami sediakan pelatihan', 'Tidak harus berpengalaman di hotel berbintang'],
                benefits: ['Gaji + service charge bulanan', 'Akomodasi karyawan tersedia', 'Makan 2x sehari di kantin', 'Bonus hari raya & THR'],
                related: [18, 3, 11, 7]
            },
            {
                id: 3,
                title: 'Chef de Partie / Juru Masak',
                company: 'Dapur Gourmet Banyuwangi',
                companyFull: 'Dapur Gourmet Banyuwangi',
                loc: 'Banyuwangi, Jawa Timur',
                tipe: 'Full-time',
                bidang: 'Kuliner',
                salary: 3.0,
                logo: 'DG',
                logoColor: 'rgba(201,168,76,.15)',
                logoTxt: '#9A7030',
                deadline: '10 Agustus 2025',
                syarat: 'Pengalaman diutamakan',
                isNew: true,
                posted: '1 Juli 2025',
                exp: '0–2 tahun',
                pendidikan: 'SMK Tata Boga',
                jml: 2,
                desc: 'Dapur Gourmet Banyuwangi adalah restoran fine dining lokal yang mengedepankan cita rasa autentik Nusantara. Kami mencari juru masak bersemangat yang ingin berkembang di industri kuliner profesional.',
                tugas: ['Mempersiapkan dan memasak hidangan sesuai standar resep', 'Menjaga kebersihan dan sanitasi area dapur', 'Membantu head chef dalam pengembangan menu baru', 'Mengelola stok bahan makanan dan meminimalisasi pemborosan', 'Melatih commis cook junior'],
                reqs: ['Lulusan SMK Tata Boga / Culinary Arts', 'Memiliki passion tinggi di dunia kuliner', 'Bersedia bekerja shift dan akhir pekan', 'Fisik sehat dan mampu berdiri dalam waktu lama', 'Teliti, disiplin, dan menjaga kebersihan'],
                notReqs: ['Tidak wajib punya pengalaman di restoran bintang 5', 'Fresh graduate dengan skill baik tetap dipertimbangkan'],
                benefits: ['Gaji pokok + tip dari pelanggan', 'Makan gratis saat shift', 'Pelatihan resep & teknik memasak', 'Hari libur 2x seminggu'],
                related: [11, 22, 7, 2]
            },
            {
                id: 4,
                title: 'Mekanik Kendaraan Roda Empat',
                company: 'Auto Jaya Service Center',
                companyFull: 'Auto Jaya Service Center — Jember',
                loc: 'Jember, Jawa Timur',
                tipe: 'Full-time',
                bidang: 'Otomotif',
                salary: 3.8,
                logo: 'AJ',
                logoColor: 'rgba(74,44,138,.1)',
                logoTxt: '#4A2C8A',
                deadline: '25 Juli 2025',
                syarat: 'Sertifikat BNSP nilai plus',
                isNew: false,
                posted: '10 Juni 2025',
                exp: '0–3 tahun',
                pendidikan: 'SMK Otomotif',
                jml: 4,
                desc: 'Auto Jaya Service Center adalah bengkel resmi kendaraan roda empat di Jember yang melayani lebih dari 200 pelanggan per bulan. Kami membuka posisi mekanik untuk lulusan SMK Otomotif yang ingin berkembang bersama tim profesional kami.',
                tugas: ['Melakukan servis berkala kendaraan (tune-up, ganti oli, rem)', 'Mendiagnosis dan memperbaiki kerusakan mesin & kelistrikan', 'Menginspeksi kendaraan sebelum dan sesudah servis', 'Berkomunikasi dengan pelanggan mengenai kondisi kendaraan', 'Menjaga kebersihan dan kerapian area kerja'],
                reqs: ['Lulusan SMK jurusan Teknik Otomotif / TKR', 'Memahami sistem mesin bensin & diesel', 'Bisa menggunakan scan tool / alat diagnosa', 'Memiliki sertifikat BNSP otomotif (diutamakan)', 'Bertanggung jawab dan jujur'],
                notReqs: ['Tidak wajib membawa peralatan sendiri — semua disediakan', 'Fresh graduate boleh melamar'],
                benefits: ['Gaji + bonus produksi', 'BPJS Kesehatan & TK', 'Pelatihan dari distributor resmi', 'Jenjang karir Mekanik → Kepala Mekanik'],
                related: [20, 1, 5, 8]
            },
            {
                id: 5,
                title: 'Magang — Junior Web Developer',
                company: 'GoSolusi Digital',
                companyFull: 'GoSolusi Digital — Surabaya',
                loc: 'Surabaya, Jawa Timur',
                tipe: 'Magang',
                bidang: 'Teknologi',
                salary: 1.5,
                logo: 'GS',
                logoColor: 'rgba(13,110,253,.1)',
                logoTxt: '#0d6efd',
                deadline: '5 Agustus 2025',
                syarat: 'Durasi 3 bulan',
                isNew: true,
                posted: '3 Juli 2025',
                exp: 'Tanpa pengalaman',
                pendidikan: 'SMK RPL / TKJ',
                jml: 3,
                desc: 'GoSolusi Digital membuka program magang intensif selama 3 bulan untuk siswa/lulusan SMK jurusan RPL atau TKJ. Kamu akan belajar langsung di lingkungan startup teknologi yang dinamis dan dipandu oleh mentor berpengalaman.',
                tugas: ['Membantu pengembangan front-end website menggunakan HTML/CSS/JS', 'Belajar framework React atau Vue.js', 'Bug fixing dan testing aplikasi web', 'Ikut serta dalam daily stand-up meeting tim', 'Membuat dokumentasi teknis sederhana'],
                reqs: ['Lulusan atau akan lulus SMK jurusan RPL/TKJ', 'Mengerti dasar HTML, CSS, dan JavaScript', 'Punya semangat belajar dan tidak takut bertanya', 'Bisa menggunakan laptop sendiri', 'Bersedia full time selama 3 bulan magang di Surabaya'],
                notReqs: ['Tidak harus pernah magang sebelumnya', 'Tidak wajib mahir — yang penting mau belajar!'],
                benefits: ['Uang saku Rp 1,5 juta/bulan', 'Sertifikat magang resmi', 'Kesempatan direkrut full-time', 'Makan siang gratis di kantor'],
                related: [1, 8, 16, 24]
            },
        ];

        // Extend with more minimal entries for related
        const allJobs = [...jobs,
            {
                id: 6,
                title: 'Asisten Apoteker',
                company: 'RSUD Blambangan',
                loc: 'Banyuwangi',
                tipe: 'Full-time',
                bidang: 'Kesehatan',
                salary: 3.2,
                logo: 'RS',
                logoColor: 'rgba(220,53,69,.1)',
                logoTxt: '#DC3545'
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
                logoTxt: '#d39e00'
            },
            {
                id: 8,
                title: 'IT Support Technician',
                company: 'Indosat Ooredoo',
                loc: 'Jakarta',
                tipe: 'Kontrak',
                bidang: 'Teknologi',
                salary: 5.0,
                logo: 'IT',
                logoColor: 'rgba(13,31,60,.08)',
                logoTxt: '#0D1F3C'
            },
            {
                id: 11,
                title: 'Pramusaji & Barista',
                company: 'Kopi Nusantara',
                loc: 'Banyuwangi',
                tipe: 'Part-time',
                bidang: 'Kuliner',
                salary: 2.0,
                logo: 'KN',
                logoColor: 'rgba(201,168,76,.15)',
                logoTxt: '#9A7030'
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
                logoTxt: '#d39e00'
            },
            {
                id: 16,
                title: 'Graphic Designer',
                company: 'Kreatif Studio Bali',
                loc: 'Bali',
                tipe: 'Full-time',
                bidang: 'Teknologi',
                salary: 4.5,
                logo: 'KS',
                logoColor: 'rgba(74,44,138,.1)',
                logoTxt: '#4A2C8A'
            },
            {
                id: 18,
                title: 'Housekeeping Supervisor',
                company: 'The Balian Hotel',
                loc: 'Bali',
                tipe: 'Full-time',
                bidang: 'Perhotelan',
                salary: 4.8,
                logo: 'TB',
                logoColor: 'rgba(26,107,74,.1)',
                logoTxt: '#1A6B4A'
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
                logoTxt: '#DC3545'
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
                logoTxt: '#9A7030'
            },
            {
                id: 24,
                title: 'Network Engineer Junior',
                company: 'Biznet Networks',
                loc: 'Surabaya',
                tipe: 'Full-time',
                bidang: 'Teknologi',
                salary: 6.0,
                logo: 'BN',
                logoColor: 'rgba(13,110,253,.1)',
                logoTxt: '#0d6efd'
            },
        ];

        function getJob(id) {
            return jobs.find(j => j.id === id) || allJobs.find(j => j.id === id);
        }

        function getParams() {
            const p = new URLSearchParams(window.location.search);
            return parseInt(p.get('id')) || 1;
        }

        function render() {
            const id = getParams();
            const job = getJob(id);
            if (!job || !job.desc) {
                renderFallback(id);
                return;
            }

            // Hero
            document.getElementById('heroContent').innerHTML = `
    <div class="breadcrumb-custom mb-3">
      <a href="karir-smkn-ihya.html">Beranda</a><span>›</span>
      <a href="semua-lowongan.html">Lowongan Kerja</a><span>›</span>
      <span class="current">${job.title}</span>
    </div>
    <div class="d-flex align-items-center gap-4 mb-4 flex-wrap">
      <div class="company-logo-lg" style="background:${job.logoColor}; color:${job.logoTxt};">${job.logo}</div>
      <div>
        <h1 class="hero-job-title">${job.title}</h1>
        <div class="hero-company-name"><i class="fas fa-building me-2"></i>${job.companyFull}</div>
        <div class="hero-meta">
          <span class="hero-meta-item"><i class="fas fa-map-marker-alt"></i>${job.loc}</span>
          <span class="hero-meta-item"><i class="fas fa-briefcase"></i>${job.tipe}</span>
          <span class="hero-meta-item"><i class="fas fa-layer-group"></i>${job.bidang}</span>
          <span class="hero-meta-item"><i class="fas fa-users"></i>${job.jml} posisi tersedia</span>
          ${job.isNew ? '<span class="hero-meta-item" style="background:rgba(220,53,69,.15); border-color:rgba(220,53,69,.3); color:#FF6B6B;"><i class="fas fa-fire"></i>Baru Dibuka</span>' : ''}
        </div>
      </div>
    </div>`;

            // Main content
            const related = (job.related || []).slice(0, 4).map(rid => {
                const r = getJob(rid);
                if (!r) return '';
                return `<a href="lowongan-detail.html?id=${r.id}" class="related-card">
      <div class="related-logo" style="background:${r.logoColor}; color:${r.logoTxt};">${r.logo}</div>
      <div>
        <div class="related-title">${r.title}</div>
        <div class="related-meta">${r.company} · ${r.loc}</div>
      </div>
      <div class="related-salary">Rp ${r.salary.toFixed(1).replace('.',',')} Jt</div>
    </a>`;
            }).join('');

            document.getElementById('mainRow').innerHTML = `
    <!-- LEFT DETAIL -->
    <div class="col-lg-8">
      <!-- Deskripsi -->
      <div class="detail-card">
        <div class="detail-card-title"><i class="fas fa-align-left"></i>Tentang Pekerjaan Ini</div>
        <p style="font-size:.9rem; color:#4A5568; line-height:1.8;">${job.desc}</p>
      </div>

      <!-- Tanggung Jawab -->
      <div class="detail-card">
        <div class="detail-card-title"><i class="fas fa-tasks"></i>Tanggung Jawab Utama</div>
        <ul class="req-list">${job.tugas.map(t=>`<li>${t}</li>`).join('')}</ul>
      </div>

      <!-- Persyaratan -->
      <div class="detail-card">
        <div class="detail-card-title"><i class="fas fa-clipboard-check"></i>Persyaratan Pelamar</div>
        <p style="font-size:.8rem; color:var(--text-muted); margin-bottom:14px;">Wajib dipenuhi:</p>
        <ul class="req-list">${job.reqs.map(r=>`<li>${r}</li>`).join('')}</ul>
        <p style="font-size:.8rem; color:var(--text-muted); margin:16px 0 10px;">Catatan penting:</p>
        <ul class="req-list">${job.notReqs.map(r=>`<li class="cross">${r}</li>`).join('')}</ul>
      </div>

      <!-- Benefit -->
      <div class="detail-card">
        <div class="detail-card-title"><i class="fas fa-gift"></i>Fasilitas & Keuntungan</div>
        <div class="benefit-grid">
          ${job.benefits.map((b,i) => {
            const icons = ['fas fa-money-bill-wave','fas fa-heartbeat','fas fa-graduation-cap','fas fa-chart-line','fas fa-utensils','fas fa-home'];
            return `<div class="benefit-item"><div class="benefit-icon"><i class="${icons[i]||'fas fa-check'}"></i></div><div><div class="benefit-label">${b}</div></div></div>`;
          }).join('')}
        </div>
      </div>

      <!-- Info Detail -->
      <div class="detail-card">
        <div class="detail-card-title"><i class="fas fa-info-circle"></i>Informasi Tambahan</div>
        <div class="info-grid">
          <div class="info-item"><div class="info-key">Bidang</div><div class="info-val">${job.bidang}</div></div>
          <div class="info-item"><div class="info-key">Tipe Kerja</div><div class="info-val">${job.tipe}</div></div>
          <div class="info-item"><div class="info-key">Lokasi</div><div class="info-val">${job.loc}</div></div>
          <div class="info-item"><div class="info-key">Pengalaman</div><div class="info-val">${job.exp}</div></div>
          <div class="info-item"><div class="info-key">Pendidikan</div><div class="info-val">${job.pendidikan}</div></div>
          <div class="info-item"><div class="info-key">Jumlah Posisi</div><div class="info-val">${job.jml} orang</div></div>
          <div class="info-item"><div class="info-key">Tanggal Dibuka</div><div class="info-val">${job.posted}</div></div>
          <div class="info-item"><div class="info-key">Batas Lamar</div><div class="info-val">${job.deadline}</div></div>
        </div>
      </div>

      <!-- Related -->
      <div class="detail-card">
        <div class="detail-card-title"><i class="fas fa-th-list"></i>Lowongan Serupa</div>
        ${related || '<p style="color:var(--text-muted); font-size:.85rem;">Tidak ada lowongan terkait saat ini.</p>'}
        <a href="semua-lowongan.html" style="display:inline-flex; align-items:center; gap:8px; color:var(--navy); font-weight:700; font-size:.85rem; text-decoration:none; margin-top:12px;">
          Lihat Semua Lowongan <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <!-- RIGHT SIDEBAR -->
    <div class="col-lg-4">
      <div class="apply-card">
        <div style="font-size:.75rem; font-weight:700; text-transform:uppercase; letter-spacing:.08em; color:var(--text-muted); margin-bottom:8px;">Gaji Ditawarkan</div>
        <div class="salary-big">Rp ${job.salary.toFixed(1).replace('.',',')} Jt<span>per bulan (estimasi)</span></div>

        <div class="deadline-box">
          <i class="fas fa-clock"></i>
          <span>Batas lamar: ${job.deadline}</span>
        </div>

        <button class="btn-apply-big" onclick="openApplyModal('${job.title}')">
          <i class="fas fa-paper-plane me-2"></i>Lamar Posisi Ini
        </button>
        <button class="btn-share" onclick="shareJob()">
          <i class="fas fa-share-alt me-2"></i>Bagikan Lowongan
        </button>

        <div style="margin-top:20px; padding-top:16px; border-top:2px solid var(--cream);">
          <div class="sidebar-info-row"><span class="key">Tipe Pekerjaan</span><span class="val">${job.tipe}</span></div>
          <div class="sidebar-info-row"><span class="key">Bidang</span><span class="val">${job.bidang}</span></div>
          <div class="sidebar-info-row"><span class="key">Lokasi</span><span class="val">${job.loc}</span></div>
          <div class="sidebar-info-row"><span class="key">Pengalaman</span><span class="val">${job.exp}</span></div>
          <div class="sidebar-info-row"><span class="key">Pendidikan</span><span class="val">${job.pendidikan}</span></div>
          <div class="sidebar-info-row"><span class="key">Posisi Tersedia</span><span class="val">${job.jml} orang</span></div>
        </div>

        <div style="margin-top:20px; padding:16px; background:rgba(201,168,76,.07); border-radius:12px; border:1px solid rgba(201,168,76,.2);">
          <div style="font-size:.78rem; font-weight:700; color:var(--gold); margin-bottom:6px;"><i class="fas fa-info-circle me-1"></i>Tips BKK Sekolah</div>
          <p style="font-size:.77rem; color:#5A6A85; line-height:1.6; margin:0;">Konsultasikan berkasmu dengan guru BK sebelum melamar. Kami siap bantu verifikasi ijazah, SKCK, dan dokumen lainnya.</p>
        </div>
      </div>
    </div>
  `;
        }

        function renderFallback(id) {
            const job = getJob(id);
            document.getElementById('heroContent').innerHTML = `
    <div class="breadcrumb-custom mb-3">
      <a href="karir-smkn-ihya.html">Beranda</a><span>›</span>
      <a href="semua-lowongan.html">Lowongan Kerja</a><span>›</span>
      <span class="current">${job?.title || 'Detail Lowongan'}</span>
    </div>
    <h1 class="hero-job-title">${job?.title || 'Lowongan Kerja'}</h1>
    <div class="hero-company-name">${job?.company || ''}</div>
    <div class="hero-meta">
      ${job ? `<span class="hero-meta-item"><i class="fas fa-map-marker-alt"></i>${job.loc}</span><span class="hero-meta-item"><i class="fas fa-briefcase"></i>${job.tipe}</span>` : ''}
    </div>`;
            document.getElementById('mainRow').innerHTML = `
    <div class="col-lg-8">
      <div class="detail-card">
        <div class="detail-card-title"><i class="fas fa-info-circle"></i>Detail Lowongan</div>
        <p style="color:#4A5568; font-size:.9rem; line-height:1.8;">
          Detail lengkap untuk lowongan <strong>${job?.title || 'ini'}</strong> di ${job?.company || 'perusahaan ini'} sedang diperbarui oleh tim BKK sekolah. 
          Silakan hubungi ruang BK untuk informasi lebih lanjut atau lihat lowongan lainnya.
        </p>
        <div style="margin-top:20px; display:flex; gap:12px; flex-wrap:wrap;">
          <a href="semua-lowongan.html" class="btn-detail" style="display:inline-block;">← Kembali ke Semua Lowongan</a>
          <button class="btn-apply-big" style="width:auto; display:inline-block;" onclick="openApplyModal('${job?.title || ''}')">Lamar Sekarang</button>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="apply-card">
        <div class="salary-big">Rp ${job?.salary?.toFixed(1).replace('.',',')||'—'} Jt<span>per bulan</span></div>
        <div class="deadline-box"><i class="fas fa-clock"></i><span>Deadline: ${job?.deadline || '—'}</span></div>
        <button class="btn-apply-big" onclick="openApplyModal('${job?.title || ''}')"><i class="fas fa-paper-plane me-2"></i>Lamar Posisi Ini</button>
      </div>
    </div>`;
        }

        function openApplyModal(title) {
            document.getElementById('applyModalTitle').textContent = `Lamar: ${title}`;
            document.getElementById('applySubtitle').textContent = `Lengkapi data dirimu untuk melamar posisi ${title}.`;
            new bootstrap.Modal(document.getElementById('applyModal')).show();
        }

        function submitApplication() {
            bootstrap.Modal.getInstance(document.getElementById('applyModal')).hide();
            document.getElementById('successOverlay').classList.add('show');
        }

        function showFileName(input) {
            const d = document.getElementById('fileNameDisplay');
            if (input.files[0]) {
                d.textContent = '✓ ' + input.files[0].name;
                d.style.display = 'block';
            }
        }

        function shareJob() {
            if (navigator.share) {
                navigator.share({
                    title: document.title,
                    url: window.location.href
                });
            } else {
                navigator.clipboard.writeText(window.location.href);
                alert('Link lowongan berhasil disalin!');
            }
        }

        render();
    </script>
</body>

</html>