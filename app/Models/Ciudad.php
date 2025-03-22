<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    //
    use softDeletes;

    protected $table = 'ciudades';
    protected $primaryKey = 'id_ciudad';
    protected $fillable = ["nombre_ci"];
}
