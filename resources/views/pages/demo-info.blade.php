@extends('layouts.landing')

@section('title', 'Live Demo Access — Zahira')

@section('content')
    <style>
        .demo-hero {
            padding: 160px 0 100px;
            background-color: var(--bg-soft);
            background-image: radial-gradient(var(--dot-color) 1.5px, transparent 1.5px);
            background-size: 40px 40px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .demo-hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to bottom, transparent, var(--bg-body));
        }

        .demo-container {
            max-width: 900px;
            margin: -60px auto 120px;
            position: relative;
            z-index: 10;
            padding: 0 20px;
        }

        .demo-card-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        @media (max-width: 768px) {
            .demo-card-grid {
                grid-template-columns: 1fr;
            }
        }

        .demo-option {
            background: var(--bg-surface);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 40px;
            text-align: left;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .demo-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: var(--primary);
        }

        .demo-icon-box {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            font-size: 24px;
        }

        .register-box {
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary);
        }

        .login-box {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
        }

        .demo-option-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 12px;
        }

        .demo-option-desc {
            font-size: 15px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 30px;
            flex-grow: 1;
        }
    </style>

    <section class="demo-hero">
        <div class="container">
            <div
                style="display: inline-block; background: #eff6ff; color: var(--primary); padding: 8px 24px; border-radius: 50px; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 24px;">
                <i class="fas fa-lock me-2"></i> Restricted Access
            </div>
            <h1 class="hero-title" style="margin-bottom: 24px;">Unlock the <span class="gradient-text">Zahira</span>
                Experience
            </h1>
            <p style="font-size: 18px; color: var(--text-muted); max-width: 650px; margin: 0 auto; line-height: 1.6;">
                Sign in to explore real-time features, personalized analytics, and the full capability of our design system.
            </p>
        </div>
    </section>

    <div class="demo-container">
        <div class="demo-card-grid">
            <div class="demo-option">
                <div class="demo-icon-box register-box">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h3 class="demo-option-title">Step 1: Register</h3>
                <p class="demo-option-desc">Create your free account in seconds. No credit card required. We only need your
                    name and email to set up your personal demo seat.</p>
                <a href="{{ route('register') }}" class="btn btn-primary" style="justify-content: center;">
                    <i class="fas fa-user-plus me-2"></i> Create Free Account
                </a>
            </div>

            <div class="demo-option">
                <div class="demo-icon-box login-box">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <h3 class="demo-option-title">Step 2: Sign In</h3>
                <p class="demo-option-desc">Already have an account? Simply sign in to your dashboard. All features,
                    components, and documentation are waiting for you inside.</p>
                <a href="{{ route('login') }}" class="btn btn-outline"
                    style="justify-content: center; border: 1px solid var(--border);">
                    <i class="fas fa-sign-in-alt me-2"></i> Login to Dashboard
                </a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
            <p style="color: var(--text-muted); font-size: 15px; margin-bottom: 16px;">Not ready to sign up yet?</p>
            <a href="{{ route('landing') }}#features" class="btn btn-outline"
                style="border: 1px solid var(--border); padding: 12px 32px; font-weight: 700; font-size: 14px;">
                <i class="fas fa-info-circle me-2"></i> Learn more about features
            </a>
        </div>
    </div>
@endsection