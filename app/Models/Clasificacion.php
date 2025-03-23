<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;
    //tabla asociada
    protected $table='clasificacion';

    //clave primaria de la tabla
    protected $primaryKey='id_clasificacion';

    //campos restantes
    protected $fillable=['nom_clasifi'];

    //desctivacion de lo timetamps si no se estan utilizando
    public $timestamps=false;
}
