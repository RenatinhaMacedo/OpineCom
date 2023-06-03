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
        Schema::create('opinioes', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo');
            $table->string('titulo');
            $table->string('usuario_id');
            $table->string('produto');
            $table->string('avaliacao');
            $table->date('data');
            $table->string('imagem')->nullable();
            $table->bigInteger('empresa_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opinioes');
    }
};
