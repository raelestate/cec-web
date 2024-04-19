@props([
    'active' => false,
])
<li>
    <a class="{{ $active ? 'bg-sky-600/70 text-white' : 'text-white-500 hover:bg-cyan-700 hover:text-white"' }} 
        rounded-md px-3 py-2 text-lg"
        aria-current="{{ request()->is('/') ? 'page' : 'false' }}"{{ $attributes }}>
        {{ $slot }}
    </a>
</li>
