<style>
    :root {
        --navbar-height: 80px;
        --primary: #3b82f6;
        --primary-dark: #2563eb;
        --text-main: #0f172a;
        --dark: var(--text-main);
        --text-muted: #64748b;
        --bg-body: #ffffff;
        --bg: var(--bg-body);
        --bg-surface: #ffffff;
        --bg-soft: #f8fafc;
        --border: #e2e8f0;
        --navbar-bg: rgba(255, 255, 255, 0.95);
        --dot-color: #cbd5e1;
    }

    [data-theme="dark"] {
        --text-main: #f8fafc;
        --dark: var(--text-main);
        --text-muted: #94a3b8;
        --bg-body: #0f172a;
        --bg: var(--bg-body);
        --bg-surface: #1e293b;
        --bg-soft: #020617;
        --border: #334155;
        --navbar-bg: rgba(15, 23, 42, 0.95);
        --dot-color: #334155;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--text-muted);
        background: var(--bg-body);
        line-height: 1.6;
        overflow-x: hidden;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .text-dark {
        color: var(--text-main) !important;
    }

    .bg-surface {
        background-color: var(--bg-surface) !important;
    }

    .bg-soft {
        background-color: var(--bg-soft) !important;
    }

    .border-theme {
        border-color: var(--border) !important;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
        width: 100%;
    }

    a {
        text-decoration: none;
        color: inherit;
        transition: 0.3s;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 32px;
        font-weight: 700;
        border-radius: 50px;
        transition: all 0.3s ease;
        gap: 10px;
        font-size: 15px;
        cursor: pointer;
        border: none;
        letter-spacing: 0.5px;
        text-decoration: none;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
    }

    .btn-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.5);
    }

    .d-none {
        display: none !important;
    }

    .d-block {
        display: block !important;
    }

    .d-flex {
        display: flex !important;
    }

    .gap-4 {
        gap: 1rem !important;
    }

    .gap-8 {
        gap: 2rem !important;
    }

    .text-center {
        text-align: center !important;
    }

    .text-white {
        color: white !important;
    }

    .mb-4 {
        margin-bottom: 1rem !important;
    }

    .mb-8 {
        margin-bottom: 2rem !important;
    }

    .mb-12 {
        margin-bottom: 3rem !important;
    }

    .mt-4 {
        margin-top: 1rem !important;
    }

    .mt-8 {
        margin-top: 2rem !important;
    }

    .mt-12 {
        margin-top: 3rem !important;
    }

    .mt-20 {
        margin-top: 5rem !important;
    }

    .py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    .justify-center {
        justify-content: center !important;
    }

    .items-center {
        align-items: center !important;
    }

    .topbar {
        background: #000;
        color: #fff;
        font-size: 13px;
        font-weight: 500;
        text-align: center;
        padding: 12px 0;
        position: relative;
        z-index: 1100;
    }

    body.menu-open .topbar {
        display: none !important;
    }

    .navbar {
        background: var(--navbar-bg);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid var(--border);
        height: var(--navbar-height);
        position: sticky;
        top: 0;
        z-index: 1000;
        transition: box-shadow 0.3s ease;
    }

    .navbar.scrolled {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
    }

    .brand {
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        font-weight: 800;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
    }

    .brand i {
        color: var(--primary);
    }

    .desktop-nav {
        display: flex;
        gap: 32px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .desktop-nav a {
        font-weight: 600;
        font-size: 14px;
        color: var(--text-muted);
    }

    .desktop-nav a:hover,
    .desktop-nav a.active {
        color: var(--primary);
    }

    .desktop-actions {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .desktop-actions a.nav-link {
        font-weight: 600;
        font-size: 14px;
        color: var(--text-muted);
    }

    .desktop-actions a.nav-link:hover {
        color: var(--primary);
    }

    .mobile-menu-toggle {
        display: none;
    }

    .burger-btn {
        background: none;
        border: none;
        font-size: 24px;
        color: var(--text-main);
        cursor: pointer;
        padding: 4px;
    }

    .mobile-menu-overlay {
        position: fixed;
        top: var(--navbar-height);
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 900;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease;
    }

    .mobile-menu-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .mobile-menu-drawer {
        position: fixed;
        top: var(--navbar-height);
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: var(--bg-body);
        background-image: radial-gradient(var(--dot-color) 1px, transparent 1px);
        background-size: 32px 32px;
        z-index: 950;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        border-top: 1px solid var(--border);
        display: flex;
        flex-direction: column;
    }

    .mobile-menu-drawer.open {
        transform: translateX(0);
    }

    .mobile-nav-link:active {
        background: var(--bg-soft);
        color: var(--primary);
    }

    .mobile-nav-content {
        flex: 1;
        overflow-y: auto;
        padding: 24px 24px 0;
    }

    .mobile-nav-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 0;
        border-bottom: 1px solid var(--border);
        font-weight: 600;
        font-size: 16px;
        color: var(--text-main);
        text-decoration: none;
        transition: padding-left 0.2s;
    }

    .mobile-nav-link:hover {
        color: var(--primary);
        padding-left: 8px;
    }

    .mobile-menu-footer {
        padding: 24px;
        background: var(--bg-soft);
        border-top: 1px solid var(--border);
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .mobile-menu-footer .btn {
        width: 100%;
        border-radius: 12px;
        padding: 14px;
    }

    @media (max-width: 992px) {

        .desktop-nav,
        .desktop-actions {
            display: none !important;
        }

        .mobile-menu-toggle {
            display: flex !important;
        }

        :root {
            --navbar-height: 70px;
        }

        .navbar-container {
            position: relative;
        }
    }

    .hero-title {
        font-family: 'Montserrat', sans-serif;
        font-size: clamp(32px, 5vw, 64px);
        font-weight: 900;
        line-height: 1.05;
        color: var(--dark);
        margin-bottom: 20px;
    }

    .py-24 {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .mb-12 {
        margin-bottom: 32px;
    }

    .gradient-text {
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .rotation-container {
        display: inline-flex;
        flex-direction: column;
        height: 1.25em;
        overflow: hidden;
        vertical-align: bottom;
        position: relative;
    }

    .rotation-wrapper {
        display: flex;
        flex-direction: column;
        transition: transform 0.6s cubic-bezier(0.76, 0, 0.24, 1);
    }

    .rotation-item {
        height: 1.25em;
        line-height: 1.25em;
        white-space: nowrap;
    }

    @keyframes blink {

        from,
        to {
            border-color: transparent
        }

        50% {
            border-color: var(--primary)
        }
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -12px;
    }

    .col-6 {
        flex: 0 0 50%;
        padding: 0 12px;
    }

    .col-4 {
        flex: 0 0 33.33%;
        padding: 0 12px;
        margin-bottom: 24px;
    }

    .col-3 {
        flex: 0 0 25%;
        padding: 0 12px;
        margin-bottom: 24px;
    }

    @media (max-width: 768px) {
        .row {
            margin: 0 -8px;
        }

        .col-6,
        .col-4,
        .col-3 {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            padding: 0 8px !important;
            margin-bottom: 24px;
        }

        .hero-title {
            text-align: center;
            font-size: 32px !important;
        }

        section p {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-title {
            text-align: center;
            font-size: 36px !important;
        }

        .hero-preview-image {
            width: 100% !important;
            transform: none !important;
            margin-top: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
            transition: none !important;
        }

        .hero-preview-image:hover {
            transform: none !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .hero-badge {
            position: static !important;
            margin-top: 20px;
            display: inline-flex;
            left: auto !important;
            bottom: auto !important;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }

        .py-24 {
            padding-top: 48px;
            padding-bottom: 48px;
        }

        .footer .row {
            flex-direction: column;
        }

        .footer .col-6 {
            margin-bottom: 40px;
        }

        .container {
            padding: 0 16px;
        }

        .feature-card {
            padding: 24px !important;
            text-align: left !important;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        #components .feature-card {
            flex-direction: row !important;
            align-items: center !important;
            gap: 20px !important;
            padding: 20px !important;
        }

        #components .feature-card>div:first-child {
            margin-bottom: 0 !important;
            flex-shrink: 0;
        }

        #components .feature-card p {
            text-align: left !important;
            margin: 4px 0 0 0 !important;
        }

        .feature-card div[style*="width: 64px"] {
            width: 54px !important;
            height: 54px !important;
            margin: 0 0 20px 0 !important;
        }

        .feature-card i {
            font-size: 20px !important;
        }

        .feature-card h3 {
            font-size: 16px !important;
            margin-bottom: 8px !important;
        }

        .feature-card p {
            text-align: left !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            font-size: 14px !important;
            line-height: 1.6 !important;
        }

        .quick-stats {
            flex-direction: column !important;
            gap: 28px !important;
            align-items: center !important;
            text-align: center !important;
            margin-top: 40px !important;
            padding-top: 0 !important;
            border-top: none !important;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stat-item div:last-child {
            white-space: nowrap;
        }

        section div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }

        section div[style*="font-size: 72px"] {
            font-size: 48px !important;
        }

        section h2[style*="font-size: 56px"] {
            font-size: 32px !important;
            line-height: 1.3 !important;
        }

        section h2[style*="font-size: 48px"] {
            font-size: 28px !important;
        }

        .perf-stats .col-4 {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            margin-bottom: 48px !important;
        }

        .perf-stats .col-4:last-child {
            margin-bottom: 0 !important;
        }
    }

    .feature-card {
        background: var(--bg-surface);
        border: 1px solid var(--border);
        border-radius: 24px;
        padding: 40px;
        height: 100%;
        transition: all 0.3s;
        cursor: pointer;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }

    .footer {
        background: #000;
        color: #fff;
        padding: 100px 0 60px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .footer h4 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 24px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .footer p {
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.8;
        font-size: 16px;
    }

    .footer a {
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 16px;
        display: inline-block;
    }

    .footer a:hover {
        color: var(--primary);
        transform: translateX(4px);
    }

    .footer-legal {
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        margin-top: 80px;
        padding-top: 40px;
        text-align: center;
        font-size: 15px;
        color: rgba(255, 255, 255, 0.5);
        line-height: 1.8;
    }

    .footer-legal a {
        color: var(--primary);
        opacity: 0.9;
        font-weight: 500;
        font-size: 15px;
    }

    .footer-legal a:hover {
        opacity: 1;
        text-decoration: underline;
        transform: none;
    }

    .py-24 {
        padding-top: 96px;
        padding-bottom: 96px;
    }

    .mb-12 {
        margin-bottom: 48px;
    }

    section[id] {
        scroll-margin-top: var(--navbar-height);
    }

    @media (min-width: 769px) {
        .hero-preview-image:hover {
            transform: perspective(1500px) rotateY(0deg) rotateX(0deg) scale(1.20) !important;
            box-shadow: 0 50px 100px rgba(0, 0, 0, 0.3) !important;
        }
    }

    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
