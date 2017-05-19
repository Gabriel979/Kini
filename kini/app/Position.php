<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable="posiciones";

    protected $fillable = ['posicion'];

    public function draws2()
    {
        return $this->belongsToMany('App\Draw','sorteos_posiciones','id_posicion','id_sorteo');
    }

}
