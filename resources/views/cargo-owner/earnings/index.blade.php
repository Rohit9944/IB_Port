@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')

    <div class="main-panel dashboard-page">
        <div class="content-wrapper">
            <div class="row dashboard-card-top mb-5">
                <div class="ms-3">
                    <h1 class="mb-0 mainHeading font-weight-bolder">Earnings / Revenue</h1>
                    <p class="mb-4">
                        Check the sales, value and bounce rate.
                    </p>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Total Revenue</p>
                                    <h4 class="mb-0">$2,450</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">This Month</p>
                                    <h4 class="mb-0">$150,000</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">Pending Payments</p>
                                    <h4 class="mb-0">$50,000</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-eye"></i>
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

                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded border">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash cardsTitle">Monthly Revenue</h4>
                                                        
                                                    </div>
                                                </div>
                                               <canvas id="earningsChart"></canvas>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
    <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded border">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash cardsTitle">Transactions</h4>
                        
                    </div>

                </div>
                <div class="table-responsive  mt-1">
                    <table class="table table-bordered align-middle">
                        <thead>
<tr>
<th>Date</th>
<th>Invoice</th>
<th>Amount</th>
<th width="150">Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>20 Mar 2026</td>
<td>#INV001</td>
<td>$25,000</td>
<td><span class="badge bg-success">Paid</span></td>
</tr>

<tr>
<td>18 Mar 2026</td>
<td>#INV002</td>
<td>$15,000</td>
<td><span class="badge bg-warning">Pending</span></td>
</tr>

</tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

@include('cargo-owner.include.footer')

<script>
new Chart(document.getElementById('earningsChart'), {
type: 'line',
data: {
labels: ['Jan','Feb','Mar','Apr','May','Jun'],
datasets: [{
label: 'Revenue',
data: [10000,20000,15000,30000,40000,60000],
tension: 0.4
}]
}
});
</script>