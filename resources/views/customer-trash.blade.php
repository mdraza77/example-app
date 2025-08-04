<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Trash</title>
</head>

<body>
    @include('layouts.header')
    <div>
        @if (session()->has('name'))
        From Session My Name is {{session()->get('name')}}
        @else
        From Session My Name is Guest
        @endif
    </div>
    <div class="min-h-screen bg-gray-100 p-4">
        <div class="container mx-auto">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-0">Customer Management</h1>
                <a href="{{ route('customer.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow transition duration-200">
                    Add Customer
                </a>
                <a href="{{ route('customer.view') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow transition duration-200">
                    Go to View
                </a>
            </div>

            <!-- Mobile Cards View -->
            <div class="block lg:hidden">
                @foreach ($customer as $custo)
                <div class="bg-white rounded-lg shadow-lg p-4 mb-4">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $custo->name }}</h3>
                            <p class="text-sm text-gray-600">{{ $custo->email }}</p>
                        </div>
                        <div class="flex space-x-2">
                            <a href="{{ route('customer.edit', ['id' => $custo->customer_id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-1 px-2 rounded">
                                Edit
                            </a>
                            <a href="{{ route('customer.delete', ['id' => $custo->customer_id]) }}" class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold py-1 px-2 rounded" onclick="return confirm('Are you sure you want to delete this customer?')">
                                Delete
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 text-sm">
                        <div>
                            <span class="font-semibold text-gray-700">Phone:</span>
                            <p class="text-gray-600">{{ $custo->phone ?: 'N/A' }}</p>
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">DOB:</span>
                            <p class="text-gray-600">{{ $custo->dob ?: 'N/A' }}</p>
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">State:</span>
                            <p class="text-gray-600">{{ $custo->state ?: 'N/A' }}</p>
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Country:</span>
                            <p class="text-gray-600">{{ $custo->country ?: 'N/A' }}</p>
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Points:</span>
                            <p class="text-gray-600">{{ $custo->points ?: '0' }}</p>
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Gender:</span>
                            <p class="text-gray-600">
                                @if ($custo->gender == 'M')
                                Male
                                @elseif ($custo->gender == 'F')
                                Female
                                @else
                                Other
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <span class="font-semibold text-gray-700">Address:</span>
                        <p class="text-gray-600 text-sm">{{ $custo->address ?: 'N/A' }}</p>
                    </div>

                    <div class="mt-3">
                        <span class="font-semibold text-gray-700">Status:</span>
                        @if ($custo->status == '1')
                        <span class="bg-green-600 text-white text-xs font-bold py-1 px-2 rounded ml-2">
                            Active
                        </span>
                        @else
                        <span class="bg-red-600 text-white text-xs font-bold py-1 px-2 rounded ml-2">
                            Inactive
                        </span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Desktop Table View -->
            <div class="hidden lg:block">
                <div class="overflow-x-auto rounded-lg shadow-lg bg-white">
                    <table class="min-w-full divide-y divide-gray-200 text-sm text-left text-gray-700">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-3 text-left">Name</th>
                                <th class="px-4 py-3 text-left">Email</th>
                                <th class="px-4 py-3 text-left">Phone</th>
                                <th class="px-4 py-3 text-left">Address</th>
                                <th class="px-4 py-3 text-left">DOB</th>
                                <th class="px-4 py-3 text-left">State</th>
                                <th class="px-4 py-3 text-left">Status</th>
                                <th class="px-4 py-3 text-left">Points</th>
                                <th class="px-4 py-3 text-left">Country</th>
                                <th class="px-4 py-3 text-left">Gender</th>
                                <th class="px-4 py-3 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($customer as $custo)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-3">{{ $custo->name }}</td>
                                <td class="px-4 py-3">{{ $custo->email }}</td>
                                <td class="px-4 py-3">{{ $custo->phone ?: 'N/A' }}</td>
                                <td class="px-4 py-3 max-w-xs truncate" title="{{ $custo->address }}">{{ $custo->address ?: 'N/A' }}</td>
                                <td class="px-4 py-3">{{ $custo->dob ?: 'N/A' }}</td>
                                <td class="px-4 py-3">{{ $custo->state ?: 'N/A' }}</td>
                                <td class="px-4 py-3">
                                    @if ($custo->status == '1')
                                    <span class="bg-green-600 text-white font-bold py-1 px-2 rounded text-xs">
                                        Active
                                    </span>
                                    @else
                                    <span class="bg-red-600 text-white font-bold py-1 px-2 rounded text-xs">
                                        Inactive
                                    </span>
                                    @endif
                                </td>
                                <td class="px-4 py-3">{{ $custo->points ?: '0' }}</td>
                                <td class="px-4 py-3">{{ $custo->country ?: 'N/A' }}</td>
                                <td class="px-4 py-3">
                                    @if ($custo->gender == 'M')
                                    <span class="inline-block px-2 py-1 rounded text-xs font-semibold bg-blue-100 text-blue-800">
                                        Male
                                    </span>
                                    @elseif ($custo->gender == 'F')
                                    <span class="inline-block px-2 py-1 rounded text-xs font-semibold bg-pink-100 text-pink-800">
                                        Female
                                    </span>
                                    @else
                                    <span class="inline-block px-2 py-1 rounded text-xs font-semibold bg-gray-100 text-gray-800">
                                        Other
                                    </span>
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('customer.force-delete', ['id' => $custo->customer_id]) }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs transition duration-200" onclick="return confirm('Are you sure you want to delete this customer?')">
                                            Delete
                                        </a>
                                        <a href="{{ route('customer.restore', ['id' => $custo->customer_id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs transition duration-200">
                                            Restore
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Empty State -->
            @if($customer->count() == 0)
            <div class="text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">📋</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">No customers found</h3>
                <p class="text-gray-500 mb-4">Get started by adding your first customer.</p>
                <a href="{{ route('customer.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow transition duration-200">
                    Add First Customer
                </a>
            </div>
            @endif
        </div>
    </div>
</body>

</html>