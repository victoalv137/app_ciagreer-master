<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Dventa extends Model
{
    protected $fillable=[];   
    
    public function venta(){
        return $this->belongsTo('App\Venta','venta_id','id');
    }
    public function repuesto(){
        return $this->belongsTo('App\Repuesto','repuesto_id','id');
    }
   
    protected $table = 'dventa';
}
