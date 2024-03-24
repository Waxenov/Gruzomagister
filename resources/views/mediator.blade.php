<x-guest-layout>
    <x-authentication-card>

        <!-- логотип -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <!-- предупреждение -->
        <div class="text-center">
            <h1 class="text-xl font-bold text-gray-900">{{ __('Извините, так нельзя') }}</h1>
            <p class="mt-2 text-sm text-gray-600">{{ __('Вы находитесь в гостевом режиме.') }}</p>
        </div>

        <hr>
        <hr>
        <hr>
        <br>

        <!-- пояснение -->
        <div class="text-center">
            <p class="text-base text-gray-500">{{ __('Для доступа к дополнительным функциям, пожалуйста, зарегистрируйтесь.') }}</p>
        </div>

        <!-- кнопка регистрации -->
        <div class="mt-4 flex justify-center">
            <x-nav-link href="{{ route('register') }}">
                {{ __('Зарегистрироваться') }}
            </x-nav-link>
        </div>
    </x-authentication-card>
</x-guest-layout>