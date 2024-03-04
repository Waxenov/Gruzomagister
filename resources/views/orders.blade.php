<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Заказы') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center max-w-full mx-auto sm:px-6 lg:px-8">
                    <table class="border-2">
                        @foreach ($formData as $data)
                        <tr class="border-2">
                            <td> {{ $data->id }} </td>
                            <td> {{ $data->created_at }} </td>
                            <td> {{ $data->cargo_type }} </td>
                            <td> {{ $data->weight }} </td>
                            <td> {{ $data->ready_date }} </td>
                            <td> {{ $data->load_place }} </td>
                            <td> {{ $data->unload_place }} </td>
                            <td> {{ $data->truck_type }} </td>
                            <td> {{ $data->surname }} {{ $data->name }} {{ $data->patronymic }} </td>
                            <td> {{ $data->phone }} </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
