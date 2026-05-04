<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //Relación de muchos a muchos
    //Se agrega el with para rellenar los datos que faltan en la tabla pivote
    public function compras()
    {
        return $this->belongsToMany(Compra::class)->withTimestamps()
            ->withPivot('cantidad', 'precio_compra', 'precio_venta');
    }

    //Relación de muchos a muchos usando tabla pivote
    public function ventas()
    {
        return $this->belongsToMany(Venta::class)->withTimestamps()
            ->withPivot('cantidad', 'precio_venta', 'descuento');
    }

    //Relación de muchos a muchos con categoria
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }

    //Relación de uno a muchos con marca relación a la inversa
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
    //Relación a la inversa de uno a muchos con presentación
    public function presentacione()
    {
        return $this->belongsTo(Presentacione::class);
    }
}
