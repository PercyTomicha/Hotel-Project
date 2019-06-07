<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoHabitacion extends Model
{
    protected $table='estado_habitacion';
    protected $fillable=['descripcion'];
}
