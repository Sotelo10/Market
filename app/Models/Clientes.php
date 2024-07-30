<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres', 'apellidos', 'numero', 'dni', 'nombre_producto', 'monto_total', 'fecha_hora_compra'
    ];

}
