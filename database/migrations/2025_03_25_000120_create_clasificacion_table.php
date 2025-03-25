<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('clasificacion', function (Blueprint $table) {
            $table->id('id_clasificacion');
            $table->string('nom_clasifi'); // Define la columna correctamente
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clasificacion');
    }
};

