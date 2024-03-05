@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#EBE5E5] text-[#876368] border-gray-300 focus:border-[#FF0015] focus:bg-[#EBE5E5]  focus:ring-[#FF0015] rounded-md shadow-sm']) !!}>
