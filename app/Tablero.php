<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    protected $fillable=['costo','marca','modelo'];
    public function producto()
    {
        return $this->belongsTo('App\Producto','producto_id','id');
    }
    protected $table = 'tablero';
}
