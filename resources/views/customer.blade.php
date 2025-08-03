<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>

<body>
    @include('layouts.header')

    <section class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg w-full max-w-4xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-8">{{$title}}</h2>

            <form action="{{ $url }}" method="{{ $title == 'Edit Customer' ? 'POST' : 'POST' }}" class="space-y-4">
                @csrf

                <div class="grid grid-cols-4 gap-4">
                    {{-- Name --}}
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Full Name</label>
                        <input type="text" name="name" id="name" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$customer->name}}" required>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$customer->email}}" required>
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Phone</label>
                        <input type="text" name="phone" id="phone" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" value="{{$customer->phone}}">
                    </div>

                    {{-- DOB --}}
                    <div>
                        <label for="dob" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" value="{{$customer->dob}}">
                    </div>

                    {{-- State --}}
                    <div>
                        <label for="state" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">State</label>
                        <input type="text" name="state" id="state" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" value="{{$customer->state}}">
                    </div>

                    {{-- Country --}}
                    <div>
                        <label for="country" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Country</label>
                        <input type="text" name="country" id="country" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" value="{{$customer->country}}">
                    </div>

                    {{-- Gender --}}
                    <div>
                        <label for="gender" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Gender</label>
                        <select name="gender" id="gender" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                            <option value="">Select Gender</option>
                            <option value="M" {{ $customer->gender == 'M' ? 'selected' : '' }}>Male</option>
                            <option value="F" {{ $customer->gender == 'F' ? 'selected' : '' }}>Female</option>
                            <option value="O" {{ $customer->gender == 'O' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    {{-- Status --}}
                    <div>
                        <label for="status" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Status</label>
                        <select name="status" id="status" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600">
                            <option value="1" {{ $customer->status == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $customer->status == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    {{-- Points --}}
                    <div>
                        <label for="points" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Points</label>
                        <input type="number" name="points" id="points" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" value="{{$customer->points}}" required>
                    </div>

                    {{-- Password --}}
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Password</label>
                        <input type="password" name="password" id="password" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600" required>
                    </div>
                </div>

                {{-- Address (Full Width) --}}
                <div>
                    <label for="address" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Address</label>
                    <textarea name="address" id="address" rows="2" class="w-full mt-1 px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 resize-none" required>{{$customer->address}}</textarea>
                </div>

                {{-- Submit --}}
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 transition text-white font-semibold py-2 rounded-md mt-4">
                    {{ $title == 'Edit Customer' ? 'Update' : 'Register' }}
                </button>
            </form>
        </div>
    </section>
</body>

</html>