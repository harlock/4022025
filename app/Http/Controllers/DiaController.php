<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function index()
    {
        $dias = Dia::all();
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
        $dia = Dia::findOrFail($id);
        return view('dias.edit', compact('dia'));
    }

    public function update(Request $request, $id_dia)
    {

        $validated = $request->validate([
            'desc_dia' => 'required|string|max:200|unique:dias,desc_dia,' . $id_dia . ',id_dia',  // Asegúrate de usar 'id_dia' aquí
        ]);
                                        ///aqui se pide que no pase de los 200 y que a la vez sea unico y que no se repita pero en este caso se actualiza la info en el caso de que se vaya a editar

        $dia = Dia::find($id_dia);


        if ($dia) {
            $dia->desc_dia = $request->desc_dia;
            $dia->save();

            return redirect()->route('dias.index')->with('success', 'Día actualizado correctamente');
        } else {
            return redirect()->route('dias.index')->with('error', 'Día no encontrado');
        }
    }


    public function destroy($id_dia)
    {
        $dia = Dia::findOrFail($id_dia);
        $dia->delete();

        return redirect()->route('dias.index');
    }
}

////por Uriel y su mesa
