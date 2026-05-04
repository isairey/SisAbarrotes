<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Proveedore extends Model
{
    use HasFactory;
    //Relación a la inversa
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    //Relación de uno a muchos (un proveedor puede hacer multiples compas)
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
