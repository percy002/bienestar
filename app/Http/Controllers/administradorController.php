<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class administradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios=User::all();
        // return view('admin.index')->with(conpact('usuarios'));
        return view('admin.index')->with(compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $usuarios=User::find($id);
        $action=route('administrador.update',['id'=>$id]);
        $put=true;
        // $carreras= carreraProfesional::all();
        // return view('admin.actualizar')->with(compact('usuarios','action','put','carreras'));   
        return view('admin.actualizar')->with(compact('usuarios','action','put'));   

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
        list($rules,$messages)=$this->_rules();
        $this->validate($request,$rules,$messages);
        $usuario=User::find($id);
        $usuario->dni=$request->input('dni');
        $usuario->nombre=$request->input('nombre');
        $usuario->paterno=$request->input('paterno');
        $usuario->materno=$request->input('materno');
        $usuario->genero=$request->input('genero');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');
        $usuario->correo=$request->input('correo');
        $usuario->idRoles=$request->input('idRoles');
        $usuario->fechaNacimiento=$request->input('fechaNacimiento');
        $usuario->save();

        

        return redirect()->route('administrador.index');
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
        $usuarios=User::find($id);
        $usuarios->delete();

        return back();
    }

    private function _rules(){
        $messages=[
            'dni.required' => 'el dni es requerido',
            'dni.Integer'=> 'solo numero enteros',
            'dni.min'=> 'minimo 8 caracteres',
            'dni.max'=> 'maximo 9 caracteres',
            'dni.unique' => "ya hay un alumno registrado con este dni",

            'nombre.required' => 'el nombre es requerido',
            'nombre.max' => 'maximo 25 caracteres en nombre',

            'paterno.required' => 'el apellido paterno es requerido',
            'paterno.max' => 'maximo 25 caracteres en apellido patrno',

            'materno.required' => 'el apellido materno es requerido',
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

            // 'idCarreraProfecional.required' => 'el Id de carrera profecional es requerido es requerido',
            // 'idCarreraProfecional.Integer' => 'solo numero enteros',
            // 'idCarreraProfecional.min' => 'minimo 11 caracteres',
            // 'idCarreraProfecional.digits_between' => 'el numero requerido deve estar entre el 1 y 20',
            

        ];
        $rules =[
            'dni' => 'required|numeric|min:10000000|max:99999999|unique:alumnos',
            'nombre' => 'required|max:25',
            'paterno' => 'required|max:25',
            'materno' => 'required|max:25',
            'telefono' => 'required|Integer|min:10000|max:999999999',
            'direccion' => 'required|max:45',
            'fechaNacimiento' => 'required|date',
            'genero' => 'required|max:2',
            'correo' => 'required|E-Mail|max:45',
            // 'idCarreraProfecional' => 'required|integer|max:11|digits_between:1,20|',
        ];

        return array($rules,$messages);
    }
}
