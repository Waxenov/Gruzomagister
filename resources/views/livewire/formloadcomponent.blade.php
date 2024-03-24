<div class="flex max-h-full py-5">

    <!-- форма для создания заказа -->
    <form class="mx-auto" wire:submit.prevent="submitForm">

        <!-- выбор типа груза -->
        <div class="sm:col-span-3">
            <div class="mb-5 px-10 ">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Тип груза</label>
                <select class="text-gray-900 border border-gray-300 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="cargoType" name="cargoType" id="cargoType">
                    <option selected>Выберите</option>
                    <option value="Товары для дома">Товары для дома</option>
                    <option value="Мебель">Мебель</option>
                    <option value="Электроника">Электроника</option>
                    <option value="Приборы">Приборы</option>
                    <option value="Стройка">Стройка</option>
                    <option value="Другое">Другое</option>
                </select>
            </div>

            <!-- выбор типа кузова -->
            <div class="mb-5 px-10">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Тип кузова</label>
                <select class="block w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] p-2.5" type="text" wire:model="truckType" name="truckType" id="truckType">
                    <option selected>Выберите</option>
                    <option value="Открытый">Открытый</option>
                    <option value="Закрытый">Закрытый</option>
                </select>
            </div>

            <!-- описание груза -->
            <div class="mb-5 px-10">
                <label for="cargoDescribe" class="block text-sm font-medium leading-6 text-gray-900">Описание груза</label>
                <div class="mt-2">
                    <textarea type="text" wire:model="cargoDescribe" name="cargoDescribe" id="cargoDescribe" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300  placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#FF0015] sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
        </div>

        <div class="flex">

            <!-- вес груза -->
            <div class="mb-5 px-10">
                <label class="block mb-2 text-sm font-medium text-gray-900">Вес (кг)</label>
                <input class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="number" step="1" min="0" wire:model="weight" name="weight" id="weight">
            </div>

            <!-- дата готовности -->
            <div class="mx-9">
                <div class="mb-5 w-44">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Дата готовности</label>
                    <input class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="date" wire:model="readyDate" name="readyDate" id="readyDate">
                </div>
            </div>
        </div>

        <div class="flex">
            
            <!-- место загрузки -->
            <div class="mb-5 px-10">
                <label class="block mb-2 text-sm font-medium text-gray-900">Место загрузки</label>
                <input for="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="loadPlace" name="loadPlace" id="loadPlace">
            </div>

            <!-- место разгрузки -->
            <div class="mb-5 px-10">
                <label class="block mb-2 text-sm font-medium text-gray-900">Место разгрузки</label>
                <input for="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="unloadPlace" name="unloadPlace" id="unloadPlace">
            </div>
        </div>

        <br>

        <!-- Кнопка создания заказа -->
        <div class="flex justify-center">
            <button type="submit" class="flex justify-center text-white bg-[#FF0015] hover:bg-[#FF5267] focus:ring-4 focus:outline-none font-medium rounded-lg text-base w-full sm:w-auto px-24 py-2.5 text-center">Создать заказ</button>
        </div>
    </form>
</div>