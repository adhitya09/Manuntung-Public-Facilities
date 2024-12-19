<aside class="left-sidebar">
    <div class="scroll-sidebar" data-simplebar>
        <div class="d-flex mb-4 align-items-center mr-4">
            <a href="" class="d-flex align-items-center text-nowrap logo-img ms-0 ms-md-1">
                <h2 class="ms-3 mb-0 text-bold">Manuntung</h2>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="mb-4 pb-2">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                    <span class="hide-menu">Beranda</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('superadmin') }}"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-light-primary rounded-3">
                            <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
                        </span>
                        <span class="hide-menu ms-2 ps-1">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link warning-hover-bg" href="{{ route('fasilitas.index') }}"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-light-warning rounded-3">
                            <i class="ti ti-article fs-7 text-warning"></i>
                        </span>
                        <span class="hide-menu ms-2 ps-1">Fasilitas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link success-hover-bg" href="{{ route('user.index') }}"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-light-success rounded-3">
                            <i class="ti ti-users fs-7 text-success"></i>
                        </span>
                        <span class="hide-menu ms-2 ps-1">User</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link danger-hover-bg" href="{{ route('admin.index') }}"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-light-danger rounded-3">
                            <i class="ti ti-user-shield fs-7 text-danger"></i>
                        </span>
                        <span class="hide-menu ms-2 ps-1">Admin</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
