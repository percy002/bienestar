<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class carreraProfesional extends Model
{
    //
    protected $table = 'carreraProfesionals';

    protected $primaryKey = 'idCarreraProfesional';
    
    protected $fillable=['nombreCarrera'];

    public function alumnos(){
        return $this->hasMany('App\Entities\Alumno','idAlumno');
    }
    
}
