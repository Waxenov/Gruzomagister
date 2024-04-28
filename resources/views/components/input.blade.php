@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-[15px] focus:rounded-none focus:border-dashed text-[#909090] text-xl font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FFFAFA] focus:ring-0 placeholder-[#909090]']) !!}>
