<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Zahira — Modern Laravel Admin Dashboard Template')</title>
    <meta name="description"
        content="@yield('meta_description', 'Zahira is a premium, high-performance Laravel 12 Admin Dashboard template built with Vanilla CSS. Designed for elite developers who value aesthetics and speed.')">
    <meta name="keywords"
        content="@yield('meta_keywords', 'laravel admin dashboard, premium admin template, vanilla css dashboard, high performance laravel, open source dashboard, zahira template')">
    <meta name="author" content="Abiuma Studio">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Zahira — Modern Laravel Admin Dashboard Template')">
    <meta property="og:description"
        content="@yield('meta_description', 'Zahira is a premium, high-performance Laravel 12 Admin Dashboard template built with Vanilla CSS.')">
    <meta property="og:image" content="{{ asset('assets/images/frontend.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Zahira — Modern Laravel Admin Dashboard Template')">
    <meta property="twitter:description"
        content="@yield('meta_description', 'Zahira is a premium, high-performance Laravel 12 Admin Dashboard template built with Vanilla CSS.')">
    <meta property="twitter:image" content="{{ asset('assets/images/frontend.png') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />

    @include('layouts.partials.landing-styles')
</head>

<body>

    <div class="topbar">
        <i class="fas fa-code-branch" style="margin-right: 8px;"></i> Zahira is now Open Source! Star us on <a
            href="https://github.com/idrapus/zahira" target="_blank"
            style="color: #60a5fa; text-decoration: underline; font-weight: 700;">GitHub</a>
    </div>

    <nav class="navbar" id="mainNavbar">
        <div class="container navbar-container">

            <a href="/" class="brand">
                <i class="fas fa-gem"></i> ZAHIRA
            </a>

            <div class="desktop-nav">
                <a href="{{ route('landing') }}#features">Features</a>
                <a href="{{ route('landing') }}#components">Components</a>
                <a href="{{ route('landing') }}#tech">Technology</a>
                <a href="{{ route('download') }}">Download</a>
            </div>

            <div class="desktop-actions">
                <button class="btn theme-toggle-btn"
                    style="padding: 8px; border-radius: 50%; width: 40px; height: 40px; background: transparent; border: 1px solid var(--border); color: var(--text-muted); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-moon"></i>
                </button>

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                        @endif
                    @endauth
                @endif
            </div>

            <div class="mobile-controls mobile-menu-toggle" style="gap: 12px; align-items: center;">
                <button class="btn theme-toggle-btn"
                    style="padding: 0; border-radius: 50%; width: 40px; height: 40px; background: transparent; border: 1px solid var(--border); color: var(--text-main); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-moon"></i>
                </button>

                <button class="burger-btn" id="burgerBtn" aria-label="Toggle Navigation"
                    style="border: none; background: transparent; color: var(--text-main); font-size: 24px;">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="mobile-menu-overlay" id="mobileOverlay"></div>
    <div class="mobile-menu-drawer" id="mobileDrawer">
        <div class="mobile-nav-content">
            <a href="{{ route('landing') }}#features" class="mobile-nav-link">Features <i class="fas fa-chevron-right"
                    style="font-size: 12px; opacity: 0.5;"></i></a>
            <a href="{{ route('landing') }}#components" class="mobile-nav-link">Components <i
                    class="fas fa-chevron-right" style="font-size: 12px; opacity: 0.5;"></i></a>
            <a href="{{ route('landing') }}#tech" class="mobile-nav-link">Technology <i class="fas fa-chevron-right"
                    style="font-size: 12px; opacity: 0.5;"></i></a>
            <a href="{{ route('download') }}" class="mobile-nav-link">Download <i class="fas fa-chevron-right"
                    style="font-size: 12px; opacity: 0.5;"></i></a>
            <a href="{{ route('demo-info') }}" class="mobile-nav-link">Live Demo <i class="fas fa-chevron-right"
                    style="font-size: 12px; opacity: 0.5;"></i></a>
        </div>

        @if (Route::has('login'))
            <div class="mobile-menu-footer">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary" style="justify-content: center;">
                        <i class="fas fa-tachometer-alt"></i> Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn"
                        style="border: 1px solid var(--border); background: transparent; color: var(--text-main); justify-content: center;">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary" style="justify-content: center;">
                            <i class="fas fa-rocket"></i> Get Started Free
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="brand" style="color: #fff; margin-bottom: 24px;">
                        <i class="fas fa-gem"></i> ZAHIRA <span
                            style="font-size: 14px; opacity: 0.6; margin-left: 8px;">v{{ config('app.version') }}</span>
                    </div>
                    <p>
                        Open Source Laravel 12 Admin Template crafted for elite developers.
                        Experience the perfect blend of aesthetics and performance.
                    </p>
                </div>
                <div class="col-6" style="display: flex; gap: 80px;">
                    <div>
                        <h4>Product</h4>
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            <a href="{{ route('landing') }}#features">Features</a>
                            <a href="{{ route('landing') }}#components">Components</a>
                            <a href="{{ route('landing') }}#tech">Technology</a>
                        </div>
                    </div>
                    <div>
                        <h4>Quick Links</h4>
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            <a href="https://github.com/idrapus/zahira" target="_blank">GitHub</a>
                            <a href="{{ route('download') }}">Download</a>
                            <a href="{{ route('demo-info') }}">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-legal">
                &copy; {{ date('Y') }} Zahira. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const burgerBtn = document.getElementById('burgerBtn');
            const mobileDrawer = document.getElementById('mobileDrawer');
            const mobileOverlay = document.getElementById('mobileOverlay');
            const mobileLinks = document.querySelectorAll('.mobile-nav-link, .mobile-actions a');
            const navbar = document.getElementById('mainNavbar');
            const icon = burgerBtn.querySelector('i');

            const themeToggles = document.querySelectorAll('.theme-toggle-btn');
            const html = document.documentElement;

            const savedTheme = localStorage.getItem('theme') || 'light';
            html.setAttribute('data-theme', savedTheme);
            updateAllThemeIcons(savedTheme);

            themeToggles.forEach(btn => {
                btn.addEventListener('click', () => {
                    const currentTheme = html.getAttribute('data-theme');
                    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

                    html.setAttribute('data-theme', newTheme);
                    localStorage.setItem('theme', newTheme);
                    updateAllThemeIcons(newTheme);
                });
            });

            function updateAllThemeIcons(theme) {
                themeToggles.forEach(btn => {
                    const icon = btn.querySelector('i');
                    if (theme === 'dark') {
                        icon.classList.remove('fa-sun');
                        icon.classList.add('fa-moon');
                    } else {
                        icon.classList.remove('fa-moon');
                        icon.classList.add('fa-sun');
                    }
                });
            }

            function toggleMenu() {
                const isOpen = mobileDrawer.classList.contains('open');

                if (isOpen) {
                    mobileDrawer.classList.remove('open');
                    mobileOverlay.classList.remove('active');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                    document.body.style.overflow = '';
                    document.body.classList.remove('menu-open');
                } else {
                    mobileDrawer.classList.add('open');
                    mobileOverlay.classList.add('active');
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                    document.body.style.overflow = 'hidden';
                    document.body.classList.add('menu-open');
                }
            }

            burgerBtn.addEventListener('click', toggleMenu);
            mobileOverlay.addEventListener('click', toggleMenu);

            mobileLinks.forEach(link => {
                link.addEventListener('click', toggleMenu);
            });

            window.addEventListener('scroll', () => {
                if (window.scrollY > 10) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.desktop-nav a');

            function updateActiveLink() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (window.scrollY >= (sectionTop - navbar.offsetHeight - 100)) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            }

            window.addEventListener('scroll', updateActiveLink);

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const navHeight = navbar.offsetHeight;
                        const targetPosition = targetElement.offsetTop - navHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                        if (mobileDrawer.classList.contains('open')) {
                            toggleMenu();
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>