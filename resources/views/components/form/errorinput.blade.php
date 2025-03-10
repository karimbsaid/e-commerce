@props([

    'type',

    ])
@error($type)
    <div class="text-orange-700">{{$message}}</div>
@enderror