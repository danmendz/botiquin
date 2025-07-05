<div class="space-y-6">
    
    <div>
        <x-input-label for="paciente_id" :value="__('Paciente Id')"/>
        <x-text-input id="paciente_id" name="paciente_id" type="text" class="mt-1 block w-full" :value="old('paciente_id', $expedientesMedico?->paciente_id)" autocomplete="paciente_id" placeholder="Paciente Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('paciente_id')"/>
    </div>
    <div>
        <x-input-label for="usuario_id" :value="__('Usuario Id')"/>
        <x-text-input id="usuario_id" name="usuario_id" type="text" class="mt-1 block w-full" :value="old('usuario_id', $expedientesMedico?->usuario_id)" autocomplete="usuario_id" placeholder="Usuario Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('usuario_id')"/>
    </div>
    <div>
        <x-input-label for="fecha_evento" :value="__('Fecha Evento')"/>
        <x-text-input id="fecha_evento" name="fecha_evento" type="text" class="mt-1 block w-full" :value="old('fecha_evento', $expedientesMedico?->fecha_evento)" autocomplete="fecha_evento" placeholder="Fecha Evento"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_evento')"/>
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')"/>
        <x-text-input id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" :value="old('descripcion', $expedientesMedico?->descripcion)" autocomplete="descripcion" placeholder="Descripcion"/>
        <x-input-error class="mt-2" :messages="$errors->get('descripcion')"/>
    </div>
    <div>
        <x-input-label for="producto_utilizado" :value="__('Producto Utilizado')"/>
        <x-text-input id="producto_utilizado" name="producto_utilizado" type="text" class="mt-1 block w-full" :value="old('producto_utilizado', $expedientesMedico?->producto_utilizado)" autocomplete="producto_utilizado" placeholder="Producto Utilizado"/>
        <x-input-error class="mt-2" :messages="$errors->get('producto_utilizado')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>