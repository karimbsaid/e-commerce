<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<form method="POST" action="{{ route('magazin.store') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="product_type" value="phone">

<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    CREATE NEW PHONE
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
                <div class="flex lg:flex-row md:flex-row flex-col justify-center items-center">
                    <div class="col-md-3 w-auto ">
                      <x-form.input for='reference' name='reference' id='reference' type='text' placeholder='reference' label='reference'>
                        <x-form.errorinput type='reference'/>
                      </x-form.input> 
                    </div>
                    <div class="col-md-3 lg:mx-8 w-auto">
                      <x-form.input for='nombre' name='nombre' id='nombre' type='number' placeholder='nombre' label='nombre'>
                        <x-form.errorinput type='nombre'/>
                      </x-form.input> 
                    </div>
                </div>
                <div class="flex lg:flex-row md:flex-row flex-col justify-center items-center">
                      <div class="col-md-3 w-auto ">
                        <x-form.input for='capacity' name='capacity' id='capacity' type='number' placeholder='capacity' label='capacity'>
                          <x-form.errorinput type='capacity'/>
                        </x-form.input> 
                      </div>
                    
                      <div class="col-md-3  lg:mx-8 w-auto">
                        <x-form.input for='rom' name='rom' id='rom' type='number' placeholder='rom' label='rom'>
                          <x-form.errorinput type='rom'/>
                        </x-form.input> 
                      </div>
                </div>
                <div class="flex lg:flex-row md:flex-row flex-col justify-center items-center">
                      <div class="col-md-3 w-auto  ">
                        <x-form.input for='front-camera' name='front-camera' id='front-camera' type='number' placeholder='front-camera' label='front-camera'>
                          <x-form.errorinput type='front-camera'/>
                        </x-form.input> 
                      </div>
                      <div class="col-md-3 lg:mx-8 w-auto">
                        <x-form.input for='back-camera' name='back-camera' id='back-camera' type='number' placeholder='back-camera' label='back-camera'>
                          <x-form.errorinput type='back-camera'/>
                        </x-form.input> 
                      </div>
                </div>
                <div class="flex lg:flex-row md:flex-row flex-col justify-center items-center">
                      <div class="col-md-3 w-auto">
                        <x-form.input for='capteur' name='capteur' id='capteur' type='text' placeholder='capteur' label='capteur'>
                          <x-form.errorinput type='capteur'/>
                        </x-form.input> 
                      </div>
                      <div class="col-md-3 lg:mx-8 w-auto">
                        <x-form.input for='price' name='price' id='price' type='number' placeholder='price' label='price'>     
                          <x-form.errorinput type='price'/>
                        </x-form.input> 
                      </div>
                </div>
                <x-form.fileinput/>
            </div>
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">create a new phone</button>
                  <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">cancel</button>
            </div>
        </div>
    </div>
</div>
</form>
