<div class="sidebar" id="sidebar">
    <nav class="sidebar-offcanvas" id="sidebar-nav">
        <ul class="nav">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="mdi mdi-view-dashboard menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <!-- Users -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.users.*') || request()->routeIs('admin.ship-owners') ? 'active' : ''); ?>"
                   data-bs-toggle="collapse" href="#usersMenu">
                    <i class="mdi mdi-account-multiple-outline menu-icon"></i>
                    <span class="menu-title">Users</span>
                </a>

                <div class="collapse <?php echo e(request()->routeIs('admin.users.*') || request()->routeIs('admin.ship-owners') ? 'show' : ''); ?>"
                     id="usersMenu">
                    <ul class="nav flex-column sub-menu">

                        

                    </ul>
                </div>
            </li>

            <!-- Vessels -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.vessels.*') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.vessels.index')); ?>">
                    <i class="mdi mdi-ship-wheel menu-icon"></i>
                    <span class="menu-title">Vessels</span>
                </a>
            </li>

            <!-- Cargo Listings -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.users.cargo-listing') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.users.cargo-listing')); ?>">
                    <i class="mdi mdi-ferry menu-icon"></i>
                    <span class="menu-title">Cargo Listings</span>
                </a>
            </li>

            <!-- RFQ -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.rfq-requests.*') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.rfq-requests.index')); ?>">
                    <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                    <span class="menu-title">RFQ Requests</span>
                </a>
            </li>

            <!-- Contracts -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.contracts.*') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.contracts.index')); ?>">
                    <i class="mdi mdi-file-sign menu-icon"></i>
                    <span class="menu-title">Contracts</span>
                </a>
            </li>

            <!-- Shipments -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.shipments.*') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.shipments.index')); ?>">
                    <i class="mdi mdi-truck-delivery-outline menu-icon"></i>
                    <span class="menu-title">Shipments</span>
                </a>
            </li>

            <!-- Port Operations -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.port-operations.*') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.port-operations.index')); ?>">
                    <i class="mdi mdi-crane menu-icon"></i>
                    <span class="menu-title">Port Operations</span>
                </a>
            </li>

            <!-- Analytics -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.analytics') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.analytics')); ?>">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">Analytics</span>
                </a>
            </li>

            <!-- Reports -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.reports') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.reports')); ?>">
                    <i class="mdi mdi-file-chart-outline menu-icon"></i>
                    <span class="menu-title">Reports</span>
                </a>
            </li>

            <!-- Settings -->
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->routeIs('admin.settings') ? 'active' : ''); ?>"
                   href="<?php echo e(route('admin.settings')); ?>">
                    <i class="mdi mdi-cog menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </li>

        </ul>
    </nav>
</div><?php /**PATH C:\xampp\htdocs\IB_Port\resources\views/admin-dashboard/include/sidebar.blade.php ENDPATH**/ ?>