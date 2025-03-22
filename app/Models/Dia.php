<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;

// La tabla asociada
    protected $table = 'dias';

    // La clave primaria personalizada (en este caso 'id_dia')
    protected $primaryKey = 'id_dia';

    // Los campos que pueden ser asignados masivamente
    protected $fillable = ['desc_dia'];

    // Desactivar los timestamps si no los estás utilizando
    public $timestamps = false;
}
