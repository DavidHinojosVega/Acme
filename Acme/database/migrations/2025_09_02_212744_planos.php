<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->foreignId('zona_id')->constrained('zonas')->onDelete('cascade'); // FK
            $table->string('img',30);
            $table->string('tipo_de_acceso');
            $table->date('fecha_actualizacion_anterior');
            $table->date('fecha_actualizacion');
            $table->string('contraseña',30);
            $table->foreignId('proyecto_id')->constrained('proyectos')->onDelete('cascade'); // FK
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
