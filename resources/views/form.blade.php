<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg rounded-lg">
            <h3 class="text-2xl font-bold text-center">Sign Up</h3>
            <form action="{{ url('/') }}/register" method="post">
                @csrf
                {{-- <pre>
                @php
                    print_r($errors->all());
                @endphp
                </pre> --}}
                <div class="mt-4">
                    <div class="mt-4">
                        <label class="block" for="phone">Name</label>
                        <input type="text" placeholder="Name" name ="name" value="{{old('name')}}"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        <span class="text-red-500 text-sm">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div>
                        <label class="block" for="email">Email</label>
                        <input type="email" placeholder="Email" name ="email" value="{{old('email')}}"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            <span class="text-red-500 text-sm">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mt-4">
                        <label class="block">Password</label>
                        <input type="password" placeholder="Password" name ="password"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            <span class="text-red-500 text-sm">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mt-4">
                        <label class="block">Confirm Password</label>
                        <input type="password" placeholder="Password" name ="password_confirm"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            <span class="text-red-500 text-sm">
                            @error('password_confirm')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="flex items-baseline justify-between">
                        <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Sign
                            Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
