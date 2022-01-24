<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>People</title>
</head>

<body>
    <h1 class="flex justify-center" style="font-size: 40px"><b>List of Users</b></h1><br>
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
        <a href="/customers/create" class="px-4 py-1 text-sm text-black text-center w-36 bg-yellow-400 rounded float-right mt-200px p-50px"><b>Add New Users</b></a><br>
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>                       
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    First Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Last Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Username
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    View Details
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        @foreach($customers as $customer)                    
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->firstname }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">{{ $customer->lastname }}
                                    
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $customer->username }}
                                </td>
                                <td class="px-6 py-4">           
                                        <a href="/customers/{{ $customer->id }}/show" class="px-4 py-1 text-sm text-white bg-green-400 rounded">View</button>                               
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/customers/{{ $customer->id }}/edit" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                </td>
                            <td class="px-6 py-4">
                                <form action="{{ url('customers/'.$customer->id) }}" method="post">
                                    @method('delete')
                                    @csrf            
                                        <button class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</button>                               
                                </form>
                            </td>
                            
                            </tr> 
                        </tbody>
                        @endforeach                       
                    </table>
                </div>
            </div>
        </div>
</body>

</html>
