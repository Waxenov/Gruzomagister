<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-between items-start md:items-center">
                    <h2 class=" mt-10 mx-10 font-bold text-4xl text-gray-800 leading-tight">
                        {{ __('Перевозки грузов по необъятной Омской области') }}
                    </h2>
                </div>
                <div class="md:ml-10 p-10">
                    <p class="font-normal text-xl text-gray-600 leading-tight mt-4">
                    ГрузоМагистр - надежный партнер для вашего груза.<br>
                    Мы предоставляем удобный спектр логистических и транспортных услуг, гарантируя,<br>
                    что ваши товары прибудут в целости и сохранности в срок.
                    </p>
                    <br>
                    <button type="button" class="flex text-white bg-[#FF5267] hover:bg-[#FF0015] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-24 py-2.5 text-center"><a href="{{ route('about') }}">Больше о нас</a></button>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
