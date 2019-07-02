<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'idUsuario';
    //
    //datos que puede almacenar el usuario
    protected $fillable=['dni','nombre','paterno','materno','telefono','direccion','correo','genero','fechaNacimiento'];

     

    
}
