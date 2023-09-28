@extends('layouts.base')
 
@section('title', 'Evaporator Pressure')
 
@section('content')
<div class="bg-[#F8F8F8] h-screen">
    <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-120">
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
                    <a href="#" class="ml-1 md:text-xl text-[#625F6E] hover:text-blue-600 md:ml-2">Evaporator Pressure</a>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="space-x-4">
            <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
            <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
        </div>
    </div>

    
</div>
@endsection