

var shipmentOptions = {

chart:{type:'line',height:200},

series:[{
name:'Shipments',
data:[2,4,6,8,10,12]
}],

xaxis:{
categories:['Jan','Feb','Mar','Apr','May','Jun']
}

};

var shipmentChart = new ApexCharts(
document.querySelector("#shipmentActivityChart"),
shipmentOptions
);

shipmentChart.render();


var vesselOptions = {

chart:{type:'donut'},

series:[6,3,3],

labels:['Active','In Maintenance','Available']

};

var vesselChart = new ApexCharts(
document.querySelector("#vesselStatusChart"),
vesselOptions
);

vesselChart.render();





var ctx = document.getElementById('revenueChart');

new Chart(ctx, {

type: 'line',

data: {

labels: ['Jan','Feb','Mar','Apr','May','Jun'],

datasets: [{

label: 'Revenue',

data: [120000,180000,160000,220000,200000,320000],

borderColor: '#0d6efd',

fill:false

}]

}

});
