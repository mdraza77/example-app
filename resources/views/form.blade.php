<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    @include('layouts.header')

    <section class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg w-full max-w-4xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-8">Sign Up</h2>

            <form action="{{ url('/') }}/register" method="post" class="space-y-4">
                @csrf
                @php
                $demo = 1;
                @endphp

                <div class="grid grid-cols-2 gap-4">
                    {{-- Name --}}
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Please Enter Your Name</label>
                        <input type="text" name="name" id="name" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
                        <span class="text-red-500 text-sm">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Please Enter Your Email</label>
                        <input type="email" name="email" id="email" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('email') }}" required>
                        <span class="text-red-500 text-sm">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Password --}}
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Please Enter Your Password</label>
                        <input type="password" name="password" id="password" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <span class="text-red-500 text-sm">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Confirm Password --}}
                    <div>
                        <label for="password_confirm" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Please Re-Enter Your Password</label>
                        <input type="password" name="password_confirm" id="password_confirm" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <span class="text-red-500 text-sm">
                            @error('password_confirm')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                {{-- Submit --}}
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 transition text-white font-semibold py-2 rounded-md mt-4">
                    Sign Up
                </button>
            </form>
        </div>
    </section>
</body>

</html>