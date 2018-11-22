<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=['estado','codigo'];
     
    public function bomba(){
        return $this->hasOne('App\Bomba','producto_id','id');
    }

    public function tablero(){
        return $this->hasOne('App\Tablero','producto_id','id');
    }

    public function ventilador(){
        return $this->hasOne('App\Ventilador','producto_id','id');
    }
    public function cotizaciones(){
        return $this->hasmany('App\Cotizacion','producto_id','id');
    }  
    protected $table = 'producto';
}
