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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // FK
            $table->date('fecha_de_creacion');
            $table->string('descripcion');
            $table->foreignId('zona_id')->constrained('zonas')->onDelete('cascade'); // FK
            
            
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
