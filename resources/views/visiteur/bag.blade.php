
<x-app-layout>
  @if(session('success'))
            <div class='block items-center flex justify-center'>
                <x-flash.toast subject="success"/>
            </div>
  @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <script src="https://cdn.tailwindcss.com"></script>
              <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
              <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
              <title>Document</title>
          </head>
          <body>

            
            

                  <div class="pointer-events-auto ">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                      <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                        <div class="flex items-start justify-between">
                          <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                          <div class="ml-3 flex h-7 items-center">
                            
                          </div>
                        </div>

                        <div class="mt-8">
                          <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                            @php $totalPrice = 0; @endphp
                              @if($product!=null)
                                @foreach($product as $product)
                                
                                  @if($product->laptops === null)
                                    <x-card.productcard :product="$product" :productreference="$product->Phones->reference">
                                          <x-slot name="actions">
                                              <form method="post" action="{{ route('bag.destroy', $product) }}">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                              </form>
                                          </x-slot>
                                          <x-slot name="details">
                                              <p class="mt-1 text-sm text-gray-500">capacité batterie : {{ $product->Phones->capacity }} | ROM : {{ $product->Phones->rom }} | front-camera : {{ $product->Phones->front_camera }} | back_camera : {{ $product->Phones->back_camera }} | capteurs :  {{ $product->Phones->capteur }}</p>
                                              <p class="mt-1 text-base font-medium text-gray-900">prix : {{ $product->price }}</p>

                                          </x-slot>
                                    </x-card.productcard>

                                  @endif
                                  @if($product->Phones === null)
                                    <x-card.productcard :product="$product" :productreference="$product->laptops->reference">
                                          <x-slot name="actions">
                                              <form method="post" action="{{ route('bag.destroy', $product) }}">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                              </form>
                                          </x-slot>
                                          <x-slot name="details">
                                            <p class="mt-1 text-sm text-gray-500">RAM : {{$product->laptops->ram}} | ROM : {{$product->laptops->rom}}   </p>
                                            <p class="mt-1 text-sm text-gray-500">carte graphique : {{$product->laptops->carte_graphique}} | processeur : {{$product->laptops->processeur}}</p>
                                            <p class="mt-1 text-base font-medium text-gray-900">prix : {{ $product->price }}</p>
                                          </x-slot>
                                      </x-card.productcard>

                                      
                                  @endif
                                  @php $totalPrice += $product->price; @endphp

                                @endforeach
                                <x-form.commande/>
                                <p class=" font-bold underline decoration-sky-500/30">total = {{$totalPrice}} TND  </p>
                                <br/>
                                <form method="POST" action="{{ route('commande.store') }}">
                                @csrf
                                  <button type="submit" class="mb-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">commander</button>
                                </form>
                                <br/>
                      
                              @else
                              <p> you have no element in bag yet !!</p>
                              @endif
                            


                            </ul>
                          </div>
                        </div>
                      </div>

                      
                    </div>
                  </div>

        
          </body>
          </html>
        </div>
    </div>
</x-app-layout>

