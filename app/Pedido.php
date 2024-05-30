<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ["estado",
    "fecha_entrega_estimada",
    "tipo_envio",
    "tiempo_de_entrega",
    "cliente_id",
    "usuario_id",
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function Cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
}
