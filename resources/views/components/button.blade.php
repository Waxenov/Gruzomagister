<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-[#B00000] rounded-xl hover:rounded-none inline-flex items-center px-2 py-2 border-4 border-solid hover:border-dashed hover:bg-[#FFFAFA] border-[#B00000] font-maincraft text-lg sm:text-xl text-[#FFFAFA] tracking-widest hover:bg-[#FFFAFA] hover:text-[#B00000] focus:bg-[#FFFAFA] active:bg-[#DCDCDC] active:border-[#DCDCDC] focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
