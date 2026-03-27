
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Contract Details</h1>
      </div>
      
      
    </div>
  <div class="row g-5">

        <!-- Party Info -->
        <div class="col-md-6">
            <div class="card p-3 border">
                <h4 class="fw-bold">Party Information</h4>
                <p><strong>Cargo Owner:</strong> You</p>
                <p><strong>Ship Owner:</strong> ABC Shipping</p>
            </div>
        </div>

        <!-- Shipment Info -->
        <div class="col-md-6">
            <div class="card p-3 border">
                <h4 class="fw-bold">Shipment Info</h4>
                <p><strong>Vessel:</strong> MV Ocean Star</p>
                <p><strong>Route:</strong> Mumbai → Dubai</p>
                <p><strong>Quantity:</strong> 50,000 MT</p>
            </div>
        </div>

        <!-- Terms -->
        <div class="col-md-6">
            <div class="card p-3 border">
                <h4 class="fw-bold">Contract Terms</h4>
                <p><strong>Freight:</strong> $25/MT</p>
                <p><strong>Laytime:</strong> 5 Days</p>
                <p><strong>Demurrage:</strong> $1000/day</p>
            </div>
        </div>

        <!-- Documents -->
        <div class="col-md-6">
            <div class="card p-3 border">
                <h4 class="fw-bold">Documents</h4>
                <ul>
                    <li><a href="#">Contract.pdf</a></li>
                    <li><a href="#">Terms.pdf</a></li>
                </ul>
            </div>
        </div>

    </div>



    


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('cargo-owner.include.footer')
                    

  