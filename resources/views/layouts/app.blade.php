<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="image/x-icon" rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="/resources/css/app.css">

    <!-- название -->
    <title>{{ config('app.name', 'ГрузоМагистр') }}</title>

    <!-- скрипты -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- стили -->
    @livewireStyles
</head>

<body class="sm:min-w-min sm:max-w-full antialiased bg-[#DCDCDC]">


    <div class="w-full">

        @livewire('navigation-menu')

        <!-- шапка -->
        @if (isset($header))
        <header>
            <div class="w-full mx-auto py-6 px-4">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- контент -->
        <main class="sm:my-10">
            {{ $slot }}
            
        </main>
    </div>

    @stack('modals')

    @livewireScripts


    <!-- подвал -->
    <footer class="bg-[#1E1E1E] w-full bottom-0 top-0 z-50 sm:text-xl text-sm font-title">
        <div class="mx-auto w-full sm:p-4 ps-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('welcome') }}" class="flex flex-cols-2 gap-2">
                        <x-application-mark class="block h-12 w-12" />
                        <div
                            class="flex flex-col items-start justify-center text-[#FFFAFA] sm:text-2xl text-xl font-maincraft">
                            ГрузоМагистр
                        </div>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-0 sm:gap-8 sm:grid-cols-3">
                    <div>
                        <h3 class="mb-6 text-[#FFFAFA] font-title uppercase">Карта сайта</h3>
                        <ul class="text-[#909090] font-medium font-neutral">
                            <li class="mb-4">
                                <a href="{{ route('dashboard') }}"
                                    class="hover:underline hover:text-[#FFFAFA]">Главная</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('create') }}" class="hover:underline hover:text-[#FFFAFA]">Создать</a>
                            </li>
                            @if (Auth::check())
                            <li class="mb-4">
                                <a href="{{ route('orders') }}" class="hover:underline hover:text-[#FFFAFA]">Заказы</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('details') }}" class="hover:underline hover:text-[#FFFAFA]">Детали</a>
                            </li>
                            @else
                            <li class="mb-4">
                                <a href="{{ route('ordersdemo') }}" class="hover:underline hover:text-[#FFFAFA]">Заказы</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('detailsdemo') }}" class="hover:underline hover:text-[#FFFAFA]">Детали</a>
                            </li>
                            @endif
                            <li class="mb-4">
                                <a href="{{ route('carriers') }}"
                                    class="hover:underline hover:text-[#FFFAFA]">Перевозчики</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('about') }}" class="hover:underline hover:text-[#FFFAFA]">Проект</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="mb-6 text-[#FFFAFA] font-title uppercase">Правила</h3>
                        <ul class="text-[#909090] font-medium font-neutral">
                            <li class="mb-4">
                                {!! __(' :privacy_policy', [
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                    class="hover:underline hover:text-[#FFFAFA]">'.__('Политика
                                    конфиденциальности').'</a>',
                                ]) !!}
                            </li>
                            <li>
                                {!! __(':terms_of_service', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                    class="hover:underline hover:text-[#FFFAFA]">'.__('Условия обслуживания').'</a>',
                                ]) !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-[#909090] py-4 flex items-center justify-start sm:text-xl text-sm font-neutral">
                <span>2024 © Грузомагистр.Все права защищены.
                </span>
            </div>
        </div>
    </footer>
</body>

</html>