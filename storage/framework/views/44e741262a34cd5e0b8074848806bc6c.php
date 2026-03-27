
<?php echo $__env->make('ship-owner.include.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container-fluid page-body-wrapper">
<?php echo $__env->make('ship-owner.include.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">RFQ Responses</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="add.html" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Create RFQ</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
<tr>

<th>RFQ ID</th>
<th>Cargo Owner</th>
<th>Cargo</th>
<th>Route</th>
<th>Vessel</th>
<th>Proposed Price</th>
<th>Submitted Date</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>RFQ-101</td>

<td>Global Energy Ltd</td>

<td>Coal</td>

<td>Newcastle → Shanghai</td>

<td>MV Ocean Star</td>

<td>$45 / Ton</td>

<td>10 Aug 2026</td>

<td>
<span class="badge bg-warning">
Pending
</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>

</td>

</tr>

<tr>

<td>RFQ-102</td>

<td>Steel Corp</td>

<td>Iron Ore</td>

<td>Brazil → Rotterdam</td>

<td>MV Atlantic Wind</td>

<td>$50 / Ton</td>

<td>12 Aug 2026</td>

<td>
<span class="badge bg-success">
Accepted
</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>

</tr>

<tr>

<td>RFQ-103</td>

<td>Agro Traders</td>

<td>Wheat</td>

<td>Mumbai → Dubai</td>

<td>MV Blue Marine</td>

<td>$38 / Ton</td>

<td>15 Aug 2026</td>

<td>
<span class="badge bg-danger">
Rejected
</span>
</td>

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
                    

  <?php /**PATH C:\xampp\htdocs\IB_Port\resources\views/ship-owner/rfq-requests/index.blade.php ENDPATH**/ ?>