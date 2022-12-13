<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;

class SeederPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos
        $permisos = [
            //Permisos de Roles
            'crear-rol','editar-rol','borrar-rol',
            //Permisos de Solicitud
            'ver-solicitud', 'crear-solicitud', 'editar-solicitud','borrar-solicitud'
        ];
        foreach($permisos as $permiso){
          Permission::create( ['name'=> $permiso]);
        }
    }
}
