@extends('layouts.app')

@section('title', 'Form Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Form Elements</h2>
        <p class="text-secondary text-sm">Comprehensive form input components for data collection and user interaction.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Input Fields</h4>
        <div class="d-grid gap-4 max-w-600">
            <div class="form-group">
                <label for="example-input" class="form-label">Email Address</label>
                <input type="email" id="example-input" class="form-input" placeholder="name@company.com">
            </div>

            <div class="form-group">
                <label for="search-input" class="form-label">Search Input (Icon)</label>
                <div class="relative">
                    <i class="fas fa-search absolute text-muted"
                        style="left: 12px; top: 50%; transform: translateY(-50%); font-size: 14px;"></i>
                    <input type="text" id="search-input" class="form-input" style="padding-left: 38px;"
                        placeholder="Search...">
                </div>
            </div>

            <div class="form-group">
                <label for="example-textarea" class="form-label">Description</label>
                <textarea id="example-textarea" class="form-input resize-none" rows="4" placeholder="Enter description..."></textarea>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Selection Controls</h4>
        <div class="d-grid gap-4 max-w-600">
            <div class="form-group">
                <label for="example-select" class="form-label">Country</label>
                <select id="example-select" class="form-input">
                    <option value="">Select a country</option>
                    <option value="id">Indonesia</option>
                    <option value="us">United States</option>
                    <option value="uk">United Kingdom</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Checkboxes & Radios</h4>
        <div class="d-grid gap-6 max-w-600">
            <div>
                <label class="form-label d-block mb-2">Checkboxes</label>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex items-center gap-2">
                        <input type="checkbox" id="check1" class="w-16 h-16 cursor-pointer" checked>
                        <label for="check1" class="font-14 text-secondary cursor-pointer">Subscribe to newsletter</label>
                    </div>
                    <div class="d-flex items-center gap-2">
                        <input type="checkbox" id="check2" class="w-16 h-16 cursor-pointer">
                        <label for="check2" class="font-14 text-secondary cursor-pointer">Accept terms and
                            conditions</label>
                    </div>
                </div>
            </div>

            <div>
                <label class="form-label d-block mb-2">Radio Buttons</label>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex items-center gap-2">
                        <input type="radio" id="radio1" name="example-radio" class="w-16 h-16 cursor-pointer" checked>
                        <label for="radio1" class="font-14 text-secondary cursor-pointer">Option 1</label>
                    </div>
                    <div class="d-flex items-center gap-2">
                        <input type="radio" id="radio2" name="example-radio" class="w-16 h-16 cursor-pointer">
                        <label for="radio2" class="font-14 text-secondary cursor-pointer">Option 2</label>
                    </div>
                    <div class="d-flex items-center gap-2">
                        <input type="radio" id="radio3" name="example-radio" class="w-16 h-16 cursor-pointer">
                        <label for="radio3" class="font-14 text-secondary cursor-pointer">Option 3</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">HTML structure for form elements.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Form Elements Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;div class="form-group"&gt;
    &lt;label for="email" class="form-label"&gt;Email Address&lt;/label&gt;
    &lt;input type="email" id="email" class="form-input" placeholder="name@company.com"&gt;
&lt;/div&gt;

&lt;!-- Input with Icon --&gt;
&lt;div class="relative"&gt;
    &lt;i class="fas fa-search absolute text-muted"
       style="left: 12px; top: 50%; transform: translateY(-50%); font-size: 14px;"&gt;&lt;/i&gt;
    &lt;input type="text" class="form-input" style="padding-left: 38px;" placeholder="Search..."&gt;
&lt;/div&gt;

&lt;!-- Textarea --&gt;
&lt;div class="form-group"&gt;
    &lt;label for="desc" class="form-label"&gt;Description&lt;/label&gt;
    &lt;textarea id="desc" class="form-input resize-none" rows="4"&gt;&lt;/textarea&gt;
&lt;/div&gt;

&lt;!-- Select --&gt;
&lt;div class="form-group"&gt;
    &lt;label for="country" class="form-label"&gt;Country&lt;/label&gt;
    &lt;select id="country" class="form-input"&gt;
        &lt;option value=""&gt;Select a country&lt;/option&gt;
        &lt;option value="id"&gt;Indonesia&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Checkbox --&gt;
&lt;div class="d-flex items-center gap-2"&gt;
    &lt;input type="checkbox" id="check1" class="w-16 h-16 cursor-pointer"&gt;
    &lt;label for="check1" class="font-14 text-secondary cursor-pointer"&gt;Label&lt;/label&gt;
&lt;/div&gt;</pre>
    </div>
@endsection
