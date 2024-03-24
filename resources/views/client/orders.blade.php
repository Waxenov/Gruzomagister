<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <h2 class="-mt-32 font-bold text-4xl text-gray-800 leading-tight">
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
                    <form action="{{ route('orders') }}" method="GET">
                        <button type="submit">
                            <!-- иконка для кнопки поиска -->
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                        </button>
                        <input type="text" name="search" class="block w-96 px-4 py-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] focus:outline-none" placeholder="Ищите и найдете">
                        <button type="submit">Показать все</button>
                    </form>
                </div>
            </div>

            <!-- таблица заказов -->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-center text-gray-700 uppercase bg-[#ffffff]">
                        <tr class="max-w-8 text-center">
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
                    <tbody>

                        <!-- вывод заказов заказчика -->
                        @foreach($userOrders as $order)
                        <tr class="bg-[#ffffff] text-center py-6 border-b-2 border-b-[#EDE3E7]">
                            <td class="text-[#FF5267] font-black text-base">#{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->cargo_type }}</td>
                            <td>{{ $order->cargo_describe }}</td>
                            <td>{{ $order->weight }}</td>
                            <td>{{ $order->ready_date }}</td>
                            <td>{{ $order->load_place }}</td>
                            <td>{{ $order->unload_place }}</td>
                            <td>{{ $order->truck_type }}</td>
                            <td>

                                <!-- кнопка удаления заказа -->
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-[#FF5267] font-black rounded-full text-base px-7 py-2.5 text-center me-2 mb-2 mt-2">
                                        X
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

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