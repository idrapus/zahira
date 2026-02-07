@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="content-header">
        <h1 class="content-title">Welcome back, {{ explode(' ', Auth::user()->name)[0] }}</h1>
        <p class="content-subtitle">Here's what's happening with your account today.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">User ID</div>
                <div class="stat-icon blue">
                    <i class="fas fa-circle-user"></i>
                </div>
            </div>
            <div class="stat-value">#{{ Auth::user()->id }}</div>
            <div class="stat-description">Unique identifier</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Account Status</div>
                <div class="stat-icon green">
                    <i class="fas fa-circle-check"></i>
                </div>
            </div>
            <div class="stat-value">
                <span class="badge badge-success">Active</span>
            </div>
            <div class="stat-description">All systems operational</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Member Since</div>
                <div class="stat-icon purple">
                    <i class="fas fa-calendar-days"></i>
                </div>
            </div>
            <div class="stat-value">{{ Auth::user()->created_at->format('M Y') }}</div>
            <div class="stat-description">{{ Auth::user()->created_at->diffForHumans() }}</div>
        </div>
    </div>

    <!-- Account Details -->
    <div class="card">
        <div class="card-header">Account Information</div>
        <div class="card-body">
            <table class="info-table">
                <tr>
                    <td>Full Name</td>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td>User ID</td>
                    <td>{{ Auth::user()->id }}</td>
                </tr>
                <tr>
                    <td>Registration Date</td>
                    <td>{{ Auth::user()->created_at->format('F d, Y \a\t H:i') }}</td>
                </tr>
                <tr>
                    <td>Last Updated</td>
                    <td>{{ Auth::user()->updated_at->format('F d, Y \a\t H:i') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- System Info -->
    <div class="card">
        <div class="card-header">System Information</div>
        <div class="card-body">
            <table class="info-table">
                <tr>
                    <td>Application</td>
                    <td>{{ config('app.name') }}</td>
                </tr>
                <tr>
                    <td>App Version</td>
                    <td>{{ config('app.version') }}</td>
                </tr>
                <tr>
                    <td>Environment</td>
                    <td>{{ config('app.env') }}</td>
                </tr>
                <tr>
                    <td>Laravel Version</td>
                    <td>{{ app()->version() }}</td>
                </tr>
                <tr>
                    <td>PHP Version</td>
                    <td>{{ PHP_VERSION }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
