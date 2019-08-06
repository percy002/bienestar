<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class operacion extends Model
{
    //
    protected $table = 'operacionestudiante';
    protected $primaryKey = 'idOperacionAlumno';
    //
    //datos que puede almacenar el usuario
    protected $fillable=['fechaInicio','fechaFin','idOperacionBienestar','diagnostico','idAlumno','observaciones'];

}
