<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    //
    protected $primaryKey = 'idAlumno';
    //
    //datos que puede almacenar el usuario
    protected $fillable=['dni','nombre','paterno','materno','telefono','direccion','correo','idCarreraProfesional','genero','fechaNacimiento'];
    //

    public function carrera(){
        return $this->belongsTo('App\Entities\CarreraProfesional', 'idCarreraProfesional');
    }
}
