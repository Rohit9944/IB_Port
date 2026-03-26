@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
  <div class="main-panel dashboard-page">
    <div class="content-wrapper">
      <div class="row dashboard-card-top d-flex align-items-center mb-4">
        <div class="text-start col-lg-6">
          <h1 class="mb-0 mainHeading font-weight-bolder">Port Operation Details</h1>
          
        </div>
        <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
          <a href="add.html" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
          <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
        </div>

      </div>


      <div class="row">

        <div class="card">

        <div class="card-body">

<div class="row">

<div class="col-md-6">

<p><strong>Operation ID:</strong> OP-001</p>

<p><strong>Port Name:</strong> Singapore Port</p>

<p><strong>Vessel:</strong> MV Ocean Star</p>

<p><strong>Cargo:</strong> Coal</p>

<p><strong>Operation Type:</strong> Loading</p>

</div>

<div class="col-md-6">

<p><strong>Berth:</strong> B12</p>

<p><strong>Arrival Time:</strong> 10 Aug 2026</p>

<p><strong>Departure Time:</strong> 12 Aug 2026</p>

<p><strong>Status:</strong> In Progress</p>

</div>

<div class="col-md-12 mt-3">

<p><strong>Notes:</strong></p>

<p>Vessel currently loading cargo at berth B12.</p>

</div>

</div>

</div>

</div>



        </div>

      </div>




</div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
