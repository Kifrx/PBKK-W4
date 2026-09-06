<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ITS Academic Profile - Kelompok 10')</title>

    <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ITS Academic Profile Design System with Blue-Yellow-White Gradient Background -->
    <style>
        :root {
            --grid-line-color: rgba(15, 23, 42, 0.035);
            --paper-bg: #ffffff;
            --text-main: #0f172a;
            --text-sub: #64748b;
            --border-light: rgba(15, 23, 42, 0.08);
            --card-radius: 32px;
            --inner-card-radius: 20px;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            /* Gradient Biru, Kuning, dan Putih (Soft Mesh Gradient + Grid Pattern) */
            background-color: #f8fafc;
            background-image: 
                radial-gradient(at 10% 10%, rgba(56, 189, 248, 0.28) 0px, transparent 50%),
                radial-gradient(at 90% 90%, rgba(253, 224, 71, 0.32) 0px, transparent 50%),
                radial-gradient(at 50% 50%, rgba(255, 255, 255, 0.85) 0px, transparent 80%),
                linear-gradient(135deg, #e0f2fe 0%, #fef9c3 50%, #ffffff 100%),
                linear-gradient(to right, var(--grid-line-color) 1px, transparent 1px),
                linear-gradient(to bottom, var(--grid-line-color) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 100% 100%, 100% 100%, 32px 32px, 32px 32px;
            background-attachment: fixed;
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, .font-heading {
            font-family: 'Outfit', sans-serif;
            letter-spacing: -0.02em;
        }

        /* Floating Pill Navbar */
        .navbar-wrapper {
            position: sticky;
            top: 16px;
            z-index: 1000;
            padding: 0 16px;
        }

        .nomu-navbar {
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid var(--border-light);
            border-radius: 9999px;
            padding: 10px 24px;
            box-shadow: 0 12px 35px rgba(15, 23, 42, 0.07);
            backdrop-filter: blur(14px);
        }

        .nomu-brand {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 1.35rem;
            letter-spacing: -0.5px;
            color: #0f172a;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .nomu-brand-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #0284c7, #1d4ed8);
            color: #ffffff;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.35);
        }

        .nav-link {
            font-weight: 600;
            color: #475569;
            padding: 8px 20px !important;
            border-radius: 9999px;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }

        .nav-link:hover {
            color: #0f172a !important;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .nav-link.active {
            color: #ffffff !important;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.2);
        }

        .header-badge {
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: 9999px;
            padding: 6px 16px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #0f172a;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Main Card Canvas */
        .main-paper-card {
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: var(--card-radius);
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.09), 0 8px 24px rgba(2, 132, 199, 0.06);
            max-height: 78vh;
            overflow-y: auto;
            padding: 3rem;
            position: relative;
        }

        /* Inner Paper Grid with Pure White Background and Soft Grid Lines */
        .inner-paper-grid {
            background-color: #ffffff;
            background-image: 
                linear-gradient(to right, rgba(15, 23, 42, 0.035) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(15, 23, 42, 0.035) 1px, transparent 1px);
            background-size: 24px 24px, 24px 24px;
            border-radius: var(--inner-card-radius);
            border: 1px solid var(--border-light);
            padding: 2rem;
        }

        .nested-white-card {
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
            padding: 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .nested-white-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 40px rgba(2, 132, 199, 0.12);
        }

        /* Smooth Scrollbar */
        .main-paper-card::-webkit-scrollbar {
            width: 8px;
        }
        .main-paper-card::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 8px;
        }
        .main-paper-card::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 8px;
        }
        .main-paper-card::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Highlight Dark Pill */
        .highlight-pill-dark {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: #ffffff;
            padding: 8px 24px;
            border-radius: 9999px;
            display: inline-block;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.18);
        }

        /* Floating Tag Pills */
        .tag-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 18px;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
            box-shadow: 0 6px 16px rgba(0,0,0,0.06);
        }
        .tag-orange { background-color: #f97316; }
        .tag-dark { background-color: #0f172a; }
        .tag-purple { background-color: #7c3aed; }
        .tag-green { background-color: #16a34a; }
        .tag-blue { background-color: #0284c7; }
        .tag-yellow { background-color: #ca8a04; }

        /* Footer */
        .footer {
            margin-top: auto;
            padding: 1.5rem 0;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Floating Pill Navbar Header -->
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-expand-lg nomu-navbar">
                <a class="nomu-brand" href="{{ route('home') }}">
                    <span class="nomu-brand-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </span>
                    <span>ITS Academic Profile</span>
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#academicNav" 
                    aria-controls="academicNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="academicNav">
                    <ul class="navbar-nav mx-auto gap-1 my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('project') ? 'active' : '' }}" href="{{ route('project') }}">
                                Project
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('calculator') || request()->routeIs('hitung') ? 'active' : '' }}" href="{{ route('calculator') }}">
                                Kalkulator
                            </a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-flex align-items-center">
                        <span class="header-badge">
                            <i class="bi bi-people-fill text-primary"></i> Kelompok 10
                        </span>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Main Content Container with Paper Card wrapper -->
    <main class="py-4 py-md-5 my-auto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-10">
                    <div class="main-paper-card">
                        @yield('content')
                    </div>

                    <!-- Bottom Tag Pills Row -->
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-4 px-2">
                        <span class="tag-pill tag-dark" style="transform: rotate(-1deg);">
                            <i class="bi bi-people-fill"></i> Kelompok 10 DTIF ITS
                        </span>
                        <span class="tag-pill tag-blue" style="transform: rotate(1deg);">
                            <i class="bi bi-shield-check"></i> FTEIC ITS
                        </span>
                        <span class="tag-pill tag-yellow" style="transform: rotate(-1deg);">
                            <i class="bi bi-cpu-fill"></i> Agentic AI Sub-Theme
                        </span>
                        <span class="tag-pill tag-green" style="transform: rotate(1deg);">
                            <i class="bi bi-calculator-fill"></i> Kalkulator Dinamis
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="text-secondary small">
                &copy; {{ date('Y') }} <strong>ITS Academic Profile - Pemrograman Berbasis Kerangka Kerja</strong>
            </span>
            <span class="text-secondary small">
                Dikembangkan oleh <strong class="text-dark">Kelompok 10</strong>
            </span>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
