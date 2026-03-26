@include('freight-forwarder.include.header')
<div class="container-fluid page-body-wrapper">
    @include('freight-forwarder.include.sidebar')

    <div class="main-panel dashboard-page">
        <div class="content-wrapper">
            <div class="row dashboard-card-top mb-5">
                <div class="ms-3 mb-5">
                    <h1 class="mb-0 mainHeading font-weight-bolder">Freight Forwarder Dashboard</h1>
                   
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Active</p>
                                    <h4 class="mb-0">1,240</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">Pending</p>
                                    <h4 class="mb-0">230</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">Completed</p>
                                    <h4 class="mb-0">100</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">Total Cost</p>
                                    <h4 class="mb-0">$1.2M</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-sale"></i>
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
                                    <p class="text-sm mb-0 text-capitalize">Delayed</p>
                                    <h4 class="mb-0">$27/MT</h4>
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
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <div class="row mb-3">
                                    <!-- Card 1 -->
                                    <div class="col-lg-6">
                                        <div class="dashboard-card border shadow-none">
                                            <div class="title cardsTitle">Monthly Shipment Volume</div>                                            
                                            <canvas id="shipmentChart"></canvas>                                            
                                            </div>
                                        </div>


                                    <!-- Card 2 -->
                                   
                                    <div class="col-lg-3">
                                        <div class="dashboard-card border shadow-none">
                                            <div class="title cardsTitle">Delivery Performance</div>
                                            <canvas id="performanceChart"></canvas>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="dashboard-card border shadow-none">
                                            <div class="title cardsTitle">Cost Breakdown</div>
                                            <canvas id="costChart"></canvas>
                                        </div>                                    
                                    </div>

                                    </div>
                                </div>
                               
                            </div>

                        </div>
                    </div>
                </div>
            

    <!-- Ongoing Shipments -->
<div class="card p-3 mb-4">
<h5>Ongoing Shipments</h5>
<div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">
<tr>
<th>ID</th>
<th>Route</th>
<th>Status</th>
<th>ETA</th>
</tr>
</thead>

<tbody>

<tr>
<td>#SHP001</td>
<td>Mumbai → Dubai</td>
<td><span class="badge bg-primary">In Transit</span></td>
<td>3 Days</td>
</tr>

<tr>
<td>#SHP002</td>
<td>Shanghai → Hamburg</td>
<td><span class="badge bg-warning">Delayed</span></td>
<td>5 Days</td>
</tr>

</tbody>

</table>

</div>

</div>
            <!-- Alerts + Notifications -->
<div class="row g-3">

<div class="col-md-6">
<div class="card p-3 shadow-sm">
<h5>Alerts</h5>

<ul class="list-group">
<li class="list-group-item text-danger">Shipment #SHP002 Delayed</li>
<li class="list-group-item">Customs clearance pending</li>
</ul>

</div>
</div>

<div class="col-md-6">
<div class="card p-3 shadow-sm">
<h5>Notifications</h5>

<ul class="list-group">
<li class="list-group-item">New shipment assigned</li>
<li class="list-group-item">Document uploaded</li>
</ul>

</div>
</div>

</div>

        </div>
    </div>
</div>
</div>



<script>

// Shipment Volume Chart
new Chart(document.getElementById('shipmentChart'), {
type: 'bar',
data: {
labels: ['Jan','Feb','Mar','Apr','May','Jun'],
datasets: [{
label: 'Shipments',
data: [10,20,15,30,25,40]
}]
}
});

// Performance Chart
new Chart(document.getElementById('performanceChart'), {
type: 'doughnut',
data: {
labels: ['On Time','Delayed'],
datasets: [{
data: [85,15]
}]
}
});

// Cost Breakdown
new Chart(document.getElementById('costChart'), {
type: 'pie',
data: {
labels: ['Freight','Customs','Handling'],
datasets: [{
data: [60,25,15]
}]
}
});

</script>
@include('freight-forwarder.include.footer')
