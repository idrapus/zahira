@extends('layouts.landing')

@section('title', 'Zahira — Modern Laravel Admin Dashboard')

@section('content')
    <section
        style="padding: 100px 0 100px; background-color: var(--bg-soft); background-image: radial-gradient(var(--dot-color) 1.5px, transparent 1.5px); background-size: 40px 40px; position: relative; overflow: hidden;">

        <div
            style="position: absolute; bottom: 0; left: 0; right: 0; height: 150px; background: linear-gradient(to bottom, transparent, var(--bg-body));">
        </div>

        <div class="container">
            <div class="row items-center">
                <div class="col-6">
                    <div class="d-flex items-center gap-4 mb-4">
                        <div style="color: #fbbf24; display: flex; gap: 4px; font-size: 18px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span
                            style="font-size: 14px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px;">Rated
                            5.0 by 1000+ Elite Developers</span>
                    </div>

                    <h1 class="hero-title">
                        Designed for <br>
                        <span class="rotation-container">
                            <span id="rotation-wrapper" class="rotation-wrapper gradient-text">
                                <span class="rotation-item">Performance.</span>
                                <span class="rotation-item">Efficiency.</span>
                                <span class="rotation-item">Scalability.</span>
                                <span class="rotation-item">Developers.</span>
                                <span class="rotation-item">Enterprise.</span>
                                <span class="rotation-item">Open Source.</span>
                                <span class="rotation-item">Excellence.</span>
                            </span>
                        </span>
                    </h1>

                    <p
                        style="font-size: 18px; color: var(--text-muted); margin-bottom: 24px; max-width: 560px; line-height: 1.6;">
                        Built for elite developers who prioritize <strong>aesthetics</strong>,
                        <strong>maintainability</strong>, and <strong>user experience</strong>. Zero bloat, maximum
                        performance.
                    </p>

                    <div style="display: flex; gap: 10px; margin-bottom: 32px; flex-wrap: wrap;">
                        <span
                            style="background: var(--bg-surface); border: 1px solid var(--border); padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 700; color: var(--text-main);">
                            <i class="fab fa-laravel" style="color: #FF2D20;"></i> Laravel 12.x
                        </span>
                        <span
                            style="background: var(--bg-surface); border: 1px solid var(--border); padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 700; color: var(--text-main);">
                            <i class="fab fa-php" style="color: #777BB4;"></i> PHP 8.3+
                        </span>
                        <span
                            style="background: var(--bg-surface); border: 1px solid var(--border); padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 700; color: var(--text-main);">
                            <i class="fab fa-css3-alt" style="color: #1572B6;"></i> Vanilla CSS
                        </span>
                    </div>

                    <div class="d-flex gap-4">
                        <a href="{{ route('demo-info') }}" class="btn btn-primary" style="font-size: 15px;">
                            <i class="fas fa-rocket"></i> View Live Demo
                        </a>
                        <a href="#features" class="btn btn-outline" style="font-size: 15px;">
                            <i class="fas fa-gem"></i> Explore Features
                        </a>
                    </div>

                    <div class="quick-stats"
                        style="display: flex; gap: 40px; margin-top: 40px; padding-top: 32px; border-top: 1px solid var(--border);">
                        <div class="stat-item">
                            <div style="font-size: 32px; font-weight: 900; color: var(--dark); line-height: 1;">13+</div>
                            <div style="font-size: 13px; color: var(--text-muted); font-weight: 600; margin-top: 4px;">UI
                                Components</div>
                        </div>
                        <div class="stat-item">
                            <div style="font-size: 32px; font-weight: 900; color: var(--dark); line-height: 1;">100</div>
                            <div style="font-size: 13px; color: var(--text-muted); font-weight: 600; margin-top: 4px;">
                                Lighthouse Score</div>
                        </div>
                        <div class="stat-item">
                            <div style="font-size: 32px; font-weight: 900; color: var(--dark); line-height: 1;">0ms</div>
                            <div style="font-size: 13px; color: var(--text-muted); font-weight: 600; margin-top: 4px;">CSS
                                Latency</div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="hero-image-wrapper"
                        style="position: relative; display: flex; flex-direction: column; align-items: center;">
                        <div style="position: relative; width: 100%;">
                            <img src="{{ asset('assets/images/backend.png') }}" alt="Zahira Dashboard Preview"
                                class="hero-preview-image"
                                style="width: 110%; border-radius: 24px; box-shadow: 0 40px 80px rgba(0,0,0,0.2); border: 8px solid var(--bg-surface); transform: perspective(1500px) rotateY(-8deg) rotateX(4deg); transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);">

                            <div class="hero-badge"
                                style="position: absolute; bottom: -20px; left: -30px; background: var(--bg-surface); padding: 20px; border-radius: 16px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); border: 1px solid var(--border); z-index: 10;">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div
                                        style="width: 48px; height: 48px; background: linear-gradient(135deg, #3b82f6, #8b5cf6); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 18px;">
                                        <i class="fas fa-gem"></i>
                                    </div>
                                    <div>
                                        <div style="font-weight: 800; font-size: 14px; color: var(--text-main);">Zahira
                                        </div>
                                        <div style="font-size: 12px; color: var(--text-muted);">Versi 26.02</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-24 reveal" style="background: var(--bg-body);">
        <div class="container">
            <div class="text-center mb-12">
                <div
                    style="display: inline-block; background: #eff6ff; color: var(--primary); padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px;">
                    <i class="fas fa-gem"></i> Core Features
                </div>
                <h2
                    style="font-family: 'Montserrat', sans-serif; font-size: 48px; font-weight: 900; color: var(--dark); margin-bottom: 16px;">
                    Everything You Need,<br>Nothing You Don't
                </h2>
                <p style="font-size: 18px; color: var(--text-muted); max-width: 700px; margin: 0 auto; line-height: 1.7;">
                    Zahira bypasses the bloat of heavy frameworks with a custom-crafted Vanilla CSS Design System.
                </p>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="feature-card">
                        <div
                            style="width: 64px; height: 64px; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
                            <i class="fas fa-moon" style="font-size: 28px; color: var(--primary);"></i>
                        </div>
                        <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: var(--dark);">Dynamic
                            Theme Engine</h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 15px;">
                            Seamlessly toggle between Dark and Light modes with local storage persistence. Your users'
                            preferences, remembered.
                        </p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="background: var(--bg-surface);">
                        <div
                            style="width: 64px; height: 64px; background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
                            <i class="fas fa-mobile-screen" style="font-size: 28px; color: #10b981;"></i>
                        </div>
                        <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: var(--dark);">True
                            Responsive Design</h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 15px;">
                            Every pixel optimized for Desktop, Tablet, and Mobile devices. Zero overflow policy guaranteed.
                        </p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="background: var(--bg-surface);">
                        <div
                            style="width: 64px; height: 64px; background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
                            <i class="fas fa-bolt" style="font-size: 28px; color: #f59e0b;"></i>
                        </div>
                        <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: var(--dark);">Performance
                            Optimized</h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 15px;">
                            No Tailwind or Bootstrap overhead. Pure, optimized CSS for maximum rendering speed.
                        </p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="background: var(--bg-surface);">
                        <div
                            style="width: 64px; height: 64px; background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
                            <i class="fas fa-layer-group" style="font-size: 28px; color: #ec4899;"></i>
                        </div>
                        <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: var(--dark);">
                            Comprehensive UI Kit</h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 15px;">
                            13+ essential UI modules (Modals, Forms, Alerts, Tables) with copy-paste code snippets.
                        </p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="background: var(--bg-surface);">
                        <div
                            style="width: 64px; height: 64px; background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
                            <i class="fas fa-user-shield" style="font-size: 28px; color: #6366f1;"></i>
                        </div>
                        <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: var(--dark);">Advanced
                            Profile Management</h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 15px;">
                            Integrated system for identity verification, avatar management, and security credentials.
                        </p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="background: var(--bg-surface);">
                        <div
                            style="width: 64px; height: 64px; background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
                            <i class="fas fa-shield-alt" style="font-size: 28px; color: #ef4444;"></i>
                        </div>
                        <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: var(--dark);">Secure
                            Foundation</h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 15px;">
                            Leveraging Laravel's robust authentication, CSRF protection, and database compatibility.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="components" class="py-24 reveal"
        style="background-color: var(--bg-soft); background-image: radial-gradient(var(--dot-color) 1px, transparent 1px); background-size: 32px 32px;">
        <div class="container">
            <div class="text-center mb-12">
                <div
                    style="display: inline-block; background: #fef3c7; color: #f59e0b; padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px;">
                    <i class="fas fa-layer-group"></i> UI Component Library
                </div>
                <h2
                    style="font-family: 'Montserrat', sans-serif; font-size: 48px; font-weight: 900; color: var(--dark); margin-bottom: 16px;">
                    Built-In Documentation Suite
                </h2>
                <p style="font-size: 18px; color: var(--text-muted); max-width: 700px; margin: 0 auto;">
                    Every component is documented with live examples and copy-paste code snippets.
                </p>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-bell" style="color: var(--primary); font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Alerts</h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">
                                Multi-variant feedback systems for user notifications.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-user-circle" style="color: #10b981; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Avatars
                            </h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Interactive
                                user representations (Circle, Square, Rounded).</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-tag" style="color: #f59e0b; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Badges</h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Status
                                indicators and labeling components.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-route" style="color: #6366f1; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Breadcrumbs
                            </h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Automated
                                hierarchical navigation trail patterns.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-mouse-pointer" style="color: #ec4899; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Buttons
                            </h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Variable
                                scales and action-oriented designs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-file-invoice" style="color: #0ea5e9; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Forms</h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">
                                Comprehensive
                                input elements and layout patterns.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-window-maximize" style="color: #8b5cf6; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Modals</h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Flexible
                                dialog overlays for focused interactions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-table" style="color: #ef4444; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Tables</h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Responsive
                                data presentation with variety of styles.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-layer-group" style="color: #10b981; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Tabs</h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Efficient
                                content organization and tabbed views.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-stream" style="color: #f59e0b; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Timeline
                            </h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Sequential
                                event tracking and activity logs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-comment-alt" style="color: #3b82f6; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Toasts</h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">
                                Non-intrusive
                                floating notification systems.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-card" style="padding: 24px; border-radius: 16px;">
                        <div
                            style="width: 50px; height: 50px; background: var(--bg-soft); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-font" style="color: #64748b; font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 16px; margin: 0 0 4px; color: var(--dark);">Typography
                            </h4>
                            <p style="color: var(--text-muted); font-size: 13px; margin: 0; line-height: 1.5;">Cohesive
                                font scales and text utility classes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tech" class="py-24 reveal" style="background: var(--bg-body);">
        <div class="container">
            <div class="text-center mb-12">
                <div
                    style="display: inline-block; background: #e0e7ff; color: #6366f1; padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px;">
                    <i class="fas fa-code"></i> Technology Stack
                </div>
                <h2
                    style="font-family: 'Montserrat', sans-serif; font-size: 48px; font-weight: 900; color: var(--dark); margin-bottom: 16px;">
                    Built on Modern,<br>Battle-Tested Technology
                </h2>
            </div>

            <div style="max-width: 900px; margin: 0 auto;">
                <div
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 2px; background: var(--border); border-radius: 16px; overflow: hidden;">
                    <div style="background: var(--bg-surface); padding: 32px;">
                        <div style="font-weight: 700; color: var(--text-muted); font-size: 13px; margin-bottom: 8px;">
                            BACKEND</div>
                        <div style="font-weight: 800; font-size: 18px; color: var(--dark);">Laravel 12.x (LTS Ready)</div>
                    </div>
                    <div style="background: var(--bg-surface); padding: 32px;">
                        <div style="font-weight: 700; color: var(--text-muted); font-size: 13px; margin-bottom: 8px;">
                            FRONTEND</div>
                        <div style="font-weight: 800; font-size: 18px; color: var(--dark);">Blade Templating Engine</div>
                    </div>
                    <div style="background: var(--bg-surface); padding: 32px;">
                        <div style="font-weight: 700; color: var(--text-muted); font-size: 13px; margin-bottom: 8px;">
                            STYLING</div>
                        <div style="font-weight: 800; font-size: 18px; color: var(--dark);">Vanilla CSS 3 Design System
                        </div>
                    </div>
                    <div style="background: var(--bg-surface); padding: 32px;">
                        <div style="font-weight: 700; color: var(--text-muted); font-size: 13px; margin-bottom: 8px;">ICONS
                        </div>
                        <div style="font-weight: 800; font-size: 18px; color: var(--dark);">FontAwesome 6.5.1</div>
                    </div>
                    <div style="background: var(--bg-surface); padding: 32px;">
                        <div style="font-weight: 700; color: var(--text-muted); font-size: 13px; margin-bottom: 8px;">
                            TYPOGRAPHY</div>
                        <div style="font-weight: 800; font-size: 18px; color: var(--dark);">Inter & Google Fonts</div>
                    </div>
                    <div style="background: var(--bg-surface); padding: 32px;">
                        <div style="font-weight: 700; color: var(--text-muted); font-size: 13px; margin-bottom: 8px;">
                            DATABASE</div>
                        <div style="font-weight: 800; font-size: 18px; color: var(--dark);">SQLite, MySQL, PostgreSQL</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24" style="background: #0f172a; color: white; position: relative; overflow: hidden;">
        <div
            style="position: absolute; top: 0; right: 0; width: 600px; height: 600px; background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, transparent 70%);">
        </div>

        <div class="container text-center" style="position: relative; z-index: 1;">
            <div
                style="display: inline-block; background: rgba(255, 255, 255, 0.1); color: white; padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 24px;">
                <i class="fas fa-bolt"></i> Performance Metrics
            </div>

            <h2
                style="font-family: 'Montserrat', sans-serif; font-size: 56px; font-weight: 900; margin-bottom: 60px; line-height: 1.2;">
                Built for Power.<br><span class="gradient-text">No Compromise.</span>
            </h2>

            <div class="row perf-stats">
                <div class="col-4">
                    <div style="font-size: 72px; font-weight: 900; margin-bottom: 16px; line-height: 1;">100</div>
                    <div
                        style="color: rgba(255,255,255,0.6); font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 2px;">
                        Lighthouse Score</div>
                </div>
                <div class="col-4">
                    <div style="font-size: 72px; font-weight: 900; margin-bottom: 16px; line-height: 1;">0ms</div>
                    <div
                        style="color: rgba(255,255,255,0.6); font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 2px;">
                        CSS Latency</div>
                </div>
                <div class="col-4">
                    <div style="font-size: 72px; font-weight: 900; margin-bottom: 16px; line-height: 1;">LTS</div>
                    <div
                        style="color: rgba(255,255,255,0.6); font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 2px;">
                        Laravel Support</div>
                </div>
            </div>

            <div class="mt-20">
                <a href="{{ route('register') }}" class="btn btn-primary"
                    style="padding: 20px 60px; font-size: 16px; box-shadow: 0 20px 40px rgba(59, 130, 246, 0.4);">
                    <i class="fas fa-rocket"></i> Get Started for Free
                </a>
                <p style="margin-top: 20px; color: rgba(255,255,255,0.5); font-size: 14px;">
                    100% Free • Open Source • CC BY 4.0 License
                </p>
            </div>
        </div>
    </section>

    <section class="py-24"
        style="background-color: var(--bg-surface); background-image: radial-gradient(var(--dot-color) 1px, transparent 1px); background-size: 32px 32px; color: var(--text-main); text-align: center; border-top: 1px solid var(--border);">
        <div class="container">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 48px; font-weight: 900; margin-bottom: 24px;">
                Ready to Build Something Amazing?
            </h2>
            <p
                style="font-size: 20px; margin-bottom: 40px; color: var(--text-muted); max-width: 600px; margin-left: auto; margin-right: auto;">
                Join 1000+ developers who trust Zahira for their admin dashboard needs.
            </p>
            <div class="d-flex gap-4" style="justify-content: center;">
                <a href="{{ route('download') }}" class="btn btn-primary"
                    style="padding: 18px 48px; font-size: 16px; font-weight: 800; box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);">
                    Download Zahira Free
                </a>
                <a href="{{ route('demo-info') }}" class="btn"
                    style="background: var(--bg-surface); color: var(--text-main); border: 2px solid var(--border); padding: 18px 48px; font-size: 16px; font-weight: 800;">
                    View Demo
                </a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const wrapper = document.getElementById('rotation-wrapper');
            const items = document.querySelectorAll('.rotation-item');
            let currentIndex = 0;

            setInterval(() => {
                currentIndex = (currentIndex + 1) % items.length;
                const offset = currentIndex * 1.25;
                wrapper.style.transform = `translateY(-${offset}em)`;
            }, 2000);

            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.1
            });

            revealElements.forEach(el => revealObserver.observe(el));
        });
    </script>
@endsection