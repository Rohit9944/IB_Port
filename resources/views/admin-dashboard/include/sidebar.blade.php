<div class="sidebar" id="sidebar">
    <nav class="sidebar-offcanvas" id="sidebar-nav">
        <ul class="nav">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                   href="{{ route('admin.dashboard') }}">
                    <i class="mdi mdi-view-dashboard menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <!-- Users -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.users.*') || request()->routeIs('admin.ship-owners') ? 'active' : '' }}"
                   data-bs-toggle="collapse" href="#usersMenu">
                    <i class="mdi mdi-account-multiple-outline menu-icon"></i>
                    <span class="menu-title">Users</span>
                </a>

                <div class="collapse {{ request()->routeIs('admin.users.*') || request()->routeIs('admin.ship-owners') ? 'show' : '' }}"
                     id="usersMenu">
                    <ul class="nav flex-column sub-menu">

                        {{-- <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.users.cargo-owners') ? 'active' : '' }}"
                               href="{{ route('admin.users.cargo-owners') }}">
                                Cargo Owners
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.ship-owners') ? 'active' : '' }}"
                               href="{{ route('admin.ship-owners') }}">
                                Ship Owners
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.users.freight-forwarder') ? 'active' : '' }}"
                               href="{{ route('admin.users.freight-forwarder') }}">
                                Freight Forwarder
                            </a>
                        </li> --}}

                    </ul>
                </div>
            </li>

            <!-- Vessels -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.vessels.*') ? 'active' : '' }}"
                   href="{{ route('admin.vessels.index') }}">
                    <i class="mdi mdi-ship-wheel menu-icon"></i>
                    <span class="menu-title">Vessels</span>
                </a>
            </li>

            <!-- Cargo Listings -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.users.cargo-listing') ? 'active' : '' }}"
                   href="{{ route('admin.users.cargo-listing') }}">
                    <i class="mdi mdi-ferry menu-icon"></i>
                    <span class="menu-title">Cargo Listings</span>
                </a>
            </li>

            <!-- RFQ -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.rfq-requests.*') ? 'active' : '' }}"
                   href="{{ route('admin.rfq-requests.index') }}">
                    <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                    <span class="menu-title">RFQ Requests</span>
                </a>
            </li>

            <!-- Contracts -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.contracts.*') ? 'active' : '' }}"
                   href="{{ route('admin.contracts.index') }}">
                    <i class="mdi mdi-file-sign menu-icon"></i>
                    <span class="menu-title">Contracts</span>
                </a>
            </li>

            <!-- Shipments -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.shipments.*') ? 'active' : '' }}"
                   href="{{ route('admin.shipments.index') }}">
                    <i class="mdi mdi-truck-delivery-outline menu-icon"></i>
                    <span class="menu-title">Shipments</span>
                </a>
            </li>

            <!-- Port Operations -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.port-operations.*') ? 'active' : '' }}"
                   href="{{ route('admin.port-operations.index') }}">
                    <i class="mdi mdi-crane menu-icon"></i>
                    <span class="menu-title">Port Operations</span>
                </a>
            </li>

            <!-- Analytics -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.analytics') ? 'active' : '' }}"
                   href="{{ route('admin.analytics') }}">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">Analytics</span>
                </a>
            </li>

            <!-- Reports -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.reports') ? 'active' : '' }}"
                   href="{{ route('admin.reports') }}">
                    <i class="mdi mdi-file-chart-outline menu-icon"></i>
                    <span class="menu-title">Reports</span>
                </a>
            </li>

            <!-- Settings -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}"
                   href="{{ route('admin.settings') }}">
                    <i class="mdi mdi-cog menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </li>

        </ul>
    </nav>
</div>