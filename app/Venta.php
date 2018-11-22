<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable=[];
    
    // public function producto()
    // {
    //     return $this->belongsTo('App\Producto','producto_id','id');
    // }
    protected $table = 'venta';
}
