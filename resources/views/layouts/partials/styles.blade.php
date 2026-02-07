<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body,
    input,
    button,
    select,
    textarea,
    optgroup {
        font-family: 'Inter', -apple-system, system-ui, sans-serif;
    }

    /* Global Placeholder Reset */
    ::placeholder {
        font-family: 'Inter', -apple-system, system-ui, sans-serif !important;
        opacity: 1;
        /* For Firefox */
    }

    :-ms-input-placeholder {
        font-family: 'Inter', sans-serif !important;
    }

    ::-ms-input-placeholder {
        font-family: 'Inter', sans-serif !important;
    }

    :root {
        --bg-primary: #ffffff;
        --bg-secondary: #f4f6f8;
        --bg-sidebar: #ffffff;
        --text-primary: #111827;
        --text-secondary: #4b5563;
        --text-muted: #9ca3af;
        --border-color: #e5e7eb;
        --accent-color: #3b82f6;
        --primary: var(--accent-color);
        --accent-hover: #2563eb;
        --success-color: #10b981;
        --danger-color: #ef4444;
        --warning-color: #f59e0b;
        --info-color: #0ea5e9;
        --hover-bg: #f3f4f6;
        --bg-card: #ffffff;
        --sidebar-width: 280px;
        --sidebar-collapsed: 80px;
        --content-padding: 32px;
        --font-base: 16px;
    }

    [data-theme="dark"] {
        --bg-primary: #1a1a1a;
        --bg-secondary: #121212;
        --bg-sidebar: #1f1f1f;
        --text-primary: #ffffff;
        --text-secondary: #e0e0e0;
        --text-muted: #888888;
        --border-color: #333333;
        --accent-color: #60a5fa;
        --primary: var(--accent-color);
        --accent-hover: #3b82f6;
        --bg-card: #1f1f1f;
        --hover-bg: #2a2a2a;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', -apple-system, system-ui, sans-serif;
        background: var(--bg-secondary);
        background-image: radial-gradient(rgba(0, 0, 0, 0.12) 0.8px, transparent 1.5px);
        background-size: 12px 12px;
        background-attachment: fixed;
        color: var(--text-primary);
        font-size: var(--font-base);
        line-height: 1.75;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        letter-spacing: -0.015em;
        overflow-x: hidden;
        width: 100%;
    }

    [data-theme="dark"] body {
        background-image: radial-gradient(rgba(255, 255, 255, 0.08) 0.8px, transparent 1.5px);
    }

    .app-layout {
        display: flex;
        min-height: 100vh;
    }

    /* Sidebar - Modern */
    .sidebar {
        width: var(--sidebar-width);
        background: var(--bg-sidebar);
        border-right: 1px solid var(--border-color);
        position: fixed;
        height: 100vh;
        left: 0;
        top: 0;
        transition: width 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 100;
        display: flex;
        flex-direction: column;
    }

    .sidebar.collapsed {
        width: var(--sidebar-collapsed);
    }

    .w-full {
        width: 100% !important;
    }

    /* Utility Classes */
    .w-full {
        width: 100% !important;
    }

    .w-120 {
        width: 120px !important;
    }

    .h-full {
        height: 100% !important;
    }

    .h-120 {
        height: 120px !important;
    }

    .h-100 {
        height: 100px !important;
    }

    .h-16 {
        height: 16px !important;
    }

    .w-16 {
        width: 16px !important;
    }

    .max-w-400 {
        max-width: 400px !important;
    }

    .max-w-500 {
        max-width: 500px !important;
    }

    .max-w-600 {
        max-width: 600px !important;
    }

    .max-w-full {
        max-width: 100% !important;
    }

    .d-flex {
        display: flex !important;
    }

    .d-grid {
        display: grid !important;
    }

    .d-none {
        display: none !important;
    }

    .d-block {
        display: block !important;
    }

    .flex-column {
        flex-direction: column !important;
    }

    .flex-1 {
        flex: 1 !important;
    }

    .justify-between {
        justify-content: space-between !important;
    }

    .justify-center {
        justify-content: center !important;
    }

    .justify-end {
        justify-content: flex-end !important;
    }

    .items-center {
        align-items: center !important;
    }

    .gap-1 {
        gap: 4px !important;
    }

    .gap-2 {
        gap: 8px !important;
    }

    .gap-3 {
        gap: 12px !important;
    }

    .gap-4 {
        gap: 16px !important;
    }

    .gap-6 {
        gap: 24px !important;
    }

    .gap-8 {
        gap: 32px !important;
    }

    .gap-10 {
        gap: 40px !important;
    }

    .flex-wrap {
        flex-wrap: wrap !important;
    }

    .gap-8 {
        gap: 32px !important;
    }

    .gap-10 {
        gap: 40px !important;
    }

    .grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }

    .col-span-2 {
        grid-column: span 2 / span 2 !important;
    }

    .relative {
        position: relative !important;
    }

    .absolute {
        position: absolute !important;
    }

    .fixed {
        position: fixed !important;
    }

    .inset-0 {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0 !important;
    }

    .top-0 {
        top: 0 !important;
    }

    .top-4 {
        top: 16px !important;
    }

    .left-0 {
        left: 0 !important;
    }

    .right-4 {
        right: 16px !important;
    }

    .bottom-0 {
        bottom: 0 !important;
    }

    .z-50 {
        z-index: 50 !important;
    }

    .z-modal {
        z-index: 9999 !important;
    }

    .overflow-hidden {
        overflow: hidden !important;
    }

    .overflow-x-auto {
        overflow-x: auto !important;
    }

    .object-cover {
        object-fit: cover !important;
    }

    .resize-none {
        resize: none !important;
    }

    .mix-hard-light {
        mix-blend-mode: hard-light !important;
    }

    .mix-plus-darker {
        mix-blend-mode: plus-darker !important;
    }

    .cursor-pointer {
        cursor: pointer !important;
    }

    .bg-primary {
        background-color: var(--bg-primary) !important;
    }

    .bg-secondary {
        background-color: var(--bg-secondary) !important;
    }

    .bg-sidebar {
        background-color: var(--bg-sidebar) !important;
    }

    .bg-overlay {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .bg-none {
        background: none !important;
    }

    .bg-danger-subtle {
        background-color: color-mix(in srgb, var(--bg-primary), var(--danger-color) 4%) !important;
    }

    .border {
        border: 1px solid var(--border-color) !important;
    }

    .border-primary {
        border-color: var(--border-color) !important;
    }

    .border-none {
        border: none !important;
    }

    .border-2 {
        border-width: 2px !important;
    }

    .border-dashed {
        border-style: dashed !important;
    }

    .border-danger-subtle {
        border: 1px solid rgba(239, 68, 68, 0.2) !important;
    }

    .rounded {
        border-radius: 8px !important;
    }

    .rounded-lg {
        border-radius: 10px !important;
    }

    .rounded-xl {
        border-radius: 12px !important;
    }

    .rounded-2xl {
        border-radius: 16px !important;
    }

    .rounded-full {
        border-radius: 9999px !important;
    }

    .rounded-32 {
        border-radius: 32px !important;
    }

    .text-primary {
        color: var(--text-primary) !important;
    }

    .text-secondary {
        color: var(--text-secondary) !important;
    }

    .text-muted {
        color: var(--text-muted) !important;
    }

    .text-danger {
        color: var(--danger-color) !important;
    }

    .text-danger-dark {
        color: #991b1b !important;
    }

    .text-white {
        color: #ffffff !important;
    }

    .text-accent {
        color: var(--accent-color) !important;
    }

    .text-xs {
        font-size: 11px !important;
    }

    .text-sm {
        font-size: 13px !important;
    }

    .text-base {
        font-size: 15px !important;
    }

    .text-lg {
        font-size: 18px !important;
    }

    .text-xl {
        font-size: 20px !important;
    }

    .text-3xl {
        font-size: 32px !important;
    }

    .fw-medium {
        font-weight: 500 !important;
    }

    .fw-semibold {
        font-weight: 600 !important;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    .text-center {
        text-align: center !important;
    }

    .lh-tight {
        line-height: 1.25 !important;
    }

    .uppercase {
        text-transform: uppercase !important;
    }

    .tracking-wider {
        letter-spacing: 0.05em !important;
    }

    .letter-spacing-1 {
        letter-spacing: 1px !important;
    }

    .lh-base {
        line-height: 1.5 !important;
    }

    .lh-relaxed {
        line-height: 1.6 !important;
    }

    .shadow-lg {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
    }

    .transition-all {
        transition: all 0.2s ease !important;
    }

    .font-12 {
        font-size: 12px !important;
    }

    .font-13 {
        font-size: 13px !important;
    }

    .font-14 {
        font-size: 14px !important;
    }

    .font-32 {
        font-size: 32px !important;
    }

    .m-0 {
        margin: 0 !important;
    }

    .mt-1 {
        margin-top: 4px !important;
    }

    .mt-2 {
        margin-top: 8px !important;
    }

    .mt-3 {
        margin-top: 12px !important;
    }

    .mt-4 {
        margin-top: 16px !important;
    }

    .mt-5 {
        margin-top: 20px !important;
    }

    .mb-1 {
        margin-bottom: 4px !important;
    }

    .mb-2 {
        margin-bottom: 8px !important;
    }

    .mb-3 {
        margin-bottom: 12px !important;
    }

    .mb-4 {
        margin-bottom: 16px !important;
    }

    .mb-5 {
        margin-bottom: 20px !important;
    }

    .mb-6 {
        margin-bottom: 24px !important;
    }

    .mb-8 {
        margin-bottom: 32px !important;
    }

    .mb-10 {
        margin-bottom: 40px !important;
    }

    .mb-12 {
        margin-bottom: 48px !important;
    }

    .p-0 {
        padding: 0 !important;
    }

    .p-2 {
        padding: 8px !important;
    }

    .p-3 {
        padding: 12px !important;
    }

    .p-4 {
        padding: 16px !important;
    }

    .p-5 {
        padding: 20px !important;
    }

    .p-6 {
        padding: 24px !important;
    }

    .p-8 {
        padding: 32px !important;
    }

    .px-3 {
        padding-left: 12px !important;
        padding-right: 12px !important;
    }

    .py-1 {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
    }

    .ms-2 {
        margin-left: 8px !important;
    }

    .me-2 {
        margin-right: 8px !important;
    }

    .me-3 {
        margin-right: 12px !important;
    }

    /* Typography Utilities */
    /* Typography Utilities */
    h1,
    .h1 {
        font-size: 32px;
        font-weight: 700;
        line-height: 1.2;
        letter-spacing: -0.025em;
        color: var(--text-primary);
    }

    h2,
    .h2 {
        font-size: 24px;
        font-weight: 700;
        line-height: 1.3;
        letter-spacing: -0.02em;
        color: var(--text-primary);
    }

    /* List Utilities */
    .list-disc {
        list-style-type: disc !important;
        padding-left: 24px !important;
    }

    .list-decimal {
        list-style-type: decimal !important;
        padding-left: 24px !important;
    }

    .list-item {
        margin-bottom: 6px;
    }

    .ps-4 {
        padding-left: 16px !important;
    }

    h3,
    .h3 {

        font-size: 20px;
        font-weight: 600;
        line-height: 1.4;
        letter-spacing: -0.015em;
        color: var(--text-primary);
    }

    h4,
    .h4 {
        font-size: 18px;
        font-weight: 600;
        line-height: 1.5;
        color: var(--text-primary);
    }

    h5,
    .h5 {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.5;
        color: var(--text-primary);
    }

    h6,
    .h6 {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.5;
        color: var(--text-primary);
    }

    @media (max-width: 768px) {

        h1,
        .h1 {
            font-size: 26px;
        }

        h2,
        .h2 {
            font-size: 22px;
        }

        h3,
        .h3 {
            font-size: 19px;
        }

        .content-subtitle {
            font-size: 16px !important;
        }
    }

    @media (max-width: 576px) {

        h1,
        .h1 {
            font-size: 24px;
        }

        h2,
        .h2 {
            font-size: 20px;
        }

        h3,
        .h3 {
            font-size: 18px;
        }
    }

    .sidebar-header {
        padding: 0 16px 0 24px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 64px;
    }

    .sidebar-brand {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: var(--text-primary);
        letter-spacing: -0.03em;
        white-space: nowrap;
        transition: none !important;
        display: flex;
        align-items: center;
        gap: 10px;
        user-select: none;
        text-decoration: none;
        line-height: 1;
    }

    .sidebar-brand i {
        color: var(--primary);
        font-size: 18px;
    }

    .sidebar.collapsed .sidebar-brand {
        display: none;
    }

    .sidebar-toggle {
        background: transparent;
        border: none;
        color: var(--text-secondary);
        cursor: pointer;
        padding: 0;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        transition: all 0.2s;
    }

    .sidebar-toggle .fa-bars {
        font-size: 20px;
        font-weight: bold;
    }

    .sidebar.collapsed .sidebar-header {
        justify-content: center;
        padding: 0;
    }

    /* Badge Status - Subtle Style */
    .badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: -0.01em;
    }

    .badge i {
        font-size: 12px;
        line-height: 1;
    }

    .badge-success {
        background: rgba(16, 185, 129, 0.1);
        color: #065f46;
    }

    .badge-danger {
        background: rgba(239, 68, 68, 0.1);
        color: #991b1b;
    }

    .badge-warning {
        background: rgba(245, 158, 11, 0.1);
        color: #92400e;
    }

    .badge-info {
        background: rgba(59, 130, 246, 0.1);
        color: #1e40af;
    }

    .badge-primary {
        background: rgba(59, 130, 246, 0.1);
        color: #1e40af;
    }

    .badge-secondary {
        background: rgba(100, 116, 139, 0.1);
        color: #475569;
    }

    [data-theme="dark"] .badge-success {
        background: rgba(16, 185, 129, 0.2);
        color: #34d399;
    }

    [data-theme="dark"] .badge-danger {
        background: rgba(239, 68, 68, 0.2);
        color: #f87171;
    }

    [data-theme="dark"] .badge-warning {
        background: rgba(245, 158, 11, 0.2);
        color: #fbbf24;
    }

    [data-theme="dark"] .badge-info {
        background: rgba(59, 130, 246, 0.2);
        color: #60a5fa;
    }

    [data-theme="dark"] .badge-primary {
        background: rgba(59, 130, 246, 0.2);
        color: #60a5fa;
    }

    [data-theme="dark"] .badge-secondary {
        background: rgba(148, 163, 184, 0.2);
        color: #cbd5e1;
    }

    /* Alerts - Synced with Toast Aesthetics */
    .alert {
        padding: 16px 20px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        border: 1px solid transparent;
        line-height: 1.5;
    }

    .alert-success {
        background: rgba(236, 253, 245, 0.9);
        color: #065f46;
        border-color: rgba(16, 185, 129, 0.2);
    }

    .alert-success .fw-bold {
        color: #059669;
    }

    .alert-error,
    .alert-danger {
        background: rgba(254, 242, 242, 0.9);
        color: #991b1b;
        border-color: rgba(239, 68, 68, 0.2);
    }

    .alert-danger .fw-bold {
        color: #dc2626;
    }

    .alert-warning {
        background: rgba(255, 251, 235, 0.9);
        color: #92400e;
        border-color: rgba(245, 158, 11, 0.2);
    }

    .alert-warning .fw-bold {
        color: #d97706;
    }

    .alert-info,
    .alert-primary {
        background: rgba(239, 246, 255, 0.9);
        color: #1e40af;
        border-color: rgba(59, 130, 246, 0.2);
    }

    .alert-info .fw-bold,
    .alert-primary .fw-bold {
        color: #2563eb;
    }

    .alert-secondary {
        background: rgba(249, 250, 251, 0.9);
        color: #374151;
        border-color: rgba(107, 114, 128, 0.2);
    }

    /* Dark Mode Alerts - High Contrast */
    [data-theme="dark"] .alert-success {
        background: rgba(6, 78, 59, 0.95);
        color: #ffffff;
        border-color: rgba(52, 211, 153, 0.3);
    }

    [data-theme="dark"] .alert-success .fw-bold {
        color: #34d399;
    }

    [data-theme="dark"] .alert-error,
    [data-theme="dark"] .alert-danger {
        background: rgba(127, 29, 29, 0.95);
        color: #ffffff;
        border-color: rgba(248, 113, 113, 0.3);
    }

    [data-theme="dark"] .alert-danger .fw-bold {
        color: #f87171;
    }

    [data-theme="dark"] .alert-warning {
        background: rgba(120, 53, 15, 0.95);
        color: #ffffff;
        border-color: rgba(251, 191, 36, 0.3);
    }

    [data-theme="dark"] .alert-warning .fw-bold {
        color: #fbbf24;
    }

    [data-theme="dark"] .alert-info,
    [data-theme="dark"] .alert-primary {
        background: rgba(30, 58, 138, 0.95);
        color: #ffffff;
        border-color: rgba(96, 165, 250, 0.3);
    }

    [data-theme="dark"] .alert-info .fw-bold,
    [data-theme="dark"] .alert-primary .fw-bold {
        color: #60a5fa;
    }

    [data-theme="dark"] .alert-secondary {
        background: rgba(31, 41, 55, 0.95);
        color: #ffffff;
        border-color: rgba(75, 85, 99, 0.3);
    }

    /* Animations - Instant & Subtle */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .animate-in {
        animation: fadeIn 0.15s ease-out forwards;
    }

    @keyframes swing {

        0%,
        100% {
            transform: translateY(0) rotate(0);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    .swing-animation {
        display: inline-block;
        animation: swing 3s ease-in-out infinite;
    }



    .sidebar-toggle:hover {
        background: var(--hover-bg);
        color: var(--text-primary);
    }

    .sidebar-nav {
        flex: 1;
        padding: 20px 16px;
        overflow-y: auto;
    }

    /* Global Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
        border: 2px solid transparent;
        background-clip: content-box;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
        border: 2px solid transparent;
        background-clip: content-box;
    }

    [data-theme="dark"] ::-webkit-scrollbar-thumb {
        background: #475569;
    }

    [data-theme="dark"] ::-webkit-scrollbar-thumb:hover {
        background: #64748b;
    }

    .nav-item {
        display: flex;
        align-items: center;
        padding: 10px 14px;
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        border-radius: 8px;
        margin-bottom: 4px;
        transition: all 0.15s ease;
        position: relative;
        cursor: pointer;
        user-select: none;
    }

    .nav-item:hover {
        background: var(--hover-bg);
        color: var(--text-primary);
    }

    .nav-item.active {
        background: var(--hover-bg);
        color: var(--accent-color);
        font-weight: 600;
    }

    .sidebar.collapsed .nav-item {
        justify-content: center;
        padding: 10px 0;
    }

    .nav-item.active::before {
        content: '';
        position: absolute;
        left: -14px;
        top: 20%;
        bottom: 20%;
        width: 4px;
        background: var(--accent-color);
        border-radius: 0 4px 4px 0;
    }

    .sidebar.collapsed .nav-item.active::before {
        left: -16px;
    }

    .nav-icon {
        min-width: 22px;
        text-align: center;
        margin-right: 12px;
        font-size: 20px;
    }

    .sidebar.collapsed .nav-icon {
        margin-right: 0;
    }

    .nav-text {
        flex: 1;
    }

    .sidebar.collapsed .nav-text {
        display: none;
    }

    .nav-item-dropdown.active>.nav-item {
        color: var(--accent-color);
        font-weight: 600;
    }

    .nav-item-dropdown.active>.nav-item .nav-icon {
        color: var(--accent-color);
    }

    .nav-item-dropdown.open .submenu-list {
        display: block;
    }

    .submenu-list {
        display: none;
        padding-left: 28px;
        margin-bottom: 8px;
    }

    .submenu-item {
        position: relative;
        display: flex;
        align-items: center;
        padding: 8px 12px;
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        border-radius: 6px;
        transition: all 0.15s ease;
        user-select: none;
    }

    .submenu-item:hover {
        background: var(--hover-bg);
        color: var(--text-primary);
    }

    .submenu-item.active {
        background: var(--hover-bg);
        color: var(--accent-color);
        font-weight: 600;
    }

    .submenu-item.active::before {
        content: '';
        position: absolute;
        left: -42px;
        top: 20%;
        bottom: 20%;
        width: 4px;
        background: var(--accent-color);
        border-radius: 0 4px 4px 0;
    }

    .submenu-arrow {
        transition: transform 0.2s ease;
        font-size: 10px;
    }

    .nav-item-dropdown.open .submenu-arrow {
        transform: rotate(180deg);
    }

    .sidebar.collapsed .submenu-list {
        display: none !important;
    }

    .sidebar.collapsed .submenu-arrow {
        display: none !important;
    }

    .sidebar.collapsed .sidebar-nav {
        overflow: visible;
    }

    /* Floating Submenu when Collapsed - Premium Style */
    .sidebar.collapsed .nav-item-dropdown {
        position: relative;
    }

    .sidebar.collapsed .submenu-list {
        display: flex !important;
        flex-direction: column;
        position: absolute;
        left: 72px;
        top: -6px;
        width: 200px;
        background: var(--bg-sidebar);
        padding: 8px;
        border: 1px solid var(--border-color);
        border-radius: 14px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        visibility: hidden;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.2s ease, visibility 0s 0.2s;
        pointer-events: none;
    }

    .sidebar.collapsed .nav-item-dropdown:hover .submenu-list {
        visibility: visible;
        opacity: 1;
        transform: translateX(0);
        transition: all 0.2s ease, visibility 0s 0s;
        pointer-events: auto;
    }

    /* Invisible bridge for maximum stability when moving mouse */
    .sidebar.collapsed .nav-item-dropdown::after {
        content: '';
        position: absolute;
        top: 0;
        right: -30px;
        bottom: 0;
        width: 40px;
        background: transparent;
        display: none;
    }

    .sidebar.collapsed .nav-item-dropdown:hover::after {
        display: block;
    }

    /* Floating Menu Title */
    .sidebar.collapsed .nav-item-dropdown .submenu-list::after {
        content: 'UI Elements';
        display: block;
        padding: 12px 14px;
        font-size: 13px;
        font-weight: 700;
        color: var(--text-primary);
        border-bottom: 1px solid var(--border-color);
        margin-bottom: 8px;
        order: -1;
    }

    .sidebar.collapsed .submenu-item {
        padding: 10px 14px;
        margin: 0 4px;
        border-radius: 8px;
        font-size: 13px;
    }

    .sidebar.collapsed .submenu-item.active::before {
        display: none;
    }

    /* Single Menu Item Tooltips (Collapsed Sidebar) */
    .sidebar.collapsed .nav-item[data-tooltip]:not(.nav-item-dropdown .nav-item):hover::after {
        content: attr(data-tooltip);
        position: absolute;
        left: 72px;
        top: 50%;
        transform: translateY(-50%) translateX(0);
        background: var(--bg-sidebar);
        color: var(--text-primary);
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 600;
        border: 1px solid var(--border-color);
        box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1);
        white-space: nowrap;
        z-index: 1000;
        animation: tooltipPop 0.2s ease-out;
    }

    @keyframes tooltipPop {
        from {
            opacity: 0;
            transform: translateY(-50%) translateX(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(-50%) translateX(0);
        }
    }

    .nav-badge {
        background: var(--accent-color);
        color: white;
        font-size: 11px;
        font-weight: 700;
        padding: 3px 8px;
        border-radius: 12px;
        margin-left: auto;
    }

    .sidebar.collapsed .nav-badge {
        display: none;
    }

    .nav-section {
        padding: 20px 14px 10px;
        font-size: 11px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.8px;
        user-select: none;
    }

    .sidebar.collapsed .nav-section {
        display: none;
    }

    .sidebar-footer {
        padding: 0 20px;
        border-top: 1px solid var(--border-color);
        font-size: 14px;
        font-weight: 500;
        color: var(--text-secondary);
        display: flex;
        align-items: center;
        gap: 8px;
        height: 72px;
    }

    .sidebar.collapsed .sidebar-footer {
        justify-content: center;
    }

    .sidebar.collapsed .sidebar-footer .nav-text {
        display: none;
    }

    /* Main Content */
    .main-content {
        min-width: 0;
        margin-left: var(--sidebar-width);
        display: flex;
        flex-direction: column;
        transition: margin-left 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        min-height: 100vh;
        width: 100%;
    }

    .sidebar.collapsed~.main-content {
        margin-left: var(--sidebar-collapsed);
    }

    /* Topbar - Modern */
    .topbar {
        background: var(--bg-primary);
        border-bottom: 1px solid var(--border-color);
        padding: 0 32px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 90;
    }

    .topbar-left {
        display: flex;
        align-items: center;
    }

    .topbar-left h1 {
        font-size: 20px;
        font-weight: 600;
        color: var(--text-primary);
        letter-spacing: -0.4px;
        margin: 0;
    }

    /* Utilities for Responsive UI */
    .visible-mobile {
        display: none !important;
    }

    .hidden-desktop {
        display: flex !important;
    }

    @media (max-width: 991px) {
        .visible-mobile {
            display: flex !important;
        }

        .hidden-desktop {
            display: none !important;
        }
    }

    /* Mobile Search Toggle Icon */
    .mobile-search-btn {
        background: transparent;
        border: none;
        color: var(--text-secondary);
        font-size: 18px;
        padding: 8px;
        cursor: pointer;
        margin-left: 8px;
        transition: color 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mobile-search-btn:hover {
        color: var(--primary);
    }

    /* Desktop Inline Search - Left Aligned Premium */
    .search-container {
        position: relative;
        width: 380px;
        z-index: 100;
    }

    .search-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
        font-size: 13px;
        pointer-events: none;
        z-index: 10;
        transition: color 0.2s;
    }

    .search-input {
        width: 100%;
        height: 40px;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 0 80px 0 40px;
        /* Lebar padding kanan untuk menampung KBD */
        font-size: 13px;
        color: var(--text-primary);
        transition: all 0.2s ease;
        font-family: inherit;
    }

    .search-input-kbds {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        gap: 4px;
        pointer-events: none;
        transition: opacity 0.2s;
    }

    .search-input:focus~.search-input-kbds {
        opacity: 0;
    }

    .search-kbd {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        color: var(--text-muted);
        display: inline-block;
        font-family: inherit;
        font-size: 10px;
        font-weight: 700;
        line-height: 1;
        padding: 3px 6px;
        white-space: nowrap;
        text-transform: uppercase;
    }

    .search-input:focus {
        outline: none;
        border-color: rgba(59, 130, 246, 0.3);
        background: var(--bg-primary);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    }

    .search-input:focus+.search-icon {
        color: var(--primary);
    }

    .search-dropdown {
        position: absolute;
        top: calc(100% + 8px);
        left: 0;
        width: 100%;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        z-index: 1000;
        display: none;
        overflow: hidden;
        backdrop-filter: blur(10px);
    }

    .search-dropdown.active {
        display: block;
        animation: searchAppear 0.2s ease-out;
    }

    .search-results {
        max-height: 400px;
        overflow-y: auto;
        padding: 8px;
    }

    .search-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 12px;
        border-radius: 8px;
        color: var(--text-primary);
        text-decoration: none;
        transition: all 0.15s;
    }

    .search-item:hover,
    .search-item.selected {
        background: var(--bg-secondary);
        border-color: rgba(59, 130, 246, 0.15);
    }

    /* Professional Icon Behavior */
    .search-item i {
        width: 38px;
        height: 38px;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        color: var(--text-secondary);
        flex-shrink: 0;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .search-item:hover i,
    .search-item.selected i {
        background: rgba(59, 130, 246, 0.08);
        border-color: rgba(59, 130, 246, 0.3);
        color: var(--primary);
        transform: scale(1.05);
    }

    .search-item-title {
        font-weight: 500;
        font-size: 14px;
        display: block;
        margin-bottom: 2px;
    }

    .search-item-category {
        font-size: 12px;
        color: var(--text-muted);
    }

    @keyframes searchAppear {
        from {
            opacity: 0;
            transform: translateY(-8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Command Palette - Elite (Mobile/Shortcut Only) */
    .cmd-palette {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        backdrop-filter: blur(4px);
        z-index: 9999;
        display: none;
        align-items: flex-start;
        justify-content: center;
        padding: 10vh 20px;
    }

    .cmd-palette.active {
        display: flex;
        animation: cmdFadeIn 0.2s ease-out;
    }

    .cmd-palette-content {
        width: 100%;
        max-width: 650px;
        background: var(--bg-primary);
        border-radius: 16px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        overflow: hidden;
        border: 1px solid var(--border-color);
        animation: cmdSlideDown 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .cmd-palette-header {
        display: flex;
        align-items: center;
        padding: 0 20px;
        height: 70px;
        /* Fixed height for consistent alignment */
        border-bottom: 1px solid var(--border-color);
        gap: 16px;
    }

    .cmd-search-icon {
        font-size: 20px;
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cmd-input {
        flex: 1;
        border: none;
        background: transparent;
        font-size: 16px;
        /* Prevents iOS auto-zoom */
        color: var(--text-primary);
        outline: none;
        font-family: 'Inter', sans-serif !important;
    }

    .cmd-close-btn {
        background: transparent;
        border: none;
        color: var(--text-muted);
        font-size: 18px;
        padding: 5px;
        cursor: pointer;
        display: none;
        align-items: center;
        justify-content: center;
    }

    .cmd-close-btn:hover {
        color: var(--danger-color);
    }

    .cmd-esc-kbd {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 4px;
        padding: 2px 6px;
        font-size: 10px;
        color: var(--text-muted);
        font-weight: 600;
    }

    @media (max-width: 640px) {

        .cmd-esc-kbd,
        .cmd-palette-footer {
            display: none !important;
        }

        .cmd-close-btn {
            display: flex !important;
        }

        .cmd-palette {
            padding: 0;
            background: var(--bg-primary);
            /* Full solid on mobile */
        }

        .cmd-palette-content {
            height: 100%;
            border-radius: 0;
            max-width: 100%;
            border: none;
            box-shadow: none;
        }

        .cmd-palette-header {
            padding: 12px 16px;
            height: 60px;
        }

        .cmd-search-icon {
            font-size: 16px;
        }
    }

    .cmd-palette-body {
        max-height: 400px;
        overflow-y: auto;
        padding: 12px;
    }

    @media (max-width: 640px) {
        .cmd-palette-body {
            max-height: calc(100vh - 70px);
        }
    }

    .cmd-item {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 12px 16px;
        border-radius: 12px;
        color: var(--text-primary);
        text-decoration: none;
        transition: all 0.15s;
    }

    .cmd-item:hover,
    .cmd-item.selected {
        background: var(--bg-secondary);
        border-color: rgba(59, 130, 246, 0.15);
    }

    .cmd-item i {
        width: 42px;
        height: 42px;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: var(--text-secondary);
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* High Contrast selected state for Modal */
    .cmd-item:hover i,
    .cmd-item.selected i {
        background: rgba(59, 130, 246, 0.08);
        border-color: rgba(59, 130, 246, 0.3);
        color: var(--primary);
        transform: scale(1.05);
    }

    .cmd-item-info {
        flex: 1;
        min-width: 0;
    }

    .cmd-item-title {
        display: block;
        font-weight: 500;
        font-size: 15px;
        margin-bottom: 2px;
    }

    .cmd-item-category {
        font-size: 13px;
        color: var(--text-muted);
    }

    .cmd-placeholder {
        padding: 80px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--text-muted);
        animation: cmdPlaceholderFade 0.4s ease-out;
    }

    .cmd-placeholder i {
        font-size: 48px;
        margin-bottom: 20px;
        background: linear-gradient(135deg, var(--primary), var(--accent-hover));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        opacity: 0.15;
    }

    .cmd-placeholder span {
        font-weight: 500;
        letter-spacing: 0.02em;
        font-size: 15px;
    }

    @keyframes cmdPlaceholderFade {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .cmd-palette-footer {
        padding: 12px 20px;
        background: var(--bg-secondary);
        border-top: 1px solid var(--border-color);
        display: flex;
        gap: 24px;
    }

    .cmd-help-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 11px;
        color: var(--text-muted);
    }

    .cmd-help-item kbd {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 4px;
        padding: 1px 4px;
        min-width: 18px;
        text-align: center;
    }

    @keyframes cmdFadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes cmdSlideDown {
        from {
            transform: translateY(-20px) scale(0.98);
            opacity: 0;
        }

        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }


    .topbar-right {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 0;
    }

    .topbar-btn {
        background: transparent;
        border: none;
        padding: 0;
        cursor: pointer;
        font-size: 18px;
        color: var(--text-secondary);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        position: relative;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .topbar-btn:hover {
        background: var(--bg-secondary);
        color: var(--primary);
    }

    .btn-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 9px;
        height: 9px;
        background: var(--danger-color);
        border: 2px solid var(--bg-primary);
        border-radius: 50%;
    }

    /* Dropdown - Modern */
    .dropdown {
        position: relative;
    }

    .dropdown-toggle {
        background: transparent;
        border: none;
        padding: 4px 8px;
        cursor: pointer;
        font-size: 14px;
        color: var(--text-primary);
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
        height: 38px;
        transition: all 0.2s;
    }



    .dropdown-toggle:hover {
        /* No background color change */
    }

    .user-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 700;
        overflow: hidden;
    }

    .user-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .mobile-toggle {
        display: none;
        background: transparent;
        border: none;
        color: var(--text-primary);
        font-size: 20px;
        cursor: pointer;
        padding: 8px;
        margin-right: 12px;
        border-radius: 8px;
        transition: all 0.2s;
    }

    .mobile-toggle:hover {
        background: var(--hover-bg);
    }

    .dropdown-user-info {
        max-width: 140px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .dropdown-menu {
        position: absolute;
        top: calc(100% + 20px);
        right: 0;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 14px;
        min-width: 260px;
        padding: 6px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        display: none;
        z-index: 1000;
    }

    [data-theme="dark"] .dropdown-menu {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    .dropdown.active .dropdown-menu {
        display: block;
    }

    .dropdown-header {
        padding: 16px 14px;
        margin-bottom: 4px;
    }

    .dropdown-user-name {
        font-size: 15px;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .dropdown-user-email {
        font-size: 13px;
        color: var(--text-secondary);
    }

    .dropdown-divider {
        height: 1px;
        background: var(--border-color);
        margin: 6px 14px;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 10px 14px;
        color: var(--text-primary);
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        font-weight: 500;
        border-radius: 8px;
        transition: background 0.15s ease;
    }

    .dropdown-item:hover,
    .dropdown-item.active {
        background: var(--hover-bg);
        color: var(--accent-color);
    }

    .dropdown-item.active .dropdown-item-icon {
        color: var(--accent-color);
    }

    .dropdown-item-icon {
        margin-right: 10px;
        font-size: 16px;
        width: 16px;
        color: var(--text-secondary);
    }

    .dropdown-item:hover .dropdown-item-icon {
        color: var(--accent-color);
    }

    .dropdown-item.danger .dropdown-item-icon {
        color: var(--danger-color);
    }

    /* Notification Specific Styling */
    .notif-menu {
        width: 340px;
        padding: 0;
    }

    .notif-list {
        max-height: 320px;
        overflow-y: auto;
    }

    .notif-menu .dropdown-item {
        padding: 12px 16px;
        gap: 14px;
        border-radius: 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.03);
    }

    .notif-menu .dropdown-item:last-child {
        border-bottom: none;
    }

    .notif-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
    }

    .notif-content {
        flex: 1;
        min-width: 0;
    }

    .notif-title {
        font-size: 13.5px;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 2px;
        white-space: normal;
        line-height: 1.4;
    }

    .notif-time {
        font-size: 11px;
        color: var(--text-muted);
    }

    .bg-primary-subtile {
        background-color: rgba(59, 130, 246, 0.1);
    }

    .bg-success-subtile {
        background-color: rgba(16, 185, 129, 0.1);
    }

    .bg-warning-subtile {
        background-color: rgba(245, 158, 11, 0.1);
    }

    @media (max-width: 640px) {

        .notif-menu,
        .dropdown-menu {
            position: fixed;
            top: 75px;
            left: 16px;
            right: 16px;
            width: auto !important;
            max-width: none;
            border-radius: 16px;
            box-shadow: 0 20px 48px -10px rgba(0, 0, 0, 0.25);
            padding: 12px;
        }

        .notif-list {
            max-height: 380px;
        }

        .notif-title {
            font-size: 13px;
        }

        .notif-time {
            font-size: 10px;
            opacity: 0.8;
        }

        .notif-icon {
            width: 38px;
            height: 38px;
            font-size: 14px;
        }
    }

    /* Content - Modern */
    .content {
        flex: 1;
        padding: 36px;
        animation: fadeIn 0.15s ease-out forwards;
    }

    .content-header {
        margin-bottom: 28px;
    }

    .content-title {
        margin-bottom: 12px;
        letter-spacing: -0.025em;
    }

    .content-subtitle {
        font-size: 18px;
        color: var(--text-secondary);
        line-height: 1.6;
    }

    .footer {
        padding: 24px 36px;
        border-top: 1px solid var(--border-color);
        background: var(--bg-primary);
        color: var(--text-secondary);
        font-size: 14px;
        text-align: center;
        margin-top: auto;
        flex-shrink: 0;
        position: relative;
        z-index: 50;
        width: 100%;
    }

    @media (max-width: 576px) {
        .footer {
            padding: 20px 16px;
            font-size: 13px;
        }
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
        margin-bottom: 28px;
    }

    /* Soft Backgrounds */
    .bg-primary-soft {
        background: rgba(59, 130, 246, 0.1) !important;
    }

    .bg-success-soft {
        background: rgba(16, 185, 129, 0.1) !important;
    }

    .bg-danger-soft {
        background: rgba(239, 68, 68, 0.1) !important;
    }

    .bg-warning-soft {
        background: rgba(245, 158, 11, 0.1) !important;
    }

    .bg-info-soft {
        background: rgba(14, 165, 233, 0.1) !important;
    }

    [data-theme="dark"] .bg-primary-soft {
        background: rgba(59, 130, 246, 0.15) !important;
    }

    [data-theme="dark"] .bg-success-soft {
        background: rgba(16, 185, 129, 0.15) !important;
    }

    [data-theme="dark"] .bg-danger-soft {
        background: rgba(239, 68, 68, 0.15) !important;
    }

    [data-theme="dark"] .bg-warning-soft {
        background: rgba(245, 158, 11, 0.15) !important;
    }

    [data-theme="dark"] .bg-info-soft {
        background: rgba(14, 165, 233, 0.15) !important;
    }

    /* Progress Bars */
    .progress {
        height: 8px;
        background: var(--bg-secondary);
        border-radius: 10px;
        overflow: hidden;
        width: 100%;
    }

    .progress-sm {
        height: 6px;
    }

    .progress-bar {
        height: 100%;
        border-radius: 10px;
        transition: width 0.6s ease;
    }

    /* Avatars */
    .avatar-xl {
        width: 80px;
        height: 80px;
        font-size: 24px;
    }

    .avatar-lg {
        width: 64px;
        height: 64px;
        font-size: 20px;
    }

    .avatar-md {
        width: 48px;
        height: 48px;
        font-size: 16px;
    }

    .avatar-sm {
        width: 32px;
        height: 32px;
        font-size: 12px;
    }

    /* Utility Helpers */
    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .py-8 {
        padding-top: 32px;
        padding-bottom: 32px;
    }

    .py-6 {
        padding-top: 24px;
        padding-bottom: 24px;
    }

    .fw-900 {
        font-weight: 900;
    }

    .fw-800 {
        font-weight: 800;
    }

    .fw-700 {
        font-weight: 700;
    }

    .fw-600 {
        font-weight: 600;
    }

    .fw-500 {
        font-weight: 500;
    }

    .justify-center {
        justify-content: center;
    }

    .items-center {
        align-items: center;
    }

    .stat-card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 24px;
        transition: all 0.2s ease;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.05);
    }

    .stat-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .stat-label {
        font-size: 13px;
        color: var(--text-secondary);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    /* Color Utilities */
    .text-primary {
        color: var(--accent-color) !important;
    }

    .text-success {
        color: var(--success-color) !important;
    }

    .text-danger {
        color: var(--danger-color) !important;
    }

    .text-warning {
        color: var(--warning-color) !important;
    }

    .text-info {
        color: var(--info-color) !important;
    }

    .text-white {
        color: #ffffff !important;
    }

    .bg-primary {
        background-color: var(--accent-color) !important;
    }

    .bg-success {
        background-color: var(--success-color) !important;
    }

    .bg-danger {
        background-color: var(--danger-color) !important;
    }

    .bg-warning {
        background-color: var(--warning-color) !important;
    }

    .bg-info {
        background-color: var(--info-color) !important;
    }

    /* Extra Utilities (already semi-defined but making explicit) */
    .d-flex {
        display: flex !important;
    }

    .justify-between {
        justify-content: space-between !important;
    }

    .flex-shrink-0 {
        flex-shrink: 0 !important;
    }

    .ms-auto {
        margin-left: auto !important;
    }

    .me-2 {
        margin-right: 0.5rem !important;
    }

    .mt-6 {
        margin-top: 1.5rem !important;
    }

    .mb-1 {
        margin-bottom: 0.25rem !important;
    }

    .mb-2 {
        margin-bottom: 0.5rem !important;
    }

    .mb-4 {
        margin-bottom: 1rem !important;
    }

    .stat-icon.blue {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(37, 99, 235, 0.05) 100%);
        color: var(--accent-color);
    }

    .stat-icon.green {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
        color: var(--success-color);
    }

    .stat-icon.purple {
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.1) 0%, rgba(124, 58, 237, 0.05) 100%);
        color: #8b5cf6;
    }

    .opacity-80 {
        opacity: 0.8 !important;
    }

    .opacity-10 {
        opacity: 0.1 !important;
    }

    .stat-value {
        font-size: 32px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 6px;
        letter-spacing: -1px;
    }

    .stat-description {
        font-size: 14px;
        color: var(--text-secondary);
    }

    .card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .card-header {
        padding: 20px 24px;
        border-bottom: 1px solid var(--border-color);
        font-weight: 700;
        font-size: 17px;
        color: var(--text-primary);
    }

    /* Tabs Component */
    .tabs {
        display: flex;
        border-bottom: 1px solid var(--border-color);
        gap: 24px;
    }

    .tab-item {
        background: none;
        border: none;
        padding: 12px 0;
        font-size: 14px;
        font-weight: 500;
        color: var(--text-secondary);
        cursor: pointer;
        position: relative;
        transition: all 0.2s;
    }

    .tab-item:hover {
        color: var(--text-primary);
    }

    .tab-item.active {
        color: var(--accent-color);
        font-weight: 600;
    }

    .tab-item.active::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--accent-color);
        border-radius: 2px 2px 0 0;
    }

    .tab-content {
        display: none;
        padding-top: 20px;
        animation: fadeIn 0.2s ease-out;
    }

    .tab-content.active {
        display: block;
    }

    /* Accordion Component */
    .accordion-item {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
    }

    .accordion-header {
        width: 100%;
        background: var(--bg-primary);
        border: none;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        color: var(--text-primary);
        transition: background 0.2s;
    }

    .accordion-header:hover {
        background: var(--hover-bg);
    }

    .accordion-header.active {
        background: var(--hover-bg);
        color: var(--accent-color);
    }

    .accordion-icon {
        font-size: 12px;
        transition: transform 0.2s ease;
        color: var(--text-secondary);
    }

    .accordion-header.active .accordion-icon {
        transform: rotate(180deg);
        color: var(--accent-color);
    }

    .accordion-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s cubic-bezier(0, 1, 0, 1);
        background: var(--bg-primary);
    }

    /* Toasts Component */
    .toast-container {
        position: fixed;
        z-index: 10000;
        /* Higher than sidebar (100) and topbar */
        display: flex;
        flex-direction: column;
        gap: 12px;
        pointer-events: none;
        max-height: 100vh;
        overflow: visible;
        /* Allow shadow to be seen */
    }

    /* Directional Stacking */
    .toast-container.top-right,
    .toast-container.top-left {
        flex-direction: column;
        /* Standard top-down stacking */
        justify-content: flex-start;
    }

    .toast-container.bottom-right,
    .toast-container.bottom-left {
        flex-direction: column-reverse;
        /* Newest at bottom visually */
        justify-content: flex-end;
    }

    /* Container Positioning - Screen Corners */
    .toast-container.top-right {
        top: 24px;
        right: 24px;
        bottom: auto;
    }

    .toast-container.top-left {
        top: 24px;
        left: 24px;
        bottom: auto;
    }

    .toast-container.bottom-right {
        bottom: 24px;
        right: 24px;
        top: auto;
    }

    .toast-container.bottom-left {
        bottom: 24px;
        left: 24px;
        top: auto;
    }

    .toast {
        min-width: 0 !important;
        width: 100% !important;
        max-width: 100% !important;
        background: var(--bg-primary);
        /* Fallback */
        border-radius: 12px;
        padding: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        display: flex;
        align-items: flex-start;
        gap: 12px;
        /* Default visible for static display in docs */
        opacity: 1;
        transform: translateY(0);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        pointer-events: auto;
        backdrop-filter: blur(8px);
        /* Premium feel for transparent tints */
        -webkit-backdrop-filter: blur(8px);
    }

    /* Dynamic Toasts inside Container start hidden for animation */
    .toast-container .toast {
        opacity: 0;
        transform: translateX(20px);
        /* Slide from right/left */
    }

    .toast-container.top-left .toast,
    .toast-container.bottom-left .toast {
        transform: translateX(-20px);
    }

    /* Show state for dynamic toasts */
    .toast-container .toast.show {
        opacity: 1;
        transform: translateX(0);
    }

    .toast.hiding {
        opacity: 0;
        transform: scale(0.95);
        margin-top: -80px;
        /* Collapse space */
    }

    .toast-icon {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .toast-content {
        flex: 1;
    }

    .toast-title {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 4px;
        color: var(--text-primary);
    }

    .toast-message {
        font-size: 13px;
        color: var(--text-secondary);
        line-height: 1.4;
    }

    .toast-close {
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        font-size: 14px;
        padding: 4px;
        transition: color 0.15s;
    }

    .toast-close:hover {
        color: var(--text-primary);
    }

    /* Toast Variants - Enhanced Opacity for Readability */
    .toast-success {
        background: rgba(236, 253, 245, 0.9);
        /* Lighter, more opaque */
        border: 1px solid rgba(16, 185, 129, 0.2);
    }

    .toast-success .toast-icon,
    .toast-success .toast-title {
        color: #059669;
    }

    .toast-danger,
    .toast-error {
        background: rgba(254, 242, 242, 0.9);
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .toast-danger .toast-icon,
    .toast-error .toast-icon,
    .toast-danger .toast-title,
    .toast-error .toast-title {
        color: #dc2626;
    }

    .toast-warning {
        background: rgba(255, 251, 235, 0.9);
        border: 1px solid rgba(245, 158, 11, 0.2);
    }

    .toast-warning .toast-icon,
    .toast-warning .toast-title {
        color: #d97706;
    }

    .toast-info,
    .toast-primary {
        background: rgba(239, 246, 255, 0.9);
        border: 1px solid rgba(59, 130, 246, 0.2);
    }

    .toast-info .toast-icon,
    .toast-info .toast-title,
    .toast-primary .toast-icon,
    .toast-primary .toast-title {
        color: #2563eb;
    }

    /* Dark Mode Variants - Solid Tint with higher contrast */
    [data-theme="dark"] .toast-success {
        background: rgba(6, 78, 59, 0.95);
        border-color: rgba(52, 211, 153, 0.3);
    }

    [data-theme="dark"] .toast-success .toast-icon,
    [data-theme="dark"] .toast-success .toast-title {
        color: #34d399;
    }

    [data-theme="dark"] .toast-success .toast-message {
        color: #ffffff;
    }

    [data-theme="dark"] .toast-danger,
    [data-theme="dark"] .toast-error {
        background: rgba(127, 29, 29, 0.95);
        border-color: rgba(248, 113, 113, 0.3);
    }

    [data-theme="dark"] .toast-danger .toast-icon,
    [data-theme="dark"] .toast-danger .toast-title {
        color: #f87171;
    }

    [data-theme="dark"] .toast-danger .toast-message {
        color: #ffffff;
    }

    [data-theme="dark"] .toast-warning {
        background: rgba(120, 53, 15, 0.95);
        border-color: rgba(251, 191, 36, 0.3);
    }

    [data-theme="dark"] .toast-warning .toast-icon,
    [data-theme="dark"] .toast-warning .toast-title {
        color: #fbbf24;
    }

    [data-theme="dark"] .toast-warning .toast-message {
        color: #ffffff;
    }

    [data-theme="dark"] .toast-info,
    [data-theme="dark"] .toast-primary {
        background: rgba(30, 58, 138, 0.95);
        border-color: rgba(96, 165, 250, 0.3);
    }

    [data-theme="dark"] .toast-info .toast-icon,
    [data-theme="dark"] .toast-info .toast-title,
    [data-theme="dark"] .toast-primary .toast-icon,
    [data-theme="dark"] .toast-primary .toast-title {
        color: #60a5fa;
    }

    [data-theme="dark"] .toast-info .toast-message,
    [data-theme="dark"] .toast-primary .toast-message {
        color: #ffffff;
    }


    .card-body {
        padding: 24px;
        min-width: 0;
        /* Allow flex children to shrink */
        width: 100%;
        overflow-x: hidden;
    }

    /* Form Elements */
    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .form-input {
        width: 100%;
        height: 44px;
        padding: 0 16px;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 10px;
        font-family: inherit;
        font-size: 15px;
        color: var(--text-primary);
        transition: all 0.2s;
    }

    textarea.form-input {
        height: auto;
        padding: 12px 16px;
        line-height: 1.5;
        min-height: 44px;
        /* Maintain visual consistency if empty */
    }

    select.form-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 16px center;
        background-size: 16px;
        padding-right: 44px !important;
        cursor: pointer;
    }

    .form-input:focus {
        outline: none;
        border-color: var(--accent-color);
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0 24px;
        height: 44px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s ease;
        border: 1px solid transparent;
        letter-spacing: 0.01em;
        text-decoration: none;
        gap: 8px;
        white-space: nowrap;
        font-family: inherit;
    }

    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .btn-primary {
        background: var(--accent-color);
        color: white;
    }

    .btn-primary:hover {
        background: var(--accent-hover);
        color: white;
    }


    .btn-secondary {
        background: var(--bg-primary);
        color: var(--text-primary);
        border-color: var(--border-color);
    }

    .btn-secondary:hover {
        background: var(--hover-bg);
        border-color: #cbd5e1;
    }

    [data-theme="dark"] .btn-secondary:hover {
        border-color: #475569;
    }

    .btn-sm {
        height: 32px;
        padding: 0 14px;
        font-size: 13px;
        border-radius: 8px;
        gap: 6px;
    }

    .btn-danger {
        background: var(--danger-color);
        color: white;
    }

    .btn-danger:hover {
        background: #dc2626;
    }

    .btn-warning {
        background: var(--warning-color);
        color: white;
    }

    .btn-warning:hover {
        background: #d97706;
    }

    .btn-success {
        background: var(--success-color);
        color: white;
    }

    .btn-success:hover {
        background: #059669;
    }

    .btn-info {
        background: #0ea5e9;
        color: white;
    }

    .btn-info:hover {
        background: #0284c7;
    }

    .btn-auth {
        width: 100%;
        height: 44px;
        background: var(--accent-color);
        color: #ffffff;
        border: none;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s ease;
        margin-top: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
        justify-content: center;
        letter-spacing: 0.02em;
        text-decoration: none;
    }

    .btn-auth:hover {
        background: var(--accent-hover);
        color: #ffffff;
    }

    .btn-auth:active {
        transform: translateY(0);
    }

    .info-table {
        width: 100%;
        font-size: 14px;
    }

    /* Card Component - Professional Flat Design */
    .card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
    }

    .card-header {
        padding: 24px 32px;
        border-bottom: 1px solid var(--border-color);
        background: transparent;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-body {
        padding: 32px;
        flex: 1 1 auto;
    }

    .card-footer {
        padding: 20px 32px;
        border-top: 1px solid var(--border-color);
        background: var(--hover-bg);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    /* Colored Card Variants - Re-declared for specificity */
    .card-primary {
        background: rgba(59, 130, 246, 0.05) !important;
        border: 1px solid rgba(59, 130, 246, 0.2) !important;
    }

    .card-success {
        background: rgba(16, 185, 129, 0.05) !important;
        border: 1px solid rgba(16, 185, 129, 0.2) !important;
    }

    .card-danger {
        background: rgba(239, 68, 68, 0.05) !important;
        border: 1px solid rgba(239, 68, 68, 0.2) !important;
    }

    .card-warning {
        background: rgba(245, 158, 11, 0.05) !important;
        border: 1px solid rgba(245, 158, 11, 0.2) !important;
    }

    .card-info {
        background: rgba(14, 165, 233, 0.05) !important;
        border: 1px solid rgba(59, 130, 246, 0.2) !important;
    }

    [data-theme="dark"] .card {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    [data-theme="dark"] .card-footer {
        background: rgba(255, 255, 255, 0.02);
    }

    [data-theme="dark"] .card-primary {
        background: rgba(59, 130, 246, 0.1);
        border-color: rgba(59, 130, 246, 0.3) !important;
    }

    [data-theme="dark"] .card-success {
        background: rgba(16, 185, 129, 0.1);
        border-color: rgba(16, 185, 129, 0.3) !important;
    }

    [data-theme="dark"] .card-danger {
        background: rgba(239, 68, 68, 0.1);
        border-color: rgba(239, 68, 68, 0.3) !important;
    }

    [data-theme="dark"] .card-warning {
        background: rgba(245, 158, 11, 0.1);
        border-color: rgba(245, 158, 11, 0.3) !important;
    }

    .card-info {
        background: rgba(14, 165, 233, 0.1);
    }

    /* Interactive Avatar Overlay */
    .avatar-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .profile-avatar-large:hover .avatar-overlay {
        opacity: 1;
    }

    @media (hover: none) and (pointer: coarse) {
        .avatar-overlay {
            opacity: 1;
            background: rgba(0, 0, 0, 0.3);
        }
    }

    .card-title {
        font-size: 18px;
        font-weight: 700;
        color: var(--text-primary);
        margin: 0;
    }

    .card-subtitle {
        font-size: 13px;
        color: var(--text-muted);
        margin-top: 4px;
    }

    .info-table td {
        padding: 14px 0;
        border-bottom: 1px solid var(--border-color);
    }

    .info-table tr:last-child td {
        border-bottom: none;
    }

    .info-table td:first-child {
        font-weight: 600;
        width: 220px;
        color: var(--text-secondary);
    }

    .info-table td:last-child {
        color: var(--text-primary);
        font-weight: 500;
    }

    @media (max-width: 576px) {
        .info-table tr {
            display: flex;
            flex-direction: column;
            padding: 10px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .info-table tr:last-child {
            border-bottom: none;
        }

        .info-table td {
            padding: 2px 0 !important;
            border: none !important;
            width: 100% !important;
        }

        .info-table td:first-child {
            font-size: 12px;
            opacity: 0.8;
            margin-bottom: 2px;
        }
    }

    /* Standard Data Table */
    .data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table th {
        text-align: left;
        padding: 16px 24px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: var(--text-muted);
        border-bottom: 1px solid var(--border-color);
        background: transparent;
    }

    .data-table th.text-end {
        text-align: right;
    }

    .data-table th.text-center {
        text-align: center;
    }

    .data-table td.text-end {
        text-align: right;
    }

    .data-table td.text-center {
        text-align: center;
    }

    .data-table td {
        padding: 16px 24px;
        font-size: 14px;
        color: var(--text-primary);
        border-bottom: 1px solid var(--border-color);
        vertical-align: middle;
    }

    .data-table tr:last-child td {
        border-bottom: none;
    }

    .data-table tr:hover td {
        background: var(--hover-bg);
    }

    .data-table.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.02);
    }

    [data-theme="dark"] .data-table.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.03);
    }

    .data-table.table-bordered th,
    .data-table.table-bordered td {
        border-right: 1px solid var(--border-color);
    }

    .data-table.table-bordered th:last-child,
    .data-table.table-bordered td:last-child {
        border-right: none;
    }

    /* Table Responsive Wrapper */
    .table-responsive {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .footer {
        height: 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: 500;
        color: var(--text-secondary);
        border-top: 1px solid var(--border-color);
        background: var(--bg-primary);
    }

    /* Breadcrumbs */
    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        list-style: none;
        padding: 0;
        margin: 0 0 16px 0;
        font-size: 13px;
    }

    .breadcrumb-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--text-muted);
    }

    .breadcrumb-item a {
        color: var(--text-muted);
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb-item a:hover {
        color: var(--accent-color);
    }

    .breadcrumb-item.active {
        color: var(--text-primary);
        font-weight: 500;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: "\f105";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        font-size: 10px;
        color: var(--text-muted);
    }

    /* Timeline Component */
    .timeline {
        position: relative;
        padding: 8px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 20px;
        width: 2px;
        background: var(--border-color);
        border-radius: 2px;
    }

    .timeline-item {
        position: relative;
        padding-left: 54px;
        margin-bottom: 32px;
    }

    .timeline-item:last-child {
        margin-bottom: 0;
    }

    .timeline-dot {
        position: absolute;
        left: 12px;
        top: 4px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--bg-primary);
        border: 4px solid var(--accent-color);
        z-index: 1;
        box-shadow: 0 0 0 4px var(--bg-primary);
    }

    .timeline-dot.dot-success {
        border-color: var(--success-color);
    }

    .timeline-dot.dot-danger {
        border-color: var(--danger-color);
    }

    .timeline-dot.dot-warning {
        border-color: var(--warning-color);
    }

    .timeline-dot.dot-info {
        border-color: var(--info-color);
    }

    .timeline-content {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 16px 20px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
    }

    [data-theme="dark"] .timeline-content {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    }

    .timeline-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 8px;
        flex-wrap: wrap;
        gap: 8px;
    }

    .timeline-title {
        font-size: 15px;
        font-weight: 700;
        color: var(--text-primary);
    }

    .timeline-time {
        font-size: 12px;
        color: var(--text-muted);
        font-weight: 500;
    }

    .timeline-body {
        font-size: 14px;
        color: var(--text-secondary);
        line-height: 1.6;
    }

    .timeline-footer {
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px dashed var(--border-color);
    }

    /* Minimal Variant */
    .timeline.timeline-minimal::before {
        left: 7px;
    }

    .timeline.timeline-minimal .timeline-item {
        padding-left: 32px;
    }

    .timeline.timeline-minimal .timeline-dot {
        left: 0;
        width: 16px;
        height: 16px;
    }

    .timeline.timeline-minimal .timeline-content {
        background: transparent;
        border: none;
        padding: 0;
        box-shadow: none;
    }

    /* Widget Utilities & Components */
    .icon-circle {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .list-group-flush .list-group-item {
        border-left: 0;
        border-right: 0;
        border-top: 1px solid var(--border-color);
        padding: 16px 24px;
    }

    .list-group-flush .list-group-item:first-child {
        border-top: 0;
    }

    .relative {
        position: relative;
    }

    .absolute {
        position: absolute;
    }

    .right-\[-10px\] {
        right: -10px;
    }

    .bottom-\[-10px\] {
        bottom: -10px;
    }

    .text-6xl {
        font-size: 3.75rem;
    }

    .opacity-10 {
        opacity: 0.1;
    }

    .opacity-80 {
        opacity: 0.8;
    }

    /* Profile Page Specifics */
    .profile-avatar-large {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: var(--bg-secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        font-weight: 700;
        color: var(--accent-color);
        border: 4px solid var(--bg-primary);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        flex-shrink: 0;
        position: relative;
    }

    .profile-avatar-large img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-main {
        min-width: 0;
        width: 100%;
    }

    /* Avatar Shapes */
    .avatar-circle {
        border-radius: 50% !important;
    }

    .avatar-square {
        border-radius: 12px !important;
    }

    /* .avatar-rounded is roughly consistent with standard rounded corners or slightly more */
    .profile-avatar-large:not(.avatar-circle):not(.avatar-square) {
        border-radius: 20px;
    }

    .profile-layout {
        display: grid;
        grid-template-columns: 320px 1fr;
        gap: 32px;
        align-items: flex-start;
    }

    .profile-sidebar {
        position: sticky;
        top: 96px;
    }

    .profile-card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    }

    .profile-header {
        padding: 40px 24px;
        text-align: center;
        background: linear-gradient(to bottom, var(--hover-bg), var(--bg-primary));
        border-bottom: 1px solid var(--border-color);
    }

    .profile-avatar-large {
        width: 100px;
        height: 100px;
        border-radius: 16px;
        background: linear-gradient(135deg, var(--accent-color), #6366f1);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        font-weight: 700;
        margin: 0 auto 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        border: 2px solid white;
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
    }

    /* Avatar Shapes */
    .avatar-circle {
        border-radius: 50% !important;
    }

    .avatar-square {
        border-radius: 8px !important;
    }

    .profile-avatar-large:hover {
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .avatar-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        color: white;
    }

    .avatar-overlay i {
        font-size: 20px;
        margin-bottom: 4px;
    }

    .avatar-overlay span {
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .profile-avatar-large:hover .avatar-overlay {
        opacity: 1;
    }

    #dropZone:hover {
        border-color: var(--accent-color) !important;
        background: rgba(37, 99, 235, 0.02);
    }



    /* Modal System */
    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.4);
        backdrop-filter: blur(8px);
        z-index: 1050;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .modal-backdrop.show {
        opacity: 1;
        visibility: visible;
    }

    .modal {
        background: var(--bg-card);
        width: 100%;
        max-width: 500px;
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        position: relative;
        transform: scale(0.9) translateY(20px);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        border: 1px solid var(--border-color);
        max-height: calc(100vh - 40px);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .modal-backdrop.show .modal {
        transform: scale(1) translateY(0);
    }

    .modal-sm {
        max-width: 400px;
    }

    .modal.modal-lg {
        max-width: 900px;
    }

    /* Modal Variants */
    .modal-primary .modal-header {
        background: rgba(59, 130, 246, 0.05);
    }

    .modal-primary .modal-title {
        color: var(--accent-color);
    }

    .modal-success .modal-header {
        background: rgba(16, 185, 129, 0.05);
    }

    .modal-success .modal-title {
        color: var(--success-color);
    }

    .modal-danger .modal-header {
        background: rgba(239, 68, 68, 0.05);
    }

    .modal-danger .modal-title {
        color: var(--danger-color);
    }

    .modal-warning .modal-header {
        background: rgba(245, 158, 11, 0.05);
    }

    .modal-warning .modal-title {
        color: var(--warning-color);
    }

    .modal-info .modal-header {
        background: rgba(14, 165, 233, 0.05);
    }

    .modal-info .modal-title {
        color: var(--info-color);
    }

    .modal-header {
        padding: 24px 28px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-shrink: 0;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1.25rem;
        margin: 0;
        color: var(--text-primary);
        letter-spacing: -0.02em;
    }

    .modal-body {
        padding: 28px;
        color: var(--text-secondary);
        font-size: 0.9375rem;
        line-height: 1.6;
        overflow-y: auto;
        flex-grow: 1;
    }

    .modal-footer {
        padding: 20px 28px;
        border-top: 1px solid var(--border-color);
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        flex-shrink: 0;
    }

    .modal-close {
        background: var(--hover-bg);
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.2s ease;
        font-size: 14px;
    }

    .modal-close:hover {
        background: var(--danger-color);
        color: white;
        transform: rotate(90deg);
    }

    .profile-name {
        margin-bottom: 4px;
    }

    .profile-email {
        font-size: 14px;
        color: var(--text-secondary);
    }

    .profile-menu {
        padding: 16px;
    }

    .profile-menu-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        border-radius: 10px;
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s;
    }

    .profile-menu-item:hover {
        background: var(--hover-bg);
        color: var(--text-primary);
    }

    .profile-menu-item.active {
        background: rgba(59, 130, 246, 0.1);
        color: var(--accent-color);
    }

    .section-title {
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .form-section {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 32px;
        margin-bottom: 24px;
        scroll-margin-top: 80px;
        width: 100%;
        max-width: 100%;
        overflow-x: hidden;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px 28px;
        width: 100%;
    }

    @media (max-width: 1024px) {
        .profile-layout {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .profile-sidebar {
            position: static;
            width: 100%;
        }

        .form-section {
            padding: 24px;
            margin-bottom: 20px;
        }

        .form-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .form-grid>div {
            grid-column: span 1 !important;
        }
    }

    @media (max-width: 576px) {
        .content {
            padding: 16px !important;
        }

        .form-section {
            padding: 20px 16px !important;
            border-radius: 12px;
        }

        .topbar {
            padding: 0 16px !important;
        }

        .card-header {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px;
            padding: 16px 20px !important;
        }

        .card-header>* {
            width: 100%;
        }

        .card-header .btn {
            width: 100%;
        }

        .auth-card {
            padding: 24px !important;
        }

        .btn {
            white-space: normal !important;
            height: auto !important;
            padding: 12px 20px !important;
            line-height: 1.4 !important;
            text-align: center;
        }

        .card-body {
            padding: 20px 16px !important;
        }

        body {
            overflow-x: hidden;
            width: 100%;
        }
    }

    .guide-icon {
        width: 64px;
        height: 64px;
        background: rgba(59, 130, 246, 0.1);
        color: var(--accent-color);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .grid-guide {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 24px;
    }

    .code-block {
        font-family: 'JetBrains Mono', 'Menlo', 'Monaco', 'Consolas', monospace;
        line-height: 1.6;
        background: var(--bg-primary);
        border: none;
        color: var(--text-primary);
    }

    /* Professional Code Editor UI */
    .code-editor {
        background: #1e1e1e !important;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #333;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .code-editor .code-header {
        background: #252526;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #333;
    }

    .code-editor .code-content {
        padding: 24px;
        margin: 0;
        overflow-x: auto;
        font-family: 'JetBrains Mono', 'Fira Code', monospace;
        font-size: 14px;
        line-height: 1.6;
        color: #d4d4d4;
    }

    .copy-btn {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #a9a9a9;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .copy-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    .copy-btn.copied {
        background: var(--success-color);
        color: #fff;
        border-color: var(--success-color);
    }

    .code-lang {
        color: #569cd6;
        font-weight: 700;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Window Control Dots */
    .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .dot-red {
        background: #ff5f56;
    }

    .dot-yellow {
        background: #ffbd2e;
    }

    .dot-green {
        background: #27c93f;
    }

    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
            z-index: 1001;
            box-shadow: 20px 0 50px rgba(0, 0, 0, 0.1);
        }

        .sidebar.mobile-show {
            transform: translateX(0);
        }

        .app-layout {
            display: block;
            position: relative;
            overflow-x: hidden;
            width: 100%;
            min-height: 100vh;
        }

        .main-content {
            margin-left: 0 !important;
            width: 100%;
            display: block;
            min-height: auto;
        }

        .mobile-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-user-info {
            display: none;
        }

        .content {
            padding: 24px;
        }

        .grid {
            grid-template-columns: 1fr !important;
            gap: 16px;
        }

        .stat-value {
            font-size: 26px !important;
        }

        /* Modal Mobile Optimizations */
        .modal {
            max-width: calc(100vw - 40px);
            margin: 20px;
            max-height: calc(100vh - 40px);
        }

        .modal-header {
            padding: 20px;
            text-align: center;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            padding: 16px 20px;
            flex-direction: column;
            gap: 10px;
        }

        .modal-footer .btn {
            width: 100%;
        }

        .modal-lg {
            max-width: calc(100vw - 40px) !important;
        }

        .topbar {
            padding: 0 16px !important;
        }

        .topbar-left {
            gap: 12px;
            min-width: 0;
        }

        .topbar-left h1 {
            font-size: 16px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Responsive Flex Groups in Guides */
        .d-flex.flex-wrap.gap-3,
        .d-flex.flex-wrap.gap-4 {
            flex-direction: column !important;
            align-items: stretch !important;
            width: 100% !important;
        }

        .d-flex.flex-wrap.gap-3 .btn,
        .d-flex.flex-wrap.gap-4 .btn {
            width: 100% !important;
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        /* Ensure breadcrumb doesn't overflow */
        .breadcrumb {
            flex-wrap: wrap;
        }

        /* Backdrop for mobile sidebar */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(4px);
            z-index: 1000;
            animation: fadeIn 0.3s ease;
        }

        .sidebar-overlay.active {
            display: block;
        }

        .hidden-mobile {
            display: none !important;
        }

        .form-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
    }

    @media (max-width: 576px) {
        .content {
            padding: 16px !important;
        }

        .form-section {
            padding: 20px 16px !important;
            border-radius: 12px;
        }

        .topbar {
            padding: 0 12px !important;
            height: 56px !important;
        }

        .topbar-left {
            gap: 8px;
        }

        .topbar-left h1 {
            font-size: 15px;
        }

        .stat-card {
            padding: 16px !important;
        }

        .stat-value {
            font-size: 24px !important;
        }

        .d-flex.justify-end {
            justify-content: stretch !important;
        }

        .d-flex.justify-end>.btn {
            width: 100% !important;
        }

        .card-header {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px;
            padding: 16px 20px !important;
        }

        .card-header>* {
            width: 100%;
        }

        .card-header .btn {
            width: 100%;
        }

        .card-footer {
            flex-direction: column;
            gap: 12px;
            padding: 16px 20px !important;
        }

        .card-footer .btn {
            width: 100%;
        }

        .auth-card {
            padding: 24px !important;
        }

        body {
            overflow-x: hidden;
            width: 100%;
        }
    }

    /* Hover Effects */
    .hover-lift {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .text-decoration-none {
        text-decoration: none !important;
    }
</style>
