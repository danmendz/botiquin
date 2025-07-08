<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Pacientes') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">Una lista de todos los {{ __('Pacientes') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('pacientes.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>
                                        
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Tipo Paciente</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Fecha Nacimiento</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Genero</th>
                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Matricula</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Carrera</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Grupo</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Semestre</th>

                                        <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($pacientes as $paciente)
    <tr class="even:bg-gray-50">
        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>

        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $paciente->tipoPaciente->nombre ?? 'Sin tipo' }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $paciente->nombre }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        {{ \Carbon\Carbon::parse($paciente->fecha_nacimiento)->format('d/m/Y')  }}
        </td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $detallesAcademico->matricula }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $detallesAcademico->carrera }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $detallesAcademico->grupo }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $detallesAcademico->semestre }}</td>

        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $paciente->genero }}</td>

        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
            <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                <a href="{{ route('pacientes.show', $paciente->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Visualizar') }}</a>
                <a href="{{ route('pacientes.edit', $paciente->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                @csrf
                @method('DELETE')
                <a href="{{ route('pacientes.destroy', $paciente->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('¿Estás seguro de eliminar?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
            </form>
        </td>
    </tr>
@endforeach

                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                    {!! $pacientes->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>