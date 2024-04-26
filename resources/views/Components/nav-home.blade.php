@props([
    'active' => false,
])
<li>
    <a class="{{ $active ? 'border rounded-xl text-white' : 'text-white-500 hover:underline pb-4' }} 
        rounded-md px-3 py-2 text-lg"
        aria-current="{{ request()->is('/') ? 'page' : 'false' }}"{{ $attributes }}>
        {{ $slot }}
    </a>
</li>
