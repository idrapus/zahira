@extends('layouts.app')

@section('title', 'Button Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Button Elements</h2>
        <p class="text-secondary text-sm">Standard button styles for consistent interaction.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Button Variants</h4>
        <div class="d-flex flex-wrap gap-4 items-center">
            <button class="btn btn-primary">Primary Button</button>
            <button class="btn btn-secondary">Secondary Button</button>
            <button class="btn btn-success">Success Button</button>
            <button class="btn btn-danger">Danger Button</button>
            <button class="btn btn-warning">Warning Button</button>
            <button class="btn btn-info">Info Button</button>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Button Sizes</h4>
        <div class="d-flex flex-wrap gap-4 items-end">
            <button class="btn btn-primary">Default Button</button>
            <button class="btn btn-primary btn-sm">Small Button</button>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Button with Icons</h4>
        <div class="d-flex flex-wrap gap-4 items-center">
            <button class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New
            </button>
            <button class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </button>
            <button class="btn btn-danger">
                <i class="fas fa-trash"></i> Delete
            </button>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">Consistent HTML structure for building button components.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Button Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Button Variants --&gt;
&lt;button class="btn btn-primary"&gt;Primary Button&lt;/button&gt;
&lt;button class="btn btn-secondary"&gt;Secondary Button&lt;/button&gt;
&lt;button class="btn btn-success"&gt;Success Button&lt;/button&gt;
&lt;button class="btn btn-danger"&gt;Danger Button&lt;/button&gt;
&lt;button class="btn btn-warning"&gt;Warning Button&lt;/button&gt;
&lt;button class="btn btn-info"&gt;Info Button&lt;/button&gt;

&lt;!-- Button with Icon --&gt;
&lt;button class="btn btn-primary"&gt;
    &lt;i class="fas fa-plus"&gt;&lt;/i&gt; Add New
&lt;/button&gt;

&lt;!-- Button Sizes --&gt;
&lt;button class="btn btn-primary btn-sm"&gt;Small Button&lt;/button&gt;
&lt;button class="btn btn-primary"&gt;Default Button&lt;/button&gt;
</pre>
    </div>
@endsection
