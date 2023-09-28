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
            <button><i class="ph-light ph-caret-left text-3xl text-[#625F6E]"></i></button>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 m-6 md:m-0">
                @php
                    $i = 1;
                @endphp
                
                @foreach ($data['device_data'] as $item)
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="flex justify-between items-center">
                            <h1 class="text-lg text-[#625F6E]">Sensor {{ $i++; }}</h1>
                            @if ($item->payload['temperature'] < 30)
                                <i class="hidden ph-bold ph-warning-circle text-2xl text-[#E02424]"></i>
                            @else
                                <i class="ph-bold ph-warning-circle text-2xl text-[#E02424]"></i>                              
                            @endif
                        </div>
                        <h2 class="text-[#625F6E] text-3xl xl:text-4xl text-center font-light mt-4">
                            @if ($item->payload['temperature'] < 30)
                                Normal
                            @else
                                High Temp                                
                            @endif
                        </h2>
                        <ul class="text-[#625F6E] text-center pt-6">
                            <li>Temperature: {{ $item->payload['temperature'] }} °C</li>
                            <li>Humidity: {{ $item->payload['humidity'] }} g/kg</li>
                        </ul>
                    </div>
                @endforeach
    
            </div>

            <button><i class="ph-light ph-caret-right text-3xl text-[#625F6E]"></i></button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-6 md:mx-10">
            <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Device 1</h1>
                <img src="{{ asset('img/image 1.png') }}" class="mt-8" />
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Device 2</h1>
                <img src="{{ asset('img/image 2.png') }}" class="mt-8" />
            </div>
        </div>
    </div>
@endsection