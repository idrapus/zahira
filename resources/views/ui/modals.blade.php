@extends('layouts.app')

@section('title', 'Modal Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Modal Elements</h2>
        <p class="text-secondary text-sm">Overlay dialogs for confirming actions or displaying critical information.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Modal Variants</h4>
        <div class="d-flex flex-wrap gap-3">
            <button class="btn btn-primary" onclick="openModal('primaryModal')">
                <i class="fas fa-palette me-2"></i> Primary Modal
            </button>
            <button class="btn btn-success" onclick="openModal('successModal')">
                <i class="fas fa-check-circle me-2"></i> Success Modal
            </button>
            <button class="btn btn-danger" onclick="openModal('dangerModal')">
                <i class="fas fa-exclamation-triangle me-2"></i> Danger Modal
            </button>
            <button class="btn btn-warning" onclick="openModal('warningModal')">
                <i class="fas fa-exclamation-circle me-2"></i> Warning Modal
            </button>
            <button class="btn btn-info" onclick="openModal('infoModal')">
                <i class="fas fa-info-circle me-2"></i> Info Modal
            </button>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Modal Sizes</h4>
        <div class="d-flex flex-wrap gap-3">
            <button class="btn btn-primary" onclick="openModal('exampleModal')">
                <i class="fas fa-window-maximize me-2"></i> Standard (500px)
            </button>
            <button class="btn btn-primary" onclick="openModal('smallModal')">
                <i class="fas fa-compress-alt me-2"></i> Small (400px)
            </button>
            <button class="btn btn-primary" onclick="openModal('largeModal')">
                <i class="fas fa-expand-alt me-2"></i> Large (900px)
            </button>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Specialized Content</h4>
        <div class="d-flex flex-wrap gap-3">
            <button class="btn btn-primary" onclick="openModal('formModal')">
                <i class="fas fa-edit me-2"></i> Form Inside
            </button>
            <button class="btn btn-secondary" onclick="openModal('longModal')">
                <i class="fas fa-scroll me-2"></i> Scrollable Content
            </button>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">Consistent HTML structure and JavaScript logic for building modal components.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Modal Elements Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Basic Modal Structure --&gt;
&lt;div id="myModal" class="modal-backdrop"&gt;
    &lt;div class="modal"&gt; &lt;!-- Add .modal-sm or .modal-lg for size --&gt;
        &lt;div class="modal-header"&gt;
            &lt;h3 class="modal-title"&gt;Modal Title&lt;/h3&gt;
            &lt;button class="modal-close" onclick="closeModal('myModal')"&gt;
                &lt;i class="fas fa-times"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt; ... &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button class="btn btn-secondary" onclick="closeModal('myModal')"&gt;Close&lt;/button&gt;
            &lt;button class="btn btn-primary"&gt;Action&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Modal Variants (Add to .modal) --&gt;
&lt;div class="modal modal-primary"&gt;...&lt;/div&gt;
&lt;div class="modal modal-success"&gt;...&lt;/div&gt;
&lt;div class="modal modal-danger"&gt;...&lt;/div&gt;
&lt;div class="modal modal-warning"&gt;...&lt;/div&gt;
&lt;div class="modal modal-info"&gt;...&lt;/div&gt;

&lt;!-- JavaScript Control --&gt;
&lt;script&gt;
    function openModal(id) {
        const modal = document.getElementById(id);
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
    }
&lt;/script&gt;</pre>
    </div>

    @push('modals')
        <!-- Primary Modal -->
        <div id="primaryModal" class="modal-backdrop">
            <div class="modal modal-primary">
                <div class="modal-header">
                    <h3 class="modal-title">Primary Modal</h3>
                    <button class="modal-close" onclick="closeModal('primaryModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modals can be styled with a top border to indicate their context or importance. This uses the primary
                        accent color.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('primaryModal')">Cancel</button>
                    <button class="btn btn-primary" onclick="closeModal('primaryModal')">Understood</button>
                </div>
            </div>
        </div>

        <!-- Success Modal -->
        <div id="successModal" class="modal-backdrop">
            <div class="modal modal-success">
                <div class="modal-header">
                    <h3 class="modal-title">Success Notification</h3>
                    <button class="modal-close" onclick="closeModal('successModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body text-center p-10">
                    <div class="mb-5" style="color: var(--success-color);">
                        <i class="fas fa-check-circle" style="font-size: 72px;"></i>
                    </div>
                    <h2 class="h3 mb-2">Operation Successful</h2>
                    <p class="text-secondary mb-6">The action has been completed correctly without any issues. Your data is
                        safe.</p>
                    <button class="btn btn-success w-full" onclick="closeModal('successModal')">Continue</button>
                </div>
            </div>
        </div>

        <!-- Danger Modal -->
        <div id="dangerModal" class="modal-backdrop">
            <div class="modal modal-danger modal-sm">
                <div class="modal-header">
                    <h3 class="modal-title text-danger">Critical Warning</h3>
                    <button class="modal-close" onclick="closeModal('dangerModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body text-center p-8">
                    <div class="mb-4" style="color: var(--danger-color);">
                        <i class="fas fa-exclamation-triangle" style="font-size: 56px;"></i>
                    </div>
                    <p class="text-secondary">Are you sure you want to proceed? This action might have irreversible effects on
                        your account.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('dangerModal')">Cancel</button>
                    <button class="btn btn-danger">Yes, I'm Sure</button>
                </div>
            </div>
        </div>

        <!-- Warning Modal -->
        <div id="warningModal" class="modal-backdrop">
            <div class="modal modal-warning">
                <div class="modal-header">
                    <h3 class="modal-title text-warning">Attention Required</h3>
                    <button class="modal-close" onclick="closeModal('warningModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Some information might be missing. You should check all fields before submitting to avoid errors.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('warningModal')">Dismiss</button>
                    <button class="btn btn-warning" onclick="closeModal('warningModal')">Check Now</button>
                </div>
            </div>
        </div>

        <!-- Info Modal -->
        <div id="infoModal" class="modal-backdrop">
            <div class="modal modal-info">
                <div class="modal-header">
                    <h3 class="modal-title">System Update</h3>
                    <button class="modal-close" onclick="closeModal('infoModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body text-center p-10">
                    <div class="mb-5" style="color: var(--info-color);">
                        <i class="fas fa-info-circle" style="font-size: 72px;"></i>
                    </div>
                    <h3 class="h3 mb-2">New Update Available</h3>
                    <p class="text-secondary mb-6">A new version of the dashboard is now live. Please refresh to see the latest
                        enhancements.</p>
                    <button class="btn btn-info w-full" onclick="closeModal('infoModal')">Refresh Dashboard</button>
                </div>
            </div>
        </div>

        <!-- Standard Modal -->
        <div id="exampleModal" class="modal-backdrop">
            <div class="modal">
                <div class="modal-header">
                    <h3 class="modal-title">Standard Modal</h3>
                    <button class="modal-close" onclick="closeModal('exampleModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This is a standard modal structure. It includes a header, body, and footer section.</p>
                    <p class="mt-4 text-secondary">You can place any content here, including forms or text.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('exampleModal')">Close</button>
                    <button class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>

        <!-- Small Modal -->
        <div id="smallModal" class="modal-backdrop">
            <div class="modal modal-sm">
                <div class="modal-header">
                    <h3 class="modal-title text-sm">Small Confirmation</h3>
                    <button class="modal-close" onclick="closeModal('smallModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i class="fas fa-question-circle text-accent mb-4" style="font-size: 48px;"></i>
                    <p>This is a smaller modal version, perfect for quick confirmations or simple alerts.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm w-full" onclick="closeModal('smallModal')">Dismiss</button>
                </div>
            </div>
        </div>

        <!-- Large Modal -->
        <div id="largeModal" class="modal-backdrop">
            <div class="modal modal-lg">
                <div class="modal-header">
                    <h3 class="modal-title">Complex Business Intelligence Report</h3>
                    <button class="modal-close" onclick="closeModal('largeModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="grid">
                        <div class="stat-card">
                            <div class="text-muted text-xs mb-1">Active Users</div>
                            <div class="h4 mb-0">24.8k</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-muted text-xs mb-1">Total Sales</div>
                            <div class="h4 mb-0">$1.2M</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-muted text-xs mb-1">Avg. Margin</div>
                            <div class="h4 mb-0">32.4%</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-muted text-xs mb-1">Performance</div>
                            <div class="h4 mb-0">+18%</div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-secondary border border-color rounded-xl">
                        <h5 class="h6 mb-3">Report Summary</h5>
                        <p class="text-sm text-secondary">This large modal provides ample horizontal space (900px) for complex
                            layouts. It's ideally suited for dashboards, data tables, or multi-step processes where a standard
                            modal would feel too cramped.</p>
                        <div class="mt-4 d-flex flex-wrap gap-4">
                            <div class="d-flex items-center gap-2">
                                <i class="fas fa-circle text-xs text-accent"></i>
                                <span class="text-xs">Database Stable</span>
                            </div>
                            <div class="d-flex items-center gap-2">
                                <i class="fas fa-circle text-xs text-success"></i>
                                <span class="text-xs">Sync Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('largeModal')">Close Report</button>
                    <button class="btn btn-primary">Generate PDF</button>
                </div>
            </div>
        </div>

        <!-- Form Modal -->
        <div id="formModal" class="modal-backdrop">
            <div class="modal">
                <div class="modal-header">
                    <h3 class="modal-title">Create New Task</h3>
                    <button class="modal-close" onclick="closeModal('formModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <label for="task-title" class="form-label">Task Title</label>
                        <input type="text" id="task-title" class="form-input" placeholder="e.g. Design System Phase 1">
                    </div>
                    <div class="form-group mb-4">
                        <label for="task-assignee" class="form-label">Assignee</label>
                        <select id="task-assignee" class="form-input">
                            <option>John Doe</option>
                            <option>Jane Smith</option>
                            <option>Robert Taylor</option>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Priority</label>
                        <div class="d-flex gap-3">
                            <label class="btn btn-outline-secondary border btn-sm d-flex items-center gap-2">
                                <input type="radio" name="priority" value="low"> Low
                            </label>
                            <label class="btn btn-outline-secondary border btn-sm d-flex items-center gap-2">
                                <input type="radio" name="priority" value="med" checked> Medium
                            </label>
                            <label class="btn btn-outline-secondary border btn-sm d-flex items-center gap-2">
                                <input type="radio" name="priority" value="high"> High
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('formModal')">Cancel</button>
                    <button class="btn btn-primary">Create Task</button>
                </div>
            </div>
        </div>

        <!-- Long Content Modal -->
        <div id="longModal" class="modal-backdrop">
            <div class="modal">
                <div class="modal-header">
                    <h3 class="modal-title">Terms of Service</h3>
                    <button class="modal-close" onclick="closeModal('longModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>1. Introduction</h5>
                    <p class="mb-4">Welcome to our platform. These Terms of Service govern your use of our website and
                        services.</p>
                    <h5>2. Privacy Policy</h5>
                    <p class="mb-4">Our Privacy Policy, which sets out how we will use your information, can be found at
                        Privacy Policy page.</p>
                    <h5>3. Prohibitions</h5>
                    <p class="mb-4">You must not misuse this Website. You will not: commit or encourage a criminal offense;
                        transmit or distribute a virus, trojan, worm, logic bomb or any other material which is malicious,
                        technologically harmful, in breach of confidence or in any way offensive or obscene.</p>
                    <h5>4. Intellectual Property</h5>
                    <p class="mb-4">The intellectual property rights in all software and content made available to you on or
                        through this Website remains the property of our platform and are protected by copyright laws.</p>
                    <h5>5. Registration</h5>
                    <p class="mb-4">We reserve the right to decline a new customer registration or suspend a customer’s
                        account at any time as we see fit, in our sole discretion.</p>
                    <p>By using this website, you agree to these terms in full. If you disagree with these terms or any part of
                        these terms, you must not use this website.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('longModal')">Decline</button>
                    <button class="btn btn-primary">Accept & Continue</button>
                </div>
            </div>
        </div>
    @endpush

    @push('scripts')
        <script>
            function openModal(id) {
                const modal = document.getElementById(id);
                if (modal) {
                    modal.classList.add('show');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeModal(id) {
                const modal = document.getElementById(id);
                if (modal) {
                    modal.classList.remove('show');
                    document.body.style.overflow = 'auto';
                }
            }

            // Close on backdrop click
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
                    backdrop.addEventListener('click', (e) => {
                        if (e.target === backdrop) {
                            closeModal(backdrop.id);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
