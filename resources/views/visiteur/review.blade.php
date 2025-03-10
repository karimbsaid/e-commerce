
<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>review</title>
                <script src="https://cdn.tailwindcss.com"></script>

            </head>
            <body>
            <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <div class="grid w-full grid-cols-2 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                        <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                            <img src="{{ asset('storage/images/' . $photo) }}" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
                        </div>
                        <div class="sm:col-span-8 lg:col-span-7">
                            <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{$product->reference}}</h2>

                            <section aria-labelledby="information-heading" class="mt-2">
                            <h3 id="information-heading" class="sr-only">Product information</h3>

                            <p class="text-2xl text-gray-900">{{$price}} dt</p>
                            </section>
                            <section aria-labelledby="options-heading" class="mt-10">
                            <form method="post" action="{{ route('bag.store',$product) }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $id}}">
                                <div>
                                @if(isset($product->capacity))
                                <p class="text-2xl text-gray-900">capacity batterie : {{$product->capacity}}</p>
                                @endif
                                @if(isset($product->ram))
                                <p class="text-2xl text-gray-900">ram : {{$product->ram}}</p>
                                @endif
                                <p class="text-2xl text-gray-900">rom : {{$product->rom}}</p>
                                @if(isset($product->processeur))
                                    <p class="text-2xl text-gray-900">processeur : {{$product->processeur}}</p>
                                @endif
                                @if(isset($product->carte_graphique))
                                    <p class="text-2xl text-gray-900">carte graphique : {{$product->carte_graphique}}</p>
                                @endif
                                @if(isset($product->capteur))
                                <p class="text-2xl text-gray-900"> capteur : {{$product->capteur}}</p>
                                @endif
                                @if(isset($product->back_camera))
                                <p class="text-2xl text-gray-900">back camera : {{$product->back_camera}}</p>
                                @endif
                                @if(isset($product->front_camera))
                                <p class="text-2xl text-gray-900">front camera : {{$product->front_camera}}</p>
                                @endif



                                
                                </div>
                                <button type="submit" class=" mt-6 flex w-15 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
                            </form>
                            </section>
                        </div>

                        </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

                    
            </body>
            </html>
        </div>
    </div>
</x-app-layout>