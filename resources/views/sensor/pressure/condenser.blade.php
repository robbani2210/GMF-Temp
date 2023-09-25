@extends('layouts.base')
 
@section('title', 'Condenser Pressure')
 
@section('content')
    <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-12">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center md:text-xl text-[#625F6E] hover:text-blue-600">
                        Sensor
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ml-1 md:text-xl text-[#625F6E] hover:text-blue-600 md:ml-2">Condenser Pressure</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 md:mx-12">
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