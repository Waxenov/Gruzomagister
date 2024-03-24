<x-guest-layout>
    <x-authentication-card>
            <h1 class="flex justify-center text-2xl font-bold text-gray-900">{{ __('Вход в аккаунт') }}</h1>
        
        <!-- сообщение о ошибках -->
        <x-validation-errors class="mb-4" />

        <!-- проверка наличия сообщения об успешной операции -->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                <!-- вывод сообщения об успешной операции -->
                {{ session('status') }}
            </div>
        @endif

        <!-- форма для ввода почты и пароля -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- почта -->
            <div class="mt-4">
                <x-label for="email" value="{{ __('Электропочта') }}" />
                <x-input id="email" class="block mt-1 w-full bg-[#EBE5E5] text-[#876368]" placeholder="электронная почта" type="email" name="email" :value="old('email')" required autocomplete="email" />
            </div>

            <!-- пароль -->
            <div class="mt-4">
                <x-label for="password" value="{{ __('Пароль') }}" />
                <x-input id="password" class="block mt-1 w-full bg-[#EBE5E5] text-[#876368]" placeholder="секретные символы" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- кнопка запоминания пользователя -->
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Запомни меня') }}</span>
                </label>
            </div>

            <!-- другие действия -->
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="px-10 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0015]" href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                @endif
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0015]" href="{{ route('register') }}">
                        {{ __('Нет аккаунта?') }}
                    </a>

                <!-- кнопка войти -->
                <x-button class="ms-4">
                    {{ __('Войти') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>