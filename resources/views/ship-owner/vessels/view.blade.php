
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Vessel Details</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
        <a href="{{ route('ship.vessels.edit') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
        <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>       
      </div>
      
    </div>


   <div class="row">    

  <div class="card">

  <div class="card-body">

    <div class="row">

        <div class="col-md-6">

            <p><strong>Vessel Name:</strong> MV Ocean Star</p>

            <p><strong>IMO Number:</strong> 9876543</p>

            <p><strong>Type:</strong> Bulk Carrier</p>

            <p><strong>Capacity:</strong> 50,000 Tons</p>

        </div>

        <div class="col-md-6">

            <p><strong>Flag Country:</strong> Panama</p>

            <p><strong>Build Year:</strong> 2015</p>

            <p><strong>Current Location:</strong> Dubai Port</p>

            <p><strong>Status:</strong> Active</p>

        </div>

        <div class="col-md-12 mt-3">

            <p><strong>Notes:</strong></p>

            <p>Currently operating on Dubai to Mumbai route.</p>

        </div>

    </div>

</div>
</div>

</div>

</div>




</div>



    


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
                    

  
  
