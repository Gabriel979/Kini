<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draws_position extends Model
{
    protected $table="sorteos_posiciones";

    protected $guarded= ['id_sorteo', 'id_posicion'];
}
