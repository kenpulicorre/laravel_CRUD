<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorno todos
        $empleados=Empleado::all();
        return $empleados;

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
        $empleado=new Empleado();
        $empleado->nombre=$request->nombre;
        $empleado->cedula= $request->cedula;
        $empleado->celular=$request->celular;
        $empleado->dirección=$request->dirección;
        $empleado->ciudad=$request->ciudad;
        $empleado->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    // public function show(Empleado $empleado $id)
    // public function show( Request $request)
    public function show( $solo_id)
    {
        //

        //   $xx=($request->nombre);
        //   $id=($request->id);

    //    return $nombre;
    // /return Empleado::find($id);
    return Empleado::find($solo_id);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Empleado $empleado)
    public function update(Request $request,  $id)
    {
        //
        $empleado=Empleado::findOrFail($request->id);
       $empleado->nombre=$request->nombre;
        $empleado->cedula= $request->cedula;
        $empleado->celular=$request->celular;
        $empleado->dirección=$request->dirección;
        $empleado->ciudad=$request->ciudad;
        $empleado->save();
        return $empleado;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    public function destroy(Request $request )
    {
        //
        $empleado=Empleado::destroy($request->id);
        return $empleado;
    }
}
