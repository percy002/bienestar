<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Alumno,Operacion};
use Carbon\Carbon;

class operacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function economico($id)
    {

        $alumno= Alumno::find($id);$edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        return view('operacion.economico')->with(compact('alumno','edadActual'));
    }
    public function prorroga($id)
    {
        $alumno= Alumno::find($id);
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        $action = route('operacion.store');
        return view('operacion.prorroga')->with(compact('action','alumno','edadActual'));
    }
    public function reincorporacion($id)
    {
        $alumno= Alumno::find($id);
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        $action = route('operacion.store');
        return view('operacion.reincorporacion')->with(compact('action','alumno','edadActual'));
    }
    public function becas($id)
    {
        $alumno= Alumno::find($id);
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 

        $action = route('operacion.store');
        return view('operacion.becas')->with(compact('action','alumno','edadActual'));
    }
    public function psicologico($id)
    {
        $alumno= Alumno::find($id);
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        $action = route('operacion.store');
        return view('operacion.psicologico')->with(compact('action','alumno','edadActual'));
    }
    public function tutoriaConsejeria($id)
    {
        $alumno= Alumno::find($id);
        $action = route('operacion.store');
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        return view('operacion.tutoriaConsejeria')->with(compact('action','alumno','edadActual'));
    }
    public function medico($id)
    {
        $alumno= Alumno::find($id);
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        $action = route('operacion.store');
        return view('operacion.medico')->with(compact('action','alumno','edadActual'));
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
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        $action = route('operacion.store');
        return view('operacion.becas')->with(compact('action','alumno','edadActual'));
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
        $alumno= Alumno::find($id);
        $edadActual = Carbon::parse($alumno->fechaNacimiento)->age; 
        return view('operacion.opciones')->with(compact('alumno','edadActual'));
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

     #reglas de validacion
     private function _rules(){
        $messages=[
            'fecha.required' => 'fecha es requerida',
            'fecha.date' => 'date',

            'observaciones.required' => 'las observaciones son requeridas',
          

        ];
        $rules =[
            'fecha' => 'required|date',
            'observaciones' => 'required',
        ];

        return array($rules,$messages);
    }

}
