
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Admin Dashboard Reports</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="{{ route('admin.reports') }}" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Vessel</a>
      </div>
    </div>

     <div class="card mb-4">

        <div class="card-header">
            Report Filters
        </div>

        <div class="card-body bg-light">

            <div class="row g-3">

                <div class="col-md-3">
                    <label class="form-label">Report Type</label>
                    <select class="form-select">
                        <option>Shipment Report</option>
                        <option>Cargo Report</option>
                        <option>Revenue Report</option>
                        <option>Vessel Activity</option>
                        <option>Contract Report</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Start Date</label>
                    <input type="date" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">End Date</label>
                    <input type="date" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Port</label>
                    <select class="form-select">
                        <option>All Ports</option>
                        <option>Singapore</option>
                        <option>Dubai</option>
                        <option>Rotterdam</option>
                        <option>Shanghai</option>
                    </select>
                </div>

            </div>

            <div class="mt-3">

                <button class="btn btn-primary">
                    Generate Report
                </button>

                <button class="btn btn-success">
                    Export Excel
                </button>

                <button class="btn btn-danger">
                    Export PDF
                </button>

            </div>

        </div>

    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
        <div class="card-header mb-3">
            <h4>Report Results</h4>
        </div>
        
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
 <tr>

                            <th>Report ID</th>
                            <th>Type</th>
                            <th>Port</th>
                            <th>Total Shipments</th>
                            <th>Cargo Volume</th>
                            <th>Revenue</th>
                            <th>Date Generated</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>REP-001</td>
                            <td>Shipment Report</td>
                            <td>Singapore</td>
                            <td>120</td>
                            <td>18K Tons</td>
                            <td>$820,000</td>
                            <td>10 Aug 2026</td>

                        </tr>

                        <tr>

                            <td>REP-002</td>
                            <td>Revenue Report</td>
                            <td>Dubai</td>
                            <td>85</td>
                            <td>12K Tons</td>
                            <td>$610,000</td>
                            <td>12 Aug 2026</td>

                        </tr>

                        <tr>

                            <td>REP-003</td>
                            <td>Cargo Report</td>
                            <td>Rotterdam</td>
                            <td>98</td>
                            <td>15K Tons</td>
                            <td>$720,000</td>
                            <td>15 Aug 2026</td>

                        </tr>
</tbody>


                    </table>
      </div>
    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
                    

  