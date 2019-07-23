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
}
