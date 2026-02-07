@extends('layouts.app')

@section('title', 'Breadcrumb Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Breadcrumb Navigation</h2>
        <p class="text-secondary text-sm">Hierarchical navigation trail showing user's location within the application.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Basic Breadcrumb</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <p class="text-secondary text-sm mt-3">
            Simple text-based navigation trail.
        </p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Breadcrumb with Icons</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="#"><i class="fas fa-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Documents</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-file-pdf me-1 text-xs"></i> Report.pdf
                </li>
            </ol>
        </nav>
        <p class="text-secondary text-sm mt-3">
            Enhanced visual hierarchy using icons for root or specific items.
        </p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Deep Hierarchy</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                <li class="breadcrumb-item active" aria-current="page">Laptops</li>
            </ol>
        </nav>
        <p class="text-secondary text-sm mt-3">
            Supports multiple levels of nesting automatically.
        </p>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">HTML structure for breadcrumb navigation.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Breadcrumb Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Basic Structure --&gt;
&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- With Icons --&gt;
&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;&lt;i class="fas fa-home"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Current Page&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</pre>
    </div>
@endsection
