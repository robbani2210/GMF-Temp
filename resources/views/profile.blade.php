@extends('layouts.base')

@section('title', 'Profile')

@section('content')
<div class="bg-[#F8F8F8] h-screen">
    <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
        <h1 class="md:text-xl text-[#625F6E]">Profile</h1>
        <div class="space-x-4">
            <!-- <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i> -->
            <!-- <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i> -->
            <button type="button" onclick="window.location.href = '/profile';" class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 m-6 md:mx-10">
        <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">         
        <div class="relative w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 mx-auto">
            <svg class="absolute w-20 h-20 text-gray-400 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
        </div>
        <h1 class="text-xl text-[#625F6E] text-center">John Doe</h1>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <h1 class="text-xl text-[#625F6E]">Full Name</h1>
        <h1 class="text-m text-[#625F6E]">John Doe</h1>
        <br>
        <h1 class="text-xl text-[#625F6E]">Role</h1>
        <h1 class="text-m text-[#625F6E]">Admin</h1>
        <br>
        <h1 class="text-xl text-[#625F6E]">Email Address</h1>
        <h1 class="text-m text-[#625F6E]">john.doe@gmf.co.id</h1>
        <br>
        <button type="button" onclick="window.location.href = '/edit-profile';" class="focus:outline-none text-white bg-[#006298] hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 float-right">Change Profile</button>
    </div>
</div>
@endsection