<div class="space-y-6">
    
    {{-- Botiquín --}}
<div>
    <x-input-label for="botiquin_id" :value="__('Botiquín')" />
    <select id="botiquin_id" name="botiquin_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <option value="">Seleccione un botiquín</option>
        @foreach ($botiquines as $botiquin)
            <option value="{{ $botiquin->id }}" {{ old('botiquin_id', $inventario?->botiquin_id) == $botiquin->id ? 'selected' : '' }}>
                {{ $botiquin->nombre }}
            </option>
        @endforeach
    </select>
    <x-input-error class="mt-2" :messages="$errors->get('botiquin_id')" />
</div>

{{-- Producto --}}
<div>
    <x-input-label for="producto_id" :value="__('Producto')" />
    <select id="producto_id" name="producto_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <option value="">Seleccione un producto</option>
        @foreach ($productos as $producto)
            <option value="{{ $producto->id }}" {{ old('producto_id', $inventario?->producto_id) == $producto->id ? 'selected' : '' }}>
                {{ $producto->nombre }}
            </option>
        @endforeach
    </select>
    <x-input-error class="mt-2" :messages="$errors->get('producto_id')" />
</div>

        <x-input-label for="cantidad" :value="__('Cantidad')"/>
        <x-text-input id="cantidad" name="cantidad" type="text" class="mt-1 block w-full" :value="old('cantidad', $inventario?->cantidad)" autocomplete="cantidad" placeholder="Cantidad"/>
        <x-input-error class="mt-2" :messages="$errors->get('cantidad')"/>
    </div>
    {{-- Fecha de caducidad --}}
    <div>
        <x-input-label for="fecha_caducidad" :value="__('Fecha Caducidad')" />
        <x-text-input id="fecha_caducidad" name="fecha_caducidad" type="date"
            class="mt-1 block w-full" :value="old('fecha_caducidad', $inventario?->fecha_caducidad)" />
        <x-input-error class="mt-2" :messages="$errors->get('fecha_caducidad')" />
    </div>

    {{-- Fecha de registro --}}
    <div>
        <x-input-label for="fecha_registro" :value="__('Fecha Registro')" />
        <x-text-input id="fecha_registro" name="fecha_registro" type="date"
            class="mt-1 block w-full" :value="old('fecha_registro', $inventario?->fecha_registro)" />
        <x-input-error class="mt-2" :messages="$errors->get('fecha_registro')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>