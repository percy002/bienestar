<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Alumno,Operacion};
use Carbon\Carbon;
use App;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reporteAlumnos($idRoles)
    {
        switch ($idRoles) {
            case '1':
                $operaciones=Operacion::all();
                // return view('usuario.index')->with(compact('operaciones'));
                break;
            case '2':
                $operaciones=Operacion::whereBetween('idOperacionBienestar', [1, 5])->get();
                // ->orWhere('idOperacionBienestar','3')
                // ->orWhere('idOperacionBienestar','4')->get();
                // return view('usuario.index')->with(compact('operaciones'));
            break;

            case '3':
                $operaciones=Operacion::where('idOperacionBienestar','6')->get();
                // return view('usuario.index')->with(compact('operaciones'));
            break;

            case '4':
                $operaciones=Operacion::where('idOperacionBienestar','7')->get();
                // return view('usuario.index')->with(compact('operaciones'));
            break;

            case '5':
            # code...
                $operaciones=Operacion::where('idOperacionBienestar','8')->get();
                // return view('usuario.index')->with(compact('operaciones'));
                break;
        }

        // $operacionesAlumno=Operacion::all()->where('idAlumno',$idAlumno)->where('idOperacionBienestar',$idOperacionBienestar);
        $alumno=$operaciones->first();
        $edadActual = Carbon::parse($alumno->alumno->fechaNacimiento)->age;
        
        $h1="Reporte Tutoria Consejeria";
        switch ($idRoles) {
            case '2':
                $h1="Reporte Bienestar Economico";
                break;
            case '3':
                $h1="Reporte Bienestar Psicologico";
                break;
            case '4':
                $h1="Reporte bienestar Medico";
                break;
            case '5':
                $h1="Reporte de todos los Alumnos";
                break;
            }

        $pdf = App::make('dompdf.wrapper');
        //$alumno=Alumno::all()->first();
        // dd($h1);
        $pdf->loadView('reportes.reporteAlumnos',compact('alumno','edadActual','operaciones','h1'));
        return $pdf->stream();
    }
    public function imprimirReporteXalumno($idAlumno,$idOperacionBienestar){
        $operacionesAlumno=Operacion::all()->where('idAlumno',$idAlumno)->where('idOperacionBienestar',$idOperacionBienestar);
        $alumno=$operacionesAlumno->first();
        $edadActual = Carbon::parse($alumno->alumno->fechaNacimiento)->age;
        switch ($idOperacionBienestar) {
            case '6':
                $h1="Reporte Bienestar Psicologico";
                break;
            case '7':
                $h1="Reporte Bienestar Medico";
                break;
            case '8':
                $h1="Reporte Tutoria y Consejeria";
                break;
            
            default:
                $h1="Reporte Bienestar Economico";
            
                break;
        }

        $pdf = App::make('dompdf.wrapper');
        //$alumno=Alumno::all()->first();
        $pdf->loadView('reportes.reporteXalumno',compact('alumno','edadActual','operacionesAlumno','h1'));
        return $pdf->stream();
    }
    public function imprimirReporte()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('<h1>Test</h1>');
        return $pdf->stream();
    }
    public function reporteXalumno($idAlumno,$idOperacionBienestar)
    {
        
        // $operaciones=Operacion::where('idAlumno',$idAlumno)->first()->get();
            $operacionesAlumno=Operacion::all()->where('idAlumno',$idAlumno)->where('idOperacionBienestar',$idOperacionBienestar);
            $alumno=$operacionesAlumno->first();
            $edadActual = Carbon::parse($alumno->alumno->fechaNacimiento)->age;
            switch ($idOperacionBienestar) {
                case '6':
                    $h1="Reporte Bienestar Psicologico";
                    break;
                case '7':
                    $h1="Reporte Bienestar Medico";
                    break;
                case '8':
                    $h1="Reporte Tutoria y Consejeria";
                    break;
                
                default:
                    $h1="Reporte Bienestar Economico";
                
                    break;
            }

        return view('usuario.reportes')->with(compact('alumno','edadActual','operacionesAlumno','h1'));
    }
    public function reportes($idRol)
    {
        switch ($idRol) {
            case '1':
                $operaciones=Operacion::all();
                return view('usuario.index')->with(compact('operaciones'));
                break;
            case '2':
                $operaciones=Operacion::whereBetween('idOperacionBienestar', [1, 5])->get();
                // ->orWhere('idOperacionBienestar','3')
                // ->orWhere('idOperacionBienestar','4')->get();
                return view('usuario.index')->with(compact('operaciones'));
            break;

            case '3':
                $operaciones=Operacion::where('idOperacionBienestar','6')->get();
                return view('usuario.index')->with(compact('operaciones'));
            break;

            case '4':
                $operaciones=Operacion::where('idOperacionBienestar','7')->get();
                return view('usuario.index')->with(compact('operaciones'));
            break;

            case '5':
            # code...
                $operaciones=Operacion::where('idOperacionBienestar','8')->get();
                return view('usuario.index')->with(compact('operaciones'));
                break;
        }
    }
    public function index()
    {
        $operaciones=Operacion::all()->where('idOperacionBienestar','1');
        return view('usuario.index')->with(compact('operaciones'));
    }

    /**
     * Show the form for creating aew resource.
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
    public function edit($idUsuario)
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
       
    }
}
