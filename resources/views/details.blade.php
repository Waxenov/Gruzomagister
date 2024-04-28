<x-app-layout>
    <div class="max-h-full min-h-screen">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">

            <!-- заголовок страницы и описание -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h2 class="font-title text-4xl text-[#1C1C1C] leading-tight">
                    {{ __('Детали заказов') }}
                    <br>
                </h2>
                <div class="text-[#696969]">
                    <a href="{{ route('orders') }}" class="hover:text-[#131313] inline-flex items-center text-4xl font-title text-center py-4">
                        {{ __('Назад к заказам') }}
                    </a>
                </div>
            </div>

            <!-- поиск -->
            <div class="flex mx-auto mb-10 items-end">
                <div class="relative flex w-full h-fit">
                    <form action="{{ route('details') }}" method="GET" class="w-full flex flex-cols-2 gap-10">
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
                <table class="max-w-full min-w-screen text-lg text-[#FAEEDD] font-normal">
                    <thead class="bg-[#FFFAFA] text-[#131313] lowercase text-xl text-center font-maincraft leading-tight">
                        <tr>
                            <th scope="col" class="px-4 py-4 bg-[#B00000] text-[#FAEEDD] text-xl normal-case font-light">
                                ID заказ
                            </th>
                            <th scope="col" class="px-4 py-4 bg-[#CA3767] text-[#FAEEDD] text-xl normal-case font-light">
                                ID перевозчик
                            </th>
                            <th scope="col" class="px-4 py-4">
                                статус
                            </th>
                            <th scope="col" class="px-4 py-4">
                                создан
                            </th>
                            <th scope="col" class="px-4 py-4">
                                принято
                            </th>
                            <th scope="col" class="px-4 py-4">
                                отправлено
                            </th>
                            <th scope="col" class="px-4 py-4">
                                доставлено
                            </th>
                            <th scope="col" class="px-4 py-4">
                                готов
                            </th>
                            
                        </tr>
                    </thead>

                    <!-- данные деталей -->
                    <tbody>
                        @foreach ($userOrders as $order)

                        @if ($order->status != 'pending')

                            <tr class="bg-[#FFFAFA] hover:bg-[#FAEEDD] font-neutral text-center py-6">
                                <td class="text-[#B00000] font-light font-maincraft text-2xl">{{ $order->id }}</td>

                                <td class="text-[#CA3767] font-light font-maincraft text-2xl py-6">
                                    <a href="{{ route('carriers') }}" class="hover:text-[#FAEEDD]">{{ $order->id_carrier }}</a>
                                </td>

                                <td>
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

                                <td class="px-2 hover:bg-[#B00000]">{{ $order->created_at }}</td>
                                <td class="px-2 hover:bg-[#B00000]">{{ $order->confirmed_at }}</td>
                                <td class="px-2 hover:bg-[#B00000]">{{ $order->traffic_at}}</td>
                                <td class="px-2 hover:bg-[#B00000]">{{ $order->delivered_at}}</td>
                                <td class="px-2 hover:bg-[#B00000]">{{ $order->ready_date }}</td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>