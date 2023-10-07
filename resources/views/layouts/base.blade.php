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
    <body>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        @section('sidebar')
          @include('layouts.sidebar')
        @show

        
        <div class="bg-[#006298] flex flex-col">
            <div class="md:ml-52">
                @section('navbar')
                  @include('layouts.navbar')
                @show
                @yield('content')
            </div>
        </div>

        <script src="/js/app.js"></script>
        {{-- <script src="/js/bar.js"></script> --}}
        {{-- <script src="/js/line.js"></script> --}}
    </body>
</html>