<x-app-layout>
    <div class="max-h-full min-h-screen">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h1 class="font-title text-4xl text-[#1E1E1E] leading-tight">
                    {{ __('Ваши заказы') }}
                    <br>
                    <a href="{{ route('ordersdemoc') }}" class="text-[#696969] hover:font-titlecursive inline-flex items-center text-2xl font-title text-center py-4">
                        {{ __('Заказы перевозчика?') }}
                    </a>
                </h1>
                <div class="text-[#696969]">
                    <a href="{{ route('detailsdemo') }}" class="hover:font-titlecursive inline-flex items-center text-4xl font-title text-center py-4">
                        {{ __('Детали заказов') }}
                    </a>
                    
                </div>
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-10 items-end">
                <div class="relative flex w-full h-fit">
                    <form class="w-full flex flex-cols-2 gap-10">
                        <div class="flex flex-cols-2 sm:gap-4 gap-2 max-w-full max-h-fit">
                            <x-button type="submit">все</x-button>
                            <x-input type="text" name="search" class="text-center w-full block px-4 text-xl focus:outline-none font-maincraft" autocomplete="off" placeholder="найдём"></x-input>
                            <x-button type="submit">поиск</x-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- таблица заказов -->
            <div class="relative overflow-x-auto rounded-xl">
                <table class="max-w-full min-w-screen text-lg text-[#1C1C1C]">
                    <thead class="bg-[#FFFAFA] text-[#131313] lowercase text-xl text-center font-light font-maincraft leading-tight border-b-4 border-[#DCDCDC]">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-maincraft bg-[#B00000] text-[#FFFAFA] text-xl font-light">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                создан
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                тип
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                описание
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                вес
                            </th>
                            <th scope="col" class="px-10 py-4 font-light">
                                готов
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                отправка
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                доставка
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                кузов
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                статус
                            </th>
                            <th scope="col" class="px-4 py-4 font-maincraft bg-[#B00000] text-[#FFFAFA] text-xl font-light">
                                del
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-[#FFFAFA] hover:bg-[#DCDCDC] font-neutral text-center py-6">
                            <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 1 </a></td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 2024-00-00 00:00:00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Строительный </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Пеноблоки </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 100.00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 2024-00-00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Пункт А </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Пункт Б </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Открытый </td>
                            <td class="hover:bg-[#FFFAFA]">
                                <span class="flex items-center justify-center">
                                    <x-status-pending-logo class="block h-5 w-5"/>
                                </span>
                            </td>
                            <td class="hover:bg-[#B00000]">
                                <button type="button" class="inline-flex px-2 pb-1 items-center font-maincraft text-4xl text-[#B00000] tracking-widest hover:text-[#FFFAFA] hover:bg-[#B00000]">×</button>
                            </td>
                        </tr>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center py-6">
                        <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 2 </a></td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 2024-00-00 00:00:00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Товары для дома </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Люстра, батареи, вывеска </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 100.00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 2024-00-00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Пункт А </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Пункт Б </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Закрытый </td>
                            <td class="hover:bg-[#FFFAFA]">
                                <span class="flex items-center justify-center">
                                    <x-status-confirmed-logo class="block h-7 w-7"/>
                                </span>
                            </td>
                            <td class="hover:bg-[#B00000]">
                                <button type="button" class="inline-flex px-2 pb-1 items-center font-maincraft text-4xl text-[#B00000] tracking-widest hover:text-[#FFFAFA] hover:bg-[#B00000]">×</button>
                            </td>
                        </tr>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center py-6">
                        <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 3 </a></td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 2024-00-00 00:00:00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Мебель </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Комод, шкаф, сервант </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 100.00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> 2024-00-00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Пункт А </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Пункт Б </td>
                            <td class="px-2 hover:bg-[#FFFAFA] "> Открытый </td>
                            <td class="hover:bg-[#FFFAFA]">
                                <span class="flex items-center justify-center">
                                    <x-status-traffic-logo class="block h-7 w-7"/>
                                </span>
                            </td>
                            <td class="hover:bg-[#B00000]">
                                <button type="button" class="inline-flex px-2 pb-1 items-center font-maincraft text-4xl text-[#B00000] tracking-widest hover:text-[#FFFAFA] hover:bg-[#B00000]">×</button>
                            </td>
                        </tr>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center py-6">
                        <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 4 </a></td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> 2024-00-00 00:00:00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> Электроника </td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> Компьютер, стиралка, сушилка </td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> 100.00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> 2024-00-00 </td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> Пункт А </td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> Пункт Б </td>
                            <td class="px-2 hover:bg-[#FFFAFA]"> Открытый </td>
                            <td class="hover:bg-[#FFFAFA]">
                                <span class="flex items-center justify-center">
                                    <x-status-delivered-logo class="block h-6 w-6"/>
                                </span>
                            </td>
                            <td class="hover:bg-[#B00000]">
                                <button type="button" class="inline-flex px-2 pb-1 items-center font-maincraft text-4xl text-[#B00000] tracking-widest hover:text-[#FFFAFA] hover:bg-[#B00000]">×</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>