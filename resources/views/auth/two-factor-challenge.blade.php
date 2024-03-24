<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">

            <!-- логотип -->
            <x-authentication-card-logo />
        </x-slot>

        <!-- режим восстановления -->
        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Введите код аутентификации для подтверждения доступа к учетной записи.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-cloak x-show="recovery">
                {{ __('Введите код экстренного восстановления для подтверждения доступа к учетной записи.') }}
            </div>

            <!-- сообщение об ошибках -->
            <x-validation-errors class="mb-4" />

            <!-- форма восстановления -->
            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <!-- код аутентификации -->
                <div class="mt-4" x-show="! recovery">
                    <x-label for="code" value="{{ __('Код аутентификации') }}" />
                    <x-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" x-ref="code" autocomplete="one-time-code" />
                </div>

                <!-- код восстановления -->
                <div class="mt-4" x-cloak x-show="recovery">
                    <x-label for="recovery_code" value="{{ __('Код восстановления') }}" />
                    <x-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <!-- кнопка кода восстановления -->
                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Использовать код восстановления') }}
                    </button>

                    <!-- кнопка кода аутентификации -->
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-cloak
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Использовать код аутентификации') }}
                    </button>

                    <!-- кнопка входа -->
                    <x-button class="ms-4">
                        {{ __('Войти') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>