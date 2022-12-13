<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $solicitud=['solicitante_soli','soli_fecha','soli_hora','servicio','descripcion','estado'];
    public function servicios(){
        return $this->belongsTo(Servicios::class,'servicio');
    }
}
