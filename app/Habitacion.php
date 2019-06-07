<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table='habitacion';
    protected $fillable=['nro_habitacion','piso','id_tipo','id_estado'];
}
