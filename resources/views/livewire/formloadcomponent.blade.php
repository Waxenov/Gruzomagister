<div class="flex max-h-full py-5">

    <!-- форма для создания заказа -->
    <form class="mx-auto py-5" wire:submit.prevent="submitForm">

        <!-- выбор типа груза -->
        <div class="sm:col-span-3">
            <div class="mb-5">
                <x-form-section submit="submitForm">
                    <x-slot name="title" class="font-title">
                        {{ __('Тип груза') }}
                    </x-slot>

                    <x-slot name="description" class="font-neutral">
                        {{ __('Выберите тип груза из предложенных') }}
                    </x-slot>

                    <x-slot name="form">
                        <div>
                            <form class="mx-auto" wire:submit.prevent="submitForm">
                                <div>
                                    <select
                                        class="rounded-[15px] text-[#1C1C1C] border-2 focus:border-2 border-[#DBD7D2] text-sm focus:ring-[#B00000] focus:border-[#B00000] block w-full p-2.5"
                                        type="text " wire:model="cargoType" name="cargoType" id="cargoType">
                                        <option selected> Выберите тип </option>
                                        <option value="Товары для дома">Товары для дома</option>
                                        <option value="Мебель">Мебель</option>
                                        <option value="Электроника">Электроника</option>
                                        <option value="Приборы">Приборы</option>
                                        <option value="Стройка">Стройка</option>
                                        <option value="Другое">Другое</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </x-slot>
                </x-form-section>
            </div>

            <!-- выбор типа кузова -->
            <div class="sm:col-span-3">
                <div class="mb-5">
                    <x-form-section submit="submitForm">
                        <x-slot name="title" class="font-title">
                            {{ __('Кузов машины') }}
                        </x-slot>

                        <x-slot name="description" class="font-neutral">
                            {{ __('Выберите тип кузова из предложенных') }}
                        </x-slot>

                        <x-slot name="form">
                            <div>
                                <form class="mx-auto" wire:submit.prevent="submitForm">
                                    <div>
                                        <select
                                            class="rounded-[15px] text-[#1C1C1C] border-2 focus:border-2 border-[#DBD7D2] text-sm focus:ring-[#B00000] focus:border-[#B00000] block w-full p-2.5"
                                            type="text" wire:model="truckType" name="truckType" id="truckType">
                                            <option selected> Выберите тип </option>
                                            <option value="Открытый">Открытый</option>
                                            <option value="Закрытый">Закрытый</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </x-slot>
                    </x-form-section>
                </div>

                <!-- описание груза -->
                <div class="mb-5">
                    <x-form-section submit="submitForm">
                        <x-slot name="title" class="font-title">
                            {{ __('Описание груза') }}
                        </x-slot>

                        <x-slot name="description" class="font-neutral">
                            {{ __('Дайте краткое описание вашего груза') }}
                        </x-slot>

                        <x-slot name="form">
                            <div>
                                <form class="mx-auto" wire:submit.prevent="submitForm">
                                    <textarea type="text" wire:model="cargoDescribe" name="cargoDescribe"
                                        id="cargoDescribe" rows="2" placeholder="Количество, размеры, хрупкость, пожелания и т.д"
                                        class="w-full rounded-[15px] focus:rounded-none focus:border-dashed text-[#909090] text-sm font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FFFAFA] focus:ring-0 placeholder-[#909090]"></textarea>
                                </form>
                            </div>
                        </x-slot>
                    </x-form-section>
                </div>
            </div>

            <div>
                <div class="mb-5">
                    <!-- вес груза -->
                    <x-form-section submit="submitForm">
                        <x-slot name="title" class="font-title">
                            {{ __('Вес груза') }}
                        </x-slot>

                        <x-slot name="description" class="font-neutral">
                            {{ __('Вес вашего груза в кг') }}
                        </x-slot>

                        <x-slot name="form">
                            <div>
                                <form class="mx-auto" wire:submit.prevent="submitForm">
                                    <input
                                        class="w-full rounded-[15px] focus:rounded-none focus:border-dashed text-[#909090] text-sm font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FFFAFA] focus:ring-0 placeholder-[#909090]"
                                        type="number" placeholder="100 кг" step="10" min="0" wire:model="weight"
                                        name="weight" id="weight">
                                    </input>
                                </form>
                            </div>
                        </x-slot>
                    </x-form-section>
                </div>
                <div class="mb-5">
                    <!-- дата готовности -->
                    <x-form-section submit="submitForm">
                        <x-slot name="title" class="font-title">
                            {{ __('Дата готовности') }}
                        </x-slot>

                        <x-slot name="description" class="font-neutral">
                            {{ __('Когда груз будет готов для отправки') }}
                        </x-slot>

                        <x-slot name="form">
                            <div>
                                <form class="mx-auto" wire:submit.prevent="submitForm">
                                    <input
                                        class="w-full rounded-[15px] focus:rounded-none focus:border-dashed text-[#909090] text-sm font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FFFAFA] focus:ring-0 placeholder-[#909090]"
                                        type="date" wire:model="readyDate" name="readyDate" id="readyDate"></input>
                                </form>
                            </div>
                        </x-slot>
                    </x-form-section>
                </div>
            </div>

            <div>

                <!-- место загрузки -->
                <div class="mb-5">
                    <x-form-section submit="submitForm">
                        <x-slot name="title" class="font-title">
                            {{ __('Адрес отправления') }}
                        </x-slot>
                        <x-slot name="description" class="font-neutral">
                            {{ __('Укажите точное место загрузки груза') }}
                        </x-slot>

                        <x-slot name="form">
                            <div>
                                <form class="mx-auto" wire:submit.prevent="submitForm">

                                    <input
                                        class="w-full rounded-[15px] focus:rounded-none focus:border-dashed text-[#909090] text-sm font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FFFAFA] focus:ring-0 placeholder-[#909090]"
                                        type="text" wire:model="loadPlace" name="loadPlace" id="loadPlace"
                                        placeholder="Омск, Улица Пример 24, к. 1" autocomplete="off"></input>
                                </form>
                            </div>
                        </x-slot>
                    </x-form-section>
                </div>

                <!-- место разгрузки -->
                <div class="mb-5">
                    <x-form-section submit="submitForm">
                        <x-slot name="title" class="font-title">
                            {{ __('Адрес прибытия') }}
                        </x-slot>
                        <x-slot name="description" class="font-neutral">
                            {{ __('Укажите точное место разгрузки груза') }}
                        </x-slot>

                        <x-slot name="form">
                            <div>
                                <form class="mx-auto" wire:submit.prevent="submitForm">

                                    <input
                                        class="w-full rounded-[15px] focus:rounded-none focus:border-dashed text-[#909090] text-sm font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FFFAFA] focus:ring-0 placeholder-[#909090]"
                                        type="text" wire:model="unloadPlace" name="unloadPlace" id="unloadPlace"
                                        placeholder="Омск, Улица Пример 7, к. 2" autocomplete="off"></input>
                                </form>
                            </div>
                        </x-slot>
                    </x-form-section>
                </div>
            </div>

            <br>

            <!-- Кнопка создания заказа -->
            <div class="flex mt-4 w-full">
                @if(Auth::check())
                <x-button type="submit" class="flex justify-center text-center items-center w-full ms-0 border-4">
                    {{ __('создать заказ') }}
                </x-button>
                @else
                <x-button type="submit" class="flex justify-center text-center items-center w-full ms-0 border-4"
                    disabled>
                    {{ __('создать заказ') }}
                </x-button>
                @endif
            </div>
    </form>
</div>