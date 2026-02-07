@extends('layouts.app')

@section('title', 'Profile Settings')

@section('content')
    <div class="animate-in" id="profile-top">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home me-1"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
            </ol>
        </nav>

        <div class="profile-layout">
            <!-- Sidebar Navigation -->
            <aside class="profile-sidebar">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-avatar-large avatar-circle cursor-pointer relative overflow-hidden"
                            id="avatarTrigger">
                            @if ($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" class="w-full h-full object-cover">
                            @else
                                {{ substr($user->name, 0, 1) }}
                            @endif
                            <div class="avatar-overlay" onclick="openModal('avatarModal')">
                                <i class="fas fa-camera"></i>
                                <span class="text-xs">Change</span>
                            </div>
                        </div>
                        <h2 class="profile-name">{{ $user->name }}</h2>
                        <p class="profile-email">{{ $user->email }}</p>
                        <div class="mt-4">
                            <span class="badge badge-success text-xs px-3 py-1">
                                {{ $user->detail->nik ? 'Verified ID' : 'Account Active' }}</span>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <a href="#profile-top" class="profile-menu-item active">
                            <i class="fas fa-id-card"></i>
                            Personal Identity
                        </a>
                        <a href="#account-access" class="profile-menu-item">
                            <i class="fas fa-user-gear"></i>
                            Account Access
                        </a>
                        <a href="#security" class="profile-menu-item">
                            <i class="fas fa-shield-halved"></i>
                            Security Settings
                        </a>
                        <a href="#danger-zone" class="profile-menu-item">
                            <i class="fas fa-triangle-exclamation"></i>
                            Delete Account
                        </a>
                    </div>
                </div>

                <!-- Side Info Card -->
                <div class="card mt-5 p-5">
                    <h4 class="text-sm fw-bold mb-3">Account Status</h4>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex justify-between text-sm">
                            <span class="text-secondary">Member Since</span>
                            <span class="text-primary fw-semibold">{{ $user->created_at->format('M Y') }}</span>
                        </div>
                        <div class="d-flex justify-between text-sm">
                            <span class="text-secondary">Last Updated</span>
                            <span class="text-primary fw-semibold">{{ $user->updated_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content Area -->
            <div class="profile-main">
                @if (session('status') === 'profile-updated')
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle mt-1 text-lg"></i>
                        <div>
                            <div class="fw-bold mb-1">Success!</div>
                            <span>Your profile and identity settings have been updated successfully.</span>
                        </div>
                    </div>
                @endif

                @if (session('status') === 'password-updated')
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle mt-1 text-lg"></i>
                        <div>
                            <div class="fw-bold mb-1">Success!</div>
                            <span>Your security credentials have been updated successfully.</span>
                        </div>
                    </div>
                @endif

                @if (session('status') === 'avatar-updated')
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle mt-1 text-lg"></i>
                        <div>
                            <div class="fw-bold mb-1">Success!</div>
                            <span>Profile picture has been updated successfully.</span>
                        </div>
                    </div>
                @endif

                <!-- Personal Information Form -->
                <form method="post" action="{{ route('profile.identity.update') }}" class="form-section"
                    id="personal-identity">
                    @csrf
                    @method('patch')

                    <h3 class="section-title">
                        <i class="fas fa-address-card"></i>
                        Personal Identity
                    </h3>

                    <div class="form-grid">
                        <div class="col-span-2">
                            <div class="form-group">
                                <label class="form-label">National ID Number</label>
                                <input type="text" name="nik" class="form-input"
                                    value="{{ old('nik', $user->detail->nik) }}" maxlength="16"
                                    placeholder="16-digit identity number">
                                @error('nik')
                                    <p class="text-sm text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="form-label">Place of Birth</label>
                                <input type="text" name="place_of_birth" class="form-input"
                                    value="{{ old('place_of_birth', $user->detail->place_of_birth) }}" placeholder="City">
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-input"
                                    value="{{ old('date_of_birth', $user->detail->date_of_birth) }}">
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-input">
                                    <option value="">Select Gender</option>
                                    <option value="Male"
                                        {{ old('gender', $user->detail->gender) == 'Male' ? 'selected' : '' }}>
                                        Male</option>
                                    <option value="Female"
                                        {{ old('gender', $user->detail->gender) == 'Female' ? 'selected' : '' }}>
                                        Female</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="form-label">Occupation</label>
                                <input type="text" name="occupation" class="form-input"
                                    value="{{ old('occupation', $user->detail->occupation) }}" placeholder="Current job">
                            </div>
                        </div>

                        <div class="col-span-2">
                            <div class="form-group mb-0">
                                <label class="form-label">Full Address</label>
                                <textarea name="address" class="form-input resize-none" rows="4"
                                    placeholder="Province, City, District, and Full Address...">{{ old('address', $user->detail->address) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-end mt-4">
                        <button type="submit" class="btn btn-primary">Update Identity Information</button>
                    </div>
                </form>

                <!-- Account Access Form -->
                <form method="post" action="{{ route('profile.update') }}" class="form-section" id="account-access">
                    @csrf
                    @method('patch')

                    <h3 class="section-title">
                        <i class="fas fa-user-gear"></i>
                        Account Access
                    </h3>

                    <div class="form-grid">
                        <div>
                            <div class="form-group">
                                <label class="form-label">Display Name</label>
                                <input type="text" name="name" class="form-input"
                                    value="{{ old('name', $user->name) }}" required>
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-input"
                                    value="{{ old('email', $user->email) }}" required>
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-input"
                                    value="{{ old('phone_number', $user->detail->phone_number) }}"
                                    placeholder="e.g. 08123456789">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-end mt-2">
                        <button type="submit" class="btn btn-primary">Update Account Access</button>
                    </div>
                </form>

                <!-- Security Form -->
                <div class="form-section" id="security">
                    <h3 class="section-title">
                        <i class="fas fa-lock"></i>
                        Security Settings
                    </h3>

                    <form method="post" action="{{ route('profile.password.update') }}">
                        @csrf
                        @method('put')

                        <div class="form-grid">
                            <div class="col-span-2">
                                <div class="form-group">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" name="current_password" class="form-input" required>
                                    @error('current_password')
                                        <p class="text-sm text-danger mt-2">
                                            {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="password" class="form-input" required>
                                    @error('password')
                                        <p class="text-sm text-danger mt-2">
                                            {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" name="password_confirmation" class="form-input" required>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-end mt-2">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>

                <!-- Delete Account -->
                <div class="form-section" id="danger-zone">
                    <h3 class="section-title text-danger">
                        <i class="fas fa-triangle-exclamation"></i>
                        Delete Account
                    </h3>

                    <div class="card card-danger">
                        <div class="card-body">
                            <h5 class="text-danger fw-bold mb-2">Terminating Account Resources</h5>
                            <p class="text-sm text-secondary mb-4 lh-relaxed">
                                Once your account is deleted, all of its resources and data will be permanently deleted.
                                Before deleting your account, please download any data or information that you wish to
                                retain. This action is irreversible and will result in the immediate loss of access to
                                all system features.
                            </p>

                            <button type="button" class="btn btn-danger" onclick="openModal('deleteModal')">
                                <i class="fas fa-user-xmark me-2"></i> Delete My Account Permanently
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.profile-menu-item');
            const sections = document.querySelectorAll('.form-section');

            // Handle Smooth Scroll for all menu items with precise offset
            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href.startsWith('#')) {
                        e.preventDefault();
                        const targetId = href.replace('#', '');
                        const targetElement = document.getElementById(targetId);

                        if (targetElement) {
                            const offset = 80;
                            const elementPosition = targetElement.getBoundingClientRect().top;
                            const offsetPosition = elementPosition + window.pageYOffset - (
                                targetId === 'profile-top' ? 200 : offset);

                            window.scrollTo({
                                top: targetId === 'profile-top' ? 0 : offsetPosition,
                                behavior: 'smooth'
                            });

                            history.pushState(null, null, href);
                        }
                    }
                });
            });

            function updateActiveMenu() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= sectionTop - 200) {
                        current = section.getAttribute('id');
                    }
                });
                const isBottom = (window.innerHeight + window.scrollY) >= document.documentElement.scrollHeight -
                    10;
                if (isBottom) current = sections[sections.length - 1].getAttribute('id');
                if (window.scrollY < 100) current = 'profile-top';

                if (current) {
                    menuItems.forEach(item => {
                        item.classList.remove('active');
                        const href = item.getAttribute('href').replace('#', '');
                        if (href === current || (current === 'personal-identity' && href ===
                                'profile-top')) {
                            item.classList.add('active');
                        }
                    });
                }
            }

            window.addEventListener('scroll', updateActiveMenu);
            updateActiveMenu();
        });
    </script>
