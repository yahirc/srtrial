<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{

    protected $table = 'sucursales';

    protected $fillable = [
        'codsuc', 'nomsuc'
    ];

    public function scopePrueba ($query) 
    {
        $query->where('codsuc', '=', '01');
    }
        
    
    
}
