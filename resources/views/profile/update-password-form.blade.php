<x-form-section submit="updatePassword">

    <!-- заголовок -->
    <x-slot name="title">
        {{ __('Изменить пароль') }}
    </x-slot>

    <!-- описание -->
    <x-slot name="description">
        {{ __('Убедитесь, что ваш аккаунт использует сложный пароль, чтобы оставаться в безопасности.') }}
    </x-slot>

    <!-- форма изменения пароля -->
    <x-slot name="form">

        <!-- текущий пароль -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Ваш пароль') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <!-- новый пароль -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('Новый пароль') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <!-- подтверждение пароля -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Подтвердите пароль') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">

        <!-- сообщение об успехе --> 
        <x-action-message class="me-3" on="saved">
            {{ __('Сохранено.') }}
        </x-action-message>

        <!-- кнопка сохранения изменений -->
        <x-button>
            {{ __('Сохранить') }}
        </x-button>
    </x-slot>
</x-form-section>