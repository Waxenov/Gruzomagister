<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- таблица стилей -->
    @vite('resources/css/app.css')

    <!-- шрифты -->
    <title>ГрузоМагистр</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">

    <!-- шапка -->
    <div class="bg-white dark:bg-[#232323]">
        <header class="absolute inset-x-0 top-0 z-50">

            <!-- навигационное меню -->
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">

                <!-- логотип -->
                <div class="flex lg:flex-1">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('welcome') }}">
                            <span class="sr-only">ГрузоМагистр</span>
                            <x-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
                </div>

                <!-- кнопка входа -->
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="{{ route('login') }}" class="text-xl font-semibold leading-6 hover:text-gray-500 dark:text-white text-gray-900">Войти</a>
                </div>
            </nav>
        </header>

        <!-- основное содержимое страницы -->
        <div class="relative isolate px-6 pt-14 lg:px-8">
            
            <!-- два блока с задним фоном и переходом в градиент -->
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff72ad] to-[#ff8b2d] opacity-50 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="absolute inset-x-0 transform-gpu overflow-hidden blur-3xl sm:top-40">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff72ad] to-[#ff821b] opacity-50 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <!-- краткое описание проекта -->
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <!-- ссылка на страницу "О нас" -->
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 dark:text-gray-400 ring-1 ring-gray-900/10 dark:ring-gray-500/50 hover:ring-gray-900/20">
                        Проект грузоперевозок в Омской области <a href="{{ route('about') }}" class=" font-semibold text-[#FF0015]"><span class="absolute inset-0" aria-hidden="true"></span> Узнать больше <span>&rarr;</span></a>
                    </div>
                </div>

                <!-- заголовок и описание -->
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Оптимизация ваших доставок с помощью наших грузовых услуг</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">Упростите процесс доставки и сделайте его более эффективным с помощью нашего сервиса. От начала до конца мы позаботимся обо всём, чтобы обеспечить безопасную доставку вашего груза</p>
                    <!-- кнопка "Начать" -->
                    <div class="absolute mx-64 mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ route('dashboard') }}" class="rounded-md bg-[#FF0015] px-10 py-2.5 text-xl font-semibold text-white dark:text-[#232323] shadow-sm hover:bg-[#ff295b] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ff295b]">Начать</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- подробное описание проекта -->
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <!-- заголовок и описание -->
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-[#FF0015]">Быстрее! Выше! Сильнее!</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Будущее грузоперевозок Омска</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Инновационное решение для удобной и эффективной организации перевозок грузов в Омской области путем улучшения процесса совместной работы клиентов и исполнителей</p>
            </div>

            <!-- блоки с преимуществами -->
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                    <!-- преимущество 1 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#FF0015]">
                                <h1 class="text-white text-2xl font-bold">+</h1>
                            </div>
                            Удобство использования
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Проект предоставляет простой и интуитивно понятный интерфейс, который делает процесс заказа и выполнения перевозок максимально удобным для пользователей.</dd>
                    </div>

                    <!-- преимущество 2 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#FF0015]">
                                <h1 class="text-white text-2xl font-bold">+</h1>
                            </div>
                            Эффективное управление ресурсами
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Система помогает оптимизировать использование ресурсов, так как заказчики могут быстро найти подходящих перевозчиков, а перевозчики - находить заказы, соответствующие их возможностям и маршруту.</dd>
                    </div>

                    <!-- преимущество 3 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#FF0015]">
                                <h1 class="text-white text-2xl font-bold">+</h1>
                            </div>
                            Улучшенное сотрудничество
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Проект создает прозрачную и эффективную коммуникацию между заказчиками и перевозчиками, что способствует оперативному выполнению заказов и уменьшению временных задержек.</dd>
                    </div>

                    <!-- преимущество 4 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#FF0015]">
                                <h1 class="text-white text-2xl font-bold">+</h1>
                            </div>
                            Оптимизация выбора перевозчика
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Пользователи имеют возможность сравнивать предложения от различных перевозчиков на основе статистики, отзывов и цен, что позволяет выбирать наилучшее решение для своих потребностей.</dd>
                    </div>
                </dl>
            </div>

            <!-- блок с задним фоном и переходом в градиент -->
            <div class="absolute inset-x-0 transform-gpu overflow-hidden blur-3xl -mt-96">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#22ffb5] to-[#1eff00] opacity-50 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>

        <!-- описание работы сайта -->
        <div class="mx-auto max-w-7xl px-6 lg:px-8 my-40">

            <!-- заголовок и описание -->
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class=" text-base font-semibold leading-7 text-[#0dbdd4]">Как это работает?</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Всё проще чем кажется</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">ГрузоМагистр ваш помощник в организации перевозок грузов. Здесь вы можете заказать перевозку или предложить свои услуги в качестве перевозчика. Мы предоставляем простую форму для заполнения заказа и удобный поиск перевозок. Получайте уведомления о новых заказах и следите за статусом своих грузов через SMS и Email. Исследуйте различные типы кузовов грузовых машин с помощью интерактивных 3D моделей.</p>
            </div>

            <!-- блок с действиями -->
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                    <!-- действие 1 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#00d5ca]">
                                <h1 class="text-white text-xl font-bold">1</h1>
                            </div>
                            Заполнение формы заявки
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Заказчик заполняет простую форму, указывая данные о грузе, такие как вес, тип, комментарий к доставке, дата готовности к отправке, место загрузки и место доставки.</dd>
                    </div>

                    <!-- действие 2 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#00d5ca]">
                                <h1 class="text-white text-xl font-bold">2</h1>
                            </div>
                            Выбор перевозчика
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Сформированная заявка отображается для перевозчиков, которые могут предложить свои услуги. Заказчик выбирает наилучшего перевозчика на основе предоставленной статистики, предложенной цены и других деталей.</dd>
                    </div>

                    <!-- действие 3 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#00d5ca]">
                                <h1 class="text-white text-xl font-bold">3</h1>
                            </div>
                            Обсуждение деталей
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Заказчик связывается с выбранным перевозчиком для обсуждения дополнительных деталей, уточнения условий доставки и заключения сделки.</dd>
                    </div>

                    <!-- действие 4 -->
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#00d5ca]">
                                <h1 class="text-white text-xl font-bold">4</h1>
                            </div>
                            Выполнение доставки груза
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Перевозчик забирает груз, осуществляет доставку по указанному маршруту и в срок, обеспечивая успешную доставку груза заказчику.</dd>
                    </div>
                </dl>
            </div>

            <!-- блок с задним фоном и переходом в градиент -->
            <div class="absolute inset-x-0 transform-gpu overflow-hidden blur-3xl -mt-96">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#2cfff4] to-[#15ff15] opacity-50 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <!-- кнопка "Попробовать" -->
            <div class="absolute mx-[500px] mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('dashboard') }}" class="rounded-[15px] bg-transparent px-10 py-2.5 text-xl font-semibold text-gray-900 dark:text-white shadow-sm hover:bg-[#00d5ca] hover:text-white border-4 border-[#00d5ca] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#00ff9d]">Попробовать</a>
            </div>
        </div>
    </div>
</body>
</html>