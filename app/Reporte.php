<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = ["descripcion",
    "fecha_emision",
    "pedido_id",
    ];

    public function Pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class);
    }

}
