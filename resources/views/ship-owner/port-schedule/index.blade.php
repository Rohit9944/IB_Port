
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Port Schedule</h1>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">
<thead class="table-light">
<tr>

<th>Schedule ID</th>
<th>Vessel</th>
<th>Port</th>
<th>Berth</th>
<th>Arrival Time</th>
<th>Departure Time</th>
<th>Cargo Operation</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>PS-101</td>

<td>MV Ocean Star</td>

<td>Singapore Port</td>

<td>B12</td>

<td>12 Oct 2026 - 08:00</td>

<td>13 Oct 2026 - 16:00</td>

<td>Loading</td>

<td>
<span class="badge bg-info">Scheduled</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>

</tr>

<tr>

<td>PS-102</td>

<td>MV Atlantic Wind</td>

<td>Rotterdam Port</td>

<td>C5</td>

<td>20 Oct 2026 - 06:00</td>

<td>21 Oct 2026 - 18:00</td>

<td>Unloading</td>

<td>
<span class="badge bg-success">Completed</span>
</td>

<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
</td>

</tr>

<tr>

<td>PS-103</td>

<td>MV Blue Marine</td>

<td>Mumbai Port</td>

<td>A3</td>

<td>28 Oct 2026 - 10:00</td>

<td>29 Oct 2026 - 14:00</td>

<td>Loading</td>

<td>
<span class="badge bg-warning">In Progress</span>
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
                    

  