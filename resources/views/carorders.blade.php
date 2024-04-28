<x-app-layout>
    <div class="max-h-full min-h-screen">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">
            
            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h2 class="font-bold text-4xl text-[#1C1C1C] leading-tight">
                    {{ __('Детали заказов') }}
                    <br>
                </h2>
                <div class="text-[#828282]">
                    <a href="{{ route('orders') }}" class="hover:text-[#131313] inline-flex items-center text-4xl font-bold text-center py-4">
                        {{ __('Назад к заказам') }}
                    </a>
                </div>
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-10 items-end">
                <div class="relative flex w-full h-fit">
                    <form action="{{ route('carorders') }}" method="GET" class="w-full flex flex-cols-2 gap-10">
                        <div class="flex flex-cols-2 gap-4 max-w-full max-h-fit">
                            <x-button type="submit">все</x-button>
                            <x-input type="text" name="search" class="text-center w-full block px-4 text-xl focus:outline-none font-maincraft" autocomplete="off" placeholder="найдётся всё"></x-input>
                            <x-button type="submit">поиск</x-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- список заказов -->
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
                                тип
                            </th>
                            <th scope="col" class="px-4 py-4">
                                описание
                            </th>
                            <th scope="col" class="px-4 py-4">
                                вес
                            </th>
                            <th scope="col" class="px-10 py-4">
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
                                статус
                            </th>
                            <th scope="col" class="px-4 py-4 font-maincraft bg-[#B00000] text-[#FAEEDD] font-light">
                                сменить
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($statusOrders->isEmpty())
                        <tr class="bg-[#131313] hover:bg-[#1C1C1C] font-maincraft text-xl text-center py-6 border-b-2 border-b-[#1C1C1C]">
                            <td class="text-[#B00000] font-light text-2xl"> 0 </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="px-2 hover:bg-[#B00000]"> ... </td>
                            <td class="hover:bg-[#B00000]"> ... </td>
                            <td> 
                                <button type="button" class="text-[#B00000] hover:text-[#FAEEDD] font-maincraft text-4xl"> x </button>
                            </td>
                        </tr>
                        @else
                        <!-- вывод заказов заказчика -->
                        @foreach($statusOrders as $order)
                        <tr class="bg-[#FFFAFA] hover:bg-[#DBD7D2] text-center py-6 border-b-4 border-b-[#FAEEDD]">
                            <td class="text-[#B00000] font-light font-maincraft text-2xl">{{ $order->id }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->surname }}<br>{{ $order->name }}<br>{{ $order->patronymic }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->cargo_type }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->cargo_describe }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->weight }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->ready_date }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->load_place }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->unload_place }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">{{ $order->truck_type }}</td>
                            <td class="px-2 hover:bg-[#F5F5F5]">
                                @if ($order->status === 'pending')
                                    <span class="flex items-center justify-center">
                                        <x-status-pending-logo class="block h-5 w-5"/>
                                    </span>

                                
                                @elseif ($order->status === 'confirmed')
                                    <span class="flex items-center justify-center">
                                        <x-status-confirmed-logo class="block h-7 w-7"/>
                                    </span>
                                    
                                @elseif ($order->status === 'traffic')
                                    <span class="flex items-center justify-center">
                                        <x-status-traffic-logo class="block h-7 w-7"/>
                                    </span>
                                    
                                @elseif ($order->status === 'delivered')
                                    <span class="flex items-center justify-center">
                                        <x-status-delivered-logo class="block h-7 w-7"/>
                                    </span>
                                @endif
                            </td>
                            <td class="grid grid-col-1 text-2xl font-maincraft items-center text-center justify-between bg-[#131313]">
                                @if ($order->status === 'confirmed')
                                    <form method="POST" action="{{ route('orders.traffic', $order->id) }}">
                                        @csrf
                                        <button type="submit" class="w-fit text-2xl flex justify-center items-center tracking-widest text-[#FAEEDD]">
                                        <x-status-confirmed-logo class="block h-7 w-7"/> - <x-status-traffic-logo class="block h-7 w-7"/>
                                        </button>
                                    </form>

                                @elseif ($order->status === 'traffic')
                                    <form method="POST" action="{{ route('orders.delivered', $order->id) }}">
                                        @csrf
                                        <button type="submit" class="w-fit text-2xl flex justify-center items-center tracking-widest text-[#FAEEDD]">
                                        <x-status-traffic-logo class="block h-7 w-7 mr-2"/> - <x-status-delivered-logo class="block h-7 w-7"/>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>