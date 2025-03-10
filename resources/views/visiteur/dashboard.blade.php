
<x-app-layout>
    <x-slot name="header" >
    <div class="">
        <!-- <div>
                <x-filter.category>
                    <x-filter.categoryElement for='phones' value='phone' id='phone' label='phone'/>
                    <x-filter.categoryElement for='laptops' value='laptops' id='laptops' label='laptops'/>
                </x-filter.category>
        </div> -->

        <x-filter.search id="search" name="search"/>

    </div>

    </x-slot>
    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                    <script src="https://cdn.tailwindcss.com"></script>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
                </head>
                <body>

                    <div class="bg-white">
                    <!-- More phones... -->

                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Phones</h2>

                        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @foreach($products as $product)
                        @if($product->laptops_id === null)
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{ asset('storage/images/' . $product->photo) }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                <a href="{{route('visiteur.show',$product->id)}}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{$product->Phones->reference}}
                                </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{$product->status}}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">{{$product->price}} dt</p>
                            </div>
                        </div>
                        @endif

                        @endforeach

                        <!-- More products... -->
                        
                        </div>
                    </div>



                     <!-- More laptops... -->
                    
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Laptops</h2>

                        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @foreach($products as $product)
                        @if($product->phones_id === null)
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{ asset('storage/images/' . $product->photo) }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                <a href="{{route('visiteur.show',$product->id)}}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{$product->laptops->reference}}
                                </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{$product->status}}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">{{$product->price}} dt</p>
                            </div>
                        </div>
                        @endif

                        @endforeach

                        <!-- More products... -->
                        
                        </div>
                    </div>
                    </div>

                </body>
                </html>
        </div>
    </div>
</x-app-layout>