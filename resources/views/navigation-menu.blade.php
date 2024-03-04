<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    @if(Auth::check())
                    <x-nav-link href="{{ route('orders') }}" wire:navigate :active="request()->routeIs('orders')">
                        {{ __('Заказы') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('carriers') }}" wire:navigate :active="request()->routeIs('carriers')">
                        {{ __('Перевозчики') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('create') }}" wire:navigate :active="request()->routeIs('create')">
                        {{ __('Создать') }}
                    </x-nav-link>

                    @else
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

                    <x-nav-link href="{{ route('about') }}" wire:navigate :active="request()->routeIs('about')">
                        {{ __('О нас') }}
                    </x-nav-link>
                </div>
            </div>

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if(Auth::check())
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="justify-end mt-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        Личный кабинет
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="justify-end mt-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        Личный кабинет
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
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('orders') }}" wire:navigate :active="request()->routeIs('orders')">
                {{ __('Заказы') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('carriers') }}" wire:navigate :active="request()->routeIs('carriers')">
                {{ __('Перевозчики') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('create') }}" wire:navigate :active="request()->routeIs('create')">
                {{ __('Создать') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('about') }}" wire:navigate :active="request()->routeIs('about')">
                {{ __('О нас') }}
            </x-responsive-nav-link>
        </div>
        

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
            @if(Auth::check())
                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                @else
                <div>
                    <div class="font-medium text-base text-gray-800">{{ __('Пользователь') }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ __('Почта') }}</div>
                </div>
            @endif
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Аккаунт') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('Токены API') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">
                        {{ __('Выйти') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
