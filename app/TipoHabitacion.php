<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    protected $table='tipo_habitacion';
    protected $fillable=['descripcion','nro_camas','precio'];
}
