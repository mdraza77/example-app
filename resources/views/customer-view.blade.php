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
                                    <span
                                        class="inline-block px-2 py-1 rounded text-xs font-semibold bg-green-100 text-green-700">
                                        Active
                                    </span>
                                @else
                                    <span
                                        class="inline-block px-2 py-1 rounded text-xs font-semibold bg-red-100 text-red-700">
                                        Inactive
                                    </span>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>
