<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white font-bold text-xl">MyApp</a>
            <ul class="flex space-x-4">
                <li><a href="{{url('/')}}" class="text-white hover:text-blue-200">Home</a></li>
                <li><a href="{{url('/register')}}" class="text-white hover:text-blue-200">About</a></li>
                <li><a href="{{url('/customer')}}" class="text-white hover:text-blue-200">Customer</a></li>
                <li><a href="{{url('/customer/view')}}" class="text-white hover:text-blue-200">Customer View</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>
