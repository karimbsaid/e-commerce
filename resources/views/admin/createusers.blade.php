<x-app-layout>

<script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <form class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" method="POST" action="{{ route('users.store') }}">
    @csrf

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="space-y-6" method="POST" action="{{ route('users.store') }}">

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    </div>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold leading-6 text-gray-900">Select Role</label>
                    <select name="roles" class="block w-80 border-black py-1.5 px-4 text-gray-900 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:border-transparent sm:text-sm sm:leading-6">
                        <option value="magazin">Magazin</option>
                        <option value="treasure">Treasure</option>
                    </select>
                </div>

                <div class="mt-6">
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">create a user</button>
                </div>
    </div>
        </div>
    </form>

</x-app-layout>
