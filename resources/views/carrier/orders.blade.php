<x-app-layout>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </button>
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <h2 class=" -mt-32 font-bold text-4xl text-gray-800 leading-tight">
                    {{ __('Вам заказы') }}
                </h2>
                <div class="md:ml-10">
                    <h3 class="font-medium text-3xl text-[#876368] leading-tight">
                        {{ __('Как это работает') }}
                    </h3>
                    <p class="font-normal text-xl text-[#876368] leading-tight mt-4">
                    Грузы заказчиков теперь ваши заказы<br>
                    Вы можете выбрать какой заказ вам удобно доставить<br>
                    Когда выбор сделан — свяжитесь с заказчиком<br>
                    И наконец уточните данные заказа<br>
                    </p>
                </div>
            </div>
            <div class="flex mx-auto mb-8">
                <div class="relative flex-1">
                    <input type="text" id="simple-search" class="block w-96 px-4 py-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] focus:outline-none" placeholder="Ищите и найдете">
                </div>
            </div>
            <div class="relative  overflow-x-auto ">
                <table class="w-full  text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs  text-center text-gray-700 uppercase bg-[#ffffff]">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-tl-[15px]  bg-[#FF0015] text-white">
                                Номер
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Заказчик
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
                                Телефон
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($formData as $data)
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->surname }}  {{ $data->name }}  {{ $data->patronymic }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->cargo_type }}</td>
                            <td>{{ $data->cargo_describe }}</td>
                            <td>{{ $data->weight }}</td>
                            <td>{{ $data->ready_date }}</td>
                            <td>{{ $data->load_place }}</td>
                            <td>{{ $data->unload_place }}</td>
                            <td>{{ $data->truck_type }}</td>
                            <td>{{ $data->phone }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</x-app-layout>