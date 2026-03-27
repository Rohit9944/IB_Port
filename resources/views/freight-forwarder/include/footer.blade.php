   <!-- plugins:js -->
    <script src="http://localhost:8080/IB-Port/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="http://localhost:8080/IB-Port/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="http://localhost:8080/IB-Port/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="http://localhost:8080/IB-Port/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="http://localhost:8080/IB-Port/assets/js/off-canvas.js"></script>
    <script src="http://localhost:8080/IB-Port/assets/js/template.js"></script>
    <script src="http://localhost:8080/IB-Port/assets/js/settings.js"></script>
    <script src="http://localhost:8080/IB-Port/assets/js/hoverable-collapse.js"></script>
    <script src="http://localhost:8080/IB-Port/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="http://localhost:8080/IB-Port/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="http://localhost:8080/IB-Port/assets/js/dashboard.js"></script>
    

    <script>
  /*=========================================
Multiple Line Chart Dashboard
===========================================*/
var line = document.getElementById("line").getContext("2d");

var gradientFill = line.createLinearGradient(0, 120, 0, 0);
gradientFill.addColorStop(0, "rgba(41,204,151,0.10196)");
gradientFill.addColorStop(1, "rgba(41,204,151,0.30196)");

var lChart = new Chart(line, {
    type: 'line',
    data: {
      labels:["Fri","Sat", "Sun", "Mon", "Tue", "Wed", "Thu"],
      datasets: [{
      label: "My First dataset",
      lineTension: 0,
      pointRadius: 4,
      pointBackgroundColor: 'rgba(255,255,255,1)',
      pointBorderWidth: 2,
      fill: true,
      backgroundColor: gradientFill,
      borderColor: '#29cc97',
      borderWidth: 2,
      data: [0,4, 3, 5.5, 3, 4.7, 1]
    }]
    },
    options: {
      legend: {
         display: false
       },
      scales: {
       xAxes: [{
         gridLines: {
           drawBorder: false,
           display:false
         },
         ticks: {
           display:false, // hide main x-axis line
           beginAtZero:true
         },
         barPercentage: 1.8,
         categoryPercentage: 0.2
       }],
       yAxes: [{
         gridLines: {
           drawBorder: false, // hide main y-axis line
           display:false
         },
         ticks: {
          display:false,
          beginAtZero:true
         },
       }]
      },
      tooltips: {
       enabled: false
      }
   }
});


</script>
<script>
    $(function() {

  // Set up pie chart and add data.
  var config = {
    type: 'pie',
    options: {
      legend: {
        display: false
      },
      cutoutPercentage: 0.1,
      animation: {
        animateScale: true
      }
    },
    data: {
      labels: ["Active", "In progress", "Expired", "Never submitted"],
      machineLabels: ["active", "progress", "expired", "never"],
      datasets: [{
        borderWidth: 0,
        backgroundColor: [
          '#76b82a',
          '#ea5b1b',
          '#ffcc33',
          '#cc3333',
        ],
        data: [10, 20, 30, 10]
      }]
    }
  };

  // Instantiate the pie chart in the canvas element.
  var myPie = new Chart(document.getElementById('progress-chart'), config);
  
  // Register click event to log the clicked label (machine name).
  document.getElementById('progress-chart').onclick = function(evt) {
    var activePoints = myPie.getElementAtEvent(evt);
    var firstPoint = activePoints[0];
    if (firstPoint !== undefined) {
      var clickedItem = config.data.machineLabels[firstPoint._index];
      console.log(clickedItem);
    }
  };
  
  // Add the legend in custom area to allow CSS theming.
  document.getElementById('chart-legend').innerHTML = myPie.generateLegend();
  
  
  
});

</script>

<script>

var options = {

series: [{
data: [140,120,95]
}],

chart: {
type: 'bar',
height: 280,
toolbar:{show:false}
},

plotOptions: {
bar: {
horizontal: true,
borderRadius: 6
}
},

colors:['#4e73df'],

xaxis: {
categories: [
'Shanghai → Hamburg',
'Singapore → Rotterdam',
'Dubai → Mumbai'
]
},

tooltip:{
enabled:true
}

};

var chart = new ApexCharts(document.querySelector("#routesChart"), options);

chart.render();

</script>


</body>
</html> 