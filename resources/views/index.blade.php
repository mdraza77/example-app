<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.header')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to MyApp</h1>
        <p class="text-lg text-gray-700">Explore our features and services.</p>
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <a href="{{url('/register')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                Register
            </a>
            <a href="{{url('/customer')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                View Customers
            </a>
            <a href="{{url('/courses')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                Explore Courses
            </a>
            <a href="{{url('/about')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                About Us
            </a>
        </div>
    </div>
</body>

</html>