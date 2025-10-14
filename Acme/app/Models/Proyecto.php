<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table="proyectos";
    protected $fillable=[
        'nombre',
        'user_id',
        'fecha_de_creacion',
        'descripcion',
        'zona_id'
    ];
}
