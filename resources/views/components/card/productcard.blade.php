<!-- ProductItem.blade.php -->

<li class="flex py-6">
    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
        <img src="{{ asset('storage/images/' . $product->photo) }}"  class="h-full w-full object-cover object-center">
    </div>

    <div class="ml-4 flex flex-1 flex-col">
        <div>
            <div class="flex justify-between text-base font-medium text-gray-900">
                <h3>
                    <a href="#">{{ $productreference }}</a>
                </h3>
                <div class="flex flex-col text-sm">
                    {{ $actions }}
                </div>
            </div>
            {{ $details }}
        </div>
    </div>
</li>
