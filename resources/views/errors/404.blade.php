@extends('layouts.blank')

@section('title', 'Page Not Found')

@section('content')
    <div class="d-flex flex-column items-center justify-center text-center w-full" style="min-height: 100vh;">
        <div class="mb-6 d-flex items-center justify-center gap-2 select-none">
            <span class="fw-bold text-accent opacity-25" style="font-size: 150px; line-height: 1;">4</span>
            <i class="fas fa-ghost text-accent opacity-50 swing-animation" style="font-size: 120px;"></i>
            <span class="fw-bold text-accent opacity-25" style="font-size: 150px; line-height: 1;">4</span>
        </div>

        <h2 class="h2 mb-3">Oops! Page Not Found</h2>
        <p class="text-secondary mb-8 max-w-500">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>

        <div class="d-flex gap-3">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary">
                    <i class="fas fa-home"></i> Back to Dashboard
                </a>
            @else
                <a href="{{ url('/') }}" class="btn btn-primary">
                    <i class="fas fa-home"></i> Back to Home
                </a>
            @endauth
            <button onclick="history.back()" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Go Back
            </button>
        </div>
    </div>
@endsection
