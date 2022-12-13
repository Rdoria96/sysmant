<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoliciServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solici_servicios', function (Blueprint $table) {
            $table->integer('id_sser')->primary();
            $table->integer('solicitud_sser')->index('solicitud_sser');
            $table->integer('servicio_sser')->index('servicio_sser');
            $table->text('descripcion_servicio_sser');
            $table->string('tipo_servicio_sser', 40);

            $table->index(['solicitud_sser'], 'solicitud_sser_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solici_servicios');
    }
}
