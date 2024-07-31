<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres', 'apellidos', 'numero', 'dni', 'nombre_producto', 'monto_total', 'fecha_hora_compra'
    ];
    Public static $rules = [
        'nombres' => 'required|max:20',
        'apellidos' => 'required|max:20',
        'numero' => 'required|digits:9',
'dni' => 'required|digits:8',
        'nombre_producto' => 'required|max:20',
        'monto_total' => 'required|numeric',
        'fecha_hora_compra' => 'required|date',
    ];

}
