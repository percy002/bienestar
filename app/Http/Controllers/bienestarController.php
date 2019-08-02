<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Alumno,CarreraProfesional};

class bienestarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carrera=CarreraProfesional::all();
        $alumnos=Alumno::all();
        return view('bienestar.index')->with(compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carreras=CarreraProfesional::all();

        $action = route('bienestar.store');
        $alumnos = new Alumno();
        return view('bienestar.registrar')->with(compact('carreras','action','alumnos'));
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         //validacion a travez de una lista
         /* list($rules,$messages)=$this->_rules();
         $this->validate($request,$rules,$messages); */


        $alumnos= new alumno($request->input());
        $alumnos->save();
        return redirect()->route('bienestar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $alumno = Alumno::find($id);
        $carreras=CarreraProfesional::all();
        $put=true;
        $action=route('bienestar.update',['id'=>$id]);

        return view('bienestar.actualizar')->with(compact('alumno','action','carreras','put'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $alumno=Alumno::find($id);
        $alumno->dni=$request->input('dni');
        $alumno->nombre=$request->input('nombre');
        $alumno->paterno=$request->input('paterno');
        $alumno->materno=$request->input('materno');
        $alumno->genero=$request->input('genero');
        $alumno->telefono=$request->input('telefono');
        $alumno->direccion=$request->input('direccion');
        $alumno->correo=$request->input('correo');
        $alumno->idCarreraProfesional=$request->input('idCarreraProfesional');
        $alumno->fechaNacimiento=$request->input('fechaNacimiento');
        $alumno->save();
        return redirect()->route('bienestar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     #reglas de validacion
     private function _rules(){
        $messages=[
            'dni.required' => 'el dni es requerido',
            'dni.Integer'=> 'solo numero enteros',
            'dni.min'=> 'minimo 8 caracteres del dni',
            'dni.max'=> 'maximo 8 caracteres del dni',

            'nombre.required' => 'el nombre es requerido',
            'nombre.alpha' => 'el tiene que ser caracteres alfabéticos',
            'nombre.max' => 'maximo 25 caracteres en nombre',

            'paterno.required' => 'el apellido paterno es requerido',
            'paterno.alpha' => 'el el tiene que ser caracteres alfabéticos',
            'paterno.max' => 'maximo 25 caracteres en apellido patrno',

            'materno.required' => 'el apellido materno es requerido',
            'materno.alpha' => 'el tiene que ser caracteres alfabéticos',
            'materno.max' => 'maximo 25 caracteres en apellido materno',

            'telefono.required' => 'el telefono es requerido',
            'telefono.Integer' => 'solo numero enteros',
            'telefono.min' => 'minimo 8 caracteres en telefono',
            'telefono.max' => 'maximo 9 caracteres en telefono',

            'direccion.required' => 'la direccion es requerida',
            'direccion.max' => 'maximo 45 caracteres en espacion direccion',

            'fechaNacimiento.required' => 'fecha de Nacimiento es requerida',
            'fechaNacimiento.date' => 'completar  Fecha valida de nacimiento',

            'genero.required' => 'el genero es requerida',
            'genero.max' => 'maximo 2 caracteres en genero',

            'correo.required' => 'el correo es requerida',
            'correo.E-Mail' => 'Correo invalido',
            'correo.max' => 'maximo 45 caracteres correo',

          /*   'idCarreraProfecional.required' => 'el Id de carrera profecional es requerido es requerido',
            'idCarreraProfecional.Integer' => 'solo numero enteros',
            'idCarreraProfecional.min' => 'minimo 11 caracteres ',
            'idCarreraProfecional.digits_between' => 'el numero requerido deve estar entre el 1 y 20', */
            

        ];
        $rules =[
            'dni' => 'required|Integer|min:10000000|max:99999999',
            'nombre' => 'required|alpha|max:25',
            'paterno' => 'required|alpha|max:25',
            'materno' => 'required|alpha|max:25',
            'telefono' => 'required|Integer|min:10000|max:99999999',
            'direccion' => 'required|max:45',
            'fechaNacimiento' => 'required|date',
            'genero' => 'required|max:2',
            'correo' => 'required|E-Mail|max:45',
            /* 'idCarreraProfecional' => 'required|integer|max:11|digits_between:1,20|' */
        ];

        return array($rules,$messages);
    }


}
