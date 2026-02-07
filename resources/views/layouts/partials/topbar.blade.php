<header class="topbar">
    <div class="topbar-left">
        <button class="mobile-toggle" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Mobile Search Toggle (Opens Modal) -->
        <button class="mobile-search-btn visible-mobile" onclick="openGlobalSearch()" title="Search (Ctrl + K)">
            <i class="fas fa-search"></i>
        </button>

        <!-- Desktop Search Input (Left Aligned) -->
        <div class="search-container ms-4 hidden-desktop">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" id="topbarSearch" placeholder="Quick search...">
            <div class="search-input-kbds">
                <kbd class="search-kbd">Ctrl</kbd>
                <kbd class="search-kbd">K</kbd>
            </div>
            <div class="search-dropdown" id="topbarSearchDropdown">
                <div class="search-results" id="topbarSearchResults"></div>
            </div>
        </div>
    </div>

    <div class="topbar-right">
        <!-- Notifications -->
        <div class="dropdown" id="notifDropdown">
            <button class="topbar-btn" onclick="toggleNotifDropdown()" title="Notifications">
                <i class="fas fa-bell"></i>
                <span class="btn-badge"></span>
            </button>
            <div class="dropdown-menu notif-menu">
                <div class="dropdown-header d-flex items-center justify-between">
                    <div>
                        <div class="dropdown-user-name">Notifications</div>
                        <div class="dropdown-user-email">You have 3 unread messages</div>
                    </div>
                    <span class="badge badge-primary-subtile text-xs">New</span>
                </div>
                <div class="notif-list">
                    <a href="#" class="dropdown-item">
                        <div class="notif-icon bg-primary-subtile text-primary">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="notif-content">
                            <div class="notif-title">New user registered</div>
                            <div class="notif-time">2 minutes ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="notif-icon bg-success-subtile text-success">
                            <i class="fas fa-circle-check"></i>
                        </div>
                        <div class="notif-content">
                            <div class="notif-title">System update successful</div>
                            <div class="notif-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="notif-icon bg-warning-subtile text-warning">
                            <i class="fas fa-triangle-exclamation"></i>
                        </div>
                        <div class="notif-content">
                            <div class="notif-title">Server storage almost full</div>
                            <div class="notif-time">5 hours ago</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                <a href="#"
                    class="dropdown-item text-center justify-center text-primary text-xs font-semibold py-3">
                    View All Notifications
                </a>
            </div>
        </div>

        <!-- Fullscreen -->
        <button class="topbar-btn hidden-mobile" onclick="toggleFullscreen()" title="Toggle Fullscreen">
            <i class="fas fa-expand" id="fullscreen-icon"></i>
        </button>

        <!-- Theme Toggle -->
        <button class="topbar-btn" onclick="toggleTheme()" title="Toggle Theme">
            <i class="fas fa-sun" id="theme-icon"></i>
        </button>

        <!-- User Dropdown -->
        <div class="dropdown" id="userDropdown">
            <button class="dropdown-toggle" onclick="toggleDropdown()">
                <div class="user-avatar avatar-circle">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                    @else
                        {{ substr(Auth::user()->name, 0, 1) }}
                    @endif
                </div>
                <span class="dropdown-user-info">{{ Auth::user()->name }}</span>
            </button>

            <div class="dropdown-menu">
                <div class="dropdown-header">
                    <div class="dropdown-user-name">{{ Auth::user()->name }}</div>
                    <div class="dropdown-user-email">{{ Auth::user()->email }}</div>
                </div>

                <a href="{{ route('profile.edit') }}"
                    class="dropdown-item {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                    <i class="fas fa-circle-user dropdown-item-icon"></i>
                    Your Profile
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-gear dropdown-item-icon"></i>
                    Settings
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-circle-question dropdown-item-icon"></i>
                    Help & Support
                </a>

                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item danger">
                        <i class="fas fa-right-from-bracket dropdown-item-icon"></i>
                        Sign Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
