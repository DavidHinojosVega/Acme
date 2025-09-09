<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Zonas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 50; $i++){
            DB::table('zonas')->insert([
            'nombre'=> 'zona' .$i,
            'direccion'=> 'Admin callejon' .$i,
            'observaciones'=> 'hay un total de' .$i. "arboles",
            'referencias'=> 'hay'.$i.'oxxos por la zona',
            'domicilio'=> 'Av. 20 de noviembre 270' .$i,
            'created_at'=>date("Y-m-d h:m:s")
            ]);
        }
    }
}
