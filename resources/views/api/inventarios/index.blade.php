<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Inventarios') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                {{-- Formulario de filtros --}}
                <form method="GET" action="{{ route('api.inventarios') }}" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label for="producto_id" class="block text-sm font-medium text-gray-700">Producto</label>
                        <select name="producto_id" id="producto_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">-- Todos --</option>
                            @foreach($productos as $producto)
                                <option value="{{ $producto['id'] }}" {{ request('producto_id') == $producto['id'] ? 'selected' : '' }}>
                                    {{ $producto['nombre'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="botiquin_id" class="block text-sm font-medium text-gray-700">Botiquín</label>
                        <select name="botiquin_id" id="botiquin_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">-- Todos --</option>
                            @foreach($botiquines as $botiquin)
                                <option value="{{ $botiquin['id'] }}" {{ request('botiquin_id') == $botiquin['id'] ? 'selected' : '' }}>
                                    {{ $botiquin['nombre'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-end">
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
                            Filtrar
                        </button>
                    </div>
                </form>

                {{-- Tabla de resultados --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">ID</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Producto</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Botiquín</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Cantidad</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Caducidad</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($inventarios as $item)
                                <tr>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{ $item['id'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{ $item['producto'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{ $item['botiquin'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{ $item['cantidad'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{ $item['fecha_caducidad'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">No se encontraron inventarios</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
