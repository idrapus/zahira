@extends('layouts.app')

@section('title', 'Alert Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Alert Elements</h2>
        <p class="text-secondary text-sm">Consistent alert components for feedback and notifications.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Alert Variants</h4>
        <div class="d-grid gap-4">
            <div class="alert alert-primary">
                <i class="fas fa-bell mt-1 text-lg"></i>
                <div>
                    <div class="fw-bold mb-1">Primary Alert</div>
                    <span>Important information that requires attention.</span>
                </div>
            </div>

            <div class="alert alert-success">
                <i class="fas fa-check-circle mt-1 text-lg"></i>
                <div>
                    <div class="fw-bold mb-1">Success Alert</div>
                    <span>Operation completed successfully.</span>
                </div>
            </div>

            <div class="alert alert-danger">
                <i class="fas fa-xmark-circle mt-1 text-lg"></i>
                <div>
                    <div class="fw-bold mb-1">Danger Alert</div>
                    <span>Critical error occurred. Please try again.</span>
                </div>
            </div>

            <div class="alert alert-warning">
                <i class="fas fa-triangle-exclamation mt-1 text-lg"></i>
                <div>
                    <div class="fw-bold mb-1">Warning Alert</div>
                    <span>Please review before proceeding.</span>
                </div>
            </div>

            <div class="alert alert-info">
                <i class="fas fa-info-circle mt-1 text-lg"></i>
                <div>
                    <div class="fw-bold mb-1">Info Alert</div>
                    <span>Additional information for your reference.</span>
                </div>
            </div>

            <div class="alert alert-secondary">
                <i class="fas fa-circle-dot mt-1 text-lg"></i>
                <div>
                    <div class="fw-bold mb-1">Secondary Alert</div>
                    <span>General notification or neutral message.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">Consistent HTML structure for building alert components.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Alert Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Alert with Icon and Title --&gt;
&lt;div class="alert alert-success"&gt;
    &lt;i class="fas fa-check-circle mt-1 text-lg"&gt;&lt;/i&gt;
    &lt;div&gt;
        &lt;div class="fw-bold mb-1"&gt;Success Alert&lt;/div&gt;
        &lt;span&gt;Operation completed successfully.&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Available variants --&gt;
&lt;div class="alert alert-primary"&gt;...&lt;/div&gt;
&lt;div class="alert alert-success"&gt;...&lt;/div&gt;
&lt;div class="alert alert-danger"&gt;...&lt;/div&gt;
&lt;div class="alert alert-warning"&gt;...&lt;/div&gt;
&lt;div class="alert alert-info"&gt;...&lt;/div&gt;
&lt;div class="alert alert-secondary"&gt;...&lt;/div&gt;</pre>
    </div>
@endsection
