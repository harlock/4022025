<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idiomas = Idioma::all();
        return view('idioma.index', compact('idiomas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('idioma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'desc_idioma' => 'required|max:8',
        ],[],[
            'desc_idioma' => 'descripcion de idioma',
        ]);
        Idioma::create($request->all());
        return redirect()->route('idioma.index')->with('success', 'Idioma agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idioma $idioma)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idioma $idioma)
    {
        return view('idioma.edit', compact('idioma'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idioma $idioma)
    {
        $request->validate([
            'desc_idioma' => 'required|max:8',
        ],[],[
            'desc_idioma' => 'descripcion de idioma',
        ]);
        $idioma->update($request->all());
        return redirect()->route('idioma.index')->with('success', 'Idioma actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idioma $idioma)
    {
        $idioma->delete();
        return redirect()->route('idioma.index')->with('success', 'Idioma eliminado correctamente.');
    }
}
