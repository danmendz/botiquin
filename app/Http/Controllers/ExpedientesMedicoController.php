<?php

namespace App\Http\Controllers;

use App\Models\ExpedientesMedico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpedientesMedicoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpedientesMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $expedientesMedicos = ExpedientesMedico::paginate();

        return view('expedientes-medico.index', compact('expedientesMedicos'))
            ->with('i', ($request->input('page', 1) - 1) * $expedientesMedicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expedientesMedico = new ExpedientesMedico();

        return view('expedientes-medico.create', compact('expedientesMedico'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpedientesMedicoRequest $request): RedirectResponse
    {
        ExpedientesMedico::create($request->validated());

        return Redirect::route('expedientes-medicos.index')
            ->with('success', 'ExpedientesMedico created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expedientesMedico = ExpedientesMedico::find($id);

        return view('expedientes-medico.show', compact('expedientesMedico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expedientesMedico = ExpedientesMedico::find($id);

        return view('expedientes-medico.edit', compact('expedientesMedico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpedientesMedicoRequest $request, ExpedientesMedico $expedientesMedico): RedirectResponse
    {
        $expedientesMedico->update($request->validated());

        return Redirect::route('expedientes-medicos.index')
            ->with('success', 'ExpedientesMedico updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ExpedientesMedico::find($id)->delete();

        return Redirect::route('expedientes-medicos.index')
            ->with('success', 'ExpedientesMedico deleted successfully');
    }
}
