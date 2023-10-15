@extends('layouts.base')

@php
    $name = 'About and FAQs'
@endphp
 
@section('title', $name)
@section('header', $name)

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 m-6 md:mx-10">
        <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6"> 
            <h1 class="text-xl text-[#625F6E]">Unpad x GMF AeroAsia Monitoring Site</h1>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <img src="{{ asset('img/logo unpad x gmf.png') }}" class="h-20 mx-auto" />
            <br>
            <h1 class="text-xl text-[#625F6E]">Apa itu Unpad x GMF AeroAsia Monitoring Site?</h1>
            <p class="text-m text-[#625F6E]">Situs ini adalah suatu hasil program kerjasama antara Universitas Padjadjaran (Unpad) dengan Garuda Maintenance Facility (GMF) AeroAsia. Situs ini dapat menampilkan data atau informasi mengenai sensor dan perangkat yang tersedia kepada penggunanya.</p>
            <br>
            <h1 class="text-xl text-[#625F6E]">Sensor apa saja yang dapat diamati?</h1>
            <ol class="text-m text-[#625F6E] pl-5 mt-2 space-y-1 list-decimal list-inside">
                <li>Temperatur Chilled Water in - Derajat Celcius</li>
                <li>Temperatur Chilled Water Out - Derajat Celcius</li>
                <li>Temperatur Cooling Water in - Derajat Celcius</li>
                <li>Temperatur Cooling Water Out - Derajat Celcius</li>
                <li>Oil Tank - Derajat Celcius</li>
                <li>Kapasitas Oli</li>
                <li>Condenser Pressure - MPa</li>
                <li>Evaporator Pressure - MPa</li>
                <li>Oil Pressure - MPa</li>
                <li>Vane Position - %</li>
                <li>Main motor Curent - %</li>
            </ol>
            <br>
            <h1 class="text-xl text-[#625F6E]">Device apa saja yang dapat diamati?</h1>
            <ol class="text-m text-[#625F6E] pl-5 mt-2 space-y-1 list-decimal list-inside">
                <li>Hitachi-1 / Chiller-1</li>
                <li>Hitachi-2 / Chiller-2</li>
            </ol>
            <br>
            <h1 class="text-xl text-[#625F6E]">Siapa yang dapat dihubungi?</h1>
            <ul class="text-m text-[#625F6E] pl-5 mt-2 space-y-1 list-disc list-inside">
                <li>Ananda Shaquille Farell | +62 812-8985-6576</li>
                <li>Ilham Robbani | +62 878-4430-5766</li>
                <li>Rafa Azka Ulinnuha | +62 813-9509-8452</li>
            </ul>
            <br>
            <!-- <button type="button" onclick="window.location.href = '/edit-profile';" class="focus:outline-none text-white bg-[#006298] hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 float-right">Change Profile</button> -->
        </div>
    </div>
@endsection