<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignaCartelera extends Model
{
    use HasFactory;

    protected $table = 'asigna_cartelera'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_asignac'; // Clave primaria

    protected $fillable = [
        'id_pelicula',
        'id_cine',
        'id_dia',
        'id_hora',
        'id_proyeccion',
        'fi',
        'ff',
    ]; // Campos que se pueden asignar masivamente

    public function index()
{
    // Realizamos el join con las tablas necesarias
    $asigna_cartelera = AsignaCartelera::join('peliculas', 'peliculas.id_pelicula', '=', 'asigna_cartelera.id_pelicula')
        ->join('cines', 'cines.id_cine', '=', 'asigna_cartelera.id_cine')
        ->join('dias', 'dias.id_dia', '=', 'asigna_cartelera.id_dia')
        ->select('asigna_cartelera.*', 'peliculas.nombre as pelicula_nombre', 'cines.nombre as cine_nombre', 'dias.nombre as dia_nombre')
        ->get();

    return view('asigna_cartelera.index', compact('asigna_cartelera'));
}

}

