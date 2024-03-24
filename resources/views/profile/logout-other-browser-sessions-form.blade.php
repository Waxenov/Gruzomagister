<x-action-section>

    <!-- заголовок -->
    <x-slot name="title">
        {{ __('Сессии') }}
    </x-slot>

    <!-- описание -->
    <x-slot name="description">
        {{ __('Управляйте виртуальным миром и выходите из него в других браузерах и устройствах.') }}
    </x-slot>

    <!-- содержимое -->
    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('При необходимости вы можете выйти из всех сессий браузера на всех устройствах. Ниже перечислены ваши последние сессии.') }}
        </div>

        @if (count($this->sessions) > 0)
            <div class="mt-5 space-y-6">

                <!-- сессии браузера -->
                @foreach ($this->sessions as $session)
                    <div class="flex items-center">
                        <div>

                            <!-- иконка типа устройства -->
                            @if ($session->agent->isDesktop())
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                            @endif
                        </div>

                        <div class="ms-3">
                            <div class="text-sm text-gray-600">

                                <!-- платформа и браузер -->
                                {{ $session->agent->platform() ? $session->agent->platform() : __('Неизвестно') }} - {{ $session->agent->browser() ? $session->agent->browser() : __('Неизвестно') }}
                            </div>

                            <div>
                                <div class="text-xs text-gray-500">

                                    <!-- IP-адрес и статус устройства -->
                                    {{ $session->ip_address }},

                                    @if ($session->is_current_device)
                                        <span class="text-green-500 font-semibold">{{ __('Это устройство') }}</span>
                                    @else
                                        {{ __('Последняя активность') }} {{ $session->last_active }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="flex items-center mt-5">

            <!-- кнопка выхода из других сессий браузера -->
            <x-button wire:click="confirmLogout" wire:loading.attr="disabled">
                {{ __('Выйти из других сессий браузера') }}
            </x-button>

            <!-- сообщение успеха-->
            <x-action-message class="ms-3" on="loggedOut">
                {{ __('Сделано.') }}
            </x-action-message>
        </div>

        <!-- модальное окно подтверждения -->
        <x-dialog-modal wire:model.live="confirmingLogout">
            <x-slot name="title">
                {{ __('Выйти из других сессий браузера') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Введите свой пароль для подтверждения, что вы хотите выйти из других сессий браузера на всех ваших устройствах.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                    
                    <!-- подтверждение паролем -->
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Пароль') }}"
                                x-ref="password"
                                wire:model="password"
                                wire:keydown.enter="logoutOtherBrowserSessions" />

                    <!-- сообщение об ошибках -->
                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">

                <!-- кнопка отмены -->
                <x-secondary-button wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
                    {{ __('Отмена') }}
                </x-secondary-button>

                <!-- кнопка подтверждения -->
                <x-button class="ms-3"
                            wire:click="logoutOtherBrowserSessions"
                            wire:loading.attr="disabled">
                    {{ __('Выйти из других сессий браузера') }}
                </x-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>