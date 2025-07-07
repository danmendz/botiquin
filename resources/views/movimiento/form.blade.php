<div class="space-y-6">
    
    {{-- SELECT: Inventario --}}
    <div>
    <x-input-label for="inventario_id" :value="__('Inventario')" />
    <select id="inventario_id" name="inventario_id" class="mt-1 block w-full">
    <option value="">Seleccione un inventario</option>
    @foreach($inventarios as $inventario)
    <option value="{{ $inventario->id }}" 
        {{ old('inventario_id', $movimiento->inventario_id ?? '') == $inventario->id ? 'selected' : '' }}>
        {{ $inventario->producto?->nombre ?? 'Sin producto' }} (Botiquín - {{ $inventario->botiquine?->nombre ?? 'sin botiquín' }})
    </option>
@endforeach

</select>

    <x-input-error class="mt-2" :messages="$errors->get('inventario_id')" />
</div>

    {{-- SELECT: Usuario --}}
    <div>
        <x-input-label for="usuario_id" :value="__('Usuario')" />
        <select name="usuario_id" id="usuario_id" class="mt-1 block w-full">
    <option value="">Seleccione un usuario</option>
    @foreach($usuarios as $usuario)
        <option value="{{ $usuario->id }}" {{ old('usuario_id', $movimiento->usuario_id) == $usuario->id ? 'selected' : '' }}>
            {{ $usuario->name }}
        </option>
    @endforeach
</select>
        <x-input-error class="mt-2" :messages="$errors->get('usuario_id')" />
    </div>

     {{-- SELECT: Tipo --}}
    <div>
        <x-input-label for="tipo" :value="__('Tipo')" />
        <select id="tipo" name="tipo" class="mt-1 block w-full">
            <option value="">Seleccione tipo</option>
            @foreach(['entrada', 'salida'] as $tipo)
                <option value="{{ $tipo }}" {{ old('tipo', $movimiento?->tipo) == $tipo ? 'selected' : '' }}>
                    {{ ucfirst($tipo) }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('tipo')" />
    </div>

    <div>
        <x-input-label for="cantidad" :value="__('Cantidad')"/>
        <x-text-input id="cantidad" name="cantidad" type="text" class="mt-1 block w-full" :value="old('cantidad', $movimiento?->cantidad)" autocomplete="cantidad" placeholder="Cantidad"/>
        <x-input-error class="mt-2" :messages="$errors->get('cantidad')"/>
    </div>
    {{-- INPUT: Fecha Movimiento --}}
    <div>
        <x-input-label for="fecha_movimiento" :value="__('Fecha de Movimiento')" />
        <x-text-input id="fecha_movimiento" name="fecha_movimiento" type="date" class="mt-1 block w-full" :value="old('fecha_movimiento', $movimiento?->fecha_movimiento ? \Carbon\Carbon::parse($movimiento->fecha_movimiento)->format('Y-m-d') : '')" />
        <x-input-error class="mt-2" :messages="$errors->get('fecha_movimiento')" />
    </div>

    <div>
        <x-input-label for="observaciones" :value="__('Observaciones')"/>
        <x-text-input id="observaciones" name="observaciones" type="text" class="mt-1 block w-full" :value="old('observaciones', $movimiento?->observaciones)" autocomplete="observaciones" placeholder="Observaciones"/>
        <x-input-error class="mt-2" :messages="$errors->get('observaciones')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>