<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $fillable=['codigo','descripcion','marca','costo'];

    public function dventa()
    {
        return $this->hasMany('App\Dventa','repuesto_id','id');
    }
   
    protected $table = 'repuesto';
}
