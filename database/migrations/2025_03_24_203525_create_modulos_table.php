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
        Schema::create('modulos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('curso_id');
            $table->string('modulo_nome');
            $table->integer('modulo_ordem');
            $table->timestamps();

            $table->foreign('curso_id')
                  ->references('id')
                  ->on('cursos')
                  ->onDelete('cascade');

            $table->unique(['curso_id', 'modulo_ordem'], 'modulos_curso_id_modulo_ordem_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};