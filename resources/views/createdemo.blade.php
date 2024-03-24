<x-app-layout>
    <div class="mx-10 py-12 flex justify-center">

        <!-- интерактивная карта яндекс -->
        <div class="mx-10 p-5 flex justify-center bg-white rounded-[15px]">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1edc5b1d0ddd0a1d9c821f085e434d1d1175804843f927fa3d398e2f6c0fa667&amp;width=400&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

        <!-- заголовок -->
        <div class="bg-white w-fit px-10 overflow-hidden shadow-xl sm:rounded-lg">
            <h2 class="font-semibold text-3xl text-gray-800 leading-tight py-5 text-start">
                {{ __('Новый заказ') }}
            </h2>

            <!-- пример формы создания заказа -->
            <div class="flex max-h-full py-5">
                <form class="mx-auto" wire:submit.prevent="submitForm">
                    <div class="sm:col-span-3">
                        <div class="mb-5 px-10">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Тип груза</label>
                            <select class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="cargoType" name="cargoType" id="cargoType" required />
                            <option selected>Выберите тип груза</option>
                            <option value="Товары для дома">Товары для дома</option>
                            <option value="Мебель">Мебель</option>
                            <option value="Электроника">Электроника</option>
                            <option value="Приборы">Приборы</option>
                            <option value="Стройка">Стройка</option>
                            <option value="Другое">Другое</option>
                            </select>
                        </div>

                        <div class="mb-5 px-10">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Тип кузова</label>
                            <select class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="truckType" name="truckType" id="truckType">
                                <option selected>Выберите тип кузова</option>
                                <option value="Открытый">Открытый</option>
                                <option value="Закрытый">Закрытый</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="mb-5 px-10">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Вес (кг)</label>
                            <input class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="number" wire:model="weight" name="weight" id="weight">
                        </div>


                        <div class="mb-5 px-10">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Описание груза</label>
                            <input class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="cargoDescribe" name="cargoDescribe" id="cargoDescribe">
                        </div>
                    </div>

                    <div class="flex">
                        <div class="mb-5 px-10">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Место загрузки</label>
                            <input for="text" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="loadPlace" name="loadPlace" id="loadPlace">
                        </div>
                        <div class="mb-5 px-10">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Место разгрузки</label>
                            <input for="text" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="unloadPlace" name="unloadPlace" id="unloadPlace">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Дата готовности</label>
                        <input class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="date" wire:model="readyDate" name="readyDate" id="readyDate">
                    </div>
                    <br>

                    <div class="flex justify-center">
                        <a href="{{ route('mediator') }}" class="flex justify-center text-white bg-[#FF0015] hover:bg-[#FF5267] focus:ring-4 focus:outline-none font-medium rounded-lg text-base w-full sm:w-auto px-24 py-2.5 text-center">Создать заказ</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- таблица пунктов и расстояний -->
        <div class="mx-10 overflow-auto max-h-[650px]">
                <table class="w-full  text-base text-left rtl:text-right text-gray-800">

                    <!-- столбцы таблицы -->
                    <thead class="text-xs text-center text-gray-700 uppercase bg-[#ededed]">
                        <tr>
                            <th scope="col" class="px-4 py-3 rounded-tl-[15px]">
                                От пункта
                            </th>
                            <th scope="col" class="px-4 py-3">
                                До Омска
                            </th>
                        </tr>
                    </thead>

                    <!-- содержимое таблицы -->
                    <tbody>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Азово</td>
                            <td class="px-4 py-4">26 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Большегривское</td>
                            <td class="px-4 py-4">185 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Большеречье</td>
                            <td class="px-4 py-4">205 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Большие Уки</td>
                            <td class="px-4 py-4">272 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Горьковское</td>
                            <td class="px-4 py-4">136 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Знаменское</td>
                            <td class="px-4 py-4">448 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Исилькуль</td>
                            <td class="px-4 py-4">131 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Калачинск</td>
                            <td class="px-4 py-4">86 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Колосовка</td>
                            <td class="px-4 py-4">379 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Кормиловка</td>
                            <td class="px-4 py-4">50 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Красный Яр</td>
                            <td class="px-4 py-4">48 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Крутинка</td>
                            <td class="px-4 py-4">194 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Любинский</td>
                            <td class="px-4 py-4">64 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Марьяновка</td>
                            <td class="px-4 py-4">59 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Москаленки</td>
                            <td class="px-4 py-4">111 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Муромцево</td>
                            <td class="px-4 py-4">264 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Называевск</td>
                            <td class="px-4 py-4">207 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Нововаршавка</td>
                            <td class="px-4 py-4">157 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Одесское</td>
                            <td class="px-4 py-4">81 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Оконешниково</td>
                            <td class="px-4 py-4">126 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Омск</td>
                            <td class="px-4 py-4">-</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Павлоградка</td>
                            <td class="px-4 py-4">95 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Полтавка</td>
                            <td class="px-4 py-4">124 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Русская Поляна</td>
                            <td class="px-4 py-4">153 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Саргатское</td>
                            <td class="px-4 py-4">110 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Седельниково</td>
                            <td class="px-4 py-4">335 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Таврическое</td>
                            <td class="px-4 py-4">39 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Тара</td>
                            <td class="px-4 py-4">303 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Тевриз</td>
                            <td class="px-4 py-4">347 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Тюкалинск</td>
                            <td class="px-4 py-4">146 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Усть-Ишим</td>
                            <td class="px-4 py-4">421 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Черлак</td>
                            <td class="px-4 py-4">147 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Чернолучинский</td>
                            <td class="px-4 py-4">50 км</td>
                        </tr>
                        <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                            <td class="px-4 py-4">Щербакуль</td>
                            <td class="px-4 py-4">72 км</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>