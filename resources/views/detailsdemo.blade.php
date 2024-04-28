<x-app-layout>
    <div class="max-h-full min-h-screen">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h2 class="font-title text-4xl text-[#1E1E1E] leading-tight">
                    {{ __('Детали заказов') }}
                </h2>
                <div class="text-[#696969]">
                    <a href="{{ route('ordersdemo') }}" class="hover:font-titlecursive inline-flex items-center text-4xl font-title text-center py-4">
                        {{ __('Назад к заказам') }}
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

            <!-- список заказов -->
            <div class="relative overflow-x-auto rounded-xl">
                <table class="max-w-full min-w-screen text-lg text-[#FFFAFA] font-light">
                    <thead class="bg-[#FFFAFA] text-[#131313]  lowercase text-xl text-center font-maincraft leading-tight border-b-4 border-[#DCDCDC]">
                        <tr>
                            <th scope="col" class="px-4 py-4 bg-[#B00000] text-[#FFFAFA] text-xl normal-case font-light">
                                ID заказ
                            </th>
                            <th scope="col" class="px-4 py-4 bg-[#6495ED] text-[#FFFAFA] text-xl normal-case font-light">
                                ID перевозчик
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                статус
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                создан
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                готов
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                принято
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                отправлено
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                доставлено
                            </th>                            
                        </tr>
                    </thead>

                    <!-- данные деталей -->
                    <tbody>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center text-[#1C1C1C] py-6  ">
                        <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 2 </a></td>
                            <td class="text-[#6495ED] font-light font-maincraft text-2xl py-6"><a href="{{ route('carriers') }}" class="hover:text-[#B00000]">1</a></td>
                            <td class="hover:bg-[#F5F5F5] ">
                                <span class="flex items-center justify-center">
                                    <x-status-confirmed-logo class="block h-7 w-7"/>
                                </span>
                            </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 00:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 12:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 01:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> ... </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> ... </td>
                        </tr>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center text-[#1C1C1C] py-6  ">
                        <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 3 </a></td>
                            <td class="text-[#6495ED] font-light font-maincraft text-2xl py-6"><a href="{{ route('carriers') }}" class="hover:text-[#B00000]">2</a></td>
                            <td class="hover:bg-[#F5F5F5] ">
                                <span class="flex items-center justify-center">
                                    <x-status-traffic-logo class="block h-7 w-7"/>
                                </span>
                            </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 00:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 12:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 01:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 02:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> ... </td>
                        </tr>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center text-[#1C1C1C] py-6  ">
                        <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 4 </a></td>
                            <td class="text-[#6495ED] font-light font-maincraft text-2xl py-6"><a href="{{ route('carriers') }}" class="hover:text-[#B00000]">3</a></td>
                            <td class="hover:bg-[#F5F5F5] ">
                                <span class="flex items-center justify-center">
                                    <x-status-delivered-logo class="block h-7 w-7"/>
                                </span>
                            </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 00:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 12:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 01:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 02:00:00 </td>
                            <td class="px-2 hover:bg-[#F5F5F5] "> 2024-00-00 03:00:00 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>