@endpush

@push('modals')
    <!-- Avatar Upload Modal -->
    <div id="avatarModal" class="modal-backdrop">
        <div class="modal modal-sm modal-primary">
            <div class="modal-header">
                <h3 class="modal-title">Update Profile Photo</h3>
                <button type="button" class="modal-close" onclick="closeModal('avatarModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form action="{{ route('profile.avatar.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p class="text-secondary text-sm mb-4">Choose a new photo to represent yourself across the platform.
                    </p>

                    <div id="dropZone" onclick="document.getElementById('avatarInput').click()"
                        class="border-2 border-dashed border-primary rounded-xl p-8 text-center cursor-pointer transition-all">
                        <i class="fas fa-cloud-upload-alt text-accent mb-3 font-32"></i>
                        <p class="text-sm text-primary fw-medium">Click to upload</p>
                        <p class="text-xs text-secondary mt-1">PNG, JPG up to 2MB</p>
                        <input type="file" name="avatar" id="avatarInput" accept="image/*" class="d-none"
                            onchange="previewAvatar(this)">
                    </div>
                    <div id="previewContainer" class="d-none mt-5 text-center">
                        <img id="avatarPreview"
                            class="w-120 h-120 rounded-full object-cover border-4 border-white shadow-lg mx-auto">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal('avatarModal')">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Account Modal -->
    <div id="deleteModal" class="modal-backdrop">
        <div class="modal modal-danger">
            <div class="modal-header">
                <h3 class="modal-title">Confirm Account Deletion</h3>
                <button type="button" class="modal-close" onclick="closeModal('deleteModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form action="{{ route('profile.destroy') }}" method="POST">
                @csrf
                @method('delete')

                <div class="modal-body">
                    <p class="text-secondary text-sm mb-4 lh-relaxed">
                        Are you sure you want to delete your account? Once your account is deleted, all of its resources and
                        data will be permanently deleted.
                    </p>

                    <div class="form-group">
                        <label class="form-label">Verify Password</label>
                        <input type="password" name="password" class="form-input"
                            placeholder="Enter your password to confirm" required>
                        @error('password', 'userDeletion')
                            <p class="text-sm text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal('deleteModal')">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete My Account</button>
                </div>
            </form>
        </div>
    </div>
@endpush

@push('scripts')
    <script>
        function previewAvatar(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('avatarPreview');
                    const container = document.getElementById('previewContainer');
                    const dropZone = document.getElementById('dropZone');

                    preview.src = e.target.result;
                    container.classList.remove('d-none');
                    container.classList.add('d-block');
                    dropZone.classList.add('d-none');
                    dropZone.classList.remove('d-block');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->userDeletion->has('password'))
                openModal('deleteModal');
            @endif
        });
    </script>
@endpush
