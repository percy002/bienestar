<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class carreraProfesional extends Model
{
    //
    protected $table = 'carreraprofesionals';

    protected $primaryKey = 'idCarreraProfesional';
    
    public function alumnos(){
        return $this->hasMany(alumno::class,'idAlumno');
    }
    
}
