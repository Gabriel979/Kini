<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $table="numeros";

    protected $fillable= ['valor'];

    public function draws()
    {
        return $this->belongsToMany('App\Draw','numeros_sorteos','id_numero','id_sorteo');
    }
    					
}
