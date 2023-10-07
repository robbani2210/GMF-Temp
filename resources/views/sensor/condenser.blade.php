@extends('layouts.base')
 
@php
    $name = 'Condenser Pressure'
@endphp
 
@section('title', $name)
@section('header', $name)
 
@section('content')
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
@endsection