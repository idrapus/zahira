@extends('layouts.app')

@section('title', 'Badge Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Badge Elements</h2>
        <p class="text-secondary text-sm">Small status indicators and labels for highlighting important information.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Status Badges</h4>
        <div class="d-flex flex-wrap gap-3">
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-secondary">Secondary</span>
            <span class="badge badge-success">Success</span>
            <span class="badge badge-danger">Danger</span>
            <span class="badge badge-warning">Warning</span>
            <span class="badge badge-info">Info</span>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Size Variants</h4>
        <div class="d-flex flex-wrap gap-3 items-center">
            <span class="badge badge-primary text-xs">Extra Small</span>
            <span class="badge badge-primary text-sm">Small</span>
            <span class="badge badge-primary">Default</span>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Badge with Icons</h4>
        <div class="d-flex flex-wrap gap-3">
            <span class="badge badge-success"><i class="fas fa-check"></i>Verified</span>
            <span class="badge badge-danger"><i class="fas fa-times"></i>Rejected</span>
            <span class="badge badge-info"><i class="fas fa-info-circle"></i>Info</span>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">Consistent HTML structure for building badge components.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Badge Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Status Variants --&gt;
&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;

&lt;!-- Size Variants --&gt;
&lt;span class="badge badge-primary text-xs"&gt;Extra Small&lt;/span&gt;
&lt;span class="badge badge-primary text-sm"&gt;Small&lt;/span&gt;
&lt;span class="badge badge-primary"&gt;Default&lt;/span&gt;

&lt;!-- With Icons --&gt;
&lt;span class="badge badge-success"&gt;
    &lt;i class="fas fa-check"&gt;&lt;/i&gt;Verified
&lt;/span&gt;</pre>
    </div>
@endsection
