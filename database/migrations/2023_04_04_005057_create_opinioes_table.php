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
        Schema::create('opiniao', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('data');
            $table->string('nome');
            $table->string('empresa');
            $table->string('produto');
            $table->string('avaliacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opiniao');
    }
};
