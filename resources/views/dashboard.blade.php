@extends('layouts.base')
 
@section('title', 'Dashboard')
 
@section('content')    
    <div class="m-6 md:mx-10">
        <h1 class="pt-4 pb-2 px-6 md:text-lg text-[#FFFFFF]">Timestamp: <b>{{ $timestamp }}</b></h1>
        <div class="flex flex-col md:flex-row justify-around items-center space-y-4 md:space-y-0">
            <button onclick="document.getElementById('SensorList').scrollLeft -= 118"><i class="ph-light ph-caret-left text-3xl text-white"></i></button>
                <div id="SensorList" class="mt-4 mx-4 grid gap-6 w-full grid-flow-col overflow-auto no-scrollbar py-2">
                    @foreach ($data as $item)
                        <div class="w-[220px] flex justify-between p-6 bg-[#28A745] rounded-lg shadow">
                            <h2 class="text-white text-left text-sm font-light pr-2 my-auto">{{ $item['name'] }}</h2>
                            <div class="w-10 my-auto">
                                <h2 class="text-[#28A745] text-xl font-medium text-center mx-auto bg-white rounded px-2 py-1">{{ $item['value'] }}</h2>
                            </div>
                        </div>
                    @endforeach
                </div>
            <button onclick="document.getElementById('SensorList').scrollLeft += 118"><i class="ph-light ph-caret-right text-3xl text-white"></i></button>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-6 md:mx-10">
        <div class="bg-white rounded-lg md:mb-8 p-6">
            <h1 class="text-lg text-[#625F6E]">Device 1</h1>
            <div id="lineChart">
            </div>
        </div>

        <div class="bg-white rounded-lg mb-8 p-6">
            <h1 class="text-lg text-[#625F6E]">Device 2</h1>
            <div id="barChart">
            </div>
        </div>
    </div>
    
    <script>
        var lineChart = {
        chart: {
            height: 350,
            type: "line",
            stacked: false
        },
        dataLabels: {
            enabled: false
        },
        colors: ["#FF1654"],
        series: [
            {
                name: "Value",
                data: {!!json_encode(array_map(function($item) {return $item["value"];}, $data))!!}
            },
        ],
        stroke: {
            curve: "smooth",
            width: 3
        },
        plotOptions: {
            bar: {
                columnWidth: "20%"
            }
        },
        xaxis: {
            categories: {!! json_encode(array_map(function($item) { return $item["name"]; }, $data)) !!}
        },
        yaxis: [
            {
            axisTicks: {
                show: true
            },
            axisBorder: {
                show: true,
                color: "#FF1654"
            },
            labels: {
                style: {
                colors: "#FF1654"
                }
            },
            title: {
                text: "Temperature",
                style: {
                color: "#FF1654"
                }
            }
            }
        ],
        tooltip: {
            shared: false,
            intersect: true,
            x: {
                show: false
            }
        },
        legend: {
            horizontalAlign: "left",
            offsetX: 40
        }
        };

        var barChart = {
            series: [{
                data: {!! json_encode(array_map(function($item) { return $item["value"]; }, $data)) !!}
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
                categories: {!! json_encode(array_map(function($item) { return $item["name"]; }, $data)) !!}
            },
        };

        var barChartResult = new ApexCharts(document.querySelector("#barChart"), barChart);
        var lineChartResult = new ApexCharts(document.querySelector("#lineChart"), lineChart);

        barChartResult.render();
        lineChartResult.render();
    </script>
    
    
    @endsection

