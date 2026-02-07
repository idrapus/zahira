@extends('layouts.landing')

@section('title', 'Download Zahira — Premium Laravel 12 Admin Dashboard')

@section('content')
    <style>
        .download-hero {
            padding: 160px 0 100px;
            background-color: var(--bg-soft);
            background-image: radial-gradient(var(--dot-color) 1.5px, transparent 1.5px);
            background-size: 40px 40px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .download-hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to bottom, transparent, var(--bg-body));
        }

        .download-container {
            max-width: 900px;
            margin: -60px auto 120px;
            position: relative;
            z-index: 10;
            padding: 0 20px;
        }

        .download-card-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        @media (max-width: 768px) {
            .download-card-grid {
                grid-template-columns: 1fr;
            }
        }

        .download-option {
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

        .download-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: var(--primary);
        }

        .download-icon-box {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            font-size: 24px;
        }

        .github-box {
            background: #f3f4f6;
            color: #1f2937;
        }

        .zip-box {
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary);
        }

        .download-option-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 12px;
        }

        .download-option-desc {
            font-size: 15px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 30px;
            flex-grow: 1;
        }
    </style>

    <section class="download-hero">
        <div class="container">
            <div
                style="display: inline-block; background: #eff6ff; color: var(--primary); padding: 8px 24px; border-radius: 50px; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 24px;">
                <i class="fas fa-download me-2"></i> Free Download
            </div>
            <h1 class="hero-title" style="margin-bottom: 24px;">Get Started with <span class="gradient-text">Zahira</span>
            </h1>
            <p style="font-size: 18px; color: var(--text-muted); max-width: 650px; margin: 0 auto; line-height: 1.6;">
                Choose your preferred download method. Zahira is 100% Free and Open Source under the CC BY 4.0 License.
            </p>
        </div>
    </section>

    <div class="download-container">
        <!-- Download Options Grid -->
        <div class="download-card-grid">
            <div class="download-option">
                <div class="download-icon-box github-box">
                    <i class="fab fa-github"></i>
                </div>
                <h3 class="download-option-title">Store on GitHub</h3>
                <p class="download-option-desc">Clone the repository to get the latest updates and contribute to the
                    community.</p>
                <a href="https://github.com/idrapus/zahira" target="_blank" class="btn btn-primary"
                    style="justify-content: center; background: #1f2937; border-color: #1f2937;">
                    <i class="fab fa-github me-2"></i> View on GitHub
                </a>
            </div>

            <div class="download-option">
                <div class="download-icon-box zip-box">
                    <i class="fas fa-file-archive"></i>
                </div>
                <h3 class="download-option-title">Source Code (ZIP)</h3>
                <p class="download-option-desc">Download the complete source code directly as a compressed ZIP file to start
                    immediately.</p>
                <a href="https://github.com/idrapus/zahira/archive/refs/heads/master.zip" target="_blank"
                    class="btn btn-primary" style="justify-content: center;">
                    <i class="fas fa-download me-2"></i> Download Zip
                </a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
            <p style="color: var(--text-muted); font-size: 15px; margin-bottom: 16px;">Want to know how it works?</p>
            <a href="{{ route('docs') }}" class="btn btn-outline"
                style="border: 1px solid var(--border); padding: 12px 32px; font-weight: 700; font-size: 14px;">
                <i class="fas fa-book me-2"></i> Read the Documentation
            </a>
        </div>


    </div>
@endsection