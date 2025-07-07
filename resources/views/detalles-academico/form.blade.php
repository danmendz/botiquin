<div class="space-y-6">
    {{-- Paciente --}}
    <div>
       <x-input-label for="paciente_id" :value="__('Paciente')" />
<select id="paciente_id" name="paciente_id" class="mt-1 block w-full rounded-md border-gray-300" required>
    <option value="">-- Selecciona un Paciente --</option>
    @foreach ($pacientes as $paciente)
        <option value="{{ $paciente->id }}" {{ old('paciente_id', $detallesAcademico?->paciente_id) == $paciente->id ? 'selected' : '' }}>
            {{ $paciente->nombre }}
        </option>
    @endforeach
</select>
<x-input-error :messages="$errors->get('paciente_id')" class="mt-2" />

    </div>

    {{-- Tipo Académico --}}
    <div>
        <x-input-label for="tipo_academico" :value="__('Tipo Académico')" />
        <select id="tipo_academico" name="tipo_academico" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            <option value="">-- Selecciona tipo --</option>
            <option value="Estudiante" {{ old('tipo_academico', $detallesAcademico?->tipo_academico) == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
            <option value="Docente" {{ old('tipo_academico', $detallesAcademico?->tipo_academico) == 'Docente' ? 'selected' : '' }}>Docente</option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('tipo_academico')" />
    </div>

    {{-- Matrícula --}}
    <div>
        <x-input-label for="matricula" :value="__('Matrícula')" />
        <x-text-input id="matricula" name="matricula" type="text" class="mt-1 block w-full"
                      :value="old('matricula', $detallesAcademico?->matricula)" placeholder="Ej. 2023123456" />
        <x-input-error class="mt-2" :messages="$errors->get('matricula')" />
    </div>

    {{-- Carrera --}}
    <div>
        <x-input-label for="carrera" :value="__('Carrera')" />
        <x-text-input id="carrera" name="carrera" type="text" class="mt-1 block w-full"
                      :value="old('carrera', $detallesAcademico?->carrera)" placeholder="Nombre de la carrera" />
        <x-input-error class="mt-2" :messages="$errors->get('carrera')" />
    </div>

    {{-- Grupo --}}
    <div>
        <x-input-label for="grupo" :value="__('Grupo')" />
        <x-text-input id="grupo" name="grupo" type="text" class="mt-1 block w-full"
              :value="old('grupo', $detallesAcademico?->grupo)" placeholder="Ej. A, B, C" />
        <x-input-error class="mt-2" :messages="$errors->get('grupo')" />
    </div>

    {{-- Semestre --}}
    <div>
        <x-input-label for="semestre" :value="__('Semestre')" />
        <x-text-input id="semestre" name="semestre" type="text" class="mt-1 block w-full"
                    :value="old('semestre', $detallesAcademico?->semestre)" placeholder="Ej. 1, 2, 3..." />
        <x-input-error class="mt-2" :messages="$errors->get('semestre')" />
    </div>

    <!-- Botón -->
    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>
