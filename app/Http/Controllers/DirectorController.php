<?php
// app/Http/Controllers/DirectorController.php
namespace App\Http\Controllers;
use App\Models\Director;
use Illuminate\Http\Request;
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
            'nombre_director' => 'required|string|max:255',
        ]);

        Director::create($request->all());

        return redirect()->route('directores.index')
            ->with('success', 'Director creado correctamente.');
    }

    public function show(Director $directore)
    {
        return view('directores.show', compact('directore'));
    }

    public function edit(Director $directore)
    {
        return view('directores.edit', compact('directore'));
    }

    public function update(Request $request, Director $directore)
    {
        $request->validate([
            'nombre_director' => 'required|string|max:255',
        ]);

        $directore->update($request->all());

        return redirect()->route('directores.index')
            ->with('success', 'Director actualizado correctamente.');
    }

    public function destroy(Director $directore)
    {
        $directore->delete();
        return redirect()->route('directores.index')
            ->with('success', 'Director eliminado correctamente.');

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






