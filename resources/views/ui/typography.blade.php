@extends('layouts.app')

@section('title', 'Typography Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Typography Elements</h2>
        <p class="text-secondary text-sm">Styles for headings, body text, and lists.</p>
    </div>

    <!-- Headings -->
    <div class="form-section">
        <h4 class="h5 mb-4">Headings</h4>
        <div class="d-flex flex-column gap-4 bg-white border border-primary rounded-xl p-6 max-w-600">
            <h1>H1 Heading</h1>
            <h2>H2 Heading</h2>
            <h3>H3 Heading</h3>
            <h4>H4 Heading</h4>
            <h5>H5 Heading</h5>
            <h6>H6 Heading</h6>
        </div>
    </div>

    <!-- Body Text -->
    <div class="form-section">
        <h4 class="h5 mb-4">Body Text</h4>
        <div class="d-flex flex-column gap-6 bg-white border border-primary rounded-xl p-6 max-w-600">
            <div>
                <h6 class="text-xs fw-bold text-secondary uppercase mb-2">Lead Paragraph</h6>
                <p class="lead mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>

            <div>
                <h6 class="text-xs fw-bold text-secondary uppercase mb-2">Standard Paragraph</h6>
                <p class="mb-0">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure.
                </p>
            </div>

            <div>
                <h6 class="text-xs fw-bold text-secondary uppercase mb-2">Small Text</h6>
                <p class="text-sm text-secondary mb-0">
                    Small text for captions, secondary information, and disclaimers.
                </p>
            </div>
        </div>
    </div>

    <!-- Lists -->
    <div class="form-section">
        <h4 class="h5 mb-4">Lists</h4>
        <div class="d-flex flex-column gap-6 bg-white border border-primary rounded-xl p-6 max-w-600">
            <div>
                <h6 class="text-xs fw-bold text-secondary uppercase mb-2">Unordered List</h6>
                <ul class="list-disc ps-4 mb-0">
                    <li class="list-item">Item One</li>
                    <li class="list-item">Item Two</li>
                    <li class="list-item">Item Three</li>
                </ul>
            </div>

            <div>
                <h6 class="text-xs fw-bold text-secondary uppercase mb-2">Ordered List</h6>
                <ol class="list-decimal ps-4 mb-0">
                    <li class="list-item">First Step</li>
                    <li class="list-item">Second Step</li>
                    <li class="list-item">Third Step</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">Consistent HTML structure for typography elements.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Typography Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Headings --&gt;
&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
...

&lt;!-- Body Text --&gt;
&lt;p class="lead"&gt;Lead text...&lt;/p&gt;
&lt;p&gt;Standard text...&lt;/p&gt;
&lt;p class="text-sm text-secondary"&gt;Small text...&lt;/p&gt;

&lt;!-- Lists --&gt;
&lt;ul class="list-disc ps-4"&gt;
    &lt;li class="list-item"&gt;Item 1&lt;/li&gt;
    &lt;li class="list-item"&gt;Item 2&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>
@endsection
