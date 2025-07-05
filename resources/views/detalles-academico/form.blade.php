<div class="space-y-6">
    
    <div>
        <x-input-label for="paciente_id" :value="__('Paciente Id')"/>
        <x-text-input id="paciente_id" name="paciente_id" type="text" class="mt-1 block w-full" :value="old('paciente_id', $detallesAcademico?->paciente_id)" autocomplete="paciente_id" placeholder="Paciente Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('paciente_id')"/>
    </div>
    <div>
        <x-input-label for="tipo_academico" :value="__('Tipo Academico')"/>
        <x-text-input id="tipo_academico" name="tipo_academico" type="text" class="mt-1 block w-full" :value="old('tipo_academico', $detallesAcademico?->tipo_academico)" autocomplete="tipo_academico" placeholder="Tipo Academico"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo_academico')"/>
    </div>
    <div>
        <x-input-label for="matricula" :value="__('Matricula')"/>
        <x-text-input id="matricula" name="matricula" type="text" class="mt-1 block w-full" :value="old('matricula', $detallesAcademico?->matricula)" autocomplete="matricula" placeholder="Matricula"/>
        <x-input-error class="mt-2" :messages="$errors->get('matricula')"/>
    </div>
    <div>
        <x-input-label for="carrera" :value="__('Carrera')"/>
        <x-text-input id="carrera" name="carrera" type="text" class="mt-1 block w-full" :value="old('carrera', $detallesAcademico?->carrera)" autocomplete="carrera" placeholder="Carrera"/>
        <x-input-error class="mt-2" :messages="$errors->get('carrera')"/>
    </div>
    <div>
        <x-input-label for="grupo" :value="__('Grupo')"/>
        <x-text-input id="grupo" name="grupo" type="text" class="mt-1 block w-full" :value="old('grupo', $detallesAcademico?->grupo)" autocomplete="grupo" placeholder="Grupo"/>
        <x-input-error class="mt-2" :messages="$errors->get('grupo')"/>
    </div>
    <div>
        <x-input-label for="semestre" :value="__('Semestre')"/>
        <x-text-input id="semestre" name="semestre" type="text" class="mt-1 block w-full" :value="old('semestre', $detallesAcademico?->semestre)" autocomplete="semestre" placeholder="Semestre"/>
        <x-input-error class="mt-2" :messages="$errors->get('semestre')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>