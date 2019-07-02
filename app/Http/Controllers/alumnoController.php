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
}
