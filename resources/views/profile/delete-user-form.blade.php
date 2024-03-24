<x-action-section>

    <!-- заголовок -->
    <x-slot name="title">
        {{ __('Удалить аккаунт') }}
    </x-slot>

    <!-- описание -->
    <x-slot name="description">
        {{ __('Безвозвратное удаление аккаунта.') }}
    </x-slot>

    <!-- содержимое -->
    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Как только ваш аккаунт будет удалён, все его данные будут потеряны. Перед удалением, пожалуйста, запомните данные, которые вы хотите сохранить.') }}
        </div>

        <div class="mt-5">

            <!-- кнопка подтверждения -->
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Удалить аккаунт') }}
            </x-danger-button>
        </div>

        <!-- модальное окно подтверждения -->
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Удалить аккаунт') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Вы уверены что хотите удалить свой аккаунт? Если да, то потвердите паролем.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    
                <!-- подтверждение пароля -->
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Пароль') }}"
                                x-ref="password"
                                wire:model="password"
                                wire:keydown.enter="deleteUser" />

                    <!-- сообщение об ошибках -->
                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">

                <!-- кнопка отмены -->
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Отмена') }}
                </x-secondary-button>

                <!-- кнопка подтверждения -->
                <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Удалить аккаунт') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>