
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Edit RFQ Response</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">
<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">RFQ ID</label>
<input type="text" class="form-control" value="RFQ-101" readonly>
</div>

<div class="col-md-6">
<label class="form-label">Cargo Owner</label>
<input type="text" class="form-control" value="Global Energy Ltd">
</div>

<div class="col-md-6">
<label class="form-label">Cargo</label>
<input type="text" class="form-control" value="Coal">
</div>

<div class="col-md-6">
<label class="form-label">Route</label>
<input type="text" class="form-control" value="Newcastle → Shanghai">
</div>

<div class="col-md-6">
<label class="form-label">Vessel</label>
<select class="form-select">
<option selected>MV Ocean Star</option>
<option>MV Atlantic Wind</option>
<option>MV Blue Marine</option>
</select>
</div>

<div class="col-md-6">
<label class="form-label">Freight Rate</label>
<input type="text" class="form-control" value="$45 / Ton">
</div>

<div class="col-md-6">
<label class="form-label">Departure Date</label>
<input type="date" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Arrival Date</label>
<input type="date" class="form-control">
</div>

<div class="col-md-12">
<label class="form-label">Notes</label>
<textarea class="form-control">
Cargo must be protected from moisture.
</textarea>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">
Update Quote
</button>

<a href="{{ route('ship.rfq-requests') }}" class="btn btn-secondary">
Cancel
</a>

</div>



</form>

    </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
                    

  