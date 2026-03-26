
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">RFQ Requests</h1>
        
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

<th>ID</th>
<th>Cargo Name</th>
<th>Cargo Type</th>
<th>Quantity (MT)</th>
<th>Origin Port</th>
<th>Destination Port</th>
<th>Cargo Owner</th>
<th>Quote Deadline</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>RFQ-001</td>
<td>Coal Shipment</td>
<td>Bulk Cargo</td>
<td>50,000</td>
<td>Newcastle</td>
<td>Shanghai</td>
<td>Global Energy Ltd</td>
<td>10 Aug 2026</td>

<td>
<span class="badge bg-warning">
Pending Quotes
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

<td>RFQ-002</td>
<td>Iron Ore</td>
<td>Dry Bulk</td>
<td>65,000</td>
<td>Brazil</td>
<td>Rotterdam</td>
<td>Steel Corp</td>
<td>15 Aug 2026</td>

<td>
<span class="badge bg-success">
Quotes Received
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
                    

  