<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class adminController extends Controller
{
    //
    public function index(){
        $usuarios=User::all();
        // return view('admin.index')->with(conpact('usuarios'));
        return view('admin.index')->with(compact('usuarios'));
    }
    public function destroy($id){
        $usuarios=User::find($id);
        $usuarios->delete();

        return back();
    }

    public function edit($id)
    {
        $usuarios=User::find($id);
        $action=route('admin.update',['id'=>$id]);
        $put=true;
        $carreras= carreraProfesional::all();
        return view('admin.actualizar')->with(compact('usuarios','action','put','carreras'));   
    }

    public function update()
    {
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
}
