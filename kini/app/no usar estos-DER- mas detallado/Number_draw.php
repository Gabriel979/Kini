<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number_draw extends Model
{
    protected $table="numeros_sorteos";

    protected $guarded= ['id_numero','id_sorteo'];
}
