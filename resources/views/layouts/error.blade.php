<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link type="image/x-icon" rel="icon" href="/favicon.ico">

        <!-- название -->
        <title>ERROR</title>

        <!-- скрипты -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- стили -->
        @livewireStyles
    </head>
    <body id="error" class="w-full bg-[#122FAA]">
        <div class="w-full bg-[#122FAA]">
            {{ $slot }} 
        </div>

        @stack('modals')
        @livewireScripts

        
    </body>
</html>