<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('dashboard') }}" class="sidebar-brand">
            <i class="fas fa-gem"></i>
            <span>ZAHIRA</span>
        </a>
        <button class="sidebar-toggle" onclick="toggleSidebar()">
            <i class="fas fa-bars" id="sidebar-icon"></i>
        </button>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ route('dashboard') }}" class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}"
            data-tooltip="Dashboard">
            <i class="fas fa-gauge-high nav-icon"></i>
            <span class="nav-text">Dashboard</span>
        </a>
        <a href="{{ route('profile.edit') }}" class="nav-item {{ request()->routeIs('profile.edit') ? 'active' : '' }}"
            data-tooltip="Profile">
            <i class="fas fa-circle-user nav-icon"></i>
            <span class="nav-text">Profile</span>
        </a>
        <a href="#" class="nav-item" data-tooltip="Settings">
            <i class="fas fa-gear nav-icon"></i>
            <span class="nav-text">Settings</span>
        </a>

        <div class="nav-section">Management</div>
        <a href="#" class="nav-item" data-tooltip="Users">
            <i class="fas fa-users nav-icon"></i>
            <span class="nav-text">Users</span>
            <span class="nav-badge">12</span>
        </a>
        <a href="#" class="nav-item" data-tooltip="Reports">
            <i class="fas fa-file-lines nav-icon"></i>
            <span class="nav-text">Reports</span>
        </a>
        <a href="#" class="nav-item" data-tooltip="Analytics">
            <i class="fas fa-chart-line nav-icon"></i>
            <span class="nav-text">Analytics</span>
        </a>

        <div class="nav-section">System</div>
        <a href="#" class="nav-item" data-tooltip="Logs">
            <i class="fas fa-list-ul nav-icon"></i>
            <span class="nav-text">Logs</span>
            <span class="nav-badge">3</span>
        </a>



        <div class="nav-section">User Guide</div>

        <div class="nav-item-dropdown {{ request()->routeIs('page.*') ? 'active open' : '' }}">
            <div class="nav-item" onclick="toggleSubmenu('pages-menu')" data-tooltip="Pages">
                <i class="fas fa-file nav-icon"></i>
                <span class="nav-text">Pages</span>
                <i class="fas fa-chevron-down ms-auto submenu-arrow"></i>
            </div>
            <div class="submenu-list" id="pages-menu">
                <a href="{{ route('page.starter') }}"
                    class="submenu-item {{ request()->routeIs('page.starter') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Starter Page
                </a>
                <a href="{{ route('page.404') }}"
                    class="submenu-item {{ request()->routeIs('page.404') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> 404 Page
                </a>
                <a href="{{ route('page.login') }}"
                    class="submenu-item {{ request()->routeIs('page.login') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Login
                </a>
                <a href="{{ route('page.register') }}"
                    class="submenu-item {{ request()->routeIs('page.register') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Register
                </a>
                <a href="{{ route('page.widgets') }}"
                    class="submenu-item {{ request()->routeIs('page.widgets') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Widgets
                </a>
            </div>
        </div>
        <div class="nav-item-dropdown {{ request()->routeIs('ui.*') ? 'active open' : '' }}">
            <div class="nav-item" onclick="toggleSubmenu('ui-elements-menu')" data-tooltip="UI Elements">
                <i class="fas fa-layer-group nav-icon"></i>
                <span class="nav-text">UI Elements</span>
                <i class="fas fa-chevron-down ms-auto submenu-arrow"></i>
            </div>
            <div class="submenu-list" id="ui-elements-menu">
                <a href="{{ route('ui.alerts') }}"
                    class="submenu-item {{ request()->routeIs('ui.alerts') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Alert
                </a>
                <a href="{{ route('ui.avatars') }}"
                    class="submenu-item {{ request()->routeIs('ui.avatars') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Avatar
                </a>
                <a href="{{ route('ui.badges') }}"
                    class="submenu-item {{ request()->routeIs('ui.badges') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Badge
                </a>
                <a href="{{ route('ui.breadcrumbs') }}"
                    class="submenu-item {{ request()->routeIs('ui.breadcrumbs') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Breadcrumb
                </a>
                <a href="{{ route('ui.buttons') }}"
                    class="submenu-item {{ request()->routeIs('ui.buttons') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Button
                </a>
                <a href="{{ route('ui.cards') }}"
                    class="submenu-item {{ request()->routeIs('ui.cards') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Card
                </a>

                <a href="{{ route('ui.forms') }}"
                    class="submenu-item {{ request()->routeIs('ui.forms') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Form
                </a>
                <a href="{{ route('ui.modals') }}"
                    class="submenu-item {{ request()->routeIs('ui.modals') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Modal
                </a>
                <a href="{{ route('ui.tables') }}"
                    class="submenu-item {{ request()->routeIs('ui.tables') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Table
                </a>
                <a href="{{ route('ui.timeline') }}"
                    class="submenu-item {{ request()->routeIs('ui.timeline') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Timeline
                </a>
                <a href="{{ route('ui.tabs') }}"
                    class="submenu-item {{ request()->routeIs('ui.tabs') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Tabs
                </a>
                <a href="{{ route('ui.toasts') }}"
                    class="submenu-item {{ request()->routeIs('ui.toasts') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Toasts
                </a>
                <a href="{{ route('ui.typography') }}"
                    class="submenu-item {{ request()->routeIs('ui.typography') ? 'active' : '' }}">
                    <i class="fas fa-circle text-xs me-2"></i> Typography
                </a>
            </div>
        </div>

        <a href="{{ route('docs') }}" class="nav-item {{ request()->routeIs('docs') ? 'active' : '' }}"
            data-tooltip="Documentation">
            <i class="fas fa-book-bookmark nav-icon"></i>
            <span class="nav-text">Documentation</span>
        </a>
    </nav>

    <div class="sidebar-footer">
        <span class="nav-text">v{{ config('app.version') }}</span>
        <i class="fas fa-circle-info"></i>
    </div>
</aside>
