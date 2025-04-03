<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorController extends Controller
{

    // Muestra todos los directores
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

    // Guarda un nuevo director en la base de datos
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre_director' => 'required|string|max:100'
        ]);

        // Creación del director
        Director::create([
            'nombre_director' => $request->nombre_director
        ]);

        return redirect()->route('directores.index')->with('success', 'Director creado correctamente');
    }

    // Elimina un director de la base de datos
    public function destroy($id_director)
    {
        $director = Director::findOrFail($id_director);
        $director->delete();

        // Restablecer el auto-incremento
        DB::statement('ALTER TABLE directores AUTO_INCREMENT = 1');

        return redirect()->route('directores.index')->with('success', 'Director borrado correctamente.');
    }

    // Muestra el formulario para editar un director
    public function edit($id_director)
    {
        $director = Director::findOrFail($id_director);
        return view('directores.edit', compact('director'));
    }

    // Actualiza un director en la base de datos
    public function update(Request $request, $id_director)
    {
        $request->validate([
            'nombre_director' => 'required|string|max:100'
        ]);

        $director = Director::findOrFail($id_director);
        $director->nombre_director = $request->nombre_director;
        $director->save();

        return redirect()->route('directores.index')->with('success', 'Director actualizado correctamente');
    }
}
