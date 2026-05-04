<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;
    //Relación principal es de uno a muchos, iun comprobante puede tener muchas compras
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

    //Relación principal de uno a muchos, un comprobante puede tener muchas ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
