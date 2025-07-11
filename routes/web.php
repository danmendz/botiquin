<?php

use App\Http\Controllers\BotiquineController;
use App\Http\Controllers\DetallesAcademicoController;
use App\Http\Controllers\ExpedientesMedicoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TipoPacienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('tipo-pacientes', TipoPacienteController::class)->names('tipo-pacientes');
Route::resource('users', UserController::class)->names('users');
Route::resource('botiquines', BotiquineController::class)->names('botiquines');
Route::resource('productos', ProductoController::class)->names('productos');
Route::resource('pacientes', PacienteController::class)->names('pacientes');
Route::resource('inventarios', InventarioController::class)->names('inventarios');
Route::resource('movimientos', MovimientoController::class)->names('movimientos');
Route::resource('reportes', ReporteController::class)->names('reportes');
Route::resource('expedientes-medicos', ExpedientesMedicoController::class)->names('expedientes-medicos');

# Apis
Route::get('/obtener-inventarios', [ApiController::class, 'getInventarios'])->name('api.inventarios');
Route::get('/obtener-pacientes', [ApiController::class, 'getPacientes'])->name('api.pacientes');
Route::get('/caducidades', [ApiController::class, 'getCaducidades'])->name('api.caducidades');