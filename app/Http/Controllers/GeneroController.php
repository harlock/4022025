<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{


    public function index()
    {
        $generos = Genero::all();
        return view('generos.index', compact('generos'));
    }


    public function create()
    {
        return view('generos.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'nombre_genero' => 'required|string|max:100'
        ], [], [
            'nombre_genero' => 'Nombre del genero',
        ]);

        Genero::create($request->all());
        return redirect()->route('generos.index')->with('success', 'Género creado correctamente');
    }

    public function show(Genero $genero) {}

    public function edit(Genero $genero)
    {

        return view('generos.edit', compact('genero'));
    }

    public function update(Request $request, Genero $genero)
    {
        $request->validate([
            'nombre_genero' => 'required|string|max:100'
        ]);

        $genero->update($request->all());

        return redirect()->route('generos.index')->with('success', 'Género actualizado correctamente');
    }

    public function destroy(Genero $genero)
    {

        $genero->delete();


        return redirect()->route('generos.index')->with('success', 'Genero borrado correctamente.');
    }
}
