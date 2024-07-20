<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetalleVenta;
use App\Models\Categoria;
use App\Models\Proveedore;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','cantidad','precio','id_categoria','id_proveedor'];

    public function detalle_ventas()
    {
        return $this->hasMany(DetalleVenta::class, 'id_producto');
    }
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    public function proveedores()
    {
        return $this->belongsTo(Proveedore::class, 'id_proveedor');
    }
}
