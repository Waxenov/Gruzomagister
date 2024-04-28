<x-app-layout>
    <!-- о проекте -->
    <div>
        <div class="mx-auto max-w-6xl portrait:pt-10 pb-10">
                <div id="dashboard" class="relative isolate overflow-hidden bg-[#FFFAFA] pt-4 rounded-[15px] sm:px-16 md:pt-24 lg:flex lg:pt-0">
                    <div class="mx-auto max-w-md text-center py-10 sm:mx-0 portrait:px-3 portrait:py-3 lg:flex-auto lg:text-left">
                        <h1 class="text-4xl font-title tracking-tight text-[#B00000] sm:text-5xl">Мы двигаем мир</h1>
                        <h2 class="mt-6 text-xl font-neutral leading-8 text-[#696969]">Более двух месяцев портал ГрузоМагистр является одним из первых проектов логистических услуг по Омской области. У нас есть опыт и экспертные знания, чтобы обеспечить безопасную и эффективную транспортировку ваших грузов. При небольшой сети партнеров, мы предложим вам широкий спектр услуг. Пока проект находится в разработке.</h2>
                        <h2 class="mt-6 text-xl font-neutral leading-8 text-[#696969]">Империя за день не строится</h2>
                    </div>
                </div>
            </div>
        </div>

    <!-- о действиях -->
    <div class="max-w-6xl mx-auto">
        <section id="card" class="bg-[#FFFAFA] rounded-[15px] border-8 border-[#FFFAFA]">
            <h1 class="pt-10 sm:px-10 px-2 text-4xl sm:text-5xl font-title tracking-tight text-[#1E1E1E]">Кто мы такие</h1>
            <h2 class="sm:pt-10 sm:px-10 pt-4 px-2 text-2xl font-neutral text-[#909090]">Ваши будущие любимчики</h2>
            <div class="mx-auto sm:px-10 p-2 pb-8">
                <div class="grid text-left border-t-2 border-[#DCDCDC]">
                    <div>
                        <div class="mb-10 pt-8">
                            <h2 class="flex font-title items-center mb-4 text-lg font-medium text-[#1E1E1E] ">
                                Проект ГрузоМагистр создан в Омске, Россия
                            </h2>
                            <p class="text-[#909090] font-neutral">30.01.2024</p>
                        </div>
                        <div class="mb-10">
                            <h2 class="flex font-title items-center mb-4 text-lg font-medium text-[#1E1E1E] ">
                                Портал ГрузоМагистр запущен
                            </h2>
                            <p class="text-[#909090] font-neutral">06.04.2024</p>
                        </div>
                        <div>
                            <h3 class="flex font-title items-center mb-4 text-lg font-medium text-[#B00000] ">
                                Будущее
                            </h3>
                            <h3 class="text-[#B00000] font-neutral">XX.XX.2024</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- как работает -->
    <div class="py-12 sm:max-w-6xl mx-auto">
        <section id="card" class="bg-[#FFFAFA] rounded-[15px] border-8 border-[#FFFAFA]">
            <div class="sm:pt-10 pt-2 sm:px-10 px-2 mx-auto">
                <h1 class="text-4xl sm:text-5xl font-title text-[#1E1E1E]">Как это работает</h1>
                <h2 class="sm:pt-10 pt-4 text-2xl font-neutral text-[#909090] ">Всё проще, чем кажется</h2>
                <div class="grid pt-10 text-left border-t-2 border-[#DCDCDC] md:gap-16 md:grid-cols-2">
                    <div class="mb-10">
                        <h1 class="flex items-center mb-4 text-xl font-title text-[#1E1E1E] ">
                            <svg class="flex-shrink-0 mr-2 w-6 h-6 text-[#909090]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            Что за статусы заказов?
                        </h1>
                        <div class="grid grid-col-1 gap-y-2 text-xl font-neutral text-[#909090]">
                            <div class="w-fit flex justify-center items-center text-center">
                                <x-status-pending-logo class="block h-5 w-5"/><span class="ps-6 font-maincraft text-[#6495ED]">обработка</span>
                            </div>
                            <div class="w-fit flex justify-center items-center text-center">
                                <x-status-confirmed-logo class="block h-7 w-7"/><span class="ps-6 font-maincraft text-[#30BA8F]">принято</span>
                            </div>            
                            <div class="w-fit flex justify-center items-center">
                                <x-status-traffic-logo class="block h-7 w-7"/><span class="ps-6 font-maincraft text-[#FF9218]">отправлено</span>
                            </div>            
                            <div class="w-fit flex justify-center items-center">
                                <x-status-delivered-logo class="block h-6 w-6"/><span class="ps-6 font-maincraft text-[#F64A8A]">доставлено</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-10">
                        <h1 class="flex items-center mb-4 text-xl font-title text-[#1E1E1E] ">
                            <svg class="flex-shrink-0 mr-2 w-6 h-6 text-[#909090]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            Что на странице Заказы?
                        </h1>
                        <h2 class="text-[#909090] text-xl font-neutral">Вывод заказов, в зависимости от роли пользователя. Заказчик видит данные своих заказов, с возможностью удалить любой заказ. Перевозчик видит все заказы со статусом "обработка", также с возможностью принять любой заказ.</h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>