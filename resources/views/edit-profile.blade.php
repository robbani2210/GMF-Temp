@extends('layouts.base')

@section('title', 'Edit Profile')

@section('content')
<div class="bg-[#F8F8F8] h-screen">
    <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
        <h1 class="md:text-xl text-[#625F6E]">Edit Profile</h1>
        <div class="space-x-4">
            <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
            <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 m-6 md:mx-10">
        <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">         
        <div class="relative w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 mx-auto">
            <svg class="absolute w-20 h-20 text-gray-400 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
        </div>
            <h1 class="text-xl text-[#625F6E]">Your Name</h1>
            <form>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                    <input type="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
                </div>
                <button type="cancel" class="focus:outline-none text-white bg-[#625F6E] hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 float-right">Cancel</button>
                <button type="submit" class="focus:outline-none text-white bg-[#006298] hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 float-right">Submit</button>
            </form>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <h1 class="text-xl text-[#625F6E]">Your Password</h1>
            <form>
                <div class="mb-6">
                    <label for="old_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old Password</label>
                    <input type="password" id="old_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                </div>
                <div class="mb-6">
                    <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                    <input type="password" id="new_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                </div>
                <div class="mb-6">
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                </div>
                <button type="cancel" class="focus:outline-none text-white bg-[#625F6E] hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 float-right">Cancel</button>
                <button type="submit" class="focus:outline-none text-white bg-[#006298] hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection