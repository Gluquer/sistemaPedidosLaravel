<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = ["nombre",
    "ciudad",
    "calle",
    "numero",
    "telefono",
    "email",
    ];
}
