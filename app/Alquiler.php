<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $fillable=[];   
    
    public function cotizacion(){
        return $this->belongsTo('App\Cotizacion','cotizacion_id','id');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente','cliente_id','id');
    }
    
    protected $table = 'alquiler';
}
