<x-app-layout>
    <div class="max-h-full min-h-screen">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h2 class="font-bold text-4xl text-[#1C1C1C] leading-tight">
                    {{ __('Вам заказы') }}
                    <br>
                </h2>
                <div class="text-[#828282]">
                    <a href="{{ route('carorders') }}" class="hover:text-[#131313] inline-flex items-center text-4xl font-bold text-center py-4">
                        {{ __('Заказы в работе') }}
                    </a>
                </div>
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-10 items-end">
                <div class="relative flex w-full h-fit">
                    <form action="{{ route('orders') }}" method="GET" class="w-full flex flex-cols-2 gap-10">
                        <div class="flex flex-cols-2 gap-4 max-w-full max-h-fit">
                            <x-button type="submit" class="border-transparent px-5 text-[#B00000]">все</x-button>
                            <x-input type="text" name="search" class="text-center w-full block px-4 text-xl focus:outline-none font-maincraft" autocomplete="off" placeholder="найдётся всё"></x-input>
                            <x-button type="submit" class="border-transparent font-maincraft">поиск</x-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- таблица заказов -->
            <div class="relative overflow-x-auto">
                <table class="max-w-full min-w-screen text-lg text-[#1C1C1C] font-normal">
                    <thead class="bg-[#FFFAFA] text-[#131313] lowercase text-xl text-center font-light font-maincraft leading-tight border-4 border-[#FAEEDD]">
                        <tr>
                            <th scope="col" class="px-8 py-4 font-maincraft bg-[#B00000] text-[#FAEEDD] text-xl uppercase font-light">
                                ID
                            </th>                            
                            <th scope="col" class="px-4 py-4">
                                заказчик
                            </th>
                            <th scope="col" class="px-4 py-4">
                                создан
                            </th>
                            <th scope="col" class="px-4 py-4">
                                тип
                            </th>
                            <th scope="col" class="px-4 py-4">
                                описание
                            </th>
                            <th scope="col" class="px-4 py-4">
                                вес
                            </th>
                            <th scope="col" class="px-4 py-4">
                                готов
                            </th>
                            <th scope="col" class="px-4 py-4">
                                отправка
                            </th>
                            <th scope="col" class="px-4 py-4">
                                доставка
                            </th>
                            <th scope="col" class="px-4 py-4">
                                кузов
                            </th>
                            <th scope="col" class="px-4 py-4">
                                телефон
                            </th>
                            <th scope="col" class="px-10 py-4 bg-[#B00000] text-[#FAEEDD] font-light text-4xl">
                                +
                            </th>
                            <!-- если пользователь админ - столбец удалить -->
                            @if(Auth::user()->role === 'admin')
                            <th scope="col" class="px-6 py-4 font-maincraft bg-[#B00000] text-[#FAEEDD] text-xl uppercase font-light">
                                del
                            </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>

                    <!-- цикл для вывода данных о заказах -->
                    @foreach($formData as $data)
                    <tr class="bg-[#FFFAFA] hover:bg-[#DBD7D2] text-center py-6 border-b-4 border-b-[#FAEEDD]">
                            <!-- данные о заказе -->
                            <td class="text-[#B00000] font-light font-maincraft text-2xl">{{ $data->id }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->surname }}  {{ $data->name }}  {{ $data->patronymic }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->created_at }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->cargo_type }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->cargo_describe }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->weight }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->ready_date }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->load_place }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->unload_place }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->truck_type }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $data->phone }}</td>
                            <td>
                            @if ($data->status === 'pending')
                                <form method="POST" action="{{ route('orders.confirmed', $data->id) }}">
                                    @csrf
                                    <button type="submit" class="w-full bg-[#FAEEDD] hover:bg-[#1C1C1C] text-[#30BA8F] font-maincraft text-4xl tracking-widest">
                                        +
                                    </button>
                                </form>
                            @endif
                            </td>
                            <!-- если пользователь админ - кнопка удаления заказа -->
                            @if(Auth::user()->role === 'admin')
                            <td>
                                <form action="{{ route('orders.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 me-2 mb-2 mt-2 bg-[#000] border border-transparent rounded-full font-bold text-xs uppercase text-white tracking-widest hover:bg-[#262626] focus:bg-[#000] active:bg-[#f00] focus:outline-none focus:ring-2 focus:ring-[#000] focus:ring-offset-2 transition ease-in-out duration-150">
                                    <svg class="w-[28px] h-[28px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    </button>
                                </form>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>