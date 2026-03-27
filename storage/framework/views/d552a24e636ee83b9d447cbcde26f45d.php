
<?php echo $__env->make('ship-owner.include.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container-fluid page-body-wrapper">
<?php echo $__env->make('ship-owner.include.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">My Vessels</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="add.html" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add New Vessel</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">



<thead class="table-light">

<tr>

<th>Vessel ID</th>
<th>Vessel Name</th>
<th>IMO Number</th>
<th>Type</th>
<th>Capacity</th>
<th>Current Route</th>
<th>Status</th>
<th>Last Updated</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>VES-001</td>

<td>MV Ocean Star</td>

<td>9876543</td>

<td>Bulk Carrier</td>

<td>50,000 Tons</td>

<td>Dubai → Mumbai</td>

<td>
<span class="badge bg-success">
Active
</span>
</td>

<td>12 Aug 2026</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>

</tr>


<tr>

<td>VES-002</td>

<td>MV Blue Marine</td>

<td>8765432</td>

<td>Container Ship</td>

<td>40,000 TEU</td>

<td>Singapore → Rotterdam</td>

<td>
<span class="badge bg-warning">
Maintenance
</span>
</td>

<td>10 Aug 2026</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
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
<?php echo $__env->make('ship-owner.include.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    

  <?php /**PATH C:\xampp\htdocs\IB_Port\resources\views/ship-owner/vessels/index.blade.php ENDPATH**/ ?>