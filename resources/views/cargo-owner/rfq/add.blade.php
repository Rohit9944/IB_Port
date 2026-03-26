
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Create RFQ</h1>
      </div>
      
    </div>


   <div class="row">
   <div class="card border p-3">
     <div class="row">
            <div class="col-md-4"><strong>Cargo:</strong> Coal</div>
            <div class="col-md-4"><strong>Quantity:</strong> 50,000 MT</div>
            <div class="col-md-4"><strong>Route:</strong> Mumbai → Dubai</div>
        </div>
   </div>
    

  <div class="card mt-5">
    <div class="card-body p-0">

     <form action="#">
 <div class="row gy-3 gx-5">

                <!-- Freight Terms -->
                <div class="col-md-6">
                    <label class="form-label">Freight Terms</label>
                    <select class="form-select">
                        <option>Select</option>
                        <option>FOB</option>
                        <option>CIF</option>
                        <option>EXW</option>
                    </select>
                </div>

                <!-- Laytime -->
                <div class="col-md-6">
                    <label class="form-label">Laytime (Days)</label>
                    <input type="number" class="form-control" placeholder="Enter laytime">
                </div>

                <!-- Demurrage -->
                <div class="col-md-6">
                    <label class="form-label">Demurrage ($/Day)</label>
                    <input type="number" class="form-control" placeholder="Enter demurrage">
                </div>

                <!-- Deadline -->
                <div class="col-md-6">
                    <label class="form-label">RFQ Deadline</label>
                    <input type="date" class="form-control">
                </div>

                <!-- Additional Notes -->
                <div class="col-md-12">
                    <label class="form-label">Additional Notes</label>
                    <textarea class="form-control" rows="3" placeholder="Any special instructions..."></textarea>
                </div>

            </div>

            <!-- CTA -->
            <div class="mt-4 d-flex gap-2">
                <button type="button" class="btn btn-secondary">Save Draft</button>
                <button type="submit" class="btn btn-primary">Send RFQ</button>
            </div>

</form>

    </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('cargo-owner.include.footer')
                    

  