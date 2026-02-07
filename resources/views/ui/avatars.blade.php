@extends('layouts.app')

@section('title', 'Avatar Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Avatar Elements</h2>
        <p class="text-secondary text-sm">Visual representations of users using images or initials.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Small Avatar</h4>
        <div class="d-flex items-center gap-4">
            <div class="user-avatar">
                @if (Auth::user()->avatar)
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                @else
                    {{ substr(Auth::user()->name, 0, 1) }}
                @endif
            </div>
            <div>
                <div class="fw-bold text-sm text-primary">{{ Auth::user()->name }}</div>
                <div class="text-xs text-muted">user-avatar (36px)</div>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Large Profile Avatar</h4>
        <div class="d-flex items-center gap-6">
            <div class="profile-avatar-large m-0">
                @if (Auth::user()->avatar)
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-full h-full object-cover">
                @else
                    {{ substr(Auth::user()->name, 0, 1) }}
                @endif
            </div>
            <div>
                <h4 class="fw-bold text-lg mb-1">{{ Auth::user()->name }}</h4>
                <p class="text-secondary text-sm mb-2">profile-avatar-large (100px)</p>
                <span class="badge badge-success">Active</span>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Interactive Avatar</h4>
        <div class="d-flex items-center gap-6">
            <div class="profile-avatar-large m-0 cursor-pointer relative overflow-hidden">
                @if (Auth::user()->avatar)
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-full h-full object-cover">
                @else
                    {{ substr(Auth::user()->name, 0, 1) }}
                @endif
                <div class="avatar-overlay">
                    <i class="fas fa-camera"></i>
                    <span class="text-xs">Change</span>
                </div>
            </div>
            <p class="text-secondary text-sm mb-0">
                Hover the avatar to see the upload overlay mechanism.<br>
                <span class="text-xs text-muted">Includes transition effects and icon centering.</span>
            </p>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Shape Variants</h4>
        <div class="d-flex items-center gap-10 flex-wrap">
            <div class="text-center w-120">
                <div class="profile-avatar-large m-0 avatar-circle mb-3">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-full h-full object-cover">
                    @else
                        {{ substr(Auth::user()->name, 0, 1) }}
                    @endif
                </div>
                <span class="text-xs fw-bold text-secondary uppercase d-block">Circle</span>
            </div>

            <div class="text-center w-120">
                <div class="profile-avatar-large m-0 mb-3">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-full h-full object-cover">
                    @else
                        {{ substr(Auth::user()->name, 0, 1) }}
                    @endif
                </div>
                <span class="text-xs fw-bold text-secondary uppercase d-block">Rounded</span>
            </div>

            <div class="text-center w-120">
                <div class="profile-avatar-large m-0 avatar-square mb-3">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-full h-full object-cover">
                    @else
                        {{ substr(Auth::user()->name, 0, 1) }}
                    @endif
                </div>
                <span class="text-xs fw-bold text-secondary uppercase d-block">Square</span>
            </div>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">HTML structure for avatar components.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Avatar Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Small Avatar (36px) --&gt;
&lt;div class="user-avatar"&gt;
    &lt;img src="user.jpg" alt="User Name"&gt;
    &lt;!-- Or Initials --&gt;
    &lt;!-- A --&gt;
&lt;/div&gt;

&lt;!-- Large Avatar (100px) --&gt;
&lt;div class="profile-avatar-large"&gt;
    &lt;img src="avatar.jpg" class="w-full h-full object-cover"&gt;
&lt;/div&gt;

&lt;!-- Interactive Upload State --&gt;
&lt;div class="profile-avatar-large cursor-pointer relative overflow-hidden"&gt;
    &lt;img src="avatar.jpg" class="w-full h-full object-cover"&gt;
    &lt;div class="avatar-overlay"&gt;
        &lt;i class="fas fa-camera"&gt;&lt;/i&gt;
        &lt;span class="text-xs"&gt;Change&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Shape Modifiers --&gt;
&lt;div class="profile-avatar-large avatar-circle"&gt;...&lt;/div&gt;
&lt;div class="profile-avatar-large avatar-square"&gt;...&lt;/div&gt;</pre>
    </div>
@endsection
