<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos_orden extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedidos_id', 'inventarios_id', 'cantidad', 'precio'
    ];
}
