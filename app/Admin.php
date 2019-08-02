<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    //
    protected $fillable=['dni','password','nombre','paterno','materno','telefono','direccion','correo','genero','fechaNacimiento'];

}
