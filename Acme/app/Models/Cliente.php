<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table="clientes";
    protected $fillable=[
        'name',
        'apellido',
        'fecha_de_creacion',
        'telefono',
        'email'
    ];
}
