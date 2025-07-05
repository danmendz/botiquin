<div class="space-y-6">
    
    <div>
        <x-input-label for="usuario_id" :value="__('Usuario Id')"/>
        <x-text-input id="usuario_id" name="usuario_id" type="text" class="mt-1 block w-full" :value="old('usuario_id', $reporte?->usuario_id)" autocomplete="usuario_id" placeholder="Usuario Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('usuario_id')"/>
    </div>
    <div>
        <x-input-label for="tipo_reporte" :value="__('Tipo Reporte')"/>
        <x-text-input id="tipo_reporte" name="tipo_reporte" type="text" class="mt-1 block w-full" :value="old('tipo_reporte', $reporte?->tipo_reporte)" autocomplete="tipo_reporte" placeholder="Tipo Reporte"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo_reporte')"/>
    </div>
    <div>
        <x-input-label for="fecha_generacion" :value="__('Fecha Generacion')"/>
        <x-text-input id="fecha_generacion" name="fecha_generacion" type="text" class="mt-1 block w-full" :value="old('fecha_generacion', $reporte?->fecha_generacion)" autocomplete="fecha_generacion" placeholder="Fecha Generacion"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_generacion')"/>
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')"/>
        <x-text-input id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" :value="old('descripcion', $reporte?->descripcion)" autocomplete="descripcion" placeholder="Descripcion"/>
        <x-input-error class="mt-2" :messages="$errors->get('descripcion')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>