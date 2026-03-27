
@include('ship-owner.include.header')
<div class="container-fluid page-body-wrapper">
  @include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Cargo Requests</h1>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
                          <tr>

<th>Request ID</th>
<th>Cargo Name</th>
<th>Cargo Owner</th>
<th>Cargo Type</th>
<th>Weight</th>
<th>Origin Port</th>
<th>Destination Port</th>
<th>Loading Date</th>
<th>Freight Rate</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>CR-101</td>

<td>Coal Shipment</td>

<td>Global Energy Ltd</td>

<td>Bulk</td>

<td>25,000 Tons</td>

<td>Newcastle</td>

<td>Shanghai</td>

<td>15 Aug 2026</td>

<td>$45 / Ton</td>

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

<td>CR-102</td>

<td>Iron Ore</td>

<td>Steel Corp</td>

<td>Bulk</td>

<td>30,000 Tons</td>

<td>Brazil</td>

<td>Rotterdam</td>

<td>20 Aug 2026</td>

<td>$50 / Ton</td>

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

</tbody>

                    </table>
      </div>
    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
                    

  