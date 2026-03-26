
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">RFQ Details</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
        <span class="btn badge bg-info status-badge p-2">Open</span>   
      </div>
      
    </div>


     <div class="row g-3">

        <!-- Shipment Info -->
        <div class="col-md-6">
            <div class="card p-3">
                <h4 class="fw-bold">Shipment Info</h4>
                <p><strong>ID:</strong> #SHP101</p>
                <p><strong>Cargo:</strong> Coal</p>
                <p><strong>Route:</strong> Mumbai → Dubai</p>
                <p><strong>Quantity:</strong> 50,000 MT</p>
            </div>
        </div>

        <!-- Terms -->
        <div class="col-md-6">
            <div class="card p-3">
                <h4 class="fw-bold">Terms</h4>
                <p><strong>Freight Terms:</strong> FOB</p>
                <p><strong>Laytime:</strong> 5 Days</p>
                <p><strong>Demurrage:</strong> $2000/day</p>
            </div>
        </div>

        <!-- Deadline -->
        <div class="col-md-6">
            <div class="card p-3">
                <h4 class="fw-bold">Deadline</h4>
                <p>25 March 2026</p>
                <div>
                    <span class="badge bg-success w-auto">Open</span>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="col-12">
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-primary">Send to Ship Owners</button>
                <button class="btn btn-warning">Edit RFQ</button>
                <button class="btn btn-danger">Close RFQ</button>
            </div>
        </div>

    </div>




    


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('freight-forwarder.include.footer')
                    

  