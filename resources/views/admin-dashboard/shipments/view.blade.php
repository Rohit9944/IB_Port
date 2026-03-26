@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
  <div class="main-panel dashboard-page">
    <div class="content-wrapper">
      <div class="row dashboard-card-top d-flex align-items-center mb-4">
        <div class="text-start col-lg-6">
          <h1 class="mb-0 mainHeading font-weight-bolder">Shipment Details</h1>
          
        </div>
        <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
          <a href="{{ route('admin.shipments.edit') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
          <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
        </div>

      </div>


      <div class="row">

        <div class="card">

          <div class="card-body">
    <div class="row">

        <div class="col-md-6">

            <p><strong>Shipment ID:</strong> SHP-001</p>

            <p><strong>Cargo Name:</strong> Coal Shipment</p>

            <p><strong>Cargo Owner:</strong> Global Energy Ltd</p>

            <p><strong>Vessel:</strong> MV Atlantic Star</p>

            <p><strong>Captain:</strong> John Carter</p>

        </div>

        <div class="col-md-6">

            <p><strong>Origin Port:</strong> Newcastle</p>

            <p><strong>Destination Port:</strong> Shanghai</p>

            <p><strong>Departure Date:</strong> 12 Aug 2026</p>

            <p><strong>ETA:</strong> 25 Aug 2026</p>

            <p><strong>Status:</strong> In Transit</p>

        </div>

        <div class="col-md-12 mt-3">

            <p><strong>Shipment Notes:</strong></p>

            <p>Shipment currently en route to destination port.</p>

        </div>

    </div>
</div>



        </div>

      </div>




</div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
