<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable=['',''];
     
    public function area(){
        return $this->belongsTo('App\Area','area_id','id');
    }
    public function capacitaciones()
    {
        return $this->belongsToMany('App\Capacitacion','detallecapacitacion','empleado_id','capacitacion_id');
    }
    protected $table = 'empleado';
}
