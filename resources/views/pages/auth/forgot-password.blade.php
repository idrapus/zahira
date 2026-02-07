@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('content')
    <div class="auth-header">
        <h2 class="auth-title">Forgot Password?</h2>
        <p class="auth-subtitle">No problem. Just let us know your email address and we will email you a password reset link.
        </p>
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
        <div class="alert alert-danger mb-4">
            <i class="fas fa-xmark-circle mt-1 text-lg"></i>
            <div>
                <div class="fw-bold mb-1">Error</div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}"
                placeholder="name@company.com" required autofocus>
        </div>

        <button type="submit" class="btn btn-primary w-full">Email Password Reset Link</button>
    </form>

    <div class="auth-footer">
        Remember your password? <a href="{{ route('login') }}" class="auth-link">Sign In</a>
    </div>
@endsection
