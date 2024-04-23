@props(['active' => false])
<li>
    <a class="{{ $active ? 'border rounded-xl text-white' : 'text-white-500 hover:rounded-xl hover:border hover:text-white"' }} rounded-md px-3 py-2 text-xs"
        aria-current="{{ request()->is('/') ? 'page' : 'false' }}"{{ $attributes }}>{{ $slot }}</a>
</li>
