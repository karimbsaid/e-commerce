@props([
    'for',
     'value',
     'id',
    'label'
])
<li>
    <div class="flex items-center">
        <input id="{{$id}}" type="checkbox" value="{{$value}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="{{$for}}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$label}}</label>
    </div>
</li>