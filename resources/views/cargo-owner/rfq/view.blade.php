
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
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
            <div class="card p-3 shadow-sm">
                <h4 class="fw-bold">Shipment Info</h4>

                <p><strong>Cargo:</strong> Coal</p>
                <p><strong>Quantity:</strong> 50,000 MT</p>
                <p><strong>Route:</strong> Mumbai → Dubai</p>
                <p><strong>Loading Date:</strong> 25 March 2026</p>
            </div>
        </div>

        <!-- RFQ Terms -->
        <div class="col-md-6">
            <div class="card p-3 shadow-sm">
                <h4 class="fw-bold">RFQ Terms</h4>

                <p><strong>Freight Terms:</strong> FOB</p>
                <p><strong>Laytime:</strong> 5 Days</p>
                <p><strong>Demurrage:</strong> $1000/day</p>
                <p><strong>Deadline:</strong> 25 March 2026</p>
            </div>
        </div>

        <!-- Offers Received -->
        <div class="col-md-12">
            <div class="card my-4">
                <h4 class="fw-bold">Offers Received</h4>

                <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
                        <tr>
                            <th>Ship Owner</th>
                            <th>Vessel</th>
                            <th>Price</th>
                            <th>ETA</th>
                            <th>Rating</th>
                            <th width="200" class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>ABC Shipping</td>
                            <td>MV Ocean Star</td>
                            <td>$25/MT</td>
                            <td>5 Days</td>
                            <td>⭐ 4.5</td>
                            <td>
                                <button class="btn btn-success btn-sm">Accept</button>
                                <button class="btn btn-outline-primary btn-sm">Negotiate</button>
                                <button class="btn btn-outline-secondary btn-sm">Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Global Marine</td>
                            <td>MV Blue Wave</td>
                            <td>$28/MT</td>
                            <td>7 Days</td>
                            <td>⭐ 4.2</td>
                            <td>
                                <button class="btn btn-success btn-sm">Accept</button>
                                <button class="btn btn-outline-primary btn-sm">Negotiate</button>
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
            <div class="card p-3 shadow-sm">
                <h4 class="fw-bold">RFQ Timeline</h4>

                <div class="timeline">

                    <div class="timeline-item">
                        <strong>RFQ Created</strong><br>
                        <small class="text-muted">20 March 2026</small>
                    </div>

                    <div class="timeline-item">
                        <strong>Sent to Ship Owners</strong><br>
                        <small class="text-muted">21 March 2026</small>
                    </div>

                    <div class="timeline-item">
                        <strong>Offers Received</strong><br>
                        <small class="text-muted">22 March 2026</small>
                    </div>

                    <div class="timeline-item">
                        <strong>Closing Soon</strong><br>
                        <small class="text-muted">Pending</small>
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
@include('cargo-owner.include.footer')
                    

  