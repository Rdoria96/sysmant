<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->integer('id_man')->primary();
            $table->integer('sser_mant')->index('sser_mant');
            $table->text('descripcion_mant');
            $table->date('fecha_mant');
            $table->date('hora_mant');
            $table->text('obs_mant');
            $table->string('mant_responsable', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantenimientos');
    }
}
