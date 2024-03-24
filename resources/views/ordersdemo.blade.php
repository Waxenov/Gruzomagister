<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы с описанием -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <h2 class=" -mt-32 font-bold text-4xl text-gray-800 leading-tight">
                    {{ __('Ваши заказы') }}
                </h2>
                <div class="md:ml-10">
                    <h3 class="font-medium text-3xl text-[#876368] leading-tight">
                        {{ __('Как это работает') }}
                    </h3>
                    <p class="font-normal text-xl text-[#876368] leading-tight mt-4">
                        Ваши грузы теперь наши заказы<br>
                        Дождитесь отклика перевозчика<br>
                        И наконец уточните данные заказа<br>
                        Если не любите ждать — <a class="font-medium text-xl text-[#876368] leading-tight mt-4" href="{{ route('carriers') }}">Перевозчики</a>
                    </p>
                </div>
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-8">
                <div class="relative flex-1">
                    <input type="text" id="simple-search" class="block w-96 px-4 py-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] focus:outline-none" placeholder="Ищите и найдете">
                </div>
            </div>

            <!-- пример таблицы заказов -->
            <div class="relative overflow-x-auto">
                <table class="w-full  text-sm text-left rtl:text-right text-gray-500">

                    <!-- столбцы таблицы -->
                    <thead class="text-xs text-center text-gray-700 uppercase bg-[#ededed]">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-tl-[15px] bg-[#FF0015] text-white">
                                Номер
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Дата заказа
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Тип груза
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Описание
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Вес
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Дата готовности
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Место загрузки
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Место разгрузки
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Тип кузова
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-tr-[15px] bg-[#FF0015] text-white">
                                Удалить
                            </th>
                        </tr>
                    </thead>

                    <!-- содержимое таблицы -->
                    <tbody>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#FF5267]">#000 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 12:12:12 </td>
                            <td class="px-6 py-4 text-[#606060]"> Строительный </td>
                            <td class="px-6 py-4 text-[#606060]"> Пеноблоки </td>
                            <td class="px-6 py-4 text-[#606060]"> 100.00 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт А </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт Б </td>
                            <td class="px-6 py-4 text-[#606060]"> Открытый </td>
                            <td class="px-6 py-4 text-[#FF5267]">
                                <button type="button" class="text-white bg-[#FF5267] font-black rounded-full text-sm px-7 py-2.5 text-center me-2 mb-2"> X </button>
                            </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#FF5267]">#000 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 12:12:12 </td>
                            <td class="px-6 py-4 text-[#606060]"> Товары для дома </td>
                            <td class="px-6 py-4 text-[#606060]"> Люстра, батареи, вывеска </td>
                            <td class="px-6 py-4 text-[#606060]"> 100.00 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт А </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт Б </td>
                            <td class="px-6 py-4 text-[#606060]"> Закрытый </td>
                            <td class="px-6 py-4 text-[#FF5267]">
                                <button type="button" class="text-white bg-[#FF5267] font-black rounded-full text-sm px-7 py-2.5 text-center me-2 mb-2"> X </button>
                            </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#FF5267]">#000 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 12:12:12 </td>
                            <td class="px-6 py-4 text-[#606060]"> Мебель </td>
                            <td class="px-6 py-4 text-[#606060]"> Комод, шкаф, сервант </td>
                            <td class="px-6 py-4 text-[#606060]"> 100.00 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт А </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт Б </td>
                            <td class="px-6 py-4 text-[#606060]"> Открытый </td>
                            <td class="px-6 py-4 text-[#FF5267]">
                                <button type="button" class="text-white bg-[#FF5267] font-black rounded-full text-sm px-7 py-2.5 text-center me-2 mb-2"> X </button>
                            </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#FF5267]">#000 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 12:12:12 </td>
                            <td class="px-6 py-4 text-[#606060]"> Электроника </td>
                            <td class="px-6 py-4 text-[#606060]"> Компьютер, стиралка, сушилка </td>
                            <td class="px-6 py-4 text-[#606060]"> 100.00 </td>
                            <td class="px-6 py-4 text-[#606060]"> 2024-00-00 </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт А </td>
                            <td class="px-6 py-4 text-[#606060]"> Пункт Б </td>
                            <td class="px-6 py-4 text-[#606060]"> Закрытый </td>
                            <td class="px-6 py-4 text-[#FF5267]">
                                <button type="button" class="text-white bg-[#FF5267] font-black rounded-full text-sm px-7 py-2.5 text-center me-2 mb-2"> X </button>
                            </td>
                        </tr>

                        <!-- конечная строчка -->
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-6 text-[#FF5267] rounded-bl-[15px] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#606060] font-black text-xl"> ... </td>
                            <td class="px-6 py-6 text-[#FF5267] rounded-br-[15px] font-black text-xl"> ... </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>