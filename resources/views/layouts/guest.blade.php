<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
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

    <style>
        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: var(--bg-secondary);
            background-image: radial-gradient(rgba(0, 0, 0, 0.12) 0.8px, transparent 1.5px);
            background-size: 12px 12px;
            padding: 40px 24px 80px;
            position: relative;
            overflow: hidden;
        }

        [data-theme="dark"] .auth-wrapper {
            background-image: radial-gradient(rgba(255, 255, 255, 0.08) 0.8px, transparent 1.5px);
        }

        .auth-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            width: 100%;
            max-width: 440px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            animation: fadeIn 0.4s ease-out;
        }

        [data-theme="dark"] .auth-card {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .auth-logo {
            text-align: center;
            margin-bottom: 32px;
            display: flex;
            justify-content: center;
        }

        .auth-brand {
            font-family: 'Montserrat', sans-serif;
            font-size: 26px;
            font-weight: 700;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            letter-spacing: -0.02em;
        }

        .auth-brand i {
            color: var(--primary);
            font-size: 22px;
        }

        .auth-header {
            margin-bottom: 32px;
        }

        .auth-title {
            margin-bottom: 8px;
        }

        .auth-subtitle {
            color: var(--text-secondary);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        .auth-footer {
            margin-top: 32px;
            text-align: center;
            font-size: 14px;
            color: var(--text-secondary);
        }

        .auth-link {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 24px;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .alert-error ul {
            margin-left: 20px;
            margin-top: 4px;
        }
    </style>
</head>

<body>
    <div class="auth-wrapper">
        <div class="flex-1 d-flex items-center justify-center w-full">
            <div class="auth-card">
                <div class="auth-logo">
                    <a href="/" class="auth-brand">
                        <i class="fas fa-gem"></i>
                        <span>ZAHIRA</span>
                    </a>
                </div>

                @yield('content')
            </div>
        </div>

        <footer class="footer absolute bottom-0 w-full text-center py-4">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </footer>
    </div>

    <script>
        // Set theme from localStorage
        const savedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', savedTheme);
    </script>
</body>

</html>
