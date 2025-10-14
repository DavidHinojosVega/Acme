<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
     protected $table="planos";
    protected $fillable=[
        'nombre',
        'zona_id',
        'img',
        'tipo_de_acceso',
        'fecha_actualizacion_anterior',
        'fecha_actualizacion',
        'contraseña',
        'proyecto_id'
    ];
}
