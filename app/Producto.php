<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["codigo_barras", "descripcion", "precio_compra", "precio_venta", "existencia",
    ];

    public function Empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
    
    public function Categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
