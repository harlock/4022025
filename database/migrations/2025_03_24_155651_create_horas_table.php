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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_personas'); // Columna de ID
            $table->string('Nombre', 200); // Columna Nombre
            $table->string('ap', 200); // Columna apellido paterno
            $table->string('am', 200); // Columna apellido materno
            $table->softDeletes(); // Elimina suavemente
            $table->timestamps(); // Tiempos de creación y actualización
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horas', function (Blueprint $table) {
            //
        });
    }
};
