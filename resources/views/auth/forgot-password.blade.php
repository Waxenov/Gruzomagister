<x-guest-layout>
    <x-authentication-card>

        <!-- логотип -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Забыли свой пароль? Без проблем. Просто сообщите нам свою почту, и мы вышлем вам по ссылку для сброса пароля, которая позволит вам создать новый.') }}
        </div>

        <!-- проверка наличия сообщения об успешной операции -->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                <!-- вывод сообщения об успешной операции -->
                {{ session('status') }}
            </div>
        @endif

        <!-- сообщение об ошибках -->
        <x-validation-errors class="mb-4" />

        <!-- форма для ввода почты -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Почта') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <!-- кнопка подтверждения -->
            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Сброс пароля') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>