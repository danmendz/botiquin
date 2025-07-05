<?php

namespace App\Http\Controllers;

use App\Models\Botiquine;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BotiquineRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BotiquineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $botiquines = Botiquine::paginate();

        return view('botiquine.index', compact('botiquines'))
            ->with('i', ($request->input('page', 1) - 1) * $botiquines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $botiquine = new Botiquine();

        return view('botiquine.create', compact('botiquine'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BotiquineRequest $request): RedirectResponse
    {
        Botiquine::create($request->validated());

        return Redirect::route('botiquines.index')
            ->with('success', 'Botiquine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $botiquine = Botiquine::find($id);

        return view('botiquine.show', compact('botiquine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $botiquine = Botiquine::find($id);

        return view('botiquine.edit', compact('botiquine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BotiquineRequest $request, Botiquine $botiquine): RedirectResponse
    {
        $botiquine->update($request->validated());

        return Redirect::route('botiquines.index')
            ->with('success', 'Botiquine updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Botiquine::find($id)->delete();

        return Redirect::route('botiquines.index')
            ->with('success', 'Botiquine deleted successfully');
    }
}
