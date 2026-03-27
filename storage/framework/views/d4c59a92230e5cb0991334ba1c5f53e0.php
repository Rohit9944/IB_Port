
<?php echo $__env->make('cargo-owner.include.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container-fluid page-body-wrapper">
<?php echo $__env->make('cargo-owner.include.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">My Cargo / Shipments</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
        <a href="add.html" class="btn btn-primary"><i class="mdi mdi-plus"></i>Create Shipment</a>      
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
                            <tr>
                    <th>Cargo Type</th>
                    <th>Quantity (MT)</th>
                    <th>Route</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>Coal</td>
                    <td>50,000</td>
                    <td>Mumbai → Dubai</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td>
                      <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    
                </div>
                    </td>
                </tr>

                <tr>
                    <td>Grain</td>
                    <td>30,000</td>
                    <td>India → Singapore</td>
                    <td><span class="status-badge status-pending">Pending</span></td>
                    <td>
                      <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    
                </div>
                    </td>
                </tr>

                <tr>
                    <td>Oil</td>
                    <td>20,000</td>
                    <td>UAE → Europe</td>
                    <td><span class="status-badge status-completed">Completed</span></td>
                    <td>
                      <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    
                </div>
                    </td>
                </tr>


</tbody>

                    </table>
      </div>
    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
<?php echo $__env->make('cargo-owner.include.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    

  <?php /**PATH C:\xampp\htdocs\IB_Port\resources\views/cargo-owner/shipments/index.blade.php ENDPATH**/ ?>