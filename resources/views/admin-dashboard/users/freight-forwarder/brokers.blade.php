
<?php include 'include/header.php'; ?>        

<div class="container-fluid page-body-wrapper">
<?php include 'include/sidebar.php'; ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Brokers</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="add.html" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Broker</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
<tr>
<th>ID</th>
<th>Broker Name</th>
<th>Company</th>
<th>Email</th>
<th>Phone</th>
<th>Country</th>
<th>Total Deals</th>
<th>Active Deals</th>
<th>Status</th>
<th>Actions</th>
</tr>

</thead>

<tbody>

<tr>
<td>#301</td>
<td>David Wilson</td>
<td>Global Ship Brokers</td>
<td>david@gsb.com</td>
<td>+1 554433221</td>
<td>USA</td>
<td>28</td>
<td>7</td>
<td><span class="badge bg-success">Active</span></td>
<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>
</tr>

<tr>
<td>#302</td>
<td>Raj Mehta</td>
<td>Ocean Trade Brokers</td>
<td>raj@otb.in</td>
<td>+91 9988776655</td>
<td>India</td>
<td>14</td>
<td>4</td>
<td><span class="badge bg-success">Active</span></td>
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
  <?php include '../include/footer.php'; ?>
                    

  