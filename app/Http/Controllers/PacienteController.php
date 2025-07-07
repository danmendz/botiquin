<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\TipoPaciente;


class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
{
    $pacientes = Paciente::with('tipoPaciente')->paginate();
;

    return view('paciente.index', compact('pacientes'))
        ->with('i', ($request->input('page', 1) - 1) * $pacientes->perPage());
}



    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
{
    $paciente = new Paciente();

    // Obtener id y nombre para llenar el select
    $tipos = TipoPaciente::pluck('nombre', 'id');

    return view('paciente.create', compact('paciente', 'tipos'));
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(PacienteRequest $request): RedirectResponse
    {
        Paciente::create($request->validated());

        return Redirect::route('pacientes.index')
            ->with('success', 'Paciente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $paciente = Paciente::with('tipoPaciente')->findOrFail($id);

    return view('paciente.show', compact('paciente'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
{
    $paciente = Paciente::find($id);
    $tipos = TipoPaciente::pluck('nombre', 'id');
    return view('paciente.edit', compact('paciente', 'tipos'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(PacienteRequest $request, Paciente $paciente): RedirectResponse
    {
        $paciente->update($request->validated());

        return Redirect::route('pacientes.index')
            ->with('success', 'Paciente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Paciente::find($id)->delete();

        return Redirect::route('pacientes.index')
            ->with('success', 'Paciente deleted successfully');
    }
}
