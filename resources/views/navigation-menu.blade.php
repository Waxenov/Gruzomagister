<nav x-data="{ open: false }" class="bg-[#FFFAFA] font-neutral sticky top-0 z-10 w-full">
    <div class="sm:ms-4 mx-auto">
        <div class="flex justify-between items-center h-16">

            <!-- логотип -->
            <div class="shrink-0 flex px-2">
                <!-- ссылка на страницу "Приветствие" -->
                <a href="{{ route('welcome') }}" class="flex flex-cols-2 gap-2">
                    <x-application-mark class="block h-12 w-12" />
                    <div id="logotxt"
                        class="flex flex-col items-start justify-center text-[#1E1E1E] sm:text-2xl text-xl font-maincraft">
                        ГрузоМагистр
                    </div>
                </a>

                <!-- кнопка переключения темы -->
                <div class="flex justify-center items-center ps-10">
                    <span id="theme-toggle">
                        <!-- SVG для светлой темы -->
                        <x-theme-sun id="sun" class="block h-7 w-7"/>
                        <!-- SVG для темной темы -->
                        <x-theme-moon id="moon" class="block h-7 w-7"/>
                        <!-- Текст кнопки по умолчанию -->
                        <span class="hidden">кнопка</span>
                    </span>
                </div>
            
            </div>

            <div class="flex">

                <!-- ссылки -->
                <div class="hidden space-x-10 sm:flex items-center">

                    <!-- если пользователь авторизован -->
                    @if(Auth::check())
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Главная') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('orders') }}" :active="request()->routeIs('orders')">
                        {{ __('Заказы') }}
                    </x-nav-link>

                    <!-- если пользователь заказчик -->
                    @if(Auth::user()->role === 'client')
                    <x-nav-link href="{{ route('create') }}" :active="request()->routeIs('create')">
                        {{ __('Создать') }}
                    </x-nav-link>
                    @endif

                    <!-- если пользователь админ -->
                    @if(Auth::user()->role === 'admin')
                    <x-nav-link href="{{ route('adminpanel') }}" :active="request()->routeIs('adminpanel')">
                        {{ __('Настройка') }}
                    </x-nav-link>
                    @endif

                    <x-nav-link href="{{ route('carriers') }}" :active="request()->routeIs('carriers')">
                        {{ __('Перевозчики') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                        {{ __('Проект') }}
                    </x-nav-link>

                    <!-- если пользователь не авторизован -->
                    @else
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Главная') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('ordersdemo') }}" :active="request()->routeIs('ordersdemo')">
                        {{ __('Заказы') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('carriers') }}" :active="request()->routeIs('carriers')">
                        {{ __('Перевозчики') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('create') }}" :active="request()->routeIs('create')">
                        {{ __('Создать') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                        {{ __('Проект') }}
                    </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- кнопка аккаунта -->
            <div class="hidden sm:flex justify-end text-xl font-title items-end text-center p-2">
                <x-dropdown>
                    <x-slot name="trigger">

                        <!-- если пользователь авторизован -->
                        @if(Auth::check())
                        <span>
                            <button type="button"
                                class="flex justify-center items-center border border-transparent sm:text-xl text-sm leading-4 font-medium focus:outline-none transition ease-in-out duration-150">

                                <!-- пользователь перевозчик -->
                                @if(Auth::user()->role === 'carrier')
                                <svg class="w-6 h-6 text-[#B00000]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.535a3.5 3.5 0 1 0 6.93 0h3.07a3.5 3.5 0 1 0 6.93 0H21a1 1 0 0 0 1-1v-4a.999.999 0 0 0-.106-.447l-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.192 11.59.016.02a1.5 1.5 0 1 1-.016-.021Zm-10 0 .016.02a1.5 1.5 0 1 1-.016-.021Zm5.806-5.572v-2.02h4.396l1 2.02h-5.396Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span id="role" class="text-[#B00000]">{{ Auth::user()->email }}</span>

                                <!-- пользователь клиент -->
                                @elseif(Auth::user()->role === 'client')
                                <svg class="w-6 h-6 text-[#B00000]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span id="role" class="text-[#B00000]">{{ Auth::user()->email }} </span>

                                <!-- пользователь админ -->
                                @elseif (Auth::user()->role === 'admin')
                                <svg class="w-6 h-6 text-[#B00000]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M21.718 12c0-1.429-1.339-2.681-3.467-3.5.029-.18.077-.37.1-.545.217-2.058-.273-3.543-1.379-4.182-1.235-.714-2.983-.186-4.751 1.239C10.45 3.589 8.7 3.061 7.468 3.773c-1.107.639-1.6 2.124-1.379 4.182.018.175.067.365.095.545-2.127.819-3.466 2.071-3.466 3.5 0 1.429 1.339 2.681 3.466 3.5-.028.18-.077.37-.095.545-.218 2.058.272 3.543 1.379 4.182.376.213.803.322 1.235.316a5.987 5.987 0 0 0 3.514-1.56 5.992 5.992 0 0 0 3.515 1.56 2.44 2.44 0 0 0 1.236-.316c1.106-.639 1.6-2.124 1.379-4.182-.019-.175-.067-.365-.1-.545 2.132-.819 3.471-2.071 3.471-3.5Zm-6.01-7.548a1.5 1.5 0 0 1 .76.187c.733.424 1.055 1.593.884 3.212-.012.106-.043.222-.058.33-.841-.243-1.7-.418-2.57-.523a16.165 16.165 0 0 0-1.747-1.972 4.9 4.9 0 0 1 2.731-1.234Zm-7.917 8.781c.172.34.335.68.529 1.017.194.337.395.656.6.969a14.09 14.09 0 0 1-1.607-.376 14.38 14.38 0 0 1 .478-1.61Zm-.479-4.076a14.085 14.085 0 0 1 1.607-.376c-.205.313-.405.634-.6.969-.195.335-.357.677-.529 1.017-.19-.527-.35-1.064-.478-1.61ZM8.3 12a19.32 19.32 0 0 1 .888-1.75c.33-.568.69-1.118 1.076-1.65.619-.061 1.27-.1 1.954-.1.684 0 1.333.035 1.952.1a19.63 19.63 0 0 1 1.079 1.654c.325.567.621 1.15.887 1.746a18.869 18.869 0 0 1-1.953 3.403 19.218 19.218 0 0 1-3.931 0 20.169 20.169 0 0 1-1.066-1.653A19.324 19.324 0 0 1 8.3 12Zm7.816 2.25c.2-.337.358-.677.53-1.017.191.527.35 1.065.478 1.611a14.48 14.48 0 0 1-1.607.376c.202-.314.404-.635.597-.97h.002Zm.53-3.483c-.172-.34-.335-.68-.53-1.017a20.214 20.214 0 0 0-.6-.97c.542.095 1.078.22 1.606.376a14.111 14.111 0 0 1-.478 1.611h.002ZM12.217 6.34c.4.375.777.773 1.13 1.193-.37-.02-.746-.033-1.129-.033s-.76.013-1.131.033c.353-.42.73-.817 1.13-1.193Zm-4.249-1.7a1.5 1.5 0 0 1 .76-.187 4.9 4.9 0 0 1 2.729 1.233A16.253 16.253 0 0 0 9.71 7.658c-.87.105-1.728.28-2.569.524-.015-.109-.047-.225-.058-.331-.171-1.619.151-2.787.885-3.211ZM3.718 12c0-.9.974-1.83 2.645-2.506.218.857.504 1.695.856 2.506-.352.811-.638 1.65-.856 2.506C4.692 13.83 3.718 12.9 3.718 12Zm4.25 7.361c-.734-.423-1.056-1.593-.885-3.212.011-.106.043-.222.058-.331.84.243 1.697.418 2.564.524a16.37 16.37 0 0 0 1.757 1.982c-1.421 1.109-2.714 1.488-3.494 1.037Zm3.11-2.895c.374.021.753.034 1.14.034.387 0 .765-.013 1.139-.034a14.4 14.4 0 0 1-1.14 1.215 14.248 14.248 0 0 1-1.139-1.215Zm5.39 2.895c-.782.451-2.075.072-3.5-1.038a16.248 16.248 0 0 0 1.757-1.981 16.41 16.41 0 0 0 2.565-.523c.015.108.046.224.058.33.175 1.619-.148 2.789-.88 3.212Zm1.6-4.854A16.563 16.563 0 0 0 17.216 12c.352-.812.638-1.65.856-2.507 1.671.677 2.646 1.607 2.646 2.507 0 .9-.975 1.83-2.646 2.507h-.004Z" />
                                    <path
                                        d="M12.215 13.773a1.792 1.792 0 1 0-1.786-1.8v.006a1.787 1.787 0 0 0 1.786 1.794Z" />
                                </svg>
                                <span id="role" class="text-[#B00000]">ADMINISTRATOR</span>

                                <!-- вывод роли -->
                                @else
                                <span id="role">{{ Auth::user()->role }}</span>
                                @endif
                            </button>
                        </span>

                        <!-- если пользователь не авторизован -->
                        @else
                        <span>
                            @if(Auth::check())
                            <button type="button"
                                class="inline-flex items-center sm:text-xl text-sm px-3 py-2 border border-transparent leading-4 font-medium text-[#B00000] bg-white focus:outline-none focus:bg-[#fff] active:bg-[#fff] transition ease-in-out duration-150">
                                {{ __('Аккаунт') }}
                            </button>
                            @else
                            <form method="GET" action="{{ route('login') }}">
                                <button type="submit"
                                    class="flex justify-center font-maincraft items-center sm:text-2xl text-xl px-4 py-2 font-medium text-[#B00000] hover:text-[#FF0000] transition ease-in-out duration-150">
                                    {{ __('вход') }}
                                </button>
                            </form>
                            @endif
                        </span>
                        @endif
                    </x-slot>

                    <!-- выпадающее меню настройки аккаунта -->
                    <x-slot name="content" class="flex justify-center items-center">
                        @auth
                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Аккаунт') }}
                        </x-dropdown-link>
                        @endauth

                        <!-- кнопка выхода из аккаунта -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            @auth
                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <span>{{ __('Выйти') }}</span>
                            </x-dropdown-link>
                            @endauth
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        <!-- Hamburger -->
        <div class="flex items-center sm:hidden ps-5">
            <button @click="open = ! open"
            class="inline-flex items-center justify-center py-2 rounded-md text-[#B00000] hover:text-[#1C1C1C] hover:bg-white focus:outline-none focus:bg-white focus:text-[#1C1C1C] transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- адаптивное навигационное меню -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3">
            <div class="flex items-center flex-col space-y-3">
                <!-- если пользователь авторизован -->
                @if(Auth::check())
                <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Главная') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('orders') }}" :active="request()->routeIs('orders')">
                    {{ __('Заказы') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('carriers') }}" :active="request()->routeIs('carriers')">
                    {{ __('Перевозчики') }}
                </x-responsive-nav-link>

                <!-- если пользователь заказчик -->
                @if(Auth::user()->role === 'client')
                <x-responsive-nav-link href="{{ route('create') }}" :active="request()->routeIs('create')">
                    {{ __('Создать') }}
                </x-responsive-nav-link>
                @endif

                <x-responsive-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    {{ __('Проект') }}
                </x-responsive-nav-link>

                <!-- если пользователь не авторизован -->
                @else
                <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Главная') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('ordersdemo') }}" :active="request()->routeIs('ordersdemo')">
                    {{ __('Заказы') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('carriers') }}" :active="request()->routeIs('carriers')">
                    {{ __('Перевозчики') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('create') }}" :active="request()->routeIs('create')">
                    {{ __('Создать') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    {{ __('Проект') }}
                </x-responsive-nav-link>
                @endif
            </div>
        </div>


            @if(Auth::check())
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-base text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}"
                        :active="request()->routeIs('profile.show')">
                        {{ __('Аккаунт') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Выйти') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @else
            <div class="flex justify-center font-maincraft items-center bg-[#B00000]">
                <div>
                    <x-responsive-nav-link class="font-maincraft text-xl text-[#fff]" href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('вход') }}
                    </x-responsive-nav-link>
                </div>
                @endif
            </div>
        </div>
    </div>
</nav>