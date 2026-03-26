
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">AI Insights</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="{{ route('admin.ai-insights') }}" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Vessel</a>
      </div>
    </div>


     <div class="row g-4">

        <!-- Delay Prediction -->

        <div class="col-md-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h4>Shipment Delay Prediction</h4>

                    <p class="text-muted">
                        AI detected possible delay on route
                    </p>

                    <h4 class="py-2">Shanghai → Hamburg</h4>

                    <span class="badge bg-danger">
                        High Risk
                    </span>

                </div>

            </div>

        </div>


        <!-- Best Trade Route -->

        <div class="col-md-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h4>Best Performing Route</h4>

                    <p class="text-muted">
                        Based on cargo volume & revenue
                    </p>

                    <h4 class="py-2">Singapore → Rotterdam</h4>

                    <span class="badge bg-success">
                        Top Route
                    </span>

                </div>

            </div>

        </div>


        <!-- Cargo Demand -->

        <div class="col-md-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h4>Cargo Demand Trend</h4>

                    <p class="text-muted">
                        High demand detected
                    </p>

                    <h4 class="py-2">Iron Ore</h4>

                    <span class="badge bg-warning">
                        Increasing
                    </span>

                </div>

            </div>

        </div>

    </div>


    


    <div class="row flex-grow mt-5">
      <div class="table-responsive  mt-1">
        <div class="card-header mb-3">
            <h4>AI Recommendations</h4>
        </div>
        
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
   <tr>

                            <th>Insight ID</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Priority</th>
                            <th>Date</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>AI-001</td>
                            <td>Route Optimization</td>
                            <td>Suggested alternate route for faster delivery</td>
                            <td>
                                <span class="badge bg-warning">
                                    Medium
                                </span>
                            </td>
                            <td>12 Aug 2026</td>

                        </tr>

                        <tr>

                            <td>AI-002</td>
                            <td>Delay Prediction</td>
                            <td>Possible delay due to port congestion</td>
                            <td>
                                <span class="badge bg-danger">
                                    High
                                </span>
                            </td>
                            <td>13 Aug 2026</td>

                        </tr>

                        <tr>

                            <td>AI-003</td>
                            <td>Cargo Demand</td>
                            <td>Increase vessels for Iron Ore shipment</td>
                            <td>
                                <span class="badge bg-success">
                                    Low
                                </span>
                            </td>
                            <td>14 Aug 2026</td>

                        </tr>
</tbody>


                    </table>
      </div>
       <div class="card mt-4">

        <div class="card-header">
            Cargo Demand Forecast
        </div>

        <div class="card-body">

            <div id="forecastChart"></div>

        </div>

    </div>

    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
                    

  <script>

var options = {

chart:{
type:'line',
height:300
},

series:[{
name:'Cargo Demand',
data:[30,40,35,50,49,60,70]
}],

xaxis:{
categories:['Jan','Feb','Mar','Apr','May','Jun','Jul']
}

};

var chart = new ApexCharts(
document.querySelector("#forecastChart"),
options
);

chart.render();

</script>