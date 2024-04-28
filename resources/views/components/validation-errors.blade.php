@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-[#B00000]">{{ __('Упс! Что-то пошло не так...') }}</div>
            <ul class="mt-3 list-item list-inside text-sm text-[#B00000]">
                <li>
                    <a class="underline text-[#B00000] hover:text-[#FFFAFA] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#B00000]" href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                </li>
                <li>
                    <a class="underline text-[#B00000] hover:text-[#FFFAFA] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#B00000]" href="{{ route('register') }}">
                        {{ __('Нет аккаунта?') }}
                    </a>
                </li>
            </ul>
    </div>
@endif
