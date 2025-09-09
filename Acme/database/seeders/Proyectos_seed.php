<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Proyectos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 50; $i++){
            DB::table('proyectos')->insert([
            'nombre'=> 'proyecto' .$i,
            'user_id'=> $i,
            'fecha_de_creacion'=> date("Y-m-d h:m:s"),
            'descripcion'=> 'es un proyecto interesante',
            'zona_id' => $i,
            'created_at'=>date("Y-m-d h:m:s")
            ]);
        }
    }
}
