<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsignaCartelera;

class AsignaCarteleraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('asigna_cartelera.dashAsignaC');

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Aquí puedes pasar los datos necesarios al formulario, como las películas, cines, días, horas y proyecciones
        return view('asigna_cartelera.create', [
            'peliculas' => Pelicula::all(),
            'cines' => Cine::all(),
            'dias' => Dia::all(),
            'horas' => Hora::all(),
            'proyecciones' => Proyeccion::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AsignaCartelera::create($request->validate([
            'id_pelicula' => 'required|integer',
            'id_cine' => 'required|integer',
            'id_dia' => 'required|integer',
            'id_hora' => 'required|integer',
            'id_proyeccion' => 'required|integer',
            'fi' => 'required|date',
            'ff' => 'required|date',
        ]));

        AsignaCartelera::create($validatedData);

        // Redirigir a alguna página después de guardar
        return redirect()->route('asigna_cartelera.index')->with('success', 'Cartelera asignada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(AsignaCartelera $id)
    {
        return view('asigna_cartelera.show', ['asigna_cartelera' => $asigna_cartelera]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('asigna_cartelera.edit', ['asigna_cartelera' => $asigna_cartelera]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $asigna_cartelera->update($request->validate([
            'id_pelicula' => 'required|integer',
            'id_cine' => 'required|integer',
            'id_dia' => 'required|integer',
            'id_hora' => 'required|integer',
            'id_proyeccion' => 'required|integer',
            'fi' => 'required|date',
            'ff' => 'required|date',
        ]));

        return redirect()->route('asigna_cartelera.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AsignaCartelera $asigna_cartelera)
    {
        $asigna_cartelera->delete();
        return redirect()->route('asigna_cartelera.index');
    }
}
