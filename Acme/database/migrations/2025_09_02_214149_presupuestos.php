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
         Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // FK
            $table->foreignId('plano_id')->constrained('planos')->onDelete('cascade'); // FK
            $table->integer('costo');
            $table->integer('descuento');
            
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
