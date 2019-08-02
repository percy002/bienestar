<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Usuario;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::all();
        return view('usuario.index')->with(compact('usuarios'));
    }

    /**
     * Show the form for creating aew resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $action = route('usuario.store');
        $usuarios = new Usuario();
        return view('usuario.usuarioGuardar')->with(compact('action','usuarios'));
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
        $usuarios= new Usuario($request->input());
        $usuarios->save();
        return redirect()->route('usuario.index');
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
    public function edit($idUsuario)
    {
        //
        $usuario=Usuario::find($idUsuario);
        $action=route('usuario.update',['id'=>$idUsuario]);
        $put=true;
        return view('usuario.actualizar')->with(compact('usuario','action','put'));

        // $tarea = Tarea::find($id);
        // $prioridades=Prioridad::all();
        // $put=true;
        // $action=route('tareas.update',['id'=>$id]);

        // return view('tareas.actualizar')->with(compact('tarea','action','prioridades','put'));
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
        $usuario=Usuario::find($id);
        $usuario->dni=$request->input('dni');
        $usuario->nombre=$request->input('nombre');
        $usuario->paterno=$request->input('paterno');
        $usuario->materno=$request->input('materno');
        $usuario->genero=$request->input('genero');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');
        $usuario->correo=$request->input('correo');
        $usuario->fechaNacimiento=$request->input('fechaNacimiento');
        $usuario->save();

        

        return redirect()->route('usuario.index');
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
        $usuario=Usuario::find($id);
        $usuario->delete();

        return back();
    }
}
