<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = true;
    //
    
    protected $fillable=['dni','password','nombre','paterno','materno','telefono','direccion','correo','genero','rol','fechaNacimiento'];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
