
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Offers Sent</h1>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">
<thead class="table-light">
<tr>

<th>Offer ID</th>
<th>Cargo Owner</th>
<th>Cargo</th>
<th>Vessel</th>
<th>Route</th>
<th>Offered Price</th>
<th>Offer Date</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>OFF-101</td>

<td>Global Energy Ltd</td>

<td>Coal</td>

<td>MV Ocean Star</td>

<td>Newcastle → Shanghai</td>

<td>$45 / Ton</td>

<td>10 Aug 2026</td>

<td>
<span class="badge bg-warning">Pending</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>


</td>

</tr>

<tr>

<td>OFF-102</td>

<td>Steel Corp</td>

<td>Iron Ore</td>

<td>MV Atlantic Wind</td>

<td>Brazil → Rotterdam</td>

<td>$50 / Ton</td>

<td>12 Aug 2026</td>

<td>
<span class="badge bg-success">Accepted</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>

</tr>

<tr>

<td>OFF-103</td>

<td>Agro Traders</td>

<td>Wheat</td>

<td>MV Blue Marine</td>

<td>Mumbai → Dubai</td>

<td>$38 / Ton</td>

<td>15 Aug 2026</td>

<td>
<span class="badge bg-danger">Rejected</span>
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
                    

  