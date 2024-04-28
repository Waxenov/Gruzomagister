<div class="rounded-[15px] h-screen flex flex-col justify-center sm:justify-center items-center py-4 px-4 pb-2">
    
    <div id="card" class="rounded-[15px] w-full sm:max-w-md mt-6 px-6 py-4 shadow-xl text-[#1E1E1E] bg-[#FFFAFA] border-4 border-[#DCDCDC]">
        {{ $slot }}
    </div>

    <div class="hidden">
        <button id="theme-toggle" class="p-2">
        </button>
    </div> 
</div>