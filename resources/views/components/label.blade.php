@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-title text-sm text-[#1E1E1E]']) }}>
    {{ $value ?? $slot }}
</label>
