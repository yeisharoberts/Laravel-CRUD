<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Customer</title>
</head>

<body>
    <h1 class="flex justify-center" style="font-size: 30px; margin-top:10px;"><b>Create New User</b></h1><br>
    <div class="container flex justify-center mx-auto bg-white-400 h-500">
        <form method="post" action="/customers/{{ $customer->id }}"> 
            @method('PUT') 
            @csrf
            <div class="w-full max-w-xs">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">
                      First Name:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" name="firstname" type="text" value="{{ $customer->firstname }}">
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
                      Last Name:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" name="lastname" type="text" value="{{ $customer->lastname }}">
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      Username:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" value="{{ $customer->username }}">
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                      Age:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="age" name="age" type="text" value="{{ $customer->age }}">
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                      Address:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" name="address" type="text" value="{{ $customer->address }}">
                  </div>
                  <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline inline-block">
                      Update
                    </button>
                    <a href="/customers" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline inline-block">
                        Cancel
                    </a>
                  </div>
                </form>
              </div>
            
        </form>
    </div>
</body>

</html>
