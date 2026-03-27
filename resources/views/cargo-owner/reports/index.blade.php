
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Analytics & Reports</h1>
      </div>
    </div>


    <div class="row dashboard-card-top mb-5">
                
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Shipping Cost</p>
                                    <h4 class="mb-0">$850</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Route Performance</p>
                                    <h4 class="mb-0">18 Routes</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-wrench-outline"></i>
                                </div>
                            </div>
                        </div>

                      
                    </div>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Market Trends</p>
                                    <h4 class="mb-0">Rising</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-eye"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Avg Freight Rate</p>
                                    <h4 class="mb-0">$28/MT</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-sale"></i>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>

            </div>

    


    



    
    

    <div class="row">
        <div class="col-md-8">
             <div class="card border p-3 mb-4">
        <h5>Revenue Report</h5>
        <canvas id="revenueChart"></canvas>
    </div>

     <div class="card border p-3">
        <h5>Market Trends (Freight Rate)</h5>
        <canvas id="marketChart"></canvas>
    </div>

        </div>
        <div class="col-md-4">
             <div class="col-md-12">
            <div class="card p-3 border">
                <h5>Shipment Volume</h5>
                <canvas id="shipmentChart"></canvas>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card p-3 border">
                <h5>Top Routes</h5>
                <canvas id="routesChart"></canvas>
            </div>
        </div>
            
        </div>
    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->
</div>
@include('cargo-owner.include.footer')

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script>

// Revenue Chart
new Chart(document.getElementById('revenueChart'), {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
        datasets: [{
            label: 'Revenue',
            data: [20000, 40000, 35000, 60000, 80000],
            fill: true,
            tension: 0.4
        }]
    }
});

// Shipment Chart
new Chart(document.getElementById('shipmentChart'), {
    type: 'bar',
    data: {
        labels: ['Bulk', 'Liquid', 'Container'],
        datasets: [{
            label: 'Shipments',
            data: [120, 80, 100]
        }]
    }
});

// Routes Chart
new Chart(document.getElementById('routesChart'), {
    type: 'pie',
    data: {
        labels: ['Mumbai-Dubai', 'Singapore-China', 'US-Europe'],
        datasets: [{
            data: [40, 30, 30]
        }]
    }
});

// Market Trends Chart
new Chart(document.getElementById('marketChart'), {
    type: 'line',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Freight Rate',
            data: [25, 28, 26, 30],
            tension: 0.4
        }]
    }
});

</script>
                    

  