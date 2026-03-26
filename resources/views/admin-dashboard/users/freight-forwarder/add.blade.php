
<?php include 'include/header.php'; ?>        

<div class="container-fluid page-body-wrapper">
<?php include 'include/sidebar.php'; ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Add / Edit Broker</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">
<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Broker Name</label>
<input type="text" class="form-control" placeholder="Enter broker name">
</div>

<div class="col-md-6">
<label class="form-label">Company Name</label>
<input type="text" class="form-control" placeholder="Broker company">
</div>

<div class="col-md-6">
<label class="form-label">Email</label>
<input type="email" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Phone</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Country</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">License Number</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Experience (Years)</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Status</label>
<select class="form-select">
<option>Active</option>
<option>Inactive</option>
</select>
</div>

<div class="col-md-12">
<label class="form-label">Office Address</label>
<textarea class="form-control"></textarea>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">
Save Broker
</button>

<a href="{{ route('admin.users.freight-forwarder') }}" class="btn btn-secondary">
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
  <?php include 'include/footer.php'; ?>
                    

  