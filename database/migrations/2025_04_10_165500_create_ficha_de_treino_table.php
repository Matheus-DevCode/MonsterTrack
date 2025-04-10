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
        Schema::create('ficha_de_treino', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user_monster')->onDelete('cascade');
            $table->string('grupo');
            $table->string('exercicio');
            $table->integer('series');
            $table->integer('repeticoes');
            $table->string('tecnica')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_de_treino');
    }
};
