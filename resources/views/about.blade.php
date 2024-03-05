<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-between items-start md:items-center">
                    <h2 class=" mt-10 mx-10 font-bold text-4xl text-gray-800 leading-tight">
                        {{ __('Мы двигаем мир') }}
                    </h2>
                </div>
                <div class="md:ml-10 p-10">
                    <p class="font-normal text-xl text-gray-600 leading-tight mt-4">
                    Более трёх месяцев компания ГрузоМагистр является одним из лучших  поставщиков логистических услуг по Омской области. У нас есть опыт и экспертные знания, чтобы обеспечить безопасную и эффективную транспортировку ваших грузов. При небольшой сети партнеров, мы предлагаем широкий спектр услуг для наших клиентов.
                    </p>
                    <br>
                    <button type="button" class="flex text-white bg-[#FF5267] hover:bg-[#FF0015] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-24 py-2.5 text-center">@if(Auth::check())<a href="{{ route('create') }}">Начать</a>@else<a href="{{ route('register') }}">Начать</a>@endif</button>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
