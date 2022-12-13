<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mantenimientos', function (Blueprint $table) {
            $table->foreign(['id_man'], 'mantenimientos_ibfk_2')->references(['doc_tecn'])->on('tecnicos');
            $table->foreign(['sser_mant'], 'mantenimientos_ibfk_1')->references(['id_sser'])->on('solici_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mantenimientos', function (Blueprint $table) {
            $table->dropForeign('mantenimientos_ibfk_2');
            $table->dropForeign('mantenimientos_ibfk_1');
        });
    }
}
