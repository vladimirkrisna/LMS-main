<!DOCTYPE html>
<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <!-- Search -->
    <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
            <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                aria-label="Search..." />
        </div>
    </div>
    <!-- /Search -->

    <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->
        <li class="nav-item lh-1 me-3">
            <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free"
                data-icon="octicon-star" data-size="large" data-show-count="true"
                aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
        </li>

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    @if (Auth::user() !== null)
                        <img src="{{ asset('assets/img/avatars/' . Auth::user()->foto) }}" alt
                            style="max-height: 40px;" class="w-px-40 h-auto rounded-circle" />
                    @else
                        <img src="{{ asset('assets/img/avatars/avatar.png') }}" alt
                            class="w-px-40 h-auto rounded-circle" />
                    @endif
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="{{ route('login') }}">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                    @if (Auth::user() !== null)
                                        <img src="{{ asset('assets/img/avatars/' . Auth::user()->foto) }}"
                                            style="max-height: 40px;" alt class="w-px-40 h-auto rounded-circle" />
                                    @else
                                        <img src="{{ asset('assets/img/avatars/avatar.png') }}" width="50px"
                                            height="50px" alt class="w-px-40 h-auto rounded-circle" />
                                    @endif
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                @if (Auth::user() !== null)
                                    <span class="fw-semibold d-block mt-2">{{ Auth::user()->fullname }}</span>
                                @else
                                    <span class="fw-semibold d-block mt-2">Login</span>
                                @endif
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    @if (Auth::user() !== null)
                        <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    @endif
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span
                                class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
        <!--/ User -->
    </ul>
</div>
