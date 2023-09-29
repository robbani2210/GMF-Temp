@extends('layouts.base')
 
@section('title', 'Device')
 
@section('content')
    <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <span class="inline-flex items-center md:text-xl text-[#625F6E]">
                        Device
                        </span>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 md:text-xl text-[#625F6E] md:ml-2">Device 1</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>
        </div>

        <div class="py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
            <h1 class="text-2xl mt-2 mb-4 text-[#625F6E]">Catatan</h1>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-center text-gray-700 uppercase bg-gray-200">
                        <tr>
                            {{-- <th scope="col" class="p-4">
                                No
                            </th> --}}
                            <th scope="col" class="p-4">
                                Timestamp
                            </th>
                            <th scope="col" class="p-4">
                                Sensor Name
                            </th>
                            <th scope="col" class="p-4">
                                Note
                            </th>
                            <th scope="col" class="p-4">
                                Status
                            </th>
                            <th scope="col" class="p-4">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $i = 1;
                        @endphp  --}}

                        @foreach ($data as $item)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                {{-- <td class="px-4 py-2">
                                    {{ $i++ }}
                                </td> --}}
                                <td class="px-4 py-2">
                                    {{ $item['timestamp'] }}
                                </td>
                                <td class="px-4 py-2">
                                    Silver
                                </td>
                                <td class="px-4 py-2 break-all">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga enim officiis odio aliquid illo eos!
                                </td>
                                <td class="bg-green-600 text-white text-center px-4 py-2">
                                    Complete
                                </td>
                                <td class="p-2 flex justify-evenly">
                                    <a data-modal-target="#editnote-modal{{ $item['timestamp'] }}" data-modal-toggle="#editnote-modal{{ $item['timestamp'] }}" class="ph-bold ph-pencil-simple p-1.5 font-medium text-lg text-blue-600 hover:bg-blue-600 hover:text-white hover:rounded-full hover:cursor-pointer">
                                    </a>
                                    @include('modal.edit-note')

                                    <a data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="ph-bold ph-trash p-1.5 font-medium text-lg text-red-600 hover:bg-red-600 hover:text-white hover:rounded-full hover:cursor-pointer">
                                    </a>
                                    @include('modal.delete-note')
                                </td>
                            </tr>                            
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <nav class="md:flex justify-between items-center mt-4" aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500">Showing <span class="font-semibold text-gray-900">{{ $data[0]['timestamp'] }}-{{ end($data)['timestamp'] }}</span> of <span class="font-semibold text-gray-900">1000</span></span>
                <ul class="inline-flex -space-x-px text-sm h-8 mt-4 md:mt-0">
                    @if ($prevStartKey)
                        <a href="{{ route('device', ['prev_key' => $prevStartKey]) }}" class="flex items-center justify-center px-2 md:px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                    @endif
                    {{-- <li>
                        <a href="#" class="flex items-center justify-center px-2 md:px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-2 md:px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-2 md:px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-2 md:px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-2 md:px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                    </li> --}}
                    @if ($lastEvaluatedKey)
                        <a href="{{ route('device', ['start_key' => json_encode($lastEvaluatedKey)]) }}" class="flex items-center justify-center px-2 md:px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                    @endif
                </ul>
            </nav>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 md:mx-10">
            <div class="bg-white border border-gray-200 rounded-lg shadow p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 1</h1>
                <img src="{{ asset('img/image 1.png') }}" class="mt-8" />
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 2</h1>
                <img src="{{ asset('img/image 2.png') }}" class="mt-8" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 md:mx-12">
            <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 3</h1>
                <img src="{{ asset('img/image 1.png') }}" class="mt-8" />
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 4</h1>
                <img src="{{ asset('img/image 2.png') }}" class="mt-8" />
            </div>
        </div>
    </div>
@endsection