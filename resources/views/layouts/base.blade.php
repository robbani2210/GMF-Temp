<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel = "icon" href ="{{ asset('img/logo GMF.png') }}" 
        type = "image/x-icon">
        <link href="/css/app.css" rel="stylesheet">
        
    </head>
    <body class="bg-[#006298] h-screen">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        @section('sidebar')
          @include('layouts.sidebar')
        @show
        
        <div class="md:ml-52">
            <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
                <h1 class="md:text-xl text-[#625F6E]">@yield('header')</h1>
                <div class="flex">
                    <a href="{{ url('/profile')}}">
                        <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
                    </a>
                    <h3 class="px-10">{{ auth()->user()->username }}</h3>
            </div>
            </div>
            @yield('content')
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>