<x-app-layout>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <body>         
                  <script src="https://cdn.tailwindcss.com"></script>
                  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
                  <div class="pointer-events-auto ">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                      <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                        <div class="flex items-start justify-between">
                          <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">ALL COMMANDE</h2>
                        </div>
                        <div class="mt-8">
                          <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                              @foreach($productsWithCoordinates as $pc)
                                @if($pc['product']->laptops === null)
                                <x-card.productcard :product="$pc['product']" :productreference="$pc['product']->Phones->reference">
                                    <x-slot name="actions">

                                        <form method="POST" action="{{ route('commande.update', $pc['product']) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"  class="font-medium text-indigo-600 hover:text-indigo-500">valider</button>
                                        </form>
                                    </x-slot>
                                    <x-slot name="details">
                                        <p class="mt-1 text-sm text-gray-500">city : {{ $pc['coordinates']['city'] }} | region : {{ $pc['coordinates']['region']}} | code postal : {{ $pc['coordinates']['codeP']}}  | phone number : {{ $pc['coordinates']['phoneN']}} </p>
                                    </x-slot>
                                </x-card.productcard>
                                @endif
                                @if($pc['product']->Phones === null)
                                <x-card.productcard :product="$pc['product']" :productreference="$pc['product']->laptops->reference">
                                    <x-slot name="actions">

                                        <form method="POST" action="{{ route('commande.update', $pc['product']) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"  class="font-medium text-indigo-600 hover:text-indigo-500">valider</button>
                                        </form>

                                    </x-slot>
                                    <x-slot name="details">
                                    <p class="mt-1 text-sm text-gray-500">city : {{ $pc['coordinates']['city'] }} | region : {{ $pc['coordinates']['region']}} | code postal : {{ $pc['coordinates']['codeP']}}  | phone number : {{ $pc['coordinates']['phoneN']}} </p>

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

