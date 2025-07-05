<div class="space-y-6">
    
    <div>
        <x-input-label for="inventario_id" :value="__('Inventario Id')"/>
        <x-text-input id="inventario_id" name="inventario_id" type="text" class="mt-1 block w-full" :value="old('inventario_id', $movimiento?->inventario_id)" autocomplete="inventario_id" placeholder="Inventario Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('inventario_id')"/>
    </div>
    <div>
        <x-input-label for="usuario_id" :value="__('Usuario Id')"/>
        <x-text-input id="usuario_id" name="usuario_id" type="text" class="mt-1 block w-full" :value="old('usuario_id', $movimiento?->usuario_id)" autocomplete="usuario_id" placeholder="Usuario Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('usuario_id')"/>
    </div>
    <div>
        <x-input-label for="tipo" :value="__('Tipo')"/>
        <x-text-input id="tipo" name="tipo" type="text" class="mt-1 block w-full" :value="old('tipo', $movimiento?->tipo)" autocomplete="tipo" placeholder="Tipo"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo')"/>
    </div>
    <div>
        <x-input-label for="cantidad" :value="__('Cantidad')"/>
        <x-text-input id="cantidad" name="cantidad" type="text" class="mt-1 block w-full" :value="old('cantidad', $movimiento?->cantidad)" autocomplete="cantidad" placeholder="Cantidad"/>
        <x-input-error class="mt-2" :messages="$errors->get('cantidad')"/>
    </div>
    <div>
        <x-input-label for="fecha_movimiento" :value="__('Fecha Movimiento')"/>
        <x-text-input id="fecha_movimiento" name="fecha_movimiento" type="text" class="mt-1 block w-full" :value="old('fecha_movimiento', $movimiento?->fecha_movimiento)" autocomplete="fecha_movimiento" placeholder="Fecha Movimiento"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_movimiento')"/>
    </div>
    <div>
        <x-input-label for="observaciones" :value="__('Observaciones')"/>
        <x-text-input id="observaciones" name="observaciones" type="text" class="mt-1 block w-full" :value="old('observaciones', $movimiento?->observaciones)" autocomplete="observaciones" placeholder="Observaciones"/>
        <x-input-error class="mt-2" :messages="$errors->get('observaciones')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>