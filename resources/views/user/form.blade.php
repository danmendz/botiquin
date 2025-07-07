<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Nombre')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user?->name)" autocomplete="name" placeholder="Name" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
        <x-input-label for="email" :value="__('Correo electronico')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user?->email)" autocomplete="email" placeholder="Email" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>

    <div>
    <x-input-label for="password" :value="__('Password')" />
    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
    <x-input-error class="mt-2" :messages="$errors->get('password')" />
</div>

<div>
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
    <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
</div>


    <div>
        <x-input-label for="rol" :value="__('Rol')" />
        <select id="rol" name="rol" class="mt-1 block w-full rounded-md border-gray-300 text-gray-900" >
            <option value="">-- Selecciona rol --</option>
            <option value="administrador" {{ (old('rol', $user?->rol) == 'administrador') ? 'selected' : '' }}>Administrador</option>
            <option value="encargado" {{ (old('rol', $user?->rol) == 'encargado') ? 'selected' : '' }}>Encargado</option>
            <option value="personal_medico" {{ (old('rol', $user?->rol) == 'personal_medico') ? 'selected' : '' }}>Personal Médico</option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('rol')" />
    </div>

    {{-- Botón --}}
    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>
