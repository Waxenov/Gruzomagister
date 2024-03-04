<div class="flex max-h-full">
    <form class="max-w-7xl mx-auto lg:px-8 mt-10" wire:submit.prevent="submitForm" >
        <p>Тип груза</p>
            <input class="mb-4 mx-auto lg:px-8 sm:rounded-lg mt-1" type="text" wire:model="cargoType" name="cargoType" id="cargoType">
        <p>Описание груза</p>
            <input class="mb-4 mx-auto lg:px-8 sm:rounded-lg mt-1" type="text" wire:model="cargoDescribe" name="cargoDescribe" id="cargoDescribe">
        <p>Вес в кг</p>
            <input class="mb-4 mx-auto lg:px-8 sm:rounded-lg" type="text" wire:model="weight" name="weight" id="weight">
        <p>Место загрузки</p>
            <input class="mb-4 mx-auto lg:px-8 sm:rounded-lg" type="text" wire:model="loadPlace" name="loadPlace" id="loadPlace">
        <p>Место разгрузки</p>
            <input class="mb-4 mx-auto lg:px-8 sm:rounded-lg" type="text" wire:model="unloadPlace" name="unloadPlace" id="unloadPlace">
        <p>Тип кузова</p>
            <input class="mb-4 mx-auto lg:px-8 sm:rounded-lg" type="text" wire:model="truckType" name="truckType" id="truckType">
        <p>Дата готовности</p>
            <input class="mb-4 mx-auto lg:px-8 sm:rounded-lg" type="date" wire:model="readyDate" name="readyDate" id="readyDate">
        <br>
        <x-button class="scroll-ms-10 w-full mx-auto sm:px-6 lg:px-8" type="submit">Отправить</x-button>
    </form>
</div>
