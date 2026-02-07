<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />

    @include('layouts.partials.styles')

    @stack('styles')
</head>

<body>
    <div class="app-layout">
        <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>
        @include('layouts.partials.sidebar')

        <div class="main-content">
            @include('layouts.partials.topbar')

            <main class="content">
                @yield('content')
            </main>

            @include('layouts.partials.footer')
        </div>
    </div>

    @include('layouts.partials.scripts')

    @stack('modals')
    @stack('scripts')

    <!-- Global Toast Containers -->
    <div class="toast-container top-right"></div>
    <div class="toast-container top-left"></div>
    <div class="toast-container bottom-right"></div>
    <div class="toast-container bottom-left"></div>

    <!-- Global Command Palette -->
    <div class="cmd-palette" id="cmdPalette">
        <div class="cmd-palette-content">
            <div class="cmd-palette-header">
                <i class="fas fa-search cmd-search-icon"></i>
                <input type="text" class="cmd-input" id="cmdSearchInput" placeholder="Search pages or components...">
                <button class="cmd-close-btn visible-mobile" onclick="closeGlobalSearch()">
                    <i class="fas fa-times"></i>
                </button>
                <kbd class="cmd-esc-kbd">ESC</kbd>
            </div>
            <div class="cmd-palette-body" id="cmdSearchResults">
                <!-- Results will be injected here -->
                <div class="cmd-placeholder">
                    <i class="fas fa-keyboard"></i>
                    <span class="text-muted text-sm">Start typing to search...</span>
                </div>
            </div>
            <div class="cmd-palette-footer">
                <div class="cmd-help-item">
                    <kbd>↑↓</kbd> <span>Navigate</span>
                </div>
                <div class="cmd-help-item">
                    <kbd>↵</kbd> <span>Select</span>
                </div>
                <div class="cmd-help-item">
                    <kbd>ESC</kbd> <span>Close</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
