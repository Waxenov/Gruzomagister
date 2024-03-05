<div class="flex max-h-full py-5">
    <form class="mx-auto" wire:submit.prevent="submitForm">

    <div class="flex">
        <div class="mb-5 px-10 ">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Тип груза</label>
            <select class="bg-[#F8EAEA] text-gray-900 border border-gray-300 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="cargoType" name="cargoType" id="cargoType"  required/>
            <option selected>Выберите тип груза . . </option>
            <option value="Товары для дома">Товары для дома</option>
            <option value="Мебель">Мебель</option>
            <option value="Электроника">Электроника</option>
            <option value="Приборы">Приборы</option>
            <option value="Стройка">Стройка</option>
            </select>
        </div>
        <div class="mb-5 px-10">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Тип кузова</label>
            <select class="bg-[#F8EAEA] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="truckType" name="truckType" id="truckType">
            <option selected>Выберите тип кузова . . </option>
            <option value="Открытый">Открытый</option>
            <option value="Закрытый">Закрытый</option>
            </select>
        </div>
    </div>

    <div class="flex">
        <div class="mb-5 px-10">
            <label class="block mb-2 text-sm font-medium text-gray-900">Вес (кг)</label>
            <input class="bg-[#F8EAEA] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="number" step="1" min="0" wire:model="weight" name="weight" id="weight">
        </div>
        <div class="mb-5 px-10">
            <label class="block mb-2 text-sm font-medium text-gray-900">Описание груза</label>
            <input class="bg-[#F8EAEA] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="cargoDescribe" name="cargoDescribe" id="cargoDescribe">
        </div>
    </div>

    <div class="flex">
        <div class="mb-5 px-10">
            <label class="block mb-2 text-sm font-medium text-gray-900">Место загрузки</label>
            <input for="text" class="bg-[#F8EAEA] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="loadPlace" name="loadPlace" id="loadPlace">
        </div>
        <div class="mb-5 px-10">
            <label class="block mb-2 text-sm font-medium text-gray-900">Место разгрузки</label>
            <input for="text" class="bg-[#F8EAEA] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="text" wire:model="unloadPlace" name="unloadPlace" id="unloadPlace">
        </div>
    </div>
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900">Дата готовности</label>
            <input class="bg-[#F8EAEA] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" type="date" wire:model="readyDate" name="readyDate" id="readyDate">
    </div>
            <br>

        <div class="flex justify-center">
            <button type="submit" class="flex justify-center text-white bg-[#FF5267] hover:bg-[#FF0015] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-24 py-2.5 text-center">Создать заказ</button>
        </div>
    </form>
</div>
