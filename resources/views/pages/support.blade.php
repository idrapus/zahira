@extends('layouts.landing')

@section('title', 'Zahira Support — Get Help & Technical Assistance')
@section('meta_description', 'Need help with Zahira Laravel Template? Contact our support team via GitHub Issues or
    direct email for technical assistance and bug reports.')
@section('meta_keywords', 'zahira support, laravel template help, technical assistance, bug report zahira, contact
    zahira team')

@section('content')
    <style>
        .support-hero {
            padding: 160px 0 100px;
            background-color: var(--bg-soft);
            background-image: radial-gradient(var(--dot-color) 1.5px, transparent 1.5px);
            background-size: 40px 40px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .support-hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to bottom, transparent, var(--bg-body));
        }

        .support-container {
            max-width: 900px;
            margin: -60px auto 120px;
            position: relative;
            z-index: 10;
            padding: 0 20px;
        }

        .support-card-simple {
            background: var(--bg-surface);
            border: 1px solid var(--border);
            border-radius: 32px;
            padding: 60px;
            box-shadow: 0 40px 80px rgba(0, 0, 0, 0.05);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        @media (max-width: 768px) {
            .support-card-simple {
                grid-template-columns: 1fr;
                padding: 40px 30px;
            }
        }

        .support-option {
            text-align: center;
            padding: 30px;
            border-radius: 20px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
        }

        .support-option:hover {
            background: var(--bg-soft);
            transform: translateY(-5px);
        }

        .support-icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 32px;
            transition: all 0.3s ease;
        }

        .support-option.github .support-icon-circle {
            background: #f3f4f6;
            color: #1f2937;
        }

        .support-option.email .support-icon-circle {
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary);
        }

        .support-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 12px;
        }

        .support-desc {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .btn-pill-simple {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .github .btn-pill-simple {
            background: #1f2937;
            color: #fff;
        }

        .email .btn-pill-simple {
            background: var(--primary);
            color: #fff;
        }
    </style>

    <!-- Simple Support Hero -->
    <section class="support-hero">
        <div class="container">
            <h1 class="hero-title" style="margin-bottom: 20px;">Support Center</h1>
            <p style="font-size: 18px; color: var(--text-muted); max-width: 600px; margin: 0 auto; line-height: 1.6;">
                Having trouble or need technical assistance? <br>
                We provide two main communication channels for you.
            </p>
        </div>
    </section>

    <!-- Simple Support Options -->
    <div class="support-container">
        <div class="support-card-simple">
            <!-- GitHub Issues -->
            <a href="https://github.com/idrapus/zahira/issues" target="_blank" class="support-option github">
                <div class="support-icon-circle">
                    <i class="fab fa-github"></i>
                </div>
                <div class="support-title">GitHub Issues</div>
                <p class="support-desc">Ideal for bug reports, technical issues, or new feature requests.</p>
                <span class="btn-pill-simple">Report on GitHub</span>
            </a>

            <!-- Email Support -->
            <a href="mailto:ajang@duck.com" class="support-option email">
                <div class="support-icon-circle">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="support-title">Email Support</div>
                <p class="support-desc">Contact us directly for general inquiries or other collaborations.</p>
                <span class="btn-pill-simple">Email Us Directly</span>
            </a>
        </div>
    </div>
@endsection
