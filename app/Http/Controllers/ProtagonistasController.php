<?php

namespace App\Http\Controllers;

use App\Models\protagonistas;
use Illuminate\Http\Request;

class ProtagonistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protagonistas = protagonistas::all();
        return view('protagonistas.index', compact('protagonistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('protagonistas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:10',
            'Apellido_Paterno' => 'required|max:10',
            'Apellido_Materno' => 'required|max:10',
        ],[],[
            'nombre' => 'Nombre',
            'Apellido_Paterno' => 'Apellido Paterno',
            'Apellido_Materno' => 'Apellido Materno',
        ]);
        protagonistas::create($request->all());
        return redirect()->route('protagonistas.index')->with('success', 'protagonistas agregada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(protagonistas $protagonistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(protagonistas $protagonista)
    {
        return view('protagonistas.edit', compact('protagonista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, protagonistas $protagonista)
    {
        $request->validate([
            'nombre' => 'required|max:10',
            'Apellido_Paterno' => 'required|max:10',
            'Apellido_Materno' => 'required|max:10',
        ],[],[
            'nombre' => 'nombre',
            'Apellido_Paterno' => 'apellido paterno',
            'Apellido_Materno' => 'apellido materno',
        ]);
        $protagonista->update($request->all());
        return redirect()->route('protagonistas.index')->with('success', 'protagonistas actualizada correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(protagonistas $protagonista)
    {
        $protagonista->delete();
        return redirect()->route('protagonistas.index')->with('success', 'Protagonista eliminado');
    }
}
