
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Port Operations</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="add.html" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Operation</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">
<thead class="table-light">

<tr>

<th>Operation ID</th>
<th>Port Name</th>
<th>Vessel</th>
<th>Cargo</th>
<th>Operation Type</th>
<th>Berth</th>
<th>Arrival Time</th>
<th>Departure Time</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>OP-001</td>
<td>Singapore Port</td>
<td>MV Ocean Star</td>
<td>Coal</td>
<td>Loading</td>
<td>B12</td>
<td>10 Aug 2026</td>
<td>12 Aug 2026</td>

<td>
<span class="badge bg-warning">
In Progress
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

<td>OP-002</td>
<td>Dubai Port</td>
<td>MV Blue Marine</td>
<td>Iron Ore</td>
<td>Unloading</td>
<td>A7</td>
<td>15 Aug 2026</td>
<td>16 Aug 2026</td>

<td>
<span class="badge bg-success">
Completed
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
@include('admin-dashboard.include.footer')
                    

  