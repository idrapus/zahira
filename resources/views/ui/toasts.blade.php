@extends('layouts.app')

@section('title', 'Toast Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Toast Elements</h2>
        <p class="text-secondary text-sm">Lightweight notifications designed to mimic push notifications.</p>
    </div>

    <!-- Toast Variants -->
    <div class="form-section">
        <h4 class="h5 mb-4">Toast Variants</h4>
        <div class="bg-white border border-primary rounded-xl p-6 max-w-800">
            <div class="d-flex flex-column gap-4 items-start">

                <!-- Success Static -->
                <div class="toast toast-success">
                    <div class="toast-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="toast-content">
                        <div class="toast-title">Success</div>
                        <div class="toast-message">Your changes have been saved successfully.</div>
                    </div>
                    <button class="toast-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Danger Static -->
                <div class="toast toast-danger">
                    <div class="toast-icon">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div class="toast-content">
                        <div class="toast-title">Error</div>
                        <div class="toast-message">The file could not be deleted.</div>
                    </div>
                    <button class="toast-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Warning Static -->
                <div class="toast toast-warning">
                    <div class="toast-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="toast-content">
                        <div class="toast-title">Warning</div>
                        <div class="toast-message">Your subscription is ending soon.</div>
                    </div>
                    <button class="toast-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Info Static -->
                <div class="toast toast-info">
                    <div class="toast-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="toast-content">
                        <div class="toast-title">Information</div>
                        <div class="toast-message">New dashboard features are available.</div>
                    </div>
                    <button class="toast-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Live Demo -->
    <div class="form-section">
        <h4 class="h5 mb-4">Live Interactions</h4>
        <div class="bg-white border border-primary rounded-xl p-6 max-w-800">
            <h6 class="text-xs fw-bold text-secondary uppercase mb-3">Trigger Tests</h6>
            <div class="d-flex flex-wrap gap-4 mb-8">
                <button class="btn btn-primary" onclick="showToast('success')">
                    Trigger Success
                </button>
                <button class="btn btn-danger" onclick="showToast('error')">
                    Trigger Error
                </button>
                <button class="btn btn-warning" onclick="showToast('warning')">
                    Trigger Warning
                </button>
                <button class="btn btn-info" onclick="showToast('info')">
                    Trigger Info
                </button>
            </div>

            <h6 class="text-xs fw-bold text-secondary uppercase mb-3">Positioning</h6>
            <div class="d-flex flex-wrap gap-4">
                <button class="btn btn-secondary" onclick="showToast('top-right', null, 'top-right')">Top Right</button>
                <button class="btn btn-secondary" onclick="showToast('top-left', null, 'top-left')">Top Left</button>
                <button class="btn btn-secondary" onclick="showToast('bottom-right', null, 'bottom-right')">Bottom
                    Right</button>
                <button class="btn btn-secondary" onclick="showToast('bottom-left', null, 'bottom-left')">Bottom
                    Left</button>
            </div>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">Consistent HTML structure for toast elements.</p>
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
&lt;!-- Toast Item --&gt;
&lt;div class="toast toast-success"&gt;
    &lt;div class="toast-icon"&gt;
        &lt;i class="fas fa-check-circle"&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class="toast-content"&gt;
        &lt;div class="toast-title"&gt;Success&lt;/div&gt;
        &lt;div class="toast-message"&gt;Message...&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Container (Required for Position) --&gt;
&lt;div class="toast-container top-right"&gt;
    ...
&lt;/div&gt;</pre>
    </div>
@endsection

@push('scripts')
    <script>
        // New Dynamic Toast System
        function showToast(type, message = null, position = 'top-right') {
            // Map simplified types to full class names and icons
            const config = {
                'success': {
                    icon: 'fa-check-circle',
                    title: 'Success',
                    msg: 'Your changes have been saved successfully.'
                },
                'error': {
                    icon: 'fa-exclamation-circle',
                    title: 'Error',
                    msg: 'Something went wrong. Please try again.'
                },
                'warning': {
                    icon: 'fa-exclamation-triangle',
                    title: 'Warning',
                    msg: 'Your session is about to expire.'
                },
                'info': {
                    icon: 'fa-info-circle',
                    title: 'Information',
                    msg: 'New updates are available.'
                },

                // Positioning Variants (reuse primary style)
                'top-right': {
                    icon: 'fa-bell',
                    title: 'Top Right',
                    msg: 'This notification appears in the top right corner.',
                    style: 'primary'
                },
                'top-left': {
                    icon: 'fa-bell',
                    title: 'Top Left',
                    msg: 'This notification appears in the top left corner.',
                    style: 'primary'
                },
                'bottom-right': {
                    icon: 'fa-bell',
                    title: 'Bottom Right',
                    msg: 'This notification appears in the bottom right corner.',
                    style: 'primary'
                },
                'bottom-left': {
                    icon: 'fa-bell',
                    title: 'Bottom Left',
                    msg: 'This notification appears in the bottom left corner.',
                    style: 'primary'
                },

                'primary': {
                    icon: 'fa-bell',
                    title: 'Notification',
                    msg: 'Notification message.'
                } // Default
            };

            // Determine target container
            let positionClass = position;

            // Clean up type for variant selection
            let variant = type;

            const data = config[variant] || config['primary'];

            // Use mapped style if header exists (e.g. top-right -> primary), otherwise use variant name
            const styleClass = data.style || variant;

            // Find or create container
            let container = document.querySelector(`.toast-container.${positionClass}`);
            if (!container) {
                console.error(`Container .toast-container.${positionClass} not found`);
                return;
            }

            // Create Toast Element
            const toast = document.createElement('div');
            toast.className = `toast toast-${styleClass}`;
            toast.innerHTML = `
            <div class="toast-icon"><i class="fas ${data.icon}"></i></div>
            <div class="toast-content">
                <div class="toast-title">${data.title}</div>
                <div class="toast-message">${message || data.msg}</div>
            </div>
            <button class="toast-close" onclick="this.parentElement.remove()"><i class="fas fa-times"></i></button>
        `;

            // Append to container
            container.appendChild(toast);

            // Trigger Animation
            requestAnimationFrame(() => {
                toast.classList.add('show');
            });

            // Auto Remove
            setTimeout(() => {
                toast.classList.remove('show');
                toast.classList.add('hiding');
                toast.addEventListener('transitionend', () => toast.remove());
            }, 3000);
        }
    </script>
@endpush
