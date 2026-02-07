@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <div class="auth-header">
        <h2 class="auth-title">Create Account</h2>
        <p class="auth-subtitle">Join us and start managing your dashboard.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <i class="fas fa-xmark-circle mt-1 text-lg"></i>
            <div>
                <div class="fw-bold mb-1">Registration Error</div>
                <ul class="m-0 px-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-input" value="{{ old('name') }}"
                placeholder="John Doe" required autofocus>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}"
                placeholder="name@company.com" required>
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-input" placeholder="••••••••" required>
            <p class="font-12 text-muted mt-1">Must be at least 8 characters.</p>
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-input"
                placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn btn-primary w-full">Register</button>
    </form>

    <div class="auth-footer">
        Already have an account? <a href="{{ route('login') }}" class="auth-link">Sign In</a>
    </div>
@endsection
