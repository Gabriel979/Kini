<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $table="numeros";

    protected $fillable= ['fecha','f1c1','f1c2','f1c3','f1c4','f1c5','f1c6',
    'f2c1','f2c2','f2c3','f2c4','f2c5','f2c6',
    'f3c1','f3c2','f3c3','f3c4','f3c5','f3c6',
    'f4c1','f4c2','f4c3','f4c4','f4c5','f4c6'];

   /* public function draws() solo valido para el DER mas detallado!!!
    {
        return $this->belongsToMany('App\Draw','numeros_sorteos','id_numero','id_sorteo');
    }*/
    					
}

