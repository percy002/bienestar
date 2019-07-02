<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class carreraProfesional extends Model
{
    //
    protected $table = 'carreraProfesionals';

    protected $primaryKey = 'idCarreraProfesional';
    
    public function alumnos(){
        return $this->hasMany(alumno::class,'idAlumno');
    }
    
}
