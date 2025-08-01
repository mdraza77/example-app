<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Registration</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md dark:bg-gray-800">
            <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">Register Customer</h2>

            <form action="{{ url('/') }}/customer" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block mb-1 font-medium">Full Name</label>
                    <input type="text" name="name" id="name" class="w-full border px-4 py-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-1 font-medium">Email</label>
                    <input type="email" name="email" id="email" class="w-full border px-4 py-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="phone" class="block mb-1 font-medium">Phone</label>
                    <input type="text" name="phone" id="phone" class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label for="address" class="block mb-1 font-medium">Address</label>
                    <textarea name="address" id="address" class="w-full border px-4 py-2 rounded" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="dob" class="block mb-1 font-medium">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label for="state" class="block mb-1 font-medium">State</label>
                    <input type="text" name="state" id="state" class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label for="country" class="block mb-1 font-medium">Country</label>
                    <input type="text" name="country" id="country" class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label for="gender" class="block mb-1 font-medium">Gender</label>
                    <select name="gender" id="gender" class="w-full border px-4 py-2 rounded">
                        <option value="">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="status" class="block mb-1 font-medium">Status</label>
                    <select name="status" id="status" class="w-full border px-4 py-2 rounded">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="points" class="block mb-1 font-medium">Points</label>
                    <input type="number" name="points" id="points" class="w-full border px-4 py-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-1 font-medium">Password</label>
                    <input type="password" name="password" id="password" class="w-full border px-4 py-2 rounded" required>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Register</button>
            </form>
        </div>
    </section>
</body>

</html>
