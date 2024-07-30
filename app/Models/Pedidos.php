<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedidos extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'clientes_id', 'codigo', 'precio_total', 'estado', 'precio_envio', 'nota'
    ];

    public function clientes(): BelongsTo
    {
        return $this->belongsTo(Clientes::class);
    }

    public function pedidos_orden(): HasMany
    {
        return $this->hasMany(pedidos_orden::class);
    }

}
