<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;

    protected $table = 'personas';
    protected $primaryKey = 'id_persona';
    protected $fillable = ['nombre', 'ap', 'am'];
    protected $dates = ['deleted_at'];

    /**
     * Relación con el director (uno a uno)
     */
    public function director()
    {
        return $this->hasOne(Director::class, 'id_persona');
    }
}





