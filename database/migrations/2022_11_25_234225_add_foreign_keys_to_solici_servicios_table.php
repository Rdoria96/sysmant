<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSoliciServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solici_servicios', function (Blueprint $table) {
            $table->foreign(['servicio_sser'], 'solici_servicios_ibfk_2')->references(['id_servi'])->on('servicios')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['solicitud_sser'], 'fk_solicitud')->references(['id_soli'])->on('solicitudes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solici_servicios', function (Blueprint $table) {
            $table->dropForeign('solici_servicios_ibfk_2');
            $table->dropForeign('fk_solicitud');
        });
    }
}
