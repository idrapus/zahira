<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const icon = document.getElementById('sidebar-icon');
        const overlay = document.getElementById('sidebarOverlay');

        if (window.innerWidth > 768) {
            sidebar.classList.toggle('collapsed');
            const isCollapsed = sidebar.classList.contains('collapsed');
            localStorage.setItem('sidebarCollapsed', isCollapsed);
        } else {
            sidebar.classList.toggle('mobile-show');
            if (overlay) {
                overlay.classList.toggle('active');
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const icon = document.getElementById('sidebar-icon');
        const sidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';

        if (sidebarCollapsed) {
            sidebar.classList.add('collapsed');
            icon.className = 'fas fa-bars';
        } else {
            icon.className = 'fas fa-bars';
        }
    });

    function toggleDropdown() {
        const dropdown = document.getElementById('userDropdown');
        const notifDropdown = document.getElementById('notifDropdown');
        if (notifDropdown) notifDropdown.classList.remove('active');
        dropdown.classList.toggle('active');
    }

    function toggleNotifDropdown() {
        const notifDropdown = document.getElementById('notifDropdown');
        const userDropdown = document.getElementById('userDropdown');
        if (userDropdown) userDropdown.classList.remove('active');
        notifDropdown.classList.toggle('active');
    }

    document.addEventListener('click', function(event) {
        const userDropdown = document.getElementById('userDropdown');
        const notifDropdown = document.getElementById('notifDropdown');

        if (userDropdown && !userDropdown.contains(event.target)) {
            userDropdown.classList.remove('active');
        }
        if (notifDropdown && !notifDropdown.contains(event.target)) {
            notifDropdown.classList.remove('active');
        }
    });

    function toggleSubmenu(id) {
        const menu = document.getElementById(id);
        const parent = menu.closest('.nav-item-dropdown');
        parent.classList.toggle('open');
    }

    function copyToClipboard(button) {
        const codeContent = button.closest('.code-editor').querySelector('.code-content').innerText;
        navigator.clipboard.writeText(codeContent).then(() => {
            const originalHTML = button.innerHTML;
            button.classList.add('copied');
            button.innerHTML = '<i class="fas fa-check"></i> Copied';

            setTimeout(() => {
                button.classList.remove('copied');
                button.innerHTML = originalHTML;
            }, 2000);
        });
    }

    function toggleTheme() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        const themeIcon = document.getElementById('theme-icon');
        const themeText = document.getElementById('theme-text');

        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        if (newTheme === 'dark') {
            themeIcon.className = 'fas fa-moon';
            if (themeText) themeText.textContent = 'Dark';
        } else {
            themeIcon.className = 'fas fa-sun';
            if (themeText) themeText.textContent = 'Light';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const savedTheme = localStorage.getItem('theme') || 'light';
        const themeIcon = document.getElementById('theme-icon');
        const themeText = document.getElementById('theme-text');

        document.documentElement.setAttribute('data-theme', savedTheme);

        if (savedTheme === 'dark') {
            themeIcon.className = 'fas fa-moon';
            if (themeText) themeText.textContent = 'Dark';
        } else {
            themeIcon.className = 'fas fa-sun';
            if (themeText) themeText.textContent = 'Light';
        }
    });

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

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal-backdrop')) {
            closeModal(e.target.id);
        }
    });

    function toggleFullscreen() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
            document.getElementById('fullscreen-icon').classList.replace('fa-expand', 'fa-compress');
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
                document.getElementById('fullscreen-icon').classList.replace('fa-compress', 'fa-expand');
            }
        }
    }
    const searchData = [{
            title: 'Dashboard',
            url: "{{ route('dashboard') }}",
            category: 'Main',
            icon: 'fa-gauge-high'
        },
        {
            title: 'Profile',
            url: "{{ route('profile.edit') }}",
            category: 'User',
            icon: 'fa-circle-user'
        },
        {
            title: 'Alert Guide',
            url: "{{ route('ui.alerts') }}",
            category: 'UI Elements',
            icon: 'fa-bell'
        },
        {
            title: 'Avatar Guide',
            url: "{{ route('ui.avatars') }}",
            category: 'UI Elements',
            icon: 'fa-user-circle'
        },
        {
            title: 'Badge Guide',
            url: "{{ route('ui.badges') }}",
            category: 'UI Elements',
            icon: 'fa-tag'
        },
        {
            title: 'Breadcrumb Guide',
            url: "{{ route('ui.breadcrumbs') }}",
            category: 'UI Elements',
            icon: 'fa-route'
        },
        {
            title: 'Button Guide',
            url: "{{ route('ui.buttons') }}",
            category: 'UI Elements',
            icon: 'fa-mouse-pointer'
        },
        {
            title: 'Card Guide',
            url: "{{ route('ui.cards') }}",
            category: 'UI Elements',
            icon: 'fa-window-maximize'
        },
        {
            title: 'Form Guide',
            url: "{{ route('ui.forms') }}",
            category: 'UI Elements',
            icon: 'fa-file-lines'
        },
        {
            title: 'Modal Guide',
            url: "{{ route('ui.modals') }}",
            category: 'UI Elements',
            icon: 'fa-window-restore'
        },
        {
            title: 'Table Guide',
            url: "{{ route('ui.tables') }}",
            category: 'UI Elements',
            icon: 'fa-table-cells'
        },
        {
            title: 'Timeline Guide',
            url: "{{ route('ui.timeline') }}",
            category: 'UI Elements',
            icon: 'fa-bars-staggered'
        },
        {
            title: 'Tab Guide',
            url: "{{ route('ui.tabs') }}",
            category: 'UI Elements',
            icon: 'fa-layer-group'
        },
        {
            title: 'Toast Guide',
            url: "{{ route('ui.toasts') }}",
            category: 'UI Elements',
            icon: 'fa-comment-dots'
        },
        {
            title: 'Typography Guide',
            url: "{{ route('ui.typography') }}",
            category: 'UI Elements',
            icon: 'fa-font'
        },
        {
            title: 'Starter Page',
            url: "{{ route('page.starter') }}",
            category: 'Pages',
            icon: 'fa-file'
        },
        {
            title: 'Documentation',
            url: "{{ route('docs') }}",
            category: 'System',
            icon: 'fa-book-bookmark'
        },
    ];

    function openGlobalSearch() {
        const palette = document.getElementById('cmdPalette');
        const input = document.getElementById('cmdSearchInput');
        if (!palette) return;
        palette.classList.add('active');
        setTimeout(() => input.focus(), 100);
        document.body.style.overflow = 'hidden';
    }

    function closeGlobalSearch() {
        const palette = document.getElementById('cmdPalette');
        if (!palette) return;
        palette.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Elements for Desktop Search
        const topInput = document.getElementById('topbarSearch');
        const topDropdown = document.getElementById('topbarSearchDropdown');
        const topResults = document.getElementById('topbarSearchResults');

        // Elements for Modal Search (Mobile/Shortcut)
        const cmdInput = document.getElementById('cmdSearchInput');
        const cmdResults = document.getElementById('cmdSearchResults');
        const palette = document.getElementById('cmdPalette');

        let selectedIndex = -1;

        // Shared Search Function
        function performSearch(query, resultsContainer, itemClass = 'search-item') {
            const filtered = searchData.filter(item =>
                item.title.toLowerCase().includes(query) ||
                item.category.toLowerCase().includes(query)
            );

            if (filtered.length === 0) {
                resultsContainer.innerHTML = `
                    <div class="cmd-placeholder">
                        <i class="fas fa-search"></i>
                        <p>No results found</p>
                    </div>
                `;
                return filtered;
            }

            resultsContainer.innerHTML = filtered.map((item, index) => `
                <a href="${item.url}" class="${itemClass}" data-index="${index}">
                    <i class="fas ${item.icon}"></i>
                    <div class="${itemClass}-info">
                        <span class="${itemClass}-title">${item.title}</span>
                        <span class="${itemClass}-category">${item.category}</span>
                    </div>
                </a>
            `).join('');

            return filtered;
        }

        function updateSelection(container, items) {
            items.forEach((item, index) => {
                if (index === selectedIndex) {
                    item.classList.add('selected');
                    item.scrollIntoView({
                        block: 'nearest'
                    });
                } else {
                    item.classList.remove('selected');
                }
            });
        }

        // --- Desktop Logic ---
        if (topInput) {
            topInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                if (query.length === 0) {
                    topDropdown.classList.remove('active');
                    return;
                }
                performSearch(query, topResults, 'search-item');
                topDropdown.classList.add('active');
                selectedIndex = -1;
            });

            topInput.addEventListener('keydown', function(e) {
                const items = topResults.querySelectorAll('.search-item');
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    selectedIndex = Math.min(selectedIndex + 1, items.length - 1);
                    updateSelection(topResults, items);
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    selectedIndex = Math.max(selectedIndex - 1, 0);
                    updateSelection(topResults, items);
                } else if (e.key === 'Enter' && selectedIndex >= 0) {
                    e.preventDefault();
                    items[selectedIndex].click();
                } else if (e.key === 'Escape') {
                    topDropdown.classList.remove('active');
                }
            });

            document.addEventListener('click', function(e) {
                if (!topInput.contains(e.target) && !topDropdown.contains(e.target)) {
                    topDropdown.classList.remove('active');
                }
            });
        }

        // --- Modal Logic ---
        if (cmdInput) {
            cmdInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                if (query.length === 0) {
                    cmdResults.innerHTML =
                        `<div class="cmd-placeholder"><i class="fas fa-keyboard"></i><p>Start typing to search...</p></div>`;
                    return;
                }
                performSearch(query, cmdResults, 'cmd-item');
                selectedIndex = -1;
            });

            cmdInput.addEventListener('keydown', function(e) {
                const items = cmdResults.querySelectorAll('.cmd-item');
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    selectedIndex = Math.min(selectedIndex + 1, items.length - 1);
                    updateSelection(cmdResults, items);
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    selectedIndex = Math.max(selectedIndex - 1, 0);
                    updateSelection(cmdResults, items);
                } else if (e.key === 'Enter' && selectedIndex >= 0) {
                    e.preventDefault();
                    items[selectedIndex].click();
                } else if (e.key === 'Escape') {
                    closeGlobalSearch();
                }
            });
        }

        // Backdrop Click
        if (palette) {
            palette.addEventListener('click', function(e) {
                if (e.target === palette) closeGlobalSearch();
            });
        }

        // Shortcuts
        document.addEventListener('keydown', function(e) {
            // Global Ctrl + K open Modal (regardless of screen size)
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                openGlobalSearch();
            }

            // ESC to close
            if (e.key === 'Escape') {
                closeGlobalSearch();
                topDropdown.classList.remove('active');
            }
        });
    });
</script>
