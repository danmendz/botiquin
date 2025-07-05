<div class="space-y-6">
    
    <div>
        <x-input-label for="botiquin_id" :value="__('Botiquin Id')"/>
        <x-text-input id="botiquin_id" name="botiquin_id" type="text" class="mt-1 block w-full" :value="old('botiquin_id', $inventario?->botiquin_id)" autocomplete="botiquin_id" placeholder="Botiquin Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('botiquin_id')"/>
    </div>
    <div>
        <x-input-label for="producto_id" :value="__('Producto Id')"/>
        <x-text-input id="producto_id" name="producto_id" type="text" class="mt-1 block w-full" :value="old('producto_id', $inventario?->producto_id)" autocomplete="producto_id" placeholder="Producto Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('producto_id')"/>
    </div>
    <div>
        <x-input-label for="cantidad" :value="__('Cantidad')"/>
        <x-text-input id="cantidad" name="cantidad" type="text" class="mt-1 block w-full" :value="old('cantidad', $inventario?->cantidad)" autocomplete="cantidad" placeholder="Cantidad"/>
        <x-input-error class="mt-2" :messages="$errors->get('cantidad')"/>
    </div>
    <div>
        <x-input-label for="fecha_caducidad" :value="__('Fecha Caducidad')"/>
        <x-text-input id="fecha_caducidad" name="fecha_caducidad" type="text" class="mt-1 block w-full" :value="old('fecha_caducidad', $inventario?->fecha_caducidad)" autocomplete="fecha_caducidad" placeholder="Fecha Caducidad"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_caducidad')"/>
    </div>
    <div>
        <x-input-label for="fecha_registro" :value="__('Fecha Registro')"/>
        <x-text-input id="fecha_registro" name="fecha_registro" type="text" class="mt-1 block w-full" :value="old('fecha_registro', $inventario?->fecha_registro)" autocomplete="fecha_registro" placeholder="Fecha Registro"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_registro')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>