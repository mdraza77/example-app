<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{url('/')}}" class="text-white font-bold text-xl">MyApp</a>
            <ul class="flex space-x-4">
                <li><a href="{{url('/')}}" class="text-white hover:text-blue-200">Home</a></li>
                <li><a href="{{url('/about')}}" class="text-white hover:text-blue-200">About</a></li>
                <li><a href="{{url('/customer')}}" class="text-white hover:text-blue-200">Customer</a></li>
                <li><a href="{{url('/courses')}}" class="text-white hover:text-blue-200">Courses</a></li>
                <li><a href="{{url('/register')}}" class="text-white hover:text-blue-200">Register</a></li>
            </ul>
        </div>
    </nav>