@props([

'data_modal_target'=> null,
'data_modal_toggle'=> null,
'title'

])
<li>
    <a href="#" 
    @if($data_modal_target !== null) data-modal-target="{{$data_modal_target}}" @endif 
    @if($data_modal_toggle !== null) data-modal-toggle="{{$data_modal_toggle}}" @endif
    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$title}}</a>
</li>