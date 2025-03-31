<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function index()
    {
        $dias = Dia::withTrashed()->get();
        return view('dias.index', compact('dias'));
    }

    public function create()
    {
        return view('dias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc_dia' => 'required|unique:dias,desc_dia|max:200', // aqui se pide que no pase de los 200 yque a la vez sea unico y que no se repita
        ]);

        Dia::create([
            'desc_dia' => $request->desc_dia,
        ]);

        return redirect()->route('dias.index');
    }

    public function edit($id)
    {
        // Usar withTrashed para incluir los registros eliminados lógicamente
        $dia = Dia::withTrashed()->findOrFail($id);
    
        return view('dias.edit', compact('dia'));
    }
    

    public function update(Request $request, $id_proyeccion)
{
    try {
        // Validar el campo 'desc_proy' y 'precio'
        $validated = $request->validate([
            'desc_proy' => 'required|string|max:255|unique:proyecciones,desc_proy,' . $id_proyeccion . ',id_proyeccion',
            'precio' => 'required|numeric', // Validación para precio
        ]);

        // Buscar la proyección, incluyendo los eliminados lógicamente
        $proyeccion = Proyeccion::withTrashed()->findOrFail($id_proyeccion);

        // Actualizar los campos
        $proyeccion->desc_proy = $request->desc_proy;
        $proyeccion->precio = $request->precio;
        $proyeccion->save();

        // Redirigir con mensaje de éxito
        return redirect()->route('proyecciones.index')->with('success', 'Proyección actualizada correctamente');
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        // Si no se encuentra el registro
        return redirect()->route('proyecciones.index')->with('error', 'Proyección no encontrada');
    }
}

    

    public function destroy($id_dia)
{
    // Buscar el registro, incluso si está eliminado lógicamente
    $dia = Dia::withTrashed()->find($id_dia);

    // Verificar si el registro existe
    if ($dia) {
        // Eliminar permanentemente
        $dia->forceDelete();

        // Redirigir con éxito
        return redirect()->route('dias.index')->with('success', 'Día eliminado permanentemente');
    } else {
        // Si no se encuentra el registro, retornar con mensaje de error
        return redirect()->route('dias.index')->with('error', 'Día no encontrado');
    }
}


    public function restore($id_dia)
    {
        $dia = Dia::withTrashed()->findOrFail($id_dia);
        $dia->restore();

        return redirect()->route('dias.index')->with('success', 'Día restaurado correctamente.');
    }
}

////por Uriel y su mesa
