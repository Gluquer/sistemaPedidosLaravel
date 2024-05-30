<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ["ruta_logo",
    "nombre",
    "ciudad",
    "calle",
    "numero",
    "telefono",
    "email",
    ];
}
