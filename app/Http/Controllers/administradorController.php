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
        $usuario=User::find($id);
        $usuario->dni=$request->input('dni');
        $usuario->nombre=$request->input('nombre');
        $usuario->paterno=$request->input('paterno');
        $usuario->materno=$request->input('materno');
        $usuario->genero=$request->input('genero');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');
        $usuario->correo=$request->input('correo');
        $usuario->rol=$request->input('rol');
        $usuario->fechaNacimiento=$request->input('fechaNacimiento');
        $usuario->save();

        

        return redirect()->route('admin.index');
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
}
