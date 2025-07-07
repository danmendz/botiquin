<?php

namespace App\Http\Controllers;

use App\Models\DetallesAcademico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetallesAcademicoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Paciente;

class DetallesAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
{
    $detallesAcademicos = DetallesAcademico::with('paciente')->paginate();

    return view('detalles-academico.index', compact('detallesAcademicos'))
        ->with('i', ($request->input('page', 1) - 1) * $detallesAcademicos->perPage());
}


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
{
    $detallesAcademico = new DetallesAcademico();
    $pacientes = Paciente::all(); // Trae todos los pacientes

    return view('detalles-academico.create', compact('detallesAcademico', 'pacientes'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetallesAcademicoRequest $request): RedirectResponse
{
    // dd($request->all());  <-- elimina o comenta esta línea

    DetallesAcademico::create($request->validated());

    return Redirect::route('detalles-academicos.index')
        ->with('success', 'DetallesAcademico created successfully.');
}



    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $detallesAcademico = DetallesAcademico::with('paciente')->findOrFail($id);

    return view('detalles-academico.show', compact('detallesAcademico'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
{
    $detallesAcademico = DetallesAcademico::find($id);
    $pacientes = Paciente::all();

    return view('detalles-academico.edit', compact('detallesAcademico', 'pacientes'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(DetallesAcademicoRequest $request, DetallesAcademico $detallesAcademico): RedirectResponse
    {
        $detallesAcademico->update($request->validated());

        return Redirect::route('detalles-academicos.index')
            ->with('success', 'DetallesAcademico updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetallesAcademico::find($id)->delete();

        return Redirect::route('detalles-academicos.index')
            ->with('success', 'DetallesAcademico deleted successfully');
    }
}
