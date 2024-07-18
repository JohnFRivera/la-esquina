<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venta;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','puesto','fecha_contratacion','telefono'];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_empleado');
    }
}
