<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    public function solicitudes(){
        return $this->hasMany(Solicitudes::class,'id_soli');
    }
}
