<div class="sidebar" id="sidebar">
    <nav class="sidebar-offcanvas" id="sidebar-nav">
        <ul class="nav">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.dashboard') ? 'active' : '' }}"
                   href="{{ route('ship.dashboard') }}">
                    <i class="mdi mdi-view-dashboard menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <!-- Vessels -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.vessels*') ? 'active' : '' }}"
                   href="{{ route('ship.vessels') }}">
                    <i class="mdi mdi-ship-wheel menu-icon"></i>
                    <span class="menu-title">Vessels</span>
                </a>
            </li>

            <!-- Cargo Requests -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.cargo-requests*') ? 'active' : '' }}"
                   href="{{ route('ship.cargo-requests') }}">
                    <i class="mdi mdi-ferry menu-icon"></i>
                    <span class="menu-title">Cargo Requests</span>
                </a>
            </li>

            <!-- RFQ Requests -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.rfq-requests*') ? 'active' : '' }}"
                   href="{{ route('ship.rfq-requests') }}">
                    <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                    <span class="menu-title">RFQ Requests</span>
                </a>
            </li>

            <!-- Contracts -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.contracts*') ? 'active' : '' }}"
                   href="{{ route('ship.contracts') }}">
                    <i class="mdi mdi-file-sign menu-icon"></i>
                    <span class="menu-title">Contracts</span>
                </a>
            </li>

            <!-- Shipments -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.shipments*') ? 'active' : '' }}"
                   href="{{ route('ship.shipments') }}">
                    <i class="mdi mdi-truck-delivery-outline menu-icon"></i>
                    <span class="menu-title">Shipments</span>
                </a>
            </li>

            <!-- Port Schedule -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.port-schedule*') ? 'active' : '' }}"
                   href="{{ route('ship.port-schedule') }}">
                    <i class="mdi mdi-crane menu-icon"></i>
                    <span class="menu-title">Port Schedule</span>
                </a>
            </li>

            <!-- Messages -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.messages*') ? 'active' : '' }}"
                   href="{{ route('ship.messages') }}">
                    <i class="mdi mdi-email menu-icon"></i>
                    <span class="menu-title">Messages</span>
                </a>
            </li>

            <!-- Notifications -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.notifications*') ? 'active' : '' }}"
                   href="{{ route('ship.notifications') }}">
                    <i class="mdi mdi-bell menu-icon"></i>
                    <span class="menu-title">Notifications</span>
                </a>
            </li>

            <!-- Offers Sent -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.offers-sent*') ? 'active' : '' }}"
                   href="{{ route('ship.offers-sent') }}">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">Offers Sent</span>
                </a>
            </li>

            <!-- Tracking -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.tracking*') ? 'active' : '' }}"
                   href="{{ route('ship.tracking') }}">
                    <i class="mdi mdi-truck menu-icon"></i>
                    <span class="menu-title">Tracking</span>
                </a>
            </li>

            <!-- Settings -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ship.settings') ? 'active' : '' }}"
                   href="{{ route('ship.settings') }}">
                    <i class="mdi mdi-cog menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </li>

        </ul>
    </nav>
</div>