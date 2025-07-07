<div class="space-y-6">
    
    <div>
    <x-input-label for="tipo_paciente" :value="__('Tipo Paciente')" />
    <select id="tipo_paciente" name="tipo_paciente" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
    <option value="">-- Selecciona tipo --</option>
    @foreach ($tipos as $id => $nombre)
        <option value="{{ $id }}" {{ old('tipo_paciente', $paciente->tipo_paciente) == $id ? 'selected' : '' }}>
            {{ $nombre }}
        </option>
    @endforeach
</select>

    <x-input-error class="mt-2" :messages="$errors->get('tipo_paciente')" />
</div>



    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $paciente?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <!-- Fecha de nacimiento -->
    <div>
    <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')" />
    <x-text-input id="fecha_nacimiento" name="fecha_nacimiento" type="date"
        :value="old('fecha_nacimiento', $paciente?->fecha_nacimiento)"
        class="mt-1 block w-full" />
    <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
</div>

    <!-- Género -->
    <div>
        <x-input-label for="genero" :value="__('Genero')" />
        <select id="genero" name="genero" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
            <option value="">-- Selecciona género --</option>
            <option value="Masculino" {{ old('genero', $paciente?->genero) == 'masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Femenino" {{ old('genero', $paciente?->genero) == 'femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="Otro" {{ old('genero', $paciente?->genero) == 'otro' ? 'selected' : '' }}>Otro</option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('genero')" />
    </div>

    <!-- Botón -->
    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>