<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Registration</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">
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
    <section class="min-h-screen flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-8">Customer Registration</h2>

            <form action="{{ url('/') }}/customer" method="POST" class="space-y-5">
                @csrf

                {{-- Name --}}
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Full Name</label>
                    <input type="text" name="name" id="name" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Email</label>
                    <input type="email" name="email" id="email" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                {{-- Phone --}}
                <div>
                    <label for="phone" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Phone</label>
                    <input type="text" name="phone" id="phone" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                </div>

                {{-- Address --}}
                <div>
                    <label for="address" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Address</label>
                    <textarea name="address" id="address" rows="2" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 resize-none" required></textarea>
                </div>

                {{-- DOB --}}
                <div>
                    <label for="dob" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                </div>

                {{-- State --}}
                <div>
                    <label for="state" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">State</label>
                    <input type="text" name="state" id="state" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                </div>

                {{-- Country --}}
                <div>
                    <label for="country" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Country</label>
                    <input type="text" name="country" id="country" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                </div>

                {{-- Gender --}}
                <div>
                    <label for="gender" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Gender</label>
                    <select name="gender" id="gender" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                        <option value="">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                </div>

                {{-- Status --}}
                <div>
                    <label for="status" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Status</label>
                    <select name="status" id="status" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                {{-- Points --}}
                <div>
                    <label for="points" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Points</label>
                    <input type="number" name="points" id="points" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" required>
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Password</label>
                    <input type="password" name="password" id="password" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" required>
                </div>

                {{-- Submit --}}
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 transition text-white font-semibold py-2 rounded-md mt-4">
                    Register
                </button>
            </form>
        </div>
    </section>
</body>


</html>
