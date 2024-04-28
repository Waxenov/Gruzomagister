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
    <body class="min-w-min max-w-full overflow-hidden font-sans antialiased bg-[#EBC2AF]">
        <div class="font-sans antialiased">
            {{ $slot }} 
        </div>
        <div class="hidden sm:hidden">
            <button id="theme-toggle">
            </button>
        </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>