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
        Schema::create('dias', function (Blueprint $table) {
            $table->id('id_dia');
            $table->string('desc_dia', 100);
            $table->softDeletes();  // Esto agrega la columna 'deleted_at'
            $table->timestamps();   // Esto agrega las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dias');
    }
};
