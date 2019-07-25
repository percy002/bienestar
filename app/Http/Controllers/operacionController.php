<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Alumno,Operacion};

class operacionController extends Controller
{
    public function prorroga($id)
    {
        $alumno= Alumno::find($id);
        $action = route('operacion.store');
        return view('operacion.prorroga')->with(compact('action','alumno'));
    }
    public function reincorporacion($id)
    {
        $alumno= Alumno::find($id);
        $action = route('operacion.store');
        return view('operacion.reincorporacion')->with(compact('action','alumno'));
    }
    public function becas($id)
    {
        $alumno= Alumno::find($id);
        $action = route('operacion.store');
        return view('operacion.becas')->with(compact('action','alumno'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$alumno= Alumno::find($id);
        return view('operacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $alumno= Alumno::find($id);
        $action = route('operacion.store');
        return view('operacion.becas')->with(compact('action','alumno'));
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
        
        $operacion= new Operacion($request->input());
        $operacion->save();
        return redirect()->route('operacion.show',['id'=>$request->input('idAlumno')]);
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
        $alumno= Alumno::find($id);
        return view('operacion.index')->with(compact('alumno'));
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
