<x-app-layout>
    <div class="max-h-full min-h-screen">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h2 class="font-title text-4xl text-[#1E1E1E] leading-tight">
                    {{ __('Вам заказы') }}
                    <br>
                    <a href="{{ route('ordersdemo') }}" class="text-[#696969] hover:font-titlecursive inline-flex items-center text-2xl font-title text-center py-4">
                        {{ __('Заказы заказчика?') }}
                    </a>
                </h2>
                <div class="text-[#696969]">
                    <a href="{{ route('carordersdemo') }}" class="hover:font-titlecursive inline-flex items-center text-4xl font-title text-center py-4">
                        {{ __('Заказы в работе') }}
                    </a>
                </div>
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-10 items-end">
                <div class="relative flex w-full h-fit">
                    <form class="w-full flex flex-cols-2 gap-10">
                        <div class="flex flex-cols-2 gap-4 sm:gap-2 max-w-full max-h-fit">
                            <x-button type="submit">все</x-button>
                            <x-input type="text" name="search" class="text-center w-full block px-4 text-xl focus:outline-none font-maincraft" autocomplete="off" placeholder="найдём"></x-input>
                            <x-button type="submit">поиск</x-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- таблица заказов -->
            <div class="relative overflow-x-auto rounded-xl">
                <table class="max-w-full min-w-screen text-lg text-[#1E1E1E] font-light">
                    <thead class="bg-[#FFFAFA] text-[#1E1E1E] lowercase text-xl text-center font-light font-maincraft leading-tight border-b-4 border-[#DCDCDC]">
                        <tr>
                            <th scope="col" class="px-8 py-4 font-maincraft bg-[#B00000] text-[#FAEEDD] text-xl font-light">
                                ID
                            </th>                            
                            <th scope="col" class="px-4 py-4 font-light">
                                заказчик
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
                            <th scope="col" class="px-4 py-4 font-light">
                                отправка
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                доставка
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                готов
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                кузов
                            </th>
                            <th scope="col" class="px-2 py-4 bg-[#228B22] text-[#FFFAFA] font-light">
                                принять
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- вывод данных о заказах -->
                    <tr class="bg-[#FFFAFA] font-neutral hover:bg-[#DCDCDC] text-center py-6">
                        <td><a href="{{ route('idorderdemo') }}" class="text-[#B00000] hover:text-[#FFFAFA] font-light font-maincraft text-2xl"> 1 </a></td>
                        <td class="px-2 hover:bg-[#F5F5F5]">Фамилия Имя Отчество</td>
                        <td class="px-2 hover:bg-[#F5F5F5]">Строительный</td>
                        <td class="px-2 hover:bg-[#F5F5F5]">Пеноблоки</td>
                        <td class="px-2 hover:bg-[#F5F5F5]">100.00	</td>
                        <td class="px-2 hover:bg-[#F5F5F5]">Пункт А</td>
                        <td class="px-2 hover:bg-[#F5F5F5]">Пункт Б</td>
                        <td class="px-2 hover:bg-[#F5F5F5]">2024-00-00</td>
                        <td class="px-2 hover:bg-[#F5F5F5]">Открытый</td>
                        <td class="items-center">
                            <button class="w-full hover:bg-[#228B22] text-[#228B22] hover:text-[#FFFAFA] font-maincraft text-4xl">
                                +
                            </button>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>