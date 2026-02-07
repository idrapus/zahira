@extends('layouts.app')

@section('title', 'Widgets Showcase')

@section('content')
    <div class="content-header">
        <h1 class="content-title">Widgets</h1>
        <p class="content-subtitle">Versatile UI blocks for displaying statistics, profiles, and interactive data.</p>
    </div>

    <!-- Statistics Grid - EXACTLY as Dashboard -->
    <div class="grid mb-8">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Total Revenue</div>
                <div class="stat-icon green">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
            <div class="stat-value">$124,592</div>
            <div class="stat-description">
                <span class="text-success fw-bold"><i class="fas fa-arrow-up me-1"></i> 12.5%</span> increase
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Active Users</div>
                <div class="stat-icon blue">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="stat-value">12,482</div>
            <div class="stat-description">
                <span class="text-success fw-bold"><i class="fas fa-arrow-up me-1"></i> 4.2%</span> increase
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Conversion Rate</div>
                <div class="stat-icon purple">
                    <i class="fas fa-chart-line"></i>
                </div>
            </div>
            <div class="stat-value">3.42%</div>
            <div class="stat-description">
                <span class="text-danger fw-bold"><i class="fas fa-arrow-down me-1"></i> 0.8%</span> decrease
            </div>
        </div>
    </div>

    <div class="grid mb-8">
        <!-- User Profile Widget - Using Professional Patterns -->
        <div class="card h-full">
            <div class="card-body text-center py-10">
                <div class="profile-avatar-large mx-auto mb-6">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-full h-full object-cover">
                    @else
                        {{ substr(Auth::user()->name, 0, 1) }}
                    @endif
                </div>
                <h3 class="h3 mb-1">{{ Auth::user()->name }}</h3>
                <p class="text-secondary text-sm mb-6">System Administrator</p>

                <div class="d-flex justify-center gap-8 mb-8">
                    <div class="text-center">
                        <div class="fw-bold h4 mb-0">2.4k</div>
                        <div class="text-xs text-muted uppercase tracking-wider">Followers</div>
                    </div>
                    <div class="text-center">
                        <div class="fw-bold h4 mb-0">128</div>
                        <div class="text-xs text-muted uppercase tracking-wider">Projects</div>
                    </div>
                    <div class="text-center">
                        <div class="fw-bold h4 mb-0">3.2k</div>
                        <div class="text-xs text-muted uppercase tracking-wider">Tasks</div>
                    </div>
                </div>

                <div class="px-6">
                    <button class="btn btn-primary w-full rounded-xl py-4">View Full Profile</button>
                </div>
            </div>
        </div>

        <!-- Project Progress Card -->
        <div class="card h-full">
            <div class="card-header border-0 pb-0">
                <h4 class="h4">Project Progress</h4>
            </div>
            <div class="card-body">
                <div class="mb-6">
                    <div class="d-flex justify-between mb-2">
                        <span class="text-sm fw-semibold">Frontend Development</span>
                        <span class="text-sm fw-bold text-accent">85%</span>
                    </div>
                    <div class="progress" style="height: 10px; background: var(--hover-bg); border-radius: 20px;">
                        <div class="progress-bar bg-primary" style="width: 85%; border-radius: 20px;"></div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="d-flex justify-between mb-2">
                        <span class="text-sm fw-semibold">API Integration</span>
                        <span class="text-sm fw-bold text-success">60%</span>
                    </div>
                    <div class="progress" style="height: 10px; background: var(--hover-bg); border-radius: 20px;">
                        <div class="progress-bar"
                            style="width: 60%; background: var(--success-color); border-radius: 20px;"></div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="d-flex justify-between mb-2">
                        <span class="text-sm fw-semibold">UI/UX Design</span>
                        <span class="text-sm fw-bold text-warning">45%</span>
                    </div>
                    <div class="progress" style="height: 10px; background: var(--hover-bg); border-radius: 20px;">
                        <div class="progress-bar"
                            style="width: 45%; background: var(--warning-color); border-radius: 20px;"></div>
                    </div>
                </div>
                <div class="mb-0">
                    <div class="d-flex justify-between mb-2">
                        <span class="text-sm fw-semibold">QA Testing</span>
                        <span class="text-sm fw-bold text-danger">15%</span>
                    </div>
                    <div class="progress" style="height: 10px; background: var(--hover-bg); border-radius: 20px;">
                        <div class="progress-bar" style="width: 15%; background: var(--danger-color); border-radius: 20px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Solid Background Widgets - Premium Gradient Version -->
    <div class="grid">
        <div class="card border-0 relative overflow-hidden shadow-lg"
            style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); color: white; border-radius: 16px;">
            <div class="card-body p-8" style="z-index: 2;">
                <div class="text-3xl fw-bold mb-1">$45.2k</div>
                <div class="text-sm fw-semibold opacity-80 uppercase tracking-wider">Monthly Sales Volume</div>
                <i class="fas fa-shopping-cart absolute"
                    style="right: -20px; bottom: -20px; font-size: 110px; opacity: 0.12; transform: rotate(-15deg); z-index: 1;"></i>
            </div>
        </div>
        <div class="card border-0 relative overflow-hidden shadow-lg"
            style="background: linear-gradient(135deg, #10b981 0%, #065f46 100%); color: white; border-radius: 16px;">
            <div class="card-body p-8" style="z-index: 2;">
                <div class="text-3xl fw-bold mb-1">+1,240</div>
                <div class="text-sm fw-semibold opacity-80 uppercase tracking-wider">New Paid Subscriptions</div>
                <i class="fas fa-user-plus absolute"
                    style="right: -20px; bottom: -20px; font-size: 110px; opacity: 0.12; transform: rotate(-15deg); z-index: 1;"></i>
            </div>
        </div>
        <div class="card border-0 relative overflow-hidden shadow-lg"
            style="background: linear-gradient(135deg, #f59e0b 0%, #b45309 100%); color: white; border-radius: 16px;">
            <div class="card-body p-8" style="z-index: 2;">
                <div class="text-3xl fw-bold mb-1">99.9%</div>
                <div class="text-sm fw-semibold opacity-80 uppercase tracking-wider">Core Server Uptime</div>
                <i class="fas fa-server absolute"
                    style="right: -20px; bottom: -20px; font-size: 110px; opacity: 0.12; transform: rotate(-15deg); z-index: 1;"></i>
            </div>
        </div>
    </div>
@endsection
