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
        Schema::create('tecnicas_avancadas', static function (Blueprint $table) {
            $table->id();
            $table->string('drop_set');
            $table->string('bi_set');
            $table->string('tri_set');
            $table->string('super_serie');
            $table->string('rest_pause');
            $table->string('repeticoes_forcadas');
            $table->string('repeticoes_negativas');
            $table->string('pre_exaustao');
            $table->string('pos_exaustao');
            $table->string('falha_concentrica');
            $table->string('falha_excentrica');
            $table->string('cluster_sets');
            $table->string('isometria');
            $table->string('pico_de_contracao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnicas_avancadas');
    }
};
