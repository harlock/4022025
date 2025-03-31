<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class protagonistas extends Model
{
    use SoftDeletes;
    protected $table = 'protagonistas';
    protected $primaryKey = 'id_protagonista';

    protected $fillable = ['nombre','Apellido_Paterno','Apellido_Materno'];
}
