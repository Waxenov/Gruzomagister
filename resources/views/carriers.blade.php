<x-app-layout>
<div class="max-h-full min-h-screen">
        <div class="w-full mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h2 class="font-title text-4xl text-[#1C1C1C]  leading-tight">
                    {{ __('Перевозчики') }}
                </h2>
                
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-10 items-end">
                <div class="relative flex w-full h-fit">
                    <form action="{{ route('carriers') }}" method="GET" class="w-full flex flex-cols-2 gap-10">
                        <div class="flex flex-cols-2 sm:gap-4 gap-2 max-w-full max-h-fit">
                            <x-button type="submit">все</x-button>
                            <x-input type="text" name="search" class="text-center w-full block px-4 text-xl focus:outline-none font-maincraft" autocomplete="off" placeholder="найдём"></x-input>
                            <x-button type="submit">поиск</x-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- список перевозчиков -->
            <div class="relative overflow-x-auto rounded-xl">
                <table class="w-full min-w-screen text-lg text-[#1C1C1C]">
                    <thead class="bg-[#FFFAFA] text-[#131313] lowercase text-xl text-center font-maincraft leading-tight border-b-4 border-[#DCDCDC]">
                        <tr>
                            <th scope="col" class="px-8 py-4 font-maincraft bg-[#B00000] text-[#FFFAFA] text-xl font-light">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                фамилия
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                имя
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                отчество
                            </th>
                            <th scope="col" class="px-4 py-4 font-light">
                                телефон
                            </th>
                        </tr>
                    </thead>

                    <!-- данные перевозчиков -->
                    <tbody>
                    @if(Auth::check())
                        @foreach($carriers as $carrier)
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center py-6">
                            <td class="py-6 hover:bg-[#F5F5F5] text-[#B00000] font-light font-maincraft text-2xl">{{ $carrier->id }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $carrier->surname }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $carrier->name }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $carrier->patronymic }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $carrier->phone }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center py-6">
                            <td class="py-6 hover:bg-[#F5F5F5] text-[#B00000] font-light font-maincraft text-2xl">1</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Петров</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Пётр</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Петрович</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">7000000001</td>
                        </tr>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center py-6">
                            <td class="py-6 hover:bg-[#F5F5F5] text-[#B00000] font-light font-maincraft text-2xl">2</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Иванов</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Иван</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Иванович</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">7000000002</td>
                        </tr>
                        <tr class="bg-[#FFFAFA]  hover:bg-[#DCDCDC] font-neutral text-center py-6">
                            <td class="py-6 hover:bg-[#F5F5F5] text-[#B00000] font-light font-maincraft text-2xl">3</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Дмитриев</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Дмитрий</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">Дмитриевич</td>
                            <td class="px-2 hover:bg-[#F5F5F5] ">7000000003</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>