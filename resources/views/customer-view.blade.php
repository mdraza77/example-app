<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer View Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white font-bold text-xl">MyApp</a>
            <ul class="flex space-x-4">
                <li><a href="{{ url('/') }}" class="text-white hover:text-blue-200">Home</a></li>
                <li><a href="{{ url('/register') }}" class="text-white hover:text-blue-200">About</a></li>
                <li><a href="{{ url('/customer') }}" class="text-white hover:text-blue-200">Customer</a></li>
                <li><a href="{{ url('/customer/view') }}" class="text-white hover:text-blue-200">Customer View</a></li>
            </ul>
        </div>
    </nav>
    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow m-2 cursor-pointer">
        <a href="{{ route('customer.create') }}">Add Customer</a>
    </button>
    <div class="container mx-auto px-4 py-6">
        <div class="overflow-x-auto rounded-lg shadow-lg bg-white">
            <table class="min-w-full divide-y divide-gray-200 text-sm text-left text-gray-700">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Phone</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3">DOB</th>
                        <th class="px-4 py-3">State</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Points</th>
                        <th class="px-4 py-3">Country</th>
                        <th class="px-4 py-3">Gender</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($customer as $custo)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-3">{{ $custo->name }}</td>
                            <td class="px-4 py-3">{{ $custo->email }}</td>
                            <td class="px-4 py-3">{{ $custo->phone }}</td>
                            <td class="px-4 py-3">{{ $custo->address }}</td>
                            <td class="px-4 py-3">{{ $custo->dob }}</td>
                            <td class="px-4 py-3">{{ $custo->state }}</td>
                            <td class="px-4 py-3">
                                @if ($custo->status == '1')
                                    <button
                                        class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-2 rounded shadow cursor-pointer">
                                        <a href="">
                                            <span>
                                                Active
                                            </span>
                                        </a>
                                    </button>
                                @else
                                    <button
                                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-2 rounded shadow cursor-pointer">
                                        <a href="">
                                            <span>
                                                Inactive
                                            </span>
                                        </a>
                                    </button>
                                @endif
                            </td>
                            <td class="px-4 py-3">{{ $custo->points }}</td>
                            <td class="px-4 py-3">{{ $custo->country }}</td>
                            <td class="px-4 py-3">
                                @if ($custo->gender == 'M')
                                    <span class="inline-block px-2 py-1 rounded text-xs font-semibold">
                                        Male
                                    </span>
                                @elseif ($custo->gender == 'F')
                                    <span class="inline-block px-2 py-1 rounded text-xs font-semibold">
                                        Female
                                    </span>
                                @else
                                    <span class="inline-block px-2 py-1 rounded text-xs font-semibold">
                                        Other
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <a href="{{route('customer.delete', ['id' => $custo->customer_id])}}">
                                    <button
                                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-2 rounded shadow cursor-pointer">
                                        Delete
                                    </button>
                                </a>
                                <a href="{{url('')}}/{{$custo->customer_id}}">
                                    <button
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow cursor-pointer">
                                        Edit
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>
