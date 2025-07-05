<div class="space-y-6">
    
    <div>
        <x-input-label for="tipo_paciente" :value="__('Tipo Paciente')"/>
        <x-text-input id="tipo_paciente" name="tipo_paciente" type="text" class="mt-1 block w-full" :value="old('tipo_paciente', $paciente?->tipo_paciente)" autocomplete="tipo_paciente" placeholder="Tipo Paciente"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo_paciente')"/>
    </div>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $paciente?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="fecha_nacimiento" :value="__('Fecha Nacimiento')"/>
        <x-text-input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="mt-1 block w-full" :value="old('fecha_nacimiento', $paciente?->fecha_nacimiento)" autocomplete="fecha_nacimiento" placeholder="Fecha Nacimiento"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_nacimiento')"/>
    </div>
    <div>
        <x-input-label for="genero" :value="__('Genero')"/>
        <x-text-input id="genero" name="genero" type="text" class="mt-1 block w-full" :value="old('genero', $paciente?->genero)" autocomplete="genero" placeholder="Genero"/>
        <x-input-error class="mt-2" :messages="$errors->get('genero')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>