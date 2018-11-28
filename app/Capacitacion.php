<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $fillable=[];   
    public function empleados()
    {
        return $this->belongsToMany('App\Empleado','detallecapacitacion','capacitacion_id','empleado_id');
    }

    protected $table = 'capacitacion';
}
