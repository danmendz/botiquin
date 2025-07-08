<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
    <a href="{{ route('tipo-pacientes.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-user-group class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Tipo Pacientes</h3>
    </a>
    <a href="{{ route('botiquines.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-briefcase class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Botiquines</h3>
    </a>
    <a href="{{ route('productos.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-cube class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Productos</h3>
    </a>
    <a href="{{ route('pacientes.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-user-circle class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Pacientes</h3>
    </a>
    <a href="{{ route('inventarios.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-clipboard-document-list class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Inventarios</h3>
    </a>
    <a href="{{ route('movimientos.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-arrow-path-rounded-square class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Movimientos</h3>
    </a>
    <a href="{{ route('reportes.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-chart-bar class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Reportes</h3>
    </a>
    <a href="{{ route('expedientes-medicos.index') }}" class="bg-white hover:bg-gray-100 rounded-2xl shadow-md p-6 text-center transition">
        <x-heroicon-o-document-text class="w-8 h-8 mx-auto text-red-600" />
        <h3 class="mt-2 text-lg font-semibold text-gray-800">Expedientes Médicos</h3>
    </a>
</div> 