<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Planos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 50; $i++){
            DB::table('planos')->insert([
            'nombre'=> 'cliente' .$i,
            'zona_id'=> $i,
            'img'=> "defauld" .$i. '.jpg',
            'tipo_de_acceso'=> 'Admin',
            'fecha_actualizacion_anterior' => date("Y-m-d h:m:s"),
            'fecha_actualizacion' =>  date("Y-m-d h:m:s"),
            'contraseña' => '123',
            'proyecto_id' => $i,
            'created_at'=>date("Y-m-d h:m:s")
            ]);
        }
    }
}
