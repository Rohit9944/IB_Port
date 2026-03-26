
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Payment History</h1>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">
<thead class="table-light">
<tr>

<th>Payment ID</th>
<th>Shipment ID</th>
<th>Contract ID</th>
<th>Cargo Owner</th>
<th>Amount</th>
<th>Payment Method</th>
<th>Payment Date</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td>PAY-101</td>

<td>SHP-101</td>

<td>CON-101</td>

<td>Global Energy Ltd</td>

<td>$1,125,000</td>

<td>Bank Transfer</td>

<td>05 Sep 2026</td>

<td>
<span class="badge bg-success">Paid</span>
</td>

<td>

<a href="payment-view.php" class="btn btn-info btn-sm">
View
</a>

</td>

</tr>

<tr>

<td>PAY-102</td>

<td>SHP-102</td>

<td>CON-102</td>

<td>Steel Corp</td>

<td>$900,000</td>

<td>Wire Transfer</td>

<td>12 Sep 2026</td>

<td>
<span class="badge bg-warning">Pending</span>
</td>

<td>

<a href="payment-view.php" class="btn btn-info btn-sm">
View
</a>

</td>

</tr>

<tr>

<td>PAY-103</td>

<td>SHP-103</td>

<td>CON-103</td>

<td>Agro Traders</td>

<td>$420,000</td>

<td>Bank Transfer</td>

<td>15 Sep 2026</td>

<td>
<span class="badge bg-info">Processing</span>
</td>

<td>

<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>                    
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>

</td>

</tr>



</tbody>





                    </table>
      </div>
    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
                    

  