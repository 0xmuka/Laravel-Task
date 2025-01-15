<nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
            <i class="bx bx-menu bx-md"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search bx-md"></i>
                <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            @auth
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a
                        class="nav-link dropdown-toggle hide-arrow p-0"
                        href="javascript:void(0);"
                        data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ url('/profile') }}">
                                <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <!-- Guest -->
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="bx bx-log-in-circle bx-md me-2"></i><span>Log In</span>
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">
                            <i class="bx bx-user-plus bx-md me-2"></i><span>Register</span>
                        </a>
                    </li>
                @endif
            @endauth
        </ul>
    </div>
</nav>