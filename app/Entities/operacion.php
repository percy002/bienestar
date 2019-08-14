<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class operacion extends Model
{
    //
    protected $table = 'operacionEstudiante';
    protected $primaryKey = 'idOperacionAlumno';
    //
    //datos que puede almacenar el usuario
    protected $fillable=['fechaInicio','fechaFin','idOperacionBienestar','diagnostico','idAlumno','observaciones'];

    public function alumno()
    {
        return $this->belongsTo('App\Entities\Alumno', 'idAlumno');
    }
}
