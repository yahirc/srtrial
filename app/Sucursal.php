<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{

    protected $table = 'sucursales';

    // Campos q se pueden llenar
    // protected $fillable = ['codsuc', 'nomsuc'];

    // Campos q no se pueden llenar
    protected $guarded = ['id'];

    public function scopePrueba ($query) 
    {
        $query->where('codsuc', '=', '01');
    }
        
    
    
}
