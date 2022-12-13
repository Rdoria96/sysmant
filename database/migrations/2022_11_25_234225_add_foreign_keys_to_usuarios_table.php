<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign(['rol'], 'fk_rol')->references(['id_rol'])->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_dependencia'], 'fk_dep')->references(['id_depen'])->on('dependencias')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('fk_rol');
            $table->dropForeign('fk_dep');
        });
    }
}
