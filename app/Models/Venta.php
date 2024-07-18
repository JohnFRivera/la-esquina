<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetalleVenta;
use App\Models\Empleado;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['id_empleado'];

    public function detalle_ventas()
    {
        return $this->hasMany(DetalleVenta::class, 'id_venta');
    }
    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}
