<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">

                <!-- заголовок -->
                <h2 class=" -mt-32 font-bold text-4xl text-gray-800 leading-tight">
                    {{ __('Тарифы') }}
                </h2>

                <!-- описание -->
                <div class="md:ml-10">
                    <h3 class="font-medium text-3xl text-[#876368] leading-tight">
                        {{ __('Как это работает') }}
                    </h3>
                    <p class="font-normal text-xl text-[#876368] leading-tight mt-4">
                        Выберите подходящий тариф<br>
                        По весу вашего груза<br>
                        А также по расстоянию<br>
                        Подробности у перевозчика<br>
                    </p>
                </div>
            </div><br>

            <!-- таблица тарифов -->
            <div class="relative overflow-x-auto justify-center">
                <table class="w-full text-base text-left rtl:text-right text-gray-500">

                    <!-- столбцы таблицы -->
                    <thead class="text-xs text-center text-gray-800 uppercase bg-[#ededed]">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-tl-[15px] bg-[#FF0015] text-white">
                                Масса груза
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Городская зона
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-tr-[15px]">
                                Загородная зона
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- данные таблицы -->
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#606060]"> 10 - 30 кг </td>
                            <td class="px-6 py-4 text-[#606060]"> 300 руб. </td>
                            <td class="px-6 py-4 text-[#606060]"> + 20 руб./км </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#606060]"> 31 - 50 кг </td>
                            <td class="px-6 py-4 text-[#606060]"> 400 руб. </td>
                            <td class="px-6 py-4 text-[#606060]"> + 20 руб./км </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#606060]"> 51 - 70 кг </td>
                            <td class="px-6 py-4 text-[#606060]"> 500 руб. </td>
                            <td class="px-6 py-4 text-[#606060]"> + 20 руб./км </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#606060]"> 71 - 100 кг </td>
                            <td class="px-6 py-4 text-[#606060]"> 600 руб. </td>
                            <td class="px-6 py-4 text-[#606060]"> + 20 руб./км </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#606060]"> 101 - 150 кг </td>
                            <td class="px-6 py-4 text-[#606060]"> 700 руб. </td>
                            <td class="px-6 py-4 text-[#606060]"> + 20 руб./км </td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-6 py-4 text-[#606060] rounded-bl-[15px]"> 151 - 250 кг </td>
                            <td class="px-6 py-4 text-[#606060]"> 800 руб. </td>
                            <td class="px-6 py-4 text-[#606060] rounded-br-[15px]"> + 20 руб./км </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>