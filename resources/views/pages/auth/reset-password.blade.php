@extends('layouts.guest')

@section('title', 'Reset Password')

@section('content')
    <div class="auth-header">
        <h2 class="auth-title">Reset Password</h2>
        <p class="auth-subtitle">Please enter your new password below.</p>
    </div>

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

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-input" value="{{ $email ?? old('email') }}"
                required autofocus>
        </div>

        <div class="form-group">
            <label for="password" class="form-label">New Password</label>
            <input type="password" id="password" name="password" class="form-input" placeholder="••••••••" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-input"
                placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn btn-primary w-full">Reset Password</button>
    </form>
@endsection
