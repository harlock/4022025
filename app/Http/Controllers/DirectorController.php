<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorController extends Controller
{


    public function index()
    {
        $directores = Director::all();
        return view('directores.index', compact('directores'));
    }


    public function create()
    {
        return view('directores.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'nombre_director' => 'required|string|max:100'
        ]);


        Director::create([
            'nombre_director' => $request->nombre_director
        ]);

        return redirect()->route('directores.index')->with('success', 'Director creado correctamente');
    }

    public function show(Director $director) {}

    public function edit(Director $director)
    {

        return view('directores.edit', compact('director'));
    }

    public function update(Request $request, Director $director)
    {
        $request->validate([
            'nombre_director' => 'required|string|max:100'
        ], [], [
            'nombre_director' => 'Nombre del director',
        ]);

        $director->update($request->all());

        return redirect()->route('directores.index')->with('success', 'Director actualizado correctamente');
    }

    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('directores.index')->with('success', 'Director borrado correctamente.');
    }
}
