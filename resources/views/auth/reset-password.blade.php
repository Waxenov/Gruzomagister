<x-guest-layout>
    <x-authentication-card>

        <!-- логотип -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <!-- сообщение о ошибках -->
        <x-validation-errors class="mb-4" />

        <!-- форма сброса пароля -->
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- скрытое поле передачи токена -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- почта -->
            <div class="block">
                <x-label for="email" value="{{ __('Почта') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autocomplete="username" />
            </div>

            <!-- пароль -->
            <div class="mt-4">
                <x-label for="password" value="{{ __('Пароль') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- подтверждение пароля -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Подтвердите пароль') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <!-- кнопка сброса пароля -->
            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Сбросить пароль') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>