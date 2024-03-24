<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">

                <!-- заголовок -->
                <h2 class=" -mt-32 font-bold text-4xl text-gray-800 leading-tight">
                    {{ __('Перевозчики') }}
                </h2>

                <!-- как это работает -->
                <div class="md:ml-10">
                    <h3 class="font-medium text-3xl text-[#876368] leading-tight">
                        {{ __('Как это работает') }}
                    </h3>
                    <p class="font-normal text-xl text-[#876368] leading-tight mt-4">
                        Выбирайте ваших перевозчиков<br>
                        Именно они доставят ваш ценный груз<br>
                        После чего можно оставить отзыв<br>
                        И не скупитесь на оценку доставки
                    </p>
                </div>
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-8">
                <div class="relative flex-1">
                    <input type="text" id="simple-search" class="block w-96 px-4 py-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] focus:outline-none" placeholder="Ищите и найдете">
                </div>
            </div>

            <!-- пример списка перевозчиков -->
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">

                    <!-- столбцы таблицы -->
                    <thead class="text-xs text-center text-gray-700 uppercase bg-[#ededed]">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-tl-[15px]">
                                Фамилия
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Имя
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Отчество
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-tr-[15px] bg-[#FF0015] text-white">
                                Телефон
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- пример данных перевозчиков -->
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#606060]">Иванов</td>
                            <td class="px-6 py-4 text-[#606060]">Иван</td>
                            <td class="px-6 py-4 text-[#606060]">Иванович </td>
                            <td class="px-6 py-4 text-[#FF5267]">+7 123 456 78 90 </td>
                        </tr>

                        <!-- конечная строчка -->
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-6 text-[#606060] rounded-bl-[15px] font-black text-xl"> ... </td>
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