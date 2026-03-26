@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
  <div class="main-panel dashboard-page">
    <div class="content-wrapper">
      <div class="row dashboard-card-top d-flex align-items-center mb-4">
        <div class="text-start col-lg-6">
          <h1 class="mb-0 mainHeading font-weight-bolder">Contract #CT001</h1>
        </div>
        <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
           <span class="btn bg-success text-white">Active</span>
          <a href="{{ route('ship.contracts') }}" class="btn btn-primary">Download</a>
          <a href="#" class="btn btn-secondary">E-Sign</a>

          
        </div>

      </div>


       <!-- Parties + Vessel -->
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card p-3">
                <h4 class="fw-bold">Ship Owner</h4>
                <p>Oceanic Pvt Ltd<br>Email: owner@email.com</p>

                <h4 class="fw-bold mt-3">Cargo Owner</h4>
                <p>ABC Logistics<br>Email: cargo@email.com</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-3">
                <h4 class="fw-bold">Vessel Details</h4>
                <p>Name: MV Ocean Star<br>
                Type: Bulk Carrier<br>
                Capacity: 50,000 MT</p>
            </div>
        </div>
    </div>

    <!-- Cargo + Terms -->
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card p-3">
                <h4 class="fw-bold">Cargo Details</h4>
                <p>Type: Coal<br>
                Quantity: 30,000 MT<br>
                Route: Mumbai → Dubai</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-3 pt-0">
                <h4 class="fw-bold">Contract Terms</h4>
                <p>Freight: $25/MT<br>
                Total: $750,000<br>
                Laytime: 5 Days<br>
                Demurrage: $10,000/day</p>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class="card p-3 pt-0">
        <h4 class="fw-bold">Timeline</h4>
        <p>Start: 01 Mar 2026<br>
        End: 15 Mar 2026<br>
        ETA: 10 Mar</p>
    </div>

    <!-- Documents -->
    <div class="p-3 mt-3 d-flex align-items-center justify-content-center gap-3">
        <button class="btn btn-primary">Download Contract</button>
        <button class="btn btn-secondary">Upload Document</button>
       
    </div>




</div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
