<x-app-layout>
    <div class="max-h-full min-h-screen flex justify-center">

        <!-- заголовок -->
        <div id="zag" class="bg-[#FFFAFA] px-10 h-fit rounded-xl">
            <h1 class="font-title sm:text-4xl text-2xl text-[#1C1C1C] leading-tight py-5 text-start">
                {{ __('Ваш новый груз') }}
            </h1>

            <!-- форма создания заказа -->
            <livewire:formloadcomponent>
        </div>
    </div>
</x-app-layout>