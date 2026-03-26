
<?php include '../include/header.php'; ?>        

<div class="container-fluid page-body-wrapper">
<?php include '../include/sidebar.php'; ?>
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Add / Edit Cargo Owner</h1>
        
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

        <div class="col-md-4">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
        </div>

        <div class="col-md-4">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" placeholder="Enter phone number">
        </div>

        <div class="col-md-4">
            <label class="form-label">Country</label>
            <input type="text" class="form-control" placeholder="Enter country">
        </div>

        <div class="col-md-12">
            <label class="form-label">Company Address</label>
            <input type="text" class="form-control" placeholder="Enter address">
        </div>

        <div class="col-md-6">
            <label class="form-label">Company Website</label>
            <input type="text" class="form-control" placeholder="https://example.com">
        </div>

        <div class="col-md-6">
            <label class="form-label">Registration Number</label>
            <input type="text" class="form-control" placeholder="Company registration number">
        </div>

        <div class="col-md-6">
            <label class="form-label">Status</label>
            <select class="form-select">
                <option>Active</option>
                <option>Inactive</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Upload Documents</label>
            <input type="file" class="form-control">
        </div>

        <div class="col-md-12">
            <label class="form-label">Notes</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>

    </div>

    <div class="mt-4">

        <button class="btn btn-primary">
            Save
        </button>

        <button class="btn btn-secondary">
            Cancel
        </button>

    </div>

</form>

    </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
  <?php include '../include/footer.php'; ?>
                    

  