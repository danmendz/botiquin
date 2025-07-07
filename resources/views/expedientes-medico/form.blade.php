@php
    $pacientes = \App\Models\Paciente::all();
    $usuarios = \App\Models\User::all();
@endphp

<div class="space-y-6">
    
    <div>
    <x-input-label for="paciente_id" :value="__('Paciente')" />
    <select name="paciente_id" id="paciente_id" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        <option value="">-- Selecciona un paciente --</option>
        @foreach ($pacientes as $paciente)
            <option value="{{ $paciente->id }}" {{ old('paciente_id', $expedientesMedico->paciente_id) == $paciente->id ? 'selected' : '' }}>
                {{ $paciente->tipoPaciente?->nombre }} - {{ $paciente->nombre }}
            </option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('paciente_id')" class="mt-2" />
</div>


    <div>
        <x-input-label for="usuario_id" :value="__('Usuario Responsable')" />
            <select id="usuario_id" name="usuario_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">Seleccione...</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}" {{ old('usuario_id', $expedientesMedico->usuario_id) == $usuario->id ? 'selected' : '' }}>
                                {{ $usuario->name }}
                            </option>
                        @endforeach
            </select>
        <x-input-error class="mt-2" :messages="$errors->get('usuario_id')" />
    </div>

    <div>
        <x-input-label for="fecha_evento" :value="__('Fecha Evento')"/>
        <x-text-input id="fecha_evento" name="fecha_evento" type="date" class="mt-1 block w-full" :value="old('fecha_evento', $expedientesMedico?->fecha_evento)" />
        <x-input-error class="mt-2" :messages="$errors->get('fecha_evento')"/>
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción')"/>
        <x-text-input id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" :value="old('descripcion', $expedientesMedico?->descripcion)" autocomplete="descripcion" placeholder="Descripcion"/>
        <x-input-error class="mt-2" :messages="$errors->get('descripcion')"/>
    </div>

    <div>
        <x-input-label for="producto_utilizado" :value="__('Producto Utilizado')"/>
        <x-text-input id="producto_utilizado" name="producto_utilizado" type="text" class="mt-1 block w-full" :value="old('producto_utilizado', $expedientesMedico?->producto_utilizado)" autocomplete="producto_utilizado" placeholder="Producto Utilizado"/>
        <x-input-error class="mt-2" :messages="$errors->get('producto_utilizado')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>