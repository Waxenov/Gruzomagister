<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Грузомагистр') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-[#EDE3E3]">
        <x-banner />

        <div class="bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        

            <footer class="bg-white">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="http://gruzomagister/dashboard" class="flex items-center">
                            <span class="self-center text-2xl font-semibold whitespace-nowrap">Грузомагистр</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Разработка</h2>
                            <ul class="text-gray-500 font-medium">                                
                                <li class="mb-4">
                                    <a href="https://jetstream.laravel.com/introduction.html" class="hover:underline">Laravel Jetstream</a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://livewire.laravel.com/" class="hover:underline">Livewire</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://vitejs.dev/" class="hover:underline">Livewire</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Создатель</h2>
                            <ul class="text-gray-500 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/Waxenov/Gruzomagister" class="hover:underline ">Github</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Правила</h2>
                            <ul class="text-gray-500 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Политика конфиденциальности</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Правила использования</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="http://gruzomagister/dashboard" class="hover:underline">Грузомагистр</a>. Выпускная квалификационная работа. Не является рабочим проектом.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">

                    </div>
                </div>
                </div>
            </footer>


    </body>
</html>
