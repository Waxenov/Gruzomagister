<x-app-layout>
    <div>
            <div class="mx-auto max-w-7xl portrait:pt-10 pb-10">
                <div id="dashboard" class="sm:flex sm:justify-between grid grid-cols-1 overflow-hidden bg-[#FFFAFA] pt-4 rounded-[15px] sm:px-16 md:pt-24 lg:flex lg:pt-0">
                    <div class="max-w-md sm:w-full py-10 sm:mx-0 portrait:px-2 portrait:py-3 lg:flex-auto lg:text-left">
                        <h1 class="flex justify-start text-start text-4xl font-title tracking-tight text-[#B00000] sm:text-5xl">Оптимизация операций</h1>
                        <h2 class="mt-6 text-xl font-neutral leading-8 text-[#909090]">От начала до конца мы позаботимся обо всём, чтобы обеспечить безопасную доставку вашего груза</h2>
                    </div>
                    <div class="max-w-md sm:w-full py-10 sm:mx-0 portrait:px-2 portrait:py-3 lg:flex-auto lg:text-left">
                        <h1 class="flex justify-start text-start text-4xl font-title tracking-tight text-[#B00000] sm:text-5xl">Достойные удобства</h1>
                        <h2 class="mt-6 text-xl font-neutral leading-8 text-[#909090]">Упростите процесс доставки и сделайте его более эффективным с помощью нашего сервиса</h2>
                    </div>
                </div>
            </div>
    </div>

    <!-- новости -->
        <div class="max-w-7xl mx-auto">
            <!-- отзывы -->
            <div>
                <h1 class="p-5 text-4xl tracking-tight font-title text-[#1E1E1E]">Наши отзывы</h1>
                <div class="mt-10 mb-4 flex-col justify-between items-center sm:max-w-screen-xl lg:grid lg:grid-cols-3 gap-8">

                    <!-- отзыв 1 -->
                    <div id="comment" class="max-w-sm mb-4 font-neutral bg-[#FFFAFA] rounded-[15px]">
                        <div class="p-5">
                            <h2 class="mb-3 font-neutral text-[#1C1C1C]">Содержание отзыва.</h2>
                            <p class="mb-3 font-maincraft text-[#B00000]">Пользователь</p>
                        </div>
                    </div>

                    <!-- отзыв 2 -->
                    <div id="comment" class="max-w-sm mb-4 bg-[#FFFAFA] font-neutral rounded-[15px]">
                        <div class="p-5">
                            <h2 class="mb-3 font-neutral text-[#1C1C1C]">Содержание отзыва.</h2>
                            <p class="mb-3 font-maincraft text-[#B00000]">Пользователь</p>
                        </div>
                    </div>
                    
                    <!-- отзыв 3 -->
                    <div id="comment" class="max-w-sm font-neutral bg-[#FFFAFA] rounded-[15px]">
                        <div class="p-5">
                            <h2 class="mb-3 font-neutral text-[#1C1C1C]">Содержание отзыва.</h2>
                            <p class="mb-3 font-maincraft text-[#B00000]">Пользователь</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>