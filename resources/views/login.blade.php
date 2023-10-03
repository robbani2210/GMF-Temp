<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel = "icon" href ="{{ asset('img/logo GMF.png') }}" 
        type = "image/x-icon">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body style="background-color:#006298;">
    <div class="mt-36 md:mt-44">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mx-auto">
            <img src="{{ asset('img/logo unpad x gmf.png') }}" class="h-9 sm:h-10.5 mx-auto" alt="Flowbite Logo" />
            <br>
            <h1 class="text-center text-2xl">Login</h1>
            <br>
            <form action = "{{route('login.post')}}" method="POST">
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@gmf.co.id" required>
                </div> 
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full p-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>
    </body>