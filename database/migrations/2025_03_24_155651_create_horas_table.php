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
        Schema::table('horas', function (Blueprint $table) {
            $table->id('id_horas');
            $table->string('descripcion_h', 200);
            $table->softDeletes();
            $table->timestamps();
        });
    }
git add database/migrations/2025_03_24_155651_create_horas_table.php
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
