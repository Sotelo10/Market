<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto', 'marca', 'categoria', 'cantidad', 'stock', 'precio', 'numero' ,'codigo', 'fecha_entrada', 'tipo'
    ];


}
