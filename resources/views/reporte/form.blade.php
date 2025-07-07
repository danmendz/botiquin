<div class="space-y-6">
    {{-- SELECT: Usuario --}}
    <div>
        <x-input-label for="usuario_id" :value="__('Usuario')" />
        <select id="usuario_id" name="usuario_id" class="mt-1 block w-full">
    <option value="">Seleccione un usuario</option>
    @foreach($usuarios as $usuario)
        <option value="{{ $usuario->id }}" {{ old('usuario_id', $reporte?->usuario_id) == $usuario->id ? 'selected' : '' }}>
            {{ $usuario->name }}
        </option>
    @endforeach
</select>
        <x-input-error class="mt-2" :messages="$errors->get('usuario_id')" />
    </div>

    {{-- SELECT: Tipo de reporte --}}
    <div>
        <x-input-label for="tipo_reporte" :value="__('Tipo de Reporte')" />
        <select id="tipo_reporte" name="tipo_reporte" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200">
            <option value="">Seleccione un tipo</option>
            @foreach(['Uso', 'Caducidad', 'Inventario'] as $tipo)
                <option value="{{ $tipo }}" {{ old('tipo_reporte', $reporte?->tipo_reporte) == $tipo ? 'selected' : '' }}>
                    {{ $tipo }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('tipo_reporte')" />
    </div>

    {{-- Fecha generación con calendario --}}
    <div>
        <x-input-label for="fecha_generacion" :value="__('Fecha de Generación')" />
        <x-text-input id="fecha_generacion" name="fecha_generacion" type="date" class="mt-1 block w-full"
            :value="old('fecha_generacion', $reporte?->fecha_generacion)" />
        <x-input-error class="mt-2" :messages="$errors->get('fecha_generacion')" />
    </div>

    {{-- Textarea: Descripción --}}
    <div>
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea id="descripcion" name="descripcion" rows="4"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200">{{ old('descripcion', $reporte?->descripcion) }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('descripcion')" />
    </div>

    {{-- Botón --}}
    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>