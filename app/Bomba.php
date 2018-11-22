<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bomba extends Model
{
    protected $fillable=['costo','marca','modelo','alto','peso','ancho','velocidad'];
    
    public function producto()
    {
        return $this->belongsTo('App\Producto','producto_id','id');
    }
    protected $table = 'bomba';
}
