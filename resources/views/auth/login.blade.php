<x-guest-layout>
    <x-authentication-card>
        <h3 class="flex justify-center text-2xl sm:text-3xl font-title text-[#B00000]">{{ __('Авторизация') }}</h3>

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
        <form method="POST" action="{{ route('login') }}" class="mt-8">
            @csrf

            <!-- почта -->
            <div class="mt-4">
                <x-label for="email" class="text-xl" value="{{ __('Электропочта') }}" />
                <input id="email"
                    class="block w-full bg-[#FFFAFA] rounded-[5px] text-[#B00000] font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FAEEDD] focus:ring-[#B00000] shadow-sm"
                    placeholder="электронная почта" type="email" name="email" :value="old('email')" required
                    autocomplete="email" />
            </div>

            <!-- пароль -->
            <div class="mt-4">
                <x-label for="password" class="text-xl" value="{{ __('Пароль') }}" />
                <input id="password"
                    class="block w-full bg-[#FFFAFA] rounded-[5px] text-[#B00000] font-neutral border-2 border-[#DCDCDC] focus:border-[#B00000] focus:bg-[#FAEEDD] focus:ring-[#B00000] shadow-sm"
                    placeholder="секретный пароль" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="py-4 font-neutral">
                <div class="flex justify-between">
                    <a class="text-base text-[#828282] hover:text-[#B00000]"
                        href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                    <a class="text-base text-[#B00000] hover:text-[#FF0015]" href="{{ route('register') }}">
                        {{ __('Регистрация') }}
                    </a>
                </div>
            </div>
            <div class="flex w-full">
                <!-- кнопка войти -->
                <x-button class="flex justify-center text-center items-center w-full ms-0 border-4">
                    {{ __('войти') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>