@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#f7f7f7] text-[#333333] border-gray-300 focus:border-[#FF0015] focus:bg-[#fff]  focus:ring-[#FF0015] rounded-md shadow-sm']) !!}>
