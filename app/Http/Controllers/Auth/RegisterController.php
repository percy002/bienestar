<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Entities\CarreraProfesional;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/bienestar';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'dni' => ['required','numeric','min:10000000','max:99999999'],
            'nombre' => ['required', 'string', 'max:25'],
            'paterno' => ['required','string','max:25'],
            'materno' => ['required','string','max:25'],
            'telefono' => ['required','string','max:999999999'],
            'direccion' => ['required','string','max:45'],
            'fechaNacimiento' => ['required','date','date_format:Y-m-d'],
            'genero' => ['required','string','max:2'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'rol' => ['min:1'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'dni' => $data['dni'],
            'nombre' => $data['nombre'],
            'paterno' => $data['paterno'],
            'materno' => $data['materno'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
            'rol' => $data['rol'],
            'fechaNacimiento' => $data['fechaNacimiento'],
            'genero' => $data['genero'],
            'correo' => $data['correo'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol'],
        ]);
    }
    public function showRegistrationForm()
    {
        $carreras=CarreraProfesional::all();
        return view('auth.register')->with(compact('carreras'));
    }
}
