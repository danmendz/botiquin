<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Nombre</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Género</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Matrícula</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Carrera</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Grupo</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Semestre</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Nacimiento</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Tipo</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($pacientes as $p)
                                    <tr>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['nombre'] }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['genero'] }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['matricula'] }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['carrera'] }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['grupo'] }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['semestre'] }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['fecha_nacimiento'] }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">{{ $p['tipo_paciente'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="px-4 py-4 text-center text-sm text-gray-500">
                                            No hay pacientes registrados.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
