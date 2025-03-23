<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;


class ClasificacionController extends Controller
{
    // Muestra todas las clasificaciones
    public function index()
    {
        $clasificacion = Clasificacion::all();  // Obtiene todos los registros de clasificación
        return view('clasificacion.index', compact('clasificacion'));
    }

    // Muestra el formulario de creación
    public function create()
    {
        return view('clasificacion.create');
    }

    // Guarda una nueva clasificación en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nom_clasifi' => 'required|string|max:100',
        ]);
    
        // Crear un nuevo registro de clasificación
        Clasificacion::create([
            'nom_clasifi' => $request->nom_clasifi,  // Guardamos el nombre de la clasificación
        ]);
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('clasificacion.index')->with('success', 'Clasificación creada correctamente');
       
    }

    // Elimina una clasificación de la base de datos
    public function destroy($id_clasificacion)
    {
        $clasificacion = Clasificacion::findOrFail($id_clasificacion);
        $clasificacion->delete();  // Elimina la clasificación

        return redirect()->route('clasificacion.index')->with('success', 'Clasificación borrada correctamente.');
    }

    // Modificar
    public function edit($id_clasificacion)
    {
        $clasificacion = Clasificacion::findOrFail($id_clasificacion);  // Buscar el género por su ID
        return view('clasificacion.edit', compact('clasificacion'));  // Pasa los datos a la vista
    }

    public function update(Request $request, $id_clasificacion)
    {
        $request->validate([
            'nom_clasifi' => 'required|string|max:100',
        ]);
    
        // Buscar la clasificación por ID
        $clasificacion = Clasificacion::findOrFail($id_clasificacion);
    
        // Actualizar el nombre
        $clasificacion->nom_clasifi = $request->nom_clasifi;
        $clasificacion->save();  // Guardar los cambios
    
        // Redirigir con mensaje de éxito
        return redirect()->route('clasificacion.index')->with('success', 'Clasificación actualizada correctamente');
    }
}
