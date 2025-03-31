<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::join('clasificacion','clasificacion.id_clasificacion','=','peliculas.id_clasificacion')
            ->join('genero','genero.id_genero','=','peliculas.id_genero')
            ->join('idioma','idioma.id_idioma','=','peliculas.id_idioma')
            ->join('directores','directores.id_director','=','peliculas.id_director')
            ->join('personas','personas.id_persona','=','directores.id_persona')
            ->get();
        //dd($peliculas);

        return view('peliculasViews/dashPeliculas',compact('peliculas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
