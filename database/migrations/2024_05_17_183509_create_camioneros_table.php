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
        Schema::create('camioneros', function (Blueprint $table) {
            $table->id();
            $table->integer('dni');
            $table->string('Nombre');
            $table->string('Poblacion');
            $table->integer('telefono');
            $table->string('Direccion');
            $table->integer('salario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camioneros');
    }
};
