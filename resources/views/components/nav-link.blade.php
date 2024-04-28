@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 sm:text-xl text-base font-title leading-5 text-[#B00000] focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 sm:text-xl text-base font-neutral leading-5 text-[#909090] hover:text-[#FF0000] focus:outline-none focus:text-[#B00000] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
