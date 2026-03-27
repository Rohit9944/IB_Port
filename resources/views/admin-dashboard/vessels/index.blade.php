
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Vessels Management</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="add.html" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Vessel</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">



<thead class="table-light">

<tr>

<th>ID</th>
<th>Vessel Name</th>
<th>IMO Number</th>
<th>Type</th>
<th>Capacity (DWT)</th>
<th>Flag Country</th>
<th>Current Location</th>
<th>Status</th>
<th>Owner</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>
<td>MV Atlantic Star</td>
<td>IMO1234567</td>
<td>Bulk Carrier</td>
<td>52,000</td>
<td>Panama</td>
<td>Singapore Port</td>
<td><span class="badge bg-success">Available</span></td>
<td>Oceanic Shipping Ltd</td>

<td>

<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>

</tr>

<tr>

<td>2</td>
<td>MV Blue Ocean</td>
<td>IMO9876543</td>
<td>Container Ship</td>
<td>68,000</td>
<td>Liberia</td>
<td>Dubai Port</td>
<td><span class="badge bg-warning">On Charter</span></td>
<td>Global Marine Corp</td>

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
@include('admin-dashboard.include.footer')
                    

  