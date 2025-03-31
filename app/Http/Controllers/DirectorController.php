<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    // Muestra directores
    public function index()
    {
        $directores = Director::all();
        return view('directores.index', compact('directores'));
    }

    // Muestra el formulario de creación
    public function create()
    {
        return view('directores.create');
    }

    // Guarda un nuevo género en la base de datos
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre_director' => 'required|string|max:100'
        ]);

        // Creación del género
        Director::create([
            'nombre_director' => $request->nombre_director
        ]);

        return redirect()->route('directores.index')->with('success', 'Director creado correctamente');
    }
}
