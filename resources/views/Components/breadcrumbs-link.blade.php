@props(['active' => false])
<li>
    <a class="{{ $active ? 'text-cyan-500 underline decoration-cyan-500' : 'text-white-600' }} rounded-md px-3 py-2 text-xs"
        aria-current="{{ request()->is('/') ? 'page' : 'false' }}"{{ $attributes }}>{{ $slot }}</a>
</li>
