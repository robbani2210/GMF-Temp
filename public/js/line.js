// var options = {
//   chart: {
//       height: 350,
//       type: "line",
//       stacked: false
//   },
//   dataLabels: {
//       enabled: false
//   },
//   colors: ["#FF1654", "#247BA0"],
//   series: [
//       {
//       name: "Temperature",
//       data: {!!json_encode(array_map(function($item) {return $item["oil_pressure"];}, $graph))!!}
//       },
//       {
//       name: "Humidity",
//       data: {!!json_encode(array_map(function($item) {return $item["evaporator_pressure"];}, $graph))!!}
//       }
//   ],
//   stroke: {
//       width: [4, 4]
//   },
//   plotOptions: {
//       bar: {
//       columnWidth: "20%"
//       }
//   },
//   xaxis: {
//       categories: {!! json_encode(array_map(function($item) {return $item['timestamp'];}, $graph)) !!}
//   },
//   yaxis: [
//       {
//       axisTicks: {
//           show: true
//       },
//       axisBorder: {
//           show: true,
//           color: "#FF1654"
//       },
//       labels: {
//           style: {
//           colors: "#FF1654"
//           }
//       },
//       title: {
//           text: "Temperature",
//           style: {
//           color: "#FF1654"
//           }
//       }
//       },
//       {
//       opposite: true,
//       axisTicks: {
//           show: true
//       },
//       axisBorder: {
//           show: true,
//           color: "#247BA0"
//       },
//       labels: {
//           style: {
//           colors: "#247BA0"
//           }
//       },
//       title: {
//           text: "Humidity",
//           style: {
//           color: "#247BA0"
//           }
//       }
//       }
//   ],
//   tooltip: {
//       shared: false,
//       intersect: true,
//       x: {
//       show: false
//       }
//   },
//   legend: {
//       horizontalAlign: "left",
//       offsetX: 40
//   }
//   };

//   var chart = new ApexCharts(document.querySelector("#chartLine"), options);

//   chart.render();