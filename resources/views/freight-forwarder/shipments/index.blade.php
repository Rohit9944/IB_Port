
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Shipment List</h1>
      </div>
    
    </div>


    <div class="row flex-grow">
      <div class="card mb-3">
<div class="d-flex gap-2">
<button class="btn btn-primary btn-sm">All</button>
<button class="btn btn-outline-primary btn-sm">In Transit</button>
<button class="btn btn-outline-success btn-sm">Delivered</button>
<button class="btn btn-outline-danger btn-sm">Delayed</button>
</div>
</div>
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
                          <tr>
<th>ID</th>
<th>Cargo</th>
<th>Route</th>
<th>Status</th>
<th>Vessel</th>
<th>ETA</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<tr>
<td>#SHP001</td>
<td>Coal</td>
<td>Mumbai → Dubai</td>
<td><span class="badge bg-primary">In Transit</span></td>
<td>MV Ocean Star</td>
<td>3 Days</td>
<td>
<button class="btn btn-sm btn-info">View</button>
<button class="btn btn-sm btn-warning">Update</button>
</td>
</tr>

<tr>
<td>#SHP002</td>
<td>Grain</td>
<td>Shanghai → Hamburg</td>
<td><span class="badge bg-danger">Delayed</span></td>
<td>MV Blue Wave</td>
<td>5 Days</td>
<td>
<button class="btn btn-sm btn-info">View</button>
<button class="btn btn-sm btn-warning">Update</button>
</td>
</tr>

<tr>
<td>#SHP003</td>
<td>Oil</td>
<td>Dubai → Singapore</td>
<td><span class="badge bg-success">Delivered</span></td>
<td>MV Sea King</td>
<td>-</td>
<td>
<button class="btn btn-sm btn-info">View</button>
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
                    

  