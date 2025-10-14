<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table="presupuestos";
    protected $fillable=[
        'nombre',
        'user_id',
        'plano_id',
        'costo',
        'descuento'
    ];
}
