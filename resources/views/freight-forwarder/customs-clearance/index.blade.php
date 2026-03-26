
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Customs Clearance Status</h1>
      </div>


    <!-- Filters -->
<div class="p-3 my-3">
<div class="d-flex gap-2">
<button class="btn btn-primary btn-sm">All</button>
<button class="btn btn-outline-warning btn-sm">Pending</button>
<button class="btn btn-outline-success btn-sm">Approved</button>
<button class="btn btn-outline-danger btn-sm">Rejected</button>
</div>
</div>
  <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
                            <tr>
<th>Shipment ID</th>
<th>Cargo</th>
<th>Port</th>
<th>Status</th>
<th>Clearance Date</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<tr>
<td>#SHP001</td>
<td>Coal</td>
<td>Dubai Port</td>
<td><span class="badge bg-warning">Pending</span></td>
<td>-</td>
<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>
</tr>

<tr>
<td>#SHP002</td>
<td>Grain</td>
<td>Hamburg Port</td>
<td><span class="badge bg-success">Approved</span></td>
<td>22 Mar 2026</td>
<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>
</tr>

<tr>
<td>#SHP003</td>
<td>Oil</td>
<td>Singapore Port</td>
<td><span class="badge bg-danger">Rejected</span></td>
<td>-</td>
<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
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
@include('freight-forwarder.include.footer')
                    

  