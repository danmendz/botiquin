<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $user?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="two_factor_secret" :value="__('Two Factor Secret')"/>
        <x-text-input id="two_factor_secret" name="two_factor_secret" type="text" class="mt-1 block w-full" :value="old('two_factor_secret', $user?->two_factor_secret)" autocomplete="two_factor_secret" placeholder="Two Factor Secret"/>
        <x-input-error class="mt-2" :messages="$errors->get('two_factor_secret')"/>
    </div>
    <div>
        <x-input-label for="two_factor_recovery_codes" :value="__('Two Factor Recovery Codes')"/>
        <x-text-input id="two_factor_recovery_codes" name="two_factor_recovery_codes" type="text" class="mt-1 block w-full" :value="old('two_factor_recovery_codes', $user?->two_factor_recovery_codes)" autocomplete="two_factor_recovery_codes" placeholder="Two Factor Recovery Codes"/>
        <x-input-error class="mt-2" :messages="$errors->get('two_factor_recovery_codes')"/>
    </div>
    <div>
        <x-input-label for="two_factor_confirmed_at" :value="__('Two Factor Confirmed At')"/>
        <x-text-input id="two_factor_confirmed_at" name="two_factor_confirmed_at" type="text" class="mt-1 block w-full" :value="old('two_factor_confirmed_at', $user?->two_factor_confirmed_at)" autocomplete="two_factor_confirmed_at" placeholder="Two Factor Confirmed At"/>
        <x-input-error class="mt-2" :messages="$errors->get('two_factor_confirmed_at')"/>
    </div>
    <div>
        <x-input-label for="rol" :value="__('Rol')"/>
        <x-text-input id="rol" name="rol" type="text" class="mt-1 block w-full" :value="old('rol', $user?->rol)" autocomplete="rol" placeholder="Rol"/>
        <x-input-error class="mt-2" :messages="$errors->get('rol')"/>
    </div>
    <div>
        <x-input-label for="current_team_id" :value="__('Current Team Id')"/>
        <x-text-input id="current_team_id" name="current_team_id" type="text" class="mt-1 block w-full" :value="old('current_team_id', $user?->current_team_id)" autocomplete="current_team_id" placeholder="Current Team Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('current_team_id')"/>
    </div>
    <div>
        <x-input-label for="profile_photo_path" :value="__('Profile Photo Path')"/>
        <x-text-input id="profile_photo_path" name="profile_photo_path" type="text" class="mt-1 block w-full" :value="old('profile_photo_path', $user?->profile_photo_path)" autocomplete="profile_photo_path" placeholder="Profile Photo Path"/>
        <x-input-error class="mt-2" :messages="$errors->get('profile_photo_path')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>