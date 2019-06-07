<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table='reserva';
    protected $fillable=['fecha_ingreso','fecha_salida','id_habitacion','id_cliente','id_trabajador','estado'];
}
