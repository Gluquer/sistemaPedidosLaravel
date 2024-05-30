<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;
    protected $fillable = ["cantidad_material",
    "costo_prod",
    "fecha_prod",
    "producto_textil_id",
    ];
}
