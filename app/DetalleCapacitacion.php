<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class DetalleCapacitacion extends Model
{
    protected $fillable=[];   
    public function capacitacion(){
        return $this->belongsTo('App\Capacitacion','capacitacion_id','id');
    }
    public function empleado(){
        return $this->belongsTo('App\Empleado','empleado_id','id');
    }

    protected $table = 'detallecapacitacion';
}
