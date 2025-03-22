<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'generos'; // Nombre de la tabla
    protected $primaryKey = 'id_genero'; // Clave primaria
    public $timestamps = false; // Desactiva 'created_at' y 'updated_at'

    protected $fillable = ['nombre_genero']; // Campos permitidos para asignación masiva
}
