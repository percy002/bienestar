<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Alumno,CarreraProfesional};

class alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $alumnos=Alumno::all();
        return view('alumno.index')->with(compact('alumnos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $action = route('alumno.store');
        $alumnos = new Alumno();
        $carreras= carreraProfesional::all();
        
        return view('alumno.guardar')->with(compact('action','alumnos','carreras'));
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
        list($rules,$messages)=$this->_rules();
        $this->validate($request,$rules,$messages);
        
        $alumnos= new alumno($request->input());
        $alumnos->save();
        return redirect()->route('alumno.index');
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
        $alumnos=Alumno::find($id);
        $action=route('alumno.update',['id'=>$id]);
        $put=true;
        $carreras= carreraProfesional::all();
        return view('alumno.actualizar')->with(compact('alumnos','action','put','carreras'));
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
        $alumno->carreraid=$request->input('carreraid');
        $alumno->fechaNacimiento=$request->input('fechaNacimiento');
        $alumno->save();

        

        return redirect()->route('alumno.index');
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
        $alumno=Alumno::find($id);
        $alumno->delete();

        return back();
    }
      #reglas de validacion
      private function _rules(){
        $messages=[
            'dni.required' => 'el dni es requerido',
            'dni.Integer'=> 'solo numero enteros',
            'dni.min'=> 'minimo 8 caracteres',
            'dni.max'=> 'maximo 8 caracteres',
            'dni.unique' => 'ya hay un alumno registrado con este dni',

            'nombre.required' => 'el nombre es requerido',
            'nombre.alpha' => 'el tiene que ser caracteres alfabéticos',
            'nombre.max' => 'maximo 25 caracteres',

            'paterno.required' => 'el apellido paterno es requerido',
            'paterno.alpha' => 'el el tiene que ser caracteres alfabéticos',
            'paterno.max' => 'maximo 25 caracteres',

            'materno.required' => 'el apellido materno es requerido',
            'materno.alpha' => 'el tiene que ser caracteres alfabéticos',
            'materno.max' => 'maximo 25 caracteres',

            'telefono.required' => 'el telefono es requerido',
            'telefono.Integer' => 'solo numero enteros',
            'telefono.min' => 'minimo 8 caracteres',
            'telefono.max' => 'maximo 9 caracteres',

            'direccion.required' => 'la direccion es requerida',
            'direccion.max' => 'maximo 45 caracteres',

            'fechaNacimiento.required' => 'fecha de Nacimiento es requerida',
            'fechaNacimiento.date' => 'date',

            'genero.required' => 'el genero es requerida',
            'genero.max' => 'maximo 2 caracteres',

            'correo.required' => 'el correo es requerida',
            'correo.E-Mail' => 'el genero es requerida',
            'correo.max' => 'maximo 45 caracteres',

            'idCarreraProfeciona.required' => 'el Id de carrera profecional es requerido es requerido',
            'idCarreraProfeciona.Integer' => 'solo numero enteros',
            'idCarreraProfeciona.min' => 'minimo 11 caracteres',
            'idCarreraProfeciona.digits_between' => 'el numero requerido deve estar entre el 1 y 20',
            

        ];
        $rules =[
            'dni' => 'required|Integer|min:8|max:8|unique:alumnos',
            'nombre' => 'required|alpha|max:25',
            'paterno' => 'required|alpha|max:25',
            'materno' => 'required|alpha|max:25',
            'telefono' => 'required|Integer|min:8|max:9',
            'direccion' => 'required|max:45',
            'fechaNacimiento' => 'required|date',
            'genero' => 'required|max:2',
            'correo' => 'required|E-Mail|max:45',
            'idCarreraProfeciona' => 'required|integer|max:11|digits_between:1,20|'
        ];

        return array($rules,$messages);
    }

}
