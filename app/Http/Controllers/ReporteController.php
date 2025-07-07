<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReporteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;


class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
{
    $reportes = Reporte::with('usuario')->paginate(); // 👈 Asegura la relación
    return view('reporte.index', compact('reportes'))
        ->with('i', ($request->input('page', 1) - 1) * $reportes->perPage());
}


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
{
    $reporte = new Reporte();
    $usuarios = User::all(); // ← trae todos los usuarios

    return view('reporte.create', compact('reporte', 'usuarios'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReporteRequest $request): RedirectResponse
{
    $data = $request->validated();
    Reporte::create($data);

    return Redirect::route('reportes.index')->with('success', 'Reporte creado correctamente.');
}


    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $reporte = Reporte::with('usuario')->findOrFail($id); // 👈 También aquí
    return view('reporte.show', compact('reporte'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
{
    $reporte = Reporte::find($id);
    $usuarios = User::all(); // ← también lo necesitas aquí

    return view('reporte.edit', compact('reporte', 'usuarios'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(ReporteRequest $request, Reporte $reporte): RedirectResponse
{
    $data = $request->validated(); // ← Esto ya incluye 'usuario_id' desde el formulario

    $reporte->update($data); // ← Se guardan todos los datos correctamente

    return Redirect::route('reportes.index')
        ->with('success', 'Reporte actualizado correctamente.');
}



    public function destroy($id): RedirectResponse
    {
        Reporte::find($id)->delete();

        return Redirect::route('reportes.index')
            ->with('success', 'Reporte deleted successfully');
    }
}
