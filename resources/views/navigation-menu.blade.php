<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="w-max mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-14 sm:-my-px sm:ms-20 sm:flex">

                    @if(Auth::check())
                    <x-nav-link href="{{ route('dashboard') }}" wire:navigate :active="request()->routeIs('dashboard')">
                        {{ __('Главная') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('orders') }}" wire:navigate :active="request()->routeIs('orders')">
                        {{ __('Заказы') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('carriers') }}" wire:navigate :active="request()->routeIs('carriers')">
                        {{ __('Перевозчики') }}
                    </x-nav-link>

                    @if(Auth::user()->role === 'client')
                    <x-nav-link href="{{ route('create') }}" wire:navigate :active="request()->routeIs('create')">
                        {{ __('Создать') }}
                    </x-nav-link>
                    @endif

                    @else
                    <x-nav-link href="{{ route('dashboard') }}" wire:navigate :active="request()->routeIs('dashboard')">
                        {{ __('Главная') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('ordersdemo') }}" wire:navigate :active="request()->routeIs('ordersdemo')">
                        {{ __('Заказы') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('carriersdemo') }}" wire:navigate :active="request()->routeIs('carriersdemo')">
                        {{ __('Перевозчики') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('createdemo') }}" wire:navigate :active="request()->routeIs('createdemo')">
                        {{ __('Создать') }}
                    </x-nav-link>
                    @endif
                    
                    <div class="ms-3 relative mt-5">        
            <x-dropdown align="middle" width="48">
            <x-slot name="trigger">
                <button type="button" class="text-base">
                <x-nav-link>
                {{ __('Другое') }}
                </x-nav-link>
                </button>
            </x-slot>

            <x-slot name="content">
                <!-- Отдельные элементы списка ссылок -->
                <x-dropdown-link href="{{ route('about') }}" wire:navigate :active="request()->routeIs('about')">
                    {{ __('О нас') }}
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('faq') }}" wire:navigate :active="request()->routeIs('faq')">
                    {{ __('Функции') }}
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('tarif') }}" wire:navigate :active="request()->routeIs('tarif')">
                    {{ __('Тарифы') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
</div>

                </div>
            </div>

                <!-- Settings Dropdown -->
                <div class=" ms-3 relative">
                    <x-dropdown align="middle" width="48">
                        <x-slot name="trigger">
                            @if(Auth::check())
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="justify-end mt-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    @if(Auth::user()->role === 'carrier')
                                        <span id="role"><span class="text-[#FF0015] font-medium">Перевозчик:</span> {{ Auth::user()->email }} </span>
                                    @elseif(Auth::user()->role === 'client')
                                        <span id="role"><span class="text-[#FF0015] font-medium">Заказчик:</span> {{ Auth::user()->email }} </span>
                                    @else
                                        <span id="role">{{ Auth::user()->role }}</span>
                                    @endif
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="justify-end mt-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-[#FF0015] bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ __('Попробовать') }}
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            @if(Auth::check())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Настройки аккаунта') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Аккаунт') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('Токены API') }}
                            </x-dropdown-link>
                            @else
                            <x-dropdown-link href="{{ route('register') }}">
                                {{ __('Регистрация') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('login') }}">
                                {{ __('Авторизация') }}
                            </x-dropdown-link>
                            @endif
                            <div class="border-t border-gray-200"></div>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                @auth
                                <x-dropdown-link href="{{ route('logout') }}"
                                        @click.prevent="$root.submit();">
                                    {{ __('Выйти') }}
                                </x-dropdown-link>
                                @endauth
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">

                </button>
                @if(Auth::check())
                    <x-nav-link href="{{ route('dashboard') }}" wire:navigate :active="request()->routeIs('dashboard')">
                        {{ __('Главная') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('orders') }}" wire:navigate :active="request()->routeIs('orders')">
                        {{ __('Заказы') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('carriers') }}" wire:navigate :active="request()->routeIs('carriers')">
                        {{ __('Перевозчики') }}
                    </x-nav-link>

                    @if(Auth::user()->role === 'client')
                    <x-nav-link href="{{ route('create') }}" wire:navigate :active="request()->routeIs('create')">
                        {{ __('Создать') }}
                    </x-nav-link>
                    @endif

                    @else
                    <x-nav-link href="{{ route('dashboard') }}" wire:navigate :active="request()->routeIs('dashboard')">
                        {{ __('Главная') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('ordersdemo') }}" wire:navigate :active="request()->routeIs('ordersdemo')">
                        {{ __('Заказы') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('carriersdemo') }}" wire:navigate :active="request()->routeIs('carriersdemo')">
                        {{ __('Перевозчики') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('createdemo') }}" wire:navigate :active="request()->routeIs('createdemo')">
                        {{ __('Создать') }}
                    </x-nav-link>
                    @endif



                    <div class="ms-3 relative">        
            <x-dropdown align="middle" width="48">
            <x-slot name="trigger">
                <button type="button" class="text-sm">
                <x-nav-link>
                {{ __('Другое') }}
                </x-nav-link>
                </button>
            </x-slot>

            <x-slot name="content">
                <!-- Отдельные элементы списка ссылок -->
                <x-dropdown-link href="{{ route('about') }}" wire:navigate :active="request()->routeIs('about')">
                    {{ __('О нас') }}
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('faq') }}" wire:navigate :active="request()->routeIs('faq')">
                    {{ __('Функции') }}
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('tarif') }}" wire:navigate :active="request()->routeIs('tarif')">
                    {{ __('Тарифы') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
</div>
            </div>
        </div>
    </div>
</nav>
