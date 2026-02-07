@extends('layouts.app')

@section('title', 'Card Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Card Elements</h2>
        <p class="text-secondary text-sm">Versatile containers for grouping related content with a consistent look.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Simple Wrapper</h4>
        <div class="card p-5 max-w-600">
            <h4 class="text-sm fw-bold mb-3">Card Title</h4>
            <p class="text-secondary text-sm">
                A simple container with padding utility. No explicit header or body classes required.
            </p>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Standard Card</h4>
        <div class="card max-w-600">
            <div class="card-body">
                <h4 class="card-title">Standard Card</h4>
                <p class="card-subtitle">Using card-body</p>
                <p class="text-secondary text-sm mt-3">
                    Using .card-body provides consistent padding and structure automatically.
                </p>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Card with Header</h4>
        <div class="card max-w-600">
            <div class="card-header">
                <div>
                    <h4 class="card-title">Card with Header</h4>
                    <p class="card-subtitle">Separated header section</p>
                </div>
                <span class="badge badge-success">Active</span>
            </div>
            <div class="card-body">
                <p class="text-secondary text-sm">
                    Use card headers to separate title and actions from the main content area.
                </p>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Card with Footer</h4>
        <div class="card max-w-600">
            <div class="card-body">
                <h4 class="card-title">Card with Footer</h4>
                <p class="text-secondary text-sm mt-3">
                    Cards can include a footer section for actions or additional information.
                </p>
            </div>
            <div class="card-footer justify-between">
                <button class="btn btn-secondary btn-sm">Cancel</button>
                <button class="btn btn-primary btn-sm">Save Changes</button>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Full Featured Card</h4>
        <div class="card max-w-600">
            <div class="card-header">
                <div>
                    <h4 class="card-title">Complete Card</h4>
                    <p class="card-subtitle">Header, body, and footer</p>
                </div>
                <span class="badge badge-primary">Featured</span>
            </div>
            <div class="card-body">
                <p class="text-secondary text-sm mb-4">
                    A complete card structure with header, body, and footer sections.
                </p>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle mt-1 text-lg"></i>
                    <div>
                        <span class="text-sm">Perfect for forms and complex data displays.</span>
                    </div>
                </div>
            </div>
            <div class="card-footer justify-between">
                <button class="btn btn-secondary btn-sm">Cancel</button>
                <button class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Colored Card Variants</h4>
        <div class="d-grid gap-4 max-w-600">
            <div class="card card-primary">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Primary Card</h5>
                    <p class="text-sm mb-0">Important information or highlighted content.</p>
                </div>
            </div>

            <div class="card card-success">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Success Card</h5>
                    <p class="text-sm mb-0">Positive feedback or successful operations.</p>
                </div>
            </div>

            <div class="card card-danger">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Danger Card</h5>
                    <p class="text-sm mb-0">Critical warnings or error states.</p>
                </div>
            </div>

            <div class="card card-warning">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Warning Card</h5>
                    <p class="text-sm mb-0">Caution messages or important notices.</p>
                </div>
            </div>

            <div class="card card-info">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">Info Card</h5>
                    <p class="text-sm mb-0">Additional information or helpful tips.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">Consistent HTML structure for building card components.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Card Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Simple Wrapper (Utility Padding) --&gt;
&lt;div class="card p-5"&gt;
    &lt;h4 class="text-sm fw-bold mb-3"&gt;Title&lt;/h4&gt;
    &lt;p class="text-secondary"&gt;Content&lt;/p&gt;
&lt;/div&gt;

&lt;!-- Standard Card (Structured) --&gt;
&lt;div class="card"&gt;
    &lt;div class="card-body"&gt;
        &lt;h4 class="card-title"&gt;Title&lt;/h4&gt;
        &lt;p class="card-subtitle"&gt;Subtitle&lt;/p&gt;
        &lt;!-- Content --&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Card with Header --&gt;
&lt;div class="card"&gt;
    &lt;div class="card-header"&gt;
        &lt;h4 class="card-title"&gt;Title&lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="card-body"&gt;
        &lt;!-- Content --&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Card with Footer --&gt;
&lt;div class="card"&gt;
    &lt;div class="card-body"&gt;
        &lt;!-- Content --&gt;
    &lt;/div&gt;
    &lt;div class="card-footer"&gt;
        &lt;button class="btn btn-primary"&gt;Save&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Full Featured Card --&gt;
&lt;div class="card"&gt;
    &lt;div class="card-header"&gt;
        &lt;h4 class="card-title"&gt;Title&lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="card-body"&gt;
        &lt;!-- Content --&gt;
    &lt;/div&gt;
    &lt;div class="card-footer"&gt;
        &lt;button class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Colored Variants --&gt;
&lt;div class="card card-primary"&gt;...&lt;/div&gt;
&lt;div class="card card-success"&gt;...&lt;/div&gt;
&lt;div class="card card-danger"&gt;...&lt;/div&gt;
&lt;div class="card card-warning"&gt;...&lt;/div&gt;
&lt;div class="card card-info"&gt;...&lt;/div&gt;</pre>
    </div>
@endsection
