<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $this->call(Users_seed::class);
    $this->call(Zonas_seed::class);
    $this->call(Proyectos_seed::class);
    $this->call(Planos_seed::class);
    $this->call(Presupuestos_seed::class);
    }
}
