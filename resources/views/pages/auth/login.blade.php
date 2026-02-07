@extends('layouts.guest')

@section('title', 'Sign In')

@section('content')
    <div class="auth-header">
        <h2 class="auth-title">Sign In</h2>
        <p class="auth-subtitle">Welcome back! Please enter your details.</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success mb-4">
            <i class="fas fa-check-circle mt-1 text-lg"></i>
            <div>
                {{ session('status') }}
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <i class="fas fa-xmark-circle mt-1 text-lg"></i>
            <div>
                <div class="fw-bold mb-1">Error</div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}"
                placeholder="name@company.com" required autofocus>
        </div>

        <div class="form-group">
            <div class="d-flex justify-between items-center mb-2">
                <label for="password" class="form-label mb-0">Password</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="auth-link font-13">Forgot
                        password?</a>
                @endif
            </div>
            <input type="password" id="password" name="password" class="form-input" placeholder="••••••••" required>
        </div>

        <div class="form-group d-flex items-center gap-2">
            <input type="checkbox" id="remember" name="remember" class="w-16 h-16 cursor-pointer">
            <label for="remember" class="font-14 text-secondary cursor-pointer">Remember
                Me</label>
        </div>

        <button type="submit" class="btn btn-primary w-full">Sign In</button>
    </form>

    <div class="auth-footer">
        Don't have an account? <a href="{{ route('register') }}" class="auth-link">Create one</a>
    </div>
@endsection
