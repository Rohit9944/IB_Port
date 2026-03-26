<div class="sidebar" id="sidebar">
      <nav class=" sidebar-offcanvas" id="sidebar-nav">
            <ul class="nav">
                  <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="mdi mdi-view-dashboard menu-icon"></i><span class="menu-title">Dashboard</span></a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic"><i class="mdi mdi-account-multiple-outline menu-icon"></i>
                              <span class="menu-title">Users</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                              <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('admin.users.cargo-owners')); ?>">Cargo Owners</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('admin.ship-owners')); ?>">Ship Owners</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('admin.users.freight-forwarder')); ?>">Freight Forwarder</a></li>
                              </ul>
                        </div>
                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.vessels.index')); ?>" class="nav-link"><i class="mdi mdi-ship-wheel menu-icon"></i><span class="menu-title">Vessels</span></a>
                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.users.cargo-listing')); ?>" class="nav-link"><i class="mdi mdi-ferry menu-icon"></i><span class="menu-title">Cargo Listings</span></a>
                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.rfq-requests.index')); ?>" class="nav-link"><i class="mdi mdi-clipboard-text-outline menu-icon"></i><span class="menu-title">RFQ Requests</span></a>
                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.contracts.index')); ?>" class="nav-link"><i class="mdi mdi-file-sign  menu-icon"></i><span class="menu-title">Contracts</span></a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo e(route('admin.shipments.index')); ?>"><i class="mdi mdi-truck-delivery-outline menu-icon"></i><span class="menu-title">Shipments</span><i class="menu-arrow"></i></a>

                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.port-operations.index')); ?>" class="nav-link"><i class="mdi mdi-crane menu-icon"></i><span class="menu-title">Port Operations</span></a>
                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.analytics')); ?>" class="nav-link"><i class="mdi mdi-chart-bar menu-icon"></i><span class="menu-title">Analytics</span></a>
                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.reports')); ?>" class="nav-link"><i class="mdi mdi-file-chart-outline menu-icon"></i><span class="menu-title">Reports</span></a>
                  </li>
                  <li class="nav-item">
                        <a href="<?php echo e(route('admin.settings')); ?>" class="nav-link"><i class="mdi mdi mdi-cog menu-icon"></i><span class="menu-title">Settings</span></a>
                  </li>
                  <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <button class="nav-link btn btn-link text-start">
        Logout
    </button>
</form>
            </ul>
      </nav>
</div><?php /**PATH C:\xampp\htdocs\IB_Port\resources\views/admin-dashboard/include/sidebar.blade.php ENDPATH**/ ?>