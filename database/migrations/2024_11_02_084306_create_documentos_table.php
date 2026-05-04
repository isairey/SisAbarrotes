<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //Crear nuestra tabla
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento', 30);
            $table->string('numero_doc', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //Revertir la creación de la tabla
    {
        Schema::dropIfExists('documentos');
    }
};
