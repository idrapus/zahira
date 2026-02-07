@extends('layouts.app')

@section('title', 'Tab Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Tabs & Accordions</h2>
        <p class="text-secondary text-sm">Components for organizing content into collapsible and switchable sections.</p>
    </div>

    <!-- Tabs -->
    <div class="form-section">
        <h4 class="h5 mb-4">Tabs</h4>
        <div class="bg-white border border-primary rounded-xl p-6 max-w-800">
            <!-- Tabs Navigation -->
            <div class="tabs mb-4">
                <button class="tab-item active" onclick="switchTab(this, 'tab-1')">
                    <i class="fas fa-home me-2"></i> General
                </button>
                <button class="tab-item" onclick="switchTab(this, 'tab-2')">
                    <i class="fas fa-lock me-2"></i> Security
                </button>
                <button class="tab-item" onclick="switchTab(this, 'tab-3')">
                    <i class="fas fa-bell me-2"></i> Notifications
                </button>
            </div>

            <!-- Tabs Content -->
            <div class="tab-content active" id="tab-1">
                <h5 class="fw-bold mb-2">General Settings</h5>
                <p class="text-secondary mb-0">
                    Welcome to general settings. This is the default tab content that appears when the page loads. You can
                    customize standard account options here.
                </p>
            </div>

            <div class="tab-content" id="tab-2">
                <h5 class="fw-bold mb-2">Security Preferences</h5>
                <p class="text-secondary mb-0">
                    Manage your password and other security credentials here. Keep your account safe with 2FA enabled.
                </p>
            </div>

            <div class="tab-content" id="tab-3">
                <h5 class="fw-bold mb-2">Notification Control</h5>
                <p class="text-secondary mb-0">
                    Choose which updates you want to receive via email or push notifications.
                </p>
            </div>
        </div>
    </div>

    <!-- Accordion -->
    <div class="form-section">
        <h4 class="h5 mb-4">Accordions</h4>
        <div class="d-flex flex-column gap-3 bg-white border border-primary rounded-xl p-6 max-w-800">

            <!-- Item 1 -->
            <div class="accordion-item">
                <button class="accordion-header active" onclick="toggleAccordion(this)">
                    <span>Dynamic Theme Engine</span>
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="accordion-body active">
                    <div class="p-4 pt-0 text-secondary">
                        Seamlessly toggle between Dark and Light modes with local storage persistence. Your users'
                        preferences are always remembered.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this)">
                    <span>True Responsive Design</span>
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="accordion-body">
                    <div class="p-4 pt-0 text-secondary">
                        Every pixel is optimized for Desktop, Tablet, and Mobile devices. A zero overflow policy is
                        guaranteed for all layouts.
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this)">
                    <span>Performance Optimized</span>
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="accordion-body">
                    <div class="p-4 pt-0 text-secondary">
                        No Tailwind or Bootstrap overhead. We use pure, optimized Vanilla CSS for maximum rendering speed
                        and minimal bundle size.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">HTML structure and necessary scripts.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Tabs --&gt;
&lt;div class="tabs"&gt;
    &lt;button class="tab-item active" onclick="switchTab(this, 'id-1')"&gt;Tab 1&lt;/button&gt;
    &lt;button class="tab-item" onclick="switchTab(this, 'id-2')"&gt;Tab 2&lt;/button&gt;
&lt;/div&gt;

&lt;div class="tab-content active" id="id-1"&gt;...&lt;/div&gt;
&lt;div class="tab-content" id="id-2"&gt;...&lt;/div&gt;

&lt;!-- Accordion --&gt;
&lt;div class="accordion-item"&gt;
    &lt;button class="accordion-header" onclick="toggleAccordion(this)"&gt;
        &lt;span&gt;Title&lt;/span&gt;
        &lt;i class="fas fa-chevron-down accordion-icon"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;div class="accordion-body"&gt;
        &lt;div class="p-4"&gt;Content...&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize active accordions with correct height
            document.querySelectorAll('.accordion-body.active').forEach(body => {
                body.style.maxHeight = body.scrollHeight + "px";
            });
        });

        // Tab Functionality
        function switchTab(button, tabId) {
            // Remove active class from all tabs in this container
            const container = button.closest('.form-section') || document.body;
            const buttons = container.querySelectorAll('.tab-item');
            const contents = container.querySelectorAll('.tab-content');

            buttons.forEach(btn => btn.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active'));

            // Activate selected tab
            button.classList.add('active');
            const target = document.getElementById(tabId);
            if (target) target.classList.add('active');
        }

        // Accordion Functionality
        function toggleAccordion(header) {
            const item = header.parentElement;
            const body = header.nextElementSibling;
            const icon = header.querySelector('.accordion-icon');
            const isActive = header.classList.contains('active');

            // Close all other accordions in the same container (optional, removing this line makes it multi-open)
            // const siblings = item.parentElement.querySelectorAll('.accordion-header');
            // siblings.forEach(sib => {
            //     if (sib !== header) {
            //         sib.classList.remove('active');
            //         sib.nextElementSibling.classList.remove('active');
            //         sib.nextElementSibling.style.maxHeight = null;
            //     }
            // });

            if (isActive) {
                header.classList.remove('active');
                body.classList.remove('active');
                body.style.maxHeight = null;
            } else {
                header.classList.add('active');
                body.classList.add('active');
                body.style.maxHeight = body.scrollHeight + "px";
            }
        }
    </script>
@endpush
