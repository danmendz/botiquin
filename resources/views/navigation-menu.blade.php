<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Left side: Logo + Links -->
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <x-application-mark class="block h-9 w-auto" />
                </a>

                <!-- Navigation Links -->
                <div class="hidden sm:flex space-x-4">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">Dashboard</x-nav-link>
                    <x-nav-link href="{{ route('tipo-pacientes.index') }}" :active="request()->routeIs('tipo-pacientes.*')">Tipo Pacientes</x-nav-link>
                    <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">Usuarios</x-nav-link>
                    <x-nav-link href="{{ route('botiquines.index') }}" :active="request()->routeIs('botiquines.*')">Botiquines</x-nav-link>
                    <x-nav-link href="{{ route('productos.index') }}" :active="request()->routeIs('productos.*')">Productos</x-nav-link>
                    <x-nav-link href="{{ route('pacientes.index') }}" :active="request()->routeIs('pacientes.*')">Pacientes</x-nav-link>
                    <x-nav-link href="{{ route('detalles-academicos.index') }}" :active="request()->routeIs('detalles-academicos.*')">Detalles Académicos</x-nav-link>
                    <x-nav-link href="{{ route('inventarios.index') }}" :active="request()->routeIs('inventarios.*')">Inventarios</x-nav-link>
                    <x-nav-link href="{{ route('movimientos.index') }}" :active="request()->routeIs('movimientos.*')">Movimientos</x-nav-link>
                    <x-nav-link href="{{ route('reportes.index') }}" :active="request()->routeIs('reportes.*')">Reportes</x-nav-link>
                    <x-nav-link href="{{ route('expedientes-medicos.index') }}" :active="request()->routeIs('expedientes-medicos.*')">Expedientes Médicos</x-nav-link>
                </div>
            </div>

            <!-- Right side: Dropdowns -->
            <div class="hidden sm:flex items-center space-x-4">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div>
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm text-gray-600 hover:text-gray-800">
                                    {{ Auth::user()->currentTeam->name }}
                                    <svg class="ms-1 size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">
                                    <div class="px-4 py-2 text-xs text-gray-400">Manage Team</div>
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">Team Settings</x-dropdown-link>
                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">Create New Team</x-dropdown-link>
                                    @endcan
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200 my-2"></div>
                                        <div class="px-4 py-2 text-xs text-gray-400">Switch Teams</div>
                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- User Settings Dropdown -->
                <div>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex items-center text-sm rounded-full focus:outline-none focus:ring">
                                    <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <button class="flex items-center text-sm text-gray-600 hover:text-gray-800">
                                    {{ Auth::user()->name }}
                                    <svg class="ms-1 size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            @endif
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('profile.show') }}">Profile</x-dropdown-link>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">API Tokens</x-dropdown-link>
                            @endif
                            <div class="border-t border-gray-200 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">Log Out</x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-600 hover:bg-gray-100 focus:outline-none transition">
                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">Dashboard</x-responsive-nav-link>
            <!-- Agrega aquí los demás enlaces si deseas que aparezcan también en móvil -->
        </div>

        <!-- Responsive Settings -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img class="size-10 rounded-full me-3" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                @endif
                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">Profile</x-responsive-nav-link>
                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">API Tokens</x-responsive-nav-link>
                @endif
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">Log Out</x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
