<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adelanto_pago extends Model
{
    use HasFactory;
    protected $fillable = ["monto",
    "es_adelanto",
    "terminos_pago",
    "forma_pago",
    "fecha_pago",
    "pedido_id",
    "cliente_id",
    ];

    public function Pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class);
    }
    public function Cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
    
}
