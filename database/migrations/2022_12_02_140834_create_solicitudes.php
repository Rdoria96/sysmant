<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->integer('id_soli', true);
            $table->integer('solicitante_soli')->index('solicitante_soli');
            $table->date('soli_fecha');
            $table->time('soli_hora');
            $table->date('soli_fecha_autorizacion');
            $table->time('soli_hora_autorizacion');
            $table->text('soli_motivo_rechazo');
            $table->integer('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
