<x-guest-layout>
    <x-authentication-card>

        <!-- логотип -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>


        <div class="mb-4 text-sm text-gray-600">
            {{ __('Перейдите по ссылке на почте и подтвердите её. Если вы не получили подтверждение, мы с радостью отправим его повторно.') }}
        </div>

        <!-- сообщение об успешной отправке ссылки на подтверждение -->
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Новая ссылка подтверждения отправлена на вашу почту.') }}
            </div>
        @endif

        <!-- форма для повторной отправки ссылки на подтверждение -->
        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <!-- кнопка для повторной отправки ссылки на подтверждение -->
                <div>
                    <x-button type="submit">
                        {{ __('Повторить отправку') }}
                    </x-button>
                </div>
            </form>

            <!-- ссылка на страницу профиля -->
            <div>
                <a href="{{ route('profile.show') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0015]">
                    {{ __('Редактировать профиль') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0015] ms-2">
                        {{ __('Выйти') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>