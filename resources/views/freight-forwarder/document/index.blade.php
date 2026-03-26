
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Documents</h1>
      </div>


      <!-- Filters -->
<div class="p-3 mb-3">
<select class="form-select w-auto">
<option>All Documents</option>
<option>Bill of Lading</option>
<option>Invoice</option>
<option>Packing List</option>
<option>Customs Docs</option>
</select>
</div>
  <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
<tr>
<th>Document Name</th>
<th>Type</th>
<th>Shipment ID</th>
<th>Date</th>
<th width="100">Action</th>
</tr>
</thead>

<tbody>

<tr>
<td>BOL_SHP001.pdf</td>
<td><span class="badge bg-primary">BOL</span></td>
<td>#SHP001</td>
<td>20 Mar 2026</td>
<td>
<button class="btn btn-sm btn-success">Download</button>
</td>
</tr>

<tr>
<td>Invoice_SHP001.pdf</td>
<td><span class="badge bg-success">Invoice</span></td>
<td>#SHP001</td>
<td>21 Mar 2026</td>
<td>
<button class="btn btn-sm btn-success">Download</button>
</td>
</tr>

<tr>
<td>PackingList_SHP002.pdf</td>
<td><span class="badge bg-warning">Packing</span></td>
<td>#SHP002</td>
<td>22 Mar 2026</td>
<td>
<button class="btn btn-sm btn-success">Download</button>
</td>
</tr>

<tr>
<td>Customs_SHP002.pdf</td>
<td><span class="badge bg-danger">Customs</span></td>
<td>#SHP002</td>
<td>23 Mar 2026</td>
<td>
<button class="btn btn-sm btn-success">Download</button>
</td>
</tr>

</tbody>

</table>

</div>

    </div>



    
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('freight-forwarder.include.footer')
                    

  