@extends('layouts.base')
 
@section('title', 'Temperature Chilled Water')
 
@section('content')
    <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <div class="inline-flex items-center md:text-xl text-[#625F6E]">
                        Sensor
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <div class="ml-1 md:text-xl text-[#625F6E] md:ml-2">Temperature Chilled Water</div>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>

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
@endsection