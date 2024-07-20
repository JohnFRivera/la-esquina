<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Proveedore extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','telefono'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_proveedor');
    }
}
