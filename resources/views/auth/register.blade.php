<x-guest-layout>
    <x-authentication-card>
            <h1 class="flex justify-center text-2xl font-bold text-gray-900">{{ __('Регистрация аккаунта') }}</h1>
            <br>

        <!-- сообщение о ошибках -->
        <x-validation-errors class="mb-4" />

        <!-- форма для регистрации -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- роль -->
            <div>
                <x-label for="role" value="{{ __('Роль') }}" />
                <select id="role" name="role" class=" text-gray-900 bg-[#f7f7f7] border border-gray-300 text-sm rounded-lg focus:ring-[#FF0015] focus:border-[#FF0015] block w-full p-2.5" required>
                    <option value="client">{{ __('Заказчик') }}</option>
                    <option value="carrier">{{ __('Перевозчик') }}</option>
                </select>
            </div>

            <!-- ФИО -->
            <div>
                <x-label for="surname" value="{{ __('Фамилия') }}" />
                <x-input id="surname" class="block mt-1 w-full  text-[#876368]" type="text" name="surname" :value="old('surname')" required autocomplete="surname" />
            </div>

            <div>
                <x-label for="name" value="{{ __('Имя') }}" />
                <x-input id="name"  class="block mt-1 w-full  text-[#876368]" type="text" name="name" :value="old('name')" required autocomplete="name" />
            </div>

            <div>
                <x-label for="patronymic" value="{{ __('Отчество') }}" />
                <x-input id="patronymic"  class="block mt-1 w-full  text-[#876368]" type="text" name="patronymic" :value="old('patronymic')" required  autocomplete="patronymic" />
            </div>

            <!-- телефон -->
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Телефон') }}" />
                <x-input id="phone"  class="block mt-1 w-full  text-[#876368]" placeholder="+7 123 456 78 90" type="tel" name="phone" :value="old('phone')" required  autocomplete="phone" />
            </div>

            <!-- почта -->
            <div class="mt-4">
                <x-label for="email" value="{{ __('Электропочта') }}" />
                <x-input id="email"  class="block mt-1 w-full  text-[#876368]" placeholder="электронная почта" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <!-- пароль -->
            <div class="mt-4">
                <x-label for="password" value="{{ __('Пароль') }}" />
                <x-input id="password" class="block mt-1 w-full  text-[#876368]" placeholder="секретные символы" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- подтверждение пароля -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Подтвердите пароль') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full  text-[#876368]" placeholder="повторите секретные символы" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

                <!-- согласие на обработку персональных данных -->
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('Я соглашаюсь с :terms_of_service и :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0015]">'.__('Условия обслуживания').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0015]">'.__('Политика конфиденциальности').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0015]" href="{{ route('login') }}">
                    {{ __('Уже зарегистрированы?') }}
                </a>

                <!-- кнопка регистрации -->
                <x-button class="ms-4">
                    {{ __('Регистрация') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>