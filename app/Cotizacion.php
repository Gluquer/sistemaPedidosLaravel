<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;
    protected $fillable = ["descuento",
    "iva",
    "neto",
    "total_precio_cantidad",
    "monto_total",
    "estado",
    "fecha_cotizacion",
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
