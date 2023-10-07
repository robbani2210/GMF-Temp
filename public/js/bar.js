var options = {
  series: [{
  data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
}],
  chart: {
  type: 'bar',
  height: 350
},
plotOptions: {
  bar: {
    borderRadius: 4,
    horizontal: true,
  }
},
dataLabels: {
  enabled: false
},
xaxis: {
  categories: ['Sensor 1', 'Sensor 2', 'Sensor 3', 'Sensor 4', 'Sensor 5', 'Sensor 6', 'Sensor 7',
    'Sensor 8', 'Sensor 9', 'Sensor 10'
  ],
}
};

var chart = new ApexCharts(document.querySelector("#chartBar"), options);
chart.render();