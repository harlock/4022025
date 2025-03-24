<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use SoftDeletes;

    protected $table = 'generos'; // Nombre de la tabla
    protected $primaryKey = 'id_genero'; // Clave primaria
    protected $fillable = ['nombre_genero']; // Campos permitidos para asignación masiva
}
