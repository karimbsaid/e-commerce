@props([
    'for',
    'type',
     'name',
     'value'=>null,
     'id',
    'placeholder',
    'label'
    ])
    <label for="{{$for}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{$label}}</label>
    <input @if($value !== null) value="{{$value}}" @endif name="{{$name}}" type="{{$type}}" id="{{$id}}" class="min-w-96 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$placeholder}}" required />

{{$slot}}
