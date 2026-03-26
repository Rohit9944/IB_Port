
<?php include '../include/header.php'; ?>        

<div class="container-fluid page-body-wrapper">
<?php include '../include/sidebar.php'; ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Cargo Owners</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="add.html" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Cargo Owner</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">

                            <tr>

                                <th>ID</th>

                                <th>Company Name</th>

                                <th>Contact Person</th>

                                <th>Email</th>

                                <th>Phone</th>

                                <th>Country</th>

                                <th>Total Cargo</th>

                                <th>Active Shipments</th>

                                <th>Status</th>

                                <th>Actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>#101</td>

                                <td>Global Grain Ltd</td>

                                <td>John Smith</td>

                                <td>john@grain.com</td>

                                <td>+44 987654321</td>

                                <td>UK</td>

                                <td>12</td>

                                <td>3</td>

                                <td>
                                    <span class="badge bg-success">Active</span>
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

                                <td>#102</td>

                                <td>Asia Coal Traders</td>

                                <td>Li Wei</td>

                                <td>liwei@coal.cn</td>

                                <td>+86 456789123</td>

                                <td>China</td>

                                <td>20</td>

                                <td>5</td>

                                <td>
                                    <span class="badge bg-success">Active</span>
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

                                <td>#103</td>

                                <td>Middle East Minerals</td>

                                <td>Ahmed Khan</td>

                                <td>ahmed@minerals.ae</td>

                                <td>+971 55667788</td>

                                <td>UAE</td>

                                <td>8</td>

                                <td>1</td>

                                <td>
                                    <span class="badge bg-secondary">Inactive</span>
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
  <?php include '../include/footer.php'; ?>
                    

  