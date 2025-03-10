<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <body>         
                  <script src="https://cdn.tailwindcss.com"></script>
                  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
                  @if(session('error'))
                  <p> {{ session('error') }} </p>
                  @endif

                  <x-quickview   />
                  <x-laptops   />
                  <x-dropdown.dropdown idDropDownController="create-new-product" title="add new product" idDropDownMenu="dropdown-create-product">
                      <x-dropdown.dropelement data_modal_target="default-modal" data_modal_toggle="default-modal" title='phone'/>
                      <x-dropdown.dropelement data_modal_target="modal" data_modal_toggle="modal" title='laptop'/>
                  </x-dropdown.dropdown>
                  <div class="pointer-events-auto ">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                      <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                        <div class="flex items-start justify-between">
                          <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Magazin product</h2>
                        </div>
                        <div class="mt-8">
                          <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                              @foreach($product as $product)
                                @if($product->laptops === null)
                                <x-card.productcard :product="$product" :productreference="$product->Phones->reference">
                                    <x-slot name="actions">
                                        <form method="post" action="{{ route('magazin.destroy', $product) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                        </form>
                                        <x-edit.phone :product='$product' :phone='$product->Phones'/>
                                        <a href="#" data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
                                    </x-slot>
                                    <x-slot name="details">
                                        <p class="mt-1 text-sm text-gray-500">capacite batterie : {{ $product->Phones->capacity }} | ROM : {{ $product->Phones->rom }} | front-camera : {{ $product->Phones->front_camera }} | back_camera : {{ $product->Phones->back_camera }} | capteurs:  {{ $product->Phones->capteur }}</p>
                                        <p class="mt-1 text-base font-medium text-gray-900">nombre : {{ $product->nombre }}</p>
                                    </x-slot>
                                </x-card.productcard>
                                @endif
                                @if($product->Phones === null)
                                <x-card.productcard :product="$product" :productreference="$product->laptops->reference">
                                    <x-slot name="actions">
                                        <form method="post" action="{{ route('magazin.destroy', $product) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                        </form>
                                        <x-edit.laptop :product='$product' :laptop='$product->laptops'/>
                                        <a href="#" data-modal-target="edit-modal-laptop" data-modal-toggle="edit-modal-laptop"  class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>

                                    </x-slot>
                                    <x-slot name="details">
                                      <p class="mt-1 text-sm text-gray-500">RAM : {{$product->laptops->ram}} |  ROM : {{$product->laptops->rom}}   </p>
                                      <p class="mt-1 text-sm text-gray-500">carte graphique : {{$product->laptops->carte_graphique}} | processeur : {{$product->laptops->processeur}}</p>
                                      <p class="mt-1 text-base font-medium text-gray-900">nombre : {{$product->nombre}}</p>
                                    </x-slot>
                                </x-card.productcard>
                                @endif
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </body>
        </div>
    </div>
</x-app-layout>

