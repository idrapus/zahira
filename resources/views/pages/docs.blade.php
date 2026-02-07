@extends('layouts.app')

@section('title', 'Documentation — Zahira')

@section('content')
    <div class="mb-8">
        <h2 class="h2 mb-2">Getting Started</h2>
        <p class="text-secondary">Comprehensive guide to understand and implement Zahira Admin Dashboard.</p>
    </div>

    <div class="row g-4">
        <div class="col-12 col-xl-8">
            <!-- Introduction -->
            <div class="card mb-6">
                <div class="card-header">
                    <div class="d-flex items-center gap-3">
                        <div class="guide-icon"
                            style="background: rgba(59, 130, 246, 0.1); color: var(--accent-color); width: 44px; height: 44px; font-size: 20px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div>
                            <h3 class="card-title h4">Zahira v26.02</h3>
                            <p class="card-subtitle">Modern Laravel 12 Admin Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary mb-6 p-4">
                        <div class="d-flex gap-3">
                            <i class="fas fa-info-circle mt-1" style="font-size: 20px;"></i>
                            <div style="font-size: 15px; line-height: 1.6;">
                                <span class="fw-bold d-block mb-1" style="font-size: 16px;">Elite Architecture</span>
                                Zahira is a high-performance, open-source template designed for developers who prioritize
                                <strong>aesthetics</strong>, <strong>maintainability</strong>, and <strong>user
                                    experience</strong>.
                                It bypasses heavy frameworks for a custom-crafted <strong>Vanilla CSS Design
                                    System</strong>.
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="card card-info h-full">
                                <div class="card-body">
                                    <div class="d-flex items-center gap-3 mb-3">
                                        <i class="fas fa-moon font-18 text-info"></i>
                                        <h5 class="fw-bold mb-0" style="font-size: 16px;">Dynamic Theme Engine</h5>
                                    </div>
                                    <p class="text-sm text-secondary mb-0" style="line-height: 1.6;">
                                        Seamlessly toggle between Dark and Light modes with local storage persistence. Your
                                        users' preferences, remembered.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-success h-full">
                                <div class="card-body">
                                    <div class="d-flex items-center gap-3 mb-3">
                                        <i class="fas fa-mobile-screen font-18 text-success"></i>
                                        <h5 class="fw-bold mb-0" style="font-size: 16px;">True Responsive Design</h5>
                                    </div>
                                    <p class="text-sm text-secondary mb-0" style="line-height: 1.6;">
                                        Every pixel optimized for Desktop, Tablet, and Mobile devices. Zero overflow policy
                                        guaranteed.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-primary h-full">
                                <div class="card-body">
                                    <div class="d-flex items-center gap-3 mb-3">
                                        <i class="fas fa-bolt font-18 text-primary"></i>
                                        <h5 class="fw-bold mb-0" style="font-size: 16px;">Performance Optimized</h5>
                                    </div>
                                    <p class="text-sm text-secondary mb-0" style="line-height: 1.6;">
                                        No Tailwind or Bootstrap overhead. Pure, optimized CSS for maximum rendering speed.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-warning h-full">
                                <div class="card-body">
                                    <div class="d-flex items-center gap-3 mb-3">
                                        <i class="fas fa-layer-group font-18 text-warning"></i>
                                        <h5 class="fw-bold mb-0" style="font-size: 16px;">Comprehensive UI Kit</h5>
                                    </div>
                                    <p class="text-sm text-secondary mb-0" style="line-height: 1.6;">
                                        13+ essential UI modules (Modals, Forms, Alerts, Tables) with copy-paste code
                                        snippets.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-accent h-full">
                                <div class="card-body">
                                    <div class="d-flex items-center gap-3 mb-3">
                                        <i class="fas fa-user-shield font-18 text-accent"></i>
                                        <h5 class="fw-bold mb-0" style="font-size: 16px;">Advanced Profile Management</h5>
                                    </div>
                                    <p class="text-sm text-secondary mb-0" style="line-height: 1.6;">
                                        Integrated system for identity verification, avatar management, and security
                                        credentials.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-danger h-full">
                                <div class="card-body">
                                    <div class="d-flex items-center gap-3 mb-3">
                                        <i class="fas fa-shield-alt font-18 text-danger"></i>
                                        <h5 class="fw-bold mb-0" style="font-size: 16px;">Secure Foundation</h5>
                                    </div>
                                    <p class="text-sm text-secondary mb-0" style="line-height: 1.6;">
                                        Leveraging Laravel's robust authentication, CSRF protection, and database
                                        compatibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Installation -->
            <div class="card mb-6" id="installation">
                <div class="card-header">
                    <h3 class="card-title h4">
                        <i class="fas fa-terminal me-2"></i>
                        Installation Guide
                    </h3>
                </div>
                <div class="card-body">
                    <div class="mb-6">
                        <h5 class="fw-bold mb-3" style="font-size: 16px;">1. Clone & Setup</h5>
                        <div class="code-editor mb-4">
                            <div class="code-header">
                                <span class="code-lang">Bash</span>
                                <button class="copy-btn" onclick="copyToClipboard(this)">
                                    <i class="far fa-copy"></i>
                                </button>
                            </div>
                            <pre class="code-content" style="font-size: 15px;">git clone https://github.com/idrapus/zahira.git
