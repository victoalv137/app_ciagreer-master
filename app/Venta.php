<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable=[];
    public function dventa()
    {
        return $this->hasmany('App\Dventa','venta_id','id');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente','cliente_id','id');
    }
   
    protected $table = 'venta';
}
