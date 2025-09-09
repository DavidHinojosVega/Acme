<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Clientes_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         for($i = 0; $i < 50; $i++){
            DB::table('clientes')->insert([
            'name'=> 'cliente' .$i,
            'apellido'=> 'cliente' .$i,
            'telefono'=>  $i. '36-700-8008',
            'email'=> 'cliente'.$i.'gmail.com',
            'created_at'=>date("Y-m-d h:m:s")
            ]);
        }
    }
}
