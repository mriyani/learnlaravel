@props(['active' => false])

<!-- // NOTE: The :active attribute is used to determine if the link is active or not. It is passed from the layout.blade.php file. The request()->is() function is used to check if the current URL matches the given pattern. If it does, the link is active and the appropriate classes are applied to style it accordingly. -->

<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{$active}} ? 'page' : 'false' }}" {{ $attributes }}>{{$slot}}</a>