<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    //Relación a la inversa
    //Se usa solo proveedore, por que una compra puede tener solo un proveedor
    public function proveedore()
    {
        return $this->belongsTo(Proveedore::class);
    }

    public function comprovante()
    {
        return $this->belongsToMany(Comprobante::class);
    }

    //Relación de muchos a muchos
    //Se pone el with para crear los valores que le faltan a la tabla
    //y el pivot para acceder a los valores de la tabla pivote aparte de los ids de las relaciones
    public function productos()
    {
        return $this->belongsToMany(Producto::class)->withTimestamps()->withPivot('cantidad', 'precio_compra', 'precio_venta');
    }
}
