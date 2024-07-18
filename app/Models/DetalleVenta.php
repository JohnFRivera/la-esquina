<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venta;
use App\Models\Producto;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $fillable = ['id_venta', 'id_producto', 'cantidad', 'total'];

    public function ventas()
    {
        return $this->belongsTo(Venta::class, 'id_venta');
    }
    public function productos()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
