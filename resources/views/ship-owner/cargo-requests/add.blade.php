
@include('ship-owner.include.header')
<div class="container-fluid page-body-wrapper">
  @include('ship-owner.include.sidebar')
<div class="container-fluid page-body-wrapper">
<?php include 'include/sidebar.php'; ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Add / Edit Ship Owner</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">

<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Company Name</label>
<input type="text" class="form-control" placeholder="Enter company name">
</div>

<div class="col-md-6">
<label class="form-label">Contact Person</label>
<input type="text" class="form-control" placeholder="Enter contact person">
</div>

<div class="col-md-6">
<label class="form-label">Email</label>
<input type="email" class="form-control" placeholder="Enter email">
</div>

<div class="col-md-6">
<label class="form-label">Phone</label>
<input type="text" class="form-control" placeholder="Enter phone number">
</div>

<div class="col-md-6">
<label class="form-label">Country</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Company Website</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Total Vessels</label>
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
<label class="form-label">Company Address</label>
<textarea class="form-control"></textarea>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">
Save Ship Owner
</button>

<a href="ship-owners.php" class="btn btn-secondary">
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
                    

  