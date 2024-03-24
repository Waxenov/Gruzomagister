<x-app-layout>

    <!-- Таблица пользователей -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto bg-[#ffffff] rounded-tl-[15px] rounded-tr-[15px]">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">

                <!-- строчки таблицы -->
                <thead class="text-xs text-center text-gray-700 uppercase bg-[#ffffff]">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-tl-[15px] bg-[#FF0015] text-white">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Роль
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Почта
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Телефон
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Фамилия
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Имя
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Отчество
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-tr-[15px]">
                            Заказы
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <!-- вывод данных пользователей -->
                    @foreach($users as $user)
                    <tr class="bg-[#ffffff] text-center border-b-2 border-b-[#EDE3E7]">
                        <td class="py-5 text-[#FF0015] font-medium">#{{ $user->id }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->patronymic }}</td>

                        <!-- вывод количества заказов -->
                        @foreach ($clients as $client)
                            @if ($client->phone === $user->phone)
                                <td>{{ $client->orders_count }}</td>
                            @endif
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>