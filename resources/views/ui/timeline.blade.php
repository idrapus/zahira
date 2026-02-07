@extends('layouts.app')

@section('title', 'Timeline Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Timeline Elements</h2>
        <p class="text-secondary text-sm">A vertical list of events, activity logs, or status changes.</p>
    </div>

    <div class="row">
        <!-- Standard Timeline -->
        <div class="col-6">
            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Standard Timeline</h4>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <!-- Success Item -->
                        <div class="timeline-item">
                            <div class="timeline-dot dot-success"></div>
                            <div class="timeline-content">
                                <div class="timeline-header">
                                    <span class="timeline-title">Project Milestone Reached</span>
                                    <span class="timeline-time">2 hours ago</span>
                                </div>
                                <div class="timeline-body">
                                    Phase 1 of the Zahira Admin template has been successfully completed and approved by the
                                    QA team.
                                </div>
                                <div class="timeline-footer">
                                    <div class="d-flex items-center gap-2">
                                        <div class="user-avatar" style="width: 24px; height: 24px; font-size: 10px;">JD
                                        </div>
                                        <span class="text-xs text-muted">Updated by John Doe</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Primary Item -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <div class="timeline-header">
                                    <span class="timeline-title">New User Registered</span>
                                    <span class="timeline-time">5 hours ago</span>
                                </div>
                                <div class="timeline-body">
                                    A new developer account has been created for the Zahira Open Source project.
                                </div>
                            </div>
                        </div>

                        <!-- Danger Item -->
                        <div class="timeline-item">
                            <div class="timeline-dot dot-danger"></div>
                            <div class="timeline-content">
                                <div class="timeline-header">
                                    <span class="timeline-title">Server Security Alert</span>
                                    <span class="timeline-time">Yesterday</span>
                                </div>
                                <div class="timeline-body">
                                    Detected multiple failed login attempts from an unknown IP address. Access has been
                                    restricted temporarily.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Minimal Timeline -->
        <div class="col-6">
            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Minimal Timeline</h4>
                </div>
                <div class="card-body">
                    <div class="timeline timeline-minimal">
                        <div class="timeline-item">
                            <div class="timeline-dot dot-info"></div>
                            <div class="timeline-content">
                                <div class="timeline-header">
                                    <span class="timeline-title">Task Created</span>
                                    <span class="timeline-time">10:30 AM</span>
                                </div>
                                <div class="timeline-body">Design the new timeline component for Zahira.</div>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-dot dot-warning"></div>
                            <div class="timeline-content">
                                <div class="timeline-header">
                                    <span class="timeline-title">In Progress</span>
                                    <span class="timeline-time">11:15 AM</span>
                                </div>
                                <div class="timeline-body">Implementing CSS variables and layout structure.</div>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-dot dot-success"></div>
                            <div class="timeline-content">
                                <div class="timeline-header">
                                    <span class="timeline-title">Completed</span>
                                    <span class="timeline-time">12:00 PM</span>
                                </div>
                                <div class="timeline-body">Component is ready for review and documentation.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Usage Documentation -->
    <div class="mt-8">
        <div class="mb-4">
            <h3 class="h3 mb-2">Usage Documentation</h3>
            <p class="text-secondary text-sm">Implementation guide for the Timeline component.</p>
        </div>

        <div class="code-editor">
            <div class="code-header">
                <div class="d-flex items-center gap-3">
                    <div class="d-flex gap-1">
                        <div class="dot dot-red"></div>
                        <div class="dot dot-yellow"></div>
                        <div class="dot dot-green"></div>
                    </div>
                    <span class="code-lang ms-2">HTML Structure</span>
                </div>
                <button class="copy-btn" onclick="copyToClipboard(this)">
                    <i class="far fa-copy"></i> Copy code
                </button>
            </div>
            <pre class="code-content">
&lt;!-- Timeline Container --&gt;
&lt;div class="timeline"&gt;
    &lt;!-- Timeline Item --&gt;
    &lt;div class="timeline-item"&gt;
        &lt;!-- Dot Variant: dot-success, dot-danger, dot-warning, dot-info --&gt;
        &lt;div class="timeline-dot dot-success"&gt;&lt;/div&gt;

        &lt;div class="timeline-content"&gt;
            &lt;div class="timeline-header"&gt;
                &lt;span class="timeline-title"&gt;Title...&lt;/span&gt;
                &lt;span class="timeline-time"&gt;Time...&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="timeline-body"&gt;
                Content details...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
        </div>
    </div>
@endsection
