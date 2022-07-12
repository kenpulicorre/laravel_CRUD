<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use App\Models\Cliente;
use Illuminate\Http\Request;
use DB;
class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //$agentes=Agente::all();

      //---------prueba join


           $agentes=DB::table('agentes')
         ->join('clientes','agente_id', '=','agentes.id')
        // ->select('agentes.id','agentes.nombre',)
        ->select('agentes.*','clientes.id as cliente_id','clientes.nombre as cliente_nombre')
         ->get();



      //--------

        return $agentes;
        //return $agentes;
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
       try {
        //code...
         $agente=new Agente();
        $agente->nombre=$request->nombre;
        $agente->cedula= $request->cedula;
        $agente->save();
        return $agente;
       } catch (\Throwable $th) {
        //throw $th;
        return $th;
       }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function show($agente)
    {
        //
       return Agente::find($agente);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function edit(Agente $agente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         $agente=Agente::findOrFail($request->id);
        $agente->nombre=$request->nombre;
        $agente->cedula= $request->cedula;
        $agente->save();
        return $agente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $empleado=Agente::destroy($request->id);
        return $empleado;
    }
}
