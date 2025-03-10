<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<form method="POST" action="{{ route('commande.store') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="product_type" value="phone">

<div id="command-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    create new phone
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4 object-center	">

                <div class=" justify-center items-center">
                <div>
                            <label class="block text-sm font-semibold leading-6 text-gray-900">Select city</label>
                            <select name="city" class="block w-full border-black py-1.5 px-4 text-gray-900 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:border-transparent sm:text-sm sm:leading-6">
                                <option value="Mahdia">Mahdia</option>
                                <option value="Monastir">Monastir</option>
                            </select>
                        </div>
                </div>
                <div class="  justify-center items-center">
                    <x-form.input for='zipcode' name='zipcode' id='zipcode' type='number' placeholder='zip code' label='zip code' >
                            <x-form.errorinput type='zipcode'/>
                    </x-form.input> 
                </div>
                <div class="  justify-center items-center">
                    <x-form.input for='region' name='region' id='region' type='numbertext' placeholder='region' label='region' >
                            <x-form.errorinput type='region'/>
                    </x-form.input> 
                </div>
                <div class="  justify-center items-center">
                    <x-form.input for='phonenumber' name='phonenumber' id='phonenumber' type='number' placeholder='phone number' label='phone number' >
                            <x-form.errorinput type='phonenumber'/>
                    </x-form.input> 
                </div>

                
            </div>
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Commander</button>
                  <button data-modal-hide="command-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
        </div>
    </div>
</div>
</form>
