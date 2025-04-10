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
        Schema::create('grupamento_muscular', static function (Blueprint $table) {
            $table->id();
            $table->string('peito');
            $table->string('costas');
            $table->string('ombro');
            $table->string('perna');
            $table->string('posterior');
            $table->string('bíceps');
            $table->string('tríceps');
            $table->string('glúteo');
            $table->string('abdômen');
            $table->string('panturrilha');
            $table->string('antebraço');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupamento_muscular');
    }
};
