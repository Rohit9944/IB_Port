
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Freight Calculator</h1>
      </div>
      
    </div>


    <div class="row flex-grow">
        <div class="card p-4 shadow-sm mb-4">
<form class="row g-3">
<div class="col-md-4">
<label>Loading Port</label>
<input type="text" class="form-control">
</div>

<div class="col-md-4">
<label>Discharge Port</label>
<input type="text" class="form-control">
</div>

<div class="col-md-4">
<label>Cargo Quantity (MT)</label>
<input type="number" class="form-control">
</div>

<div class="col-md-12">
<button class="btn btn-primary">Calculate</button>
</div>
</form>
</div>
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
 <tr>
<th>Vessel</th>
<th>Price</th>
<th>ETA</th>
<th width="100">Best</th>
</tr>
<tbody>
    <tr>
<td>MV Ocean Star</td>
<td>$25/MT</td>
<td>5 Days</td>
<td><span class="badge bg-success">Best Cost</span></td>
</tr>

<tr>
<td>MV Blue Wave</td>
<td>$28/MT</td>
<td>3 Days</td>
<td><span class="badge bg-info">Fastest</span></td>
</tr>

</tbody>



                    </table>
      </div>
    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
  <?php include '../include/footer.php'; ?>
                    

  