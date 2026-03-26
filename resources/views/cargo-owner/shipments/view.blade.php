
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Shipment Details</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
        <a href="{{ route('cargo.shipments.edit') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i>Create RFQ</a>
        <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>       
      </div>
      
    </div>


   <div class="row g-3">

        <!-- Shipment Info -->
        <div class="col-md-6">
            <div class="card p-3 border">
                <h5 class="fw-bold">Shipment Info</h5>

                <p><strong>Cargo Type:</strong> Coal</p>
                <p><strong>Quantity:</strong> 50,000 MT</p>
                <p><strong>Route:</strong> Mumbai → Dubai</p>
                <p><strong>Loading Date:</strong> 25 March 2026</p>
                <p><strong>Status:</strong> 
                    <span class="badge bg-success badge-status">Active</span>
                </p>

                <p><strong>Special Requirements:</strong><br>
                Temperature controlled, fast loading</p>
            </div>
            <div class="card p-3 border mt-3">
                <h5 class="fw-bold">RFQ Details</h5>

                <p><strong>Total RFQs Sent:</strong> 5</p>
                <p><strong>Responses Received:</strong> 3</p>

                <div>
                  <button class="btn btn-outline-primary btn-sm w-auto">View RFQs</button>
                </div>
</div>
        </div>

        <!-- RFQ Info -->
        <div class="col-md-6">
            
                 <div class="card p-3 border">
                <h5 class="fw-bold">Shipment Timeline</h5>

                <div class="timeline mt-3">

                    <div class="timeline-item">
                        <strong>Shipment Created</strong><br>
                        <small class="text-muted">20 March 2026</small>
                    </div>

                    <div class="timeline-item">
                        <strong>RFQ Sent</strong><br>
                        <small class="text-muted">21 March 2026</small>
                    </div>

                    <div class="timeline-item">
                        <strong>Offers Received</strong><br>
                        <small class="text-muted">22 March 2026</small>
                    </div>

                    <div class="timeline-item">
                        <strong>In Transit</strong><br>
                        <small class="text-muted">Pending</small>
                    </div>

                </div>
            </div>
            </div>
        </div>

        <!-- Offers -->
        <div class="col-md-12 mt-4">
            <div class="card">
                <h5 class="fw-bold">Offers Received</h5>

               <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
                        <tr>
                            <th>Ship Owner</th>
                            <th>Vessel</th>
                            <th>Price</th>
                            <th>ETA</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>ABC Shipping</td>
                            <td>MV Ocean Star</td>
                            <td>$25/MT</td>
                            <td>5 Days</td>
                            <td>
                                <button class="btn btn-success btn-sm">Accept</button>
                                <button class="btn btn-outline-secondary btn-sm">Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Global Marine</td>
                            <td>MV Blue Wave</td>
                            <td>$28/MT</td>
                            <td>7 Days</td>
                            <td>
                                <button class="btn btn-success btn-sm">Accept</button>
                                <button class="btn btn-outline-secondary btn-sm">Details</button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="col-md-12">
           
        </div>

    </div>


  </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('cargo-owner.include.footer')
                    

  