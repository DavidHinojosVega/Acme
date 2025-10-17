<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Users_seed extends Seeder
{
    public function run(): void
    {
        for($i = 0; $i < 50; $i++){
            DB::table('users')->insert([
            'nombre'=> 'Admin' .$i,
            'apellido'=> 'Admin' .$i,
            'tipo_de_acceso'=> 'Administrador',
            'email'=> 'Admin'.$i.'@gmail.com',
            'password'=>Hash::make('123'),
            'img'=> 'defaild2.jpg',
            'created_at'=>date("Y-m-d h:m:s")
            ]);
        }
    }
}