cd zahira
composer install
cp .env.example .env
php artisan key:generate</pre>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="fw-bold mb-3" style="font-size: 16px;">2. Database & Storage</h5>
                        <div class="code-editor mb-4">
                            <div class="code-header">
                                <span class="code-lang">Bash</span>
                                <button class="copy-btn" onclick="copyToClipboard(this)">
                                    <i class="far fa-copy"></i>
                                </button>
                            </div>
                            <pre class="code-content" style="font-size: 15px;">touch database/database.sqlite
php artisan migrate --seed
php artisan storage:link</pre>
                        </div>
                    </div>

                    <div class="mb-2">
                        <h5 class="fw-bold mb-3" style="font-size: 16px;">3. Compiling Assets</h5>
                        <div class="code-editor">
                            <div class="code-header">
                                <span class="code-lang">Bash</span>
                                <button class="copy-btn" onclick="copyToClipboard(this)">
                                    <i class="far fa-copy"></i>
                                </button>
                            </div>
                            <pre class="code-content" style="font-size: 15px;">npm install
npm run dev
php artisan serve</pre>
                        </div>
                        <p class="mt-3 text-secondary" style="font-size: 14px;">Access the dashboard at <code
                                class="text-primary">http://127.0.0.1:8000</code>.</p>
                    </div>
                </div>
            </div>

            <!-- Tech Stack -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title h4">
                        <i class="fas fa-layer-group me-2"></i>
                        Technology Stack
                    </h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="data-table mb-0">
                            <thead>
                                <tr>
                                    <th style="font-size: 13px;">Layer</th>
                                    <th style="font-size: 13px;">Technology</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold" style="font-size: 15px;">Backend</td>
                                    <td style="font-size: 15px;">Laravel 12.x (LTS Ready)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" style="font-size: 15px;">Frontend</td>
                                    <td style="font-size: 15px;">Blade Templating Engine</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" style="font-size: 15px;">Styling</td>
                                    <td style="font-size: 15px;">Vanilla CSS 3 (Design System)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" style="font-size: 15px;">Icons</td>
                                    <td style="font-size: 15px;">FontAwesome 6.5.1</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" style="font-size: 15px;">Typography</td>
                                    <td style="font-size: 15px;">Inter & Montserrat</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" style="font-size: 15px;">Database</td>
                                    <td style="font-size: 15px;">SQLite, MySQL, PostgreSQL supported</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <!-- Project Structure -->
            <div class="card mb-6">
                <div class="card-header">
                    <h3 class="card-title h4">
                        <i class="fas fa-folder-tree me-2"></i>
                        File Structure
                    </h3>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column gap-3">
                        <div class="p-4 rounded-lg border bg-secondary-subtle">
                            <code class="text-accent fw-bold d-block mb-2"
                                style="font-size: 14px;">app/Http/Controllers/</code>
                            <p class="text-sm text-secondary mb-0" style="font-size: 14px;">Domain-grouped controllers
                                (Auth, Account, UI).</p>
                        </div>
                        <div class="p-4 rounded-lg border bg-secondary-subtle">
                            <code class="text-accent fw-bold d-block mb-2"
                                style="font-size: 14px;">resources/views/pages/</code>
                            <p class="text-sm text-secondary mb-0" style="font-size: 14px;">Organized view entry points
                                for the application.</p>
                        </div>
                        <div class="p-4 rounded-lg border bg-secondary-subtle">
                            <code class="text-accent fw-bold d-block mb-2"
                                style="font-size: 14px;">resources/views/layouts/</code>
                            <p class="text-sm text-secondary mb-0" style="font-size: 14px;">Core Design System, partials,
                                and global logic.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UI components list -->
            <div class="card mb-6">
                <div class="card-header">
                    <h3 class="card-title h4">
                        <i class="fas fa-cubes me-2"></i>
                        UI Kit
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled d-flex flex-column gap-4 mb-0">
                        <li class="d-flex items-center gap-3 text-secondary" style="font-size: 15px;">
                            <i class="fas fa-check-circle text-success" style="font-size: 18px;"></i> 13+ Essential UI
                            Modules
                        </li>
                        <li class="d-flex items-center gap-3 text-secondary" style="font-size: 15px;">
                            <i class="fas fa-check-circle text-success" style="font-size: 18px;"></i> Zero Framework
                            Dependencies
                        </li>
                        <li class="d-flex items-center gap-3 text-secondary" style="font-size: 15px;">
                            <i class="fas fa-check-circle text-success" style="font-size: 18px;"></i> Instant Copy-Paste
                            Snippets
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection