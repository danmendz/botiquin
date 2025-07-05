<?php

namespace App\Http\Controllers;

use App\Models\TipoPaciente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoPacienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoPacientes = TipoPaciente::paginate();

        return view('tipo-paciente.index', compact('tipoPacientes'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoPacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoPaciente = new TipoPaciente();

        return view('tipo-paciente.create', compact('tipoPaciente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoPacienteRequest $request): RedirectResponse
    {
        TipoPaciente::create($request->validated());

        return Redirect::route('tipo-pacientes.index')
            ->with('success', 'TipoPaciente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoPaciente = TipoPaciente::find($id);

        return view('tipo-paciente.show', compact('tipoPaciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoPaciente = TipoPaciente::find($id);

        return view('tipo-paciente.edit', compact('tipoPaciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoPacienteRequest $request, TipoPaciente $tipoPaciente): RedirectResponse
    {
        $tipoPaciente->update($request->validated());

        return Redirect::route('tipo-pacientes.index')
            ->with('success', 'TipoPaciente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoPaciente::find($id)->delete();

        return Redirect::route('tipo-pacientes.index')
            ->with('success', 'TipoPaciente deleted successfully');
    }
}
