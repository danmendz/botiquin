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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('tipo-pacientes', TipoPacienteController::class);
Route::resource('users', UserController::class);
Route::resource('botiquines', BotiquineController::class);
Route::resource('productos', ProductoController::class);
Route::resource('pacientes', PacienteController::class);
Route::resource('detalles-academicos', DetallesAcademicoController::class);
Route::resource('inventarios', InventarioController::class);
Route::resource('movimientos', MovimientoController::class);
Route::resource('reportes', ReporteController::class);
Route::resource('expedientes-medicos', ExpedientesMedicoController::class);