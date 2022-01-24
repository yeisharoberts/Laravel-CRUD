<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Customers</title>
</head>

<body>
    @foreach($customers as $customer) 
    <h2 class="flex justify-center" style="font-size: 40px"><b>{{ $customer->firstname }}'s Information</b></h2><br>
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>                       
                        <thead class="bg-yellow-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-black-500">
                                    First Name
                                </th>
                                <th class="px-6 py-2 text-xs text-black-500">
                                    Last Name
                                </th>
                                <th class="px-6 py-2 text-xs text-black-500">
                                    Username
                                </th>
                                <th class="px-6 py-2 text-xs text-black-500">
                                    Age
                                </th>
                                <th class="px-6 py-2 text-xs text-black-500">
                                    Address
                                </th>
                                <th class="px-6 py-2 text-xs text-black-500">
                                    Date Joined
                                </th>
                            </tr>
                        </thead>
                                           
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm text-black-900">
                                        {{ $customer->firstname }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-black-500">{{ $customer->lastname }}      
                                    </div>
                               </td>  
                               <td class="px-6 py-4">
                                    <div class="text-sm text-black-500">{{ $customer->username }}      
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-black-500">{{ $customer->age }}      
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-black-500">{{ $customer->address }}      
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-black-500">{{ $customer->created_at }}      
                                    </div>
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