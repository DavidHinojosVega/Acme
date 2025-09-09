<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Presupuestos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 50; $i++){
            DB::table('presupuestos')->insert([
            'nombre'=> 'presupuesto' .$i,
            'user_id'=> $i,
            'plano_id'=> $i,
            'costo'=> $i,
            'descuento' => 20,
            'created_at'=>date("Y-m-d h:m:s")
            ]);
        }
    }
}
