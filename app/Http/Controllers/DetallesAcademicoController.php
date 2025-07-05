<?php

namespace App\Http\Controllers;

use App\Models\DetallesAcademico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetallesAcademicoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetallesAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detallesAcademicos = DetallesAcademico::paginate();

        return view('detalles-academico.index', compact('detallesAcademicos'))
            ->with('i', ($request->input('page', 1) - 1) * $detallesAcademicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detallesAcademico = new DetallesAcademico();

        return view('detalles-academico.create', compact('detallesAcademico'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetallesAcademicoRequest $request): RedirectResponse
    {
        DetallesAcademico::create($request->validated());

        return Redirect::route('detalles-academicos.index')
            ->with('success', 'DetallesAcademico created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detallesAcademico = DetallesAcademico::find($id);

        return view('detalles-academico.show', compact('detallesAcademico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detallesAcademico = DetallesAcademico::find($id);

        return view('detalles-academico.edit', compact('detallesAcademico'));
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
