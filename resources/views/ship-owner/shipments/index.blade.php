
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Shipments</h1>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">
<thead class="table-light">
<tr>

<th>Shipment ID</th>
<th>Contract ID</th>
<th>Vessel</th>
<th>Cargo</th>
<th>Route</th>
<th>Departure Date</th>
<th>Arrival Date</th>
<th>Status</th>
<th>Tracking</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>SHP-101</td>

<td>CON-101</td>

<td>MV Ocean Star</td>

<td>Coal</td>

<td>Newcastle → Shanghai</td>

<td>18 Aug 2026</td>

<td>30 Aug 2026</td>

<td>
<span class="badge bg-warning">In Transit</span>
</td>

<td>
<span class="badge bg-info">Tracking Active</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>

</td>

</tr>

<tr>

<td>SHP-102</td>

<td>CON-102</td>

<td>MV Atlantic Wind</td>

<td>Iron Ore</td>

<td>Brazil → Rotterdam</td>

<td>10 Aug 2026</td>

<td>22 Aug 2026</td>

<td>
<span class="badge bg-success">Delivered</span>
</td>

<td>
<span class="badge bg-secondary">Closed</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>

</td>

</tr>

<tr>

<td>SHP-103</td>

<td>CON-103</td>

<td>MV Blue Marine</td>

<td>Wheat</td>

<td>Mumbai → Dubai</td>

<td>20 Aug 2026</td>

<td>25 Aug 2026</td>

<td>
<span class="badge bg-primary">Loading</span>
</td>

<td>
<span class="badge bg-info">Tracking Active</span>
</td>

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
@include('ship-owner.include.footer')
                    

  