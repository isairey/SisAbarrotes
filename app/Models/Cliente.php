<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //Relación a la inversa
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    //Relación principal de uno a muchos
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
