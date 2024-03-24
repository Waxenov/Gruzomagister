<x-form-section submit="updateProfileInformation">

    <!-- заголовок -->
    <x-slot name="title">
        {{ __('Информация аккаунта') }}
    </x-slot>

    <!-- описание -->
    <x-slot name="description">
        {{ __('Обновите данные вашего аккаунта.') }}

    </x-slot>

    <x-slot name="form">        

        <!-- фамилия -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="surname" value="{{ __('Фамилия') }}" />
            <x-input id="surname" type="text" class="mt-1 block w-full" wire:model="state.surname" required autocomplete="surname" />
            <x-input-error for="surname" class="mt-2" />
        </div>

        <!-- имя -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Имя') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- отчество -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="patronymic" value="{{ __('Отчество') }}" />
            <x-input id="patronymic" type="text" class="mt-1 block w-full" wire:model="state.patronymic" required autocomplete="patronymic" />
            <x-input-error for="patronymic" class="mt-2" />
        </div>

        <!-- телефон -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="phone" value="{{ __('Телефон') }}" />
            <x-input id="phone" type="text" class="mt-1 block w-full" wire:model="state.phone" autocomplete="phone" />
            <x-input-error for="phone" class="mt-2" />
        </div>
        
        <!-- почта -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Почта') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required autocomplete="username" />
            
            <!-- сообщение об ошибках -->
            <x-input-error for="email" class="mt-2" />

            <!-- данные о почте -->
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Ваша почта не подтверждена.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                        {{ __('Отправка кода подтверждения.') }}
                    </button>
                </p>

                <!-- код подтверждения почты -->
                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('На вашу почту отправлен код подтверждения.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">

        <!-- сообщение об успехе --> 
        <x-action-message class="me-3" on="saved">
            {{ __('Сохранено.') }}
        </x-action-message>

        <!-- кнопка сохранения изменений -->
        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Сохранить') }}
        </x-button>
    </x-slot>
</x-form-section>