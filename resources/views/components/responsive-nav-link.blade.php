@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#B00000] text-start text-base font-title text-[#B00000] transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-neutral text-[#909090] hover:text-[#FF0000] hover:border-[#FF0000] focus:outline-none focus:text-[#FF0000] focus:border-[#FF0000] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
