@extends('layouts.base')
 
@section('title', 'Dashboard')
 
@section('content')
    <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
            <h1 class="md:text-xl text-[#625F6E]">Dashboard</h1>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>
        </div>
     
        <div class="flex flex-col md:flex-row justify-around items-center space-y-4 md:space-y-0 m-6 md:mx-10">
            <button onclick="document.getElementById('SensorList').scrollLeft -= 128"><i class="ph-light ph-caret-left text-3xl text-[#625F6E]"></i></button>
            <div id="SensorList" class="mt-4 mx-4 grid gap-6 w-full grid-flow-col overflow-auto no-scrollbar py-2">
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $item)
                    <div class="w-[240px] p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="flex justify-between items-center">
                            <h1 class="text-lg text-[#625F6E]">Sensor {{ $i++; }}</h1>
                            @if ($item['temperature'] < 30)
                                <i class="hidden ph-bold ph-warning-circle text-2xl text-[#E02424]"></i>
                            @else
                                <i class="ph-bold ph-warning-circle text-2xl text-[#E02424]"></i>                              
                            @endif
                        </div>
                        <h2 class="text-[#625F6E] text-3xl xl:text-4xl text-center font-light mt-4">
                            @if ($item['temperature'] < 30)
                                Normal
                            @else
                                High Temp                                
                            @endif
                        </h2>
                        <ul class="text-[#625F6E] text-center pt-6">
                            <li>Timestamp: {{ $item['timestamp'] }}</li>
                            <li>Temperature: {{ $item['temperature'] }} °C</li>
                            <li>Humidity: {{ $item['humidity'] }} g/kg</li>
                        </ul>
                    </div>
                @endforeach
    
            </div>

            <button onclick="document.getElementById('SensorList').scrollLeft += 128"><i class="ph-light ph-caret-right text-3xl text-[#625F6E]"></i></button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-6 md:mx-10">
            <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Device 1</h1>
                <div id="chartLine">
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Device 2</h1>
                <div id="chartBar">
                </div>
            </div>
        </div>
    </div>

    <script>
        var options = {
            chart: {
                height: 350,
                type: "line",
                stacked: false
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#FF1654", "#247BA0"],
            series: [
                {
                name: "Temperature",
                data: {{json_encode(array_map(function($item) {return $item["temperature"];}, $data))}}
                },
                {
                name: "Humidity",
                data: {{json_encode(array_map(function($item) {return $item["humidity"];}, $data))}}
                }
            ],
            stroke: {
                width: [4, 4]
            },
            plotOptions: {
                bar: {
                columnWidth: "20%"
                }
            },
            xaxis: {
                categories: {!! json_encode(array_map(function($item) {return $item['timestamp'];}, $data)) !!}
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
                },
                {
                opposite: true,
                axisTicks: {
                    show: true
                },
                axisBorder: {
                    show: true,
                    color: "#247BA0"
                },
                labels: {
                    style: {
                    colors: "#247BA0"
                    }
                },
                title: {
                    text: "Humidity",
                    style: {
                    color: "#247BA0"
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

            var chart = new ApexCharts(document.querySelector("#chartLine"), options);

            chart.render();
    </script>
    
    @endsection

