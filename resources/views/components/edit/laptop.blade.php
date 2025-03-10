<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<form  method="POST" action="{{ route('magazin.update'  , $laptop) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="hidden" name="product_type" value="laptop">

    <div id="edit-modal-laptop" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        EDIT
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
                            <x-form.input for='reference' name='reference' id='reference' type='text' placeholder='reference' label='reference' value="{{ $laptop->reference }}">
                                <x-form.errorinput type='reference'/>
                            </x-form.input> 
                        </div>
                        <div class="col-md-3 lg:mx-8 w-auto">
                            <x-form.input for='nombre' name='nombre' id='nombre' type='text' placeholder='nombre' label='nombre' value="{{ $product->nombre }}">
                                <x-form.errorinput type='nombre'/>
                            </x-form.input> 
                        </div>
                    
                    </div>
                    <div class="flex lg:flex-row md:flex-row flex-col justify-center items-center">
                        <div class="col-md-3 w-auto ">
                            <x-form.input for='ram' name='ram' id='ram' type='text' placeholder='ram' label='ram' value="{{ $laptop->ram }}">
                                <x-form.errorinput type='ram'/>
                            </x-form.input> 
                        </div>
                        
                        <div class="col-md-3  lg:mx-8 w-auto">
                            <x-form.input for='rom' name='rom' id='rom' type='text' placeholder='rom' label='rom' value="{{ $laptop->rom }}">
                                <x-form.errorinput type='rom'/>
                            </x-form.input> 
                        </div>
                    </div>
                    <div class="flex lg:flex-row md:flex-row flex-col justify-center items-center">
                        <div class="col-md-3 w-auto ">
                            <x-form.input for='processeur' name='processeur' id='processeur' type='text' placeholder='processeur' label='processeur' value="{{ $laptop->processeur }}">
                                <x-form.errorinput type='processeur'/>
                            </x-form.input> 
                        </div>
                        
                        <div class="col-md-3  lg:mx-8 w-auto">
                            <x-form.input for='carte-graphique' name='carte-graphique' id='carte-graphique' type='text' placeholder='carte-graphique' label='carte-graphique' value="{{ $laptop->carte_graphique }}">
                                <x-form.errorinput type='carte-graphique'/>
                            </x-form.input> 
                        </div>
                    </div>
                    <div class="flex lg:flex-row md:flex-row flex-col justify-center items-center">
                        <div class="col-md-3 w-auto ">
                            <x-form.input for='price' name='price' id='price' type='text' placeholder='price' label='price' value="{{ $product->price }}">
                                <x-form.errorinput type='price'/>
                            </x-form.input> 
                        </div>
                        

                    </div>
                    <x-form.fileinput/>


                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">save</button>
                    <button data-modal-hide="edit-modal-laptop" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
