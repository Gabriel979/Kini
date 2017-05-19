<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
    protected $table= "sorteos";

    protected $fillable = ['fecha'];

    public function numbers()
    {
        return $this->belongsToMany('App\Number','numeros_sorteos','id_sorteo','id_numero');
    }

    public function positions()
    {
        return $this->belongsToMany('App\Position','sorteos_posiciones','id_sorteo','id_posicion');
    }
}
