<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use DB;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$cliente=Cliente::all();
        //---------con el join
        $cliente=DB::table('clientes')
         ->join('agentes','agente_id', '=','agentes.id')
        // ->select('agentes.id','agentes.nombre',)
         ->select('clientes.*','agentes.nombre as agente_nombre')
         ->get();

        //--------


        return $cliente;
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
        $cliente=new Cliente();
        $cliente->nombre=$request->nombre;
        $cliente->cedula= $request->cedula;
        $cliente->celular=$request->celular;
        $cliente->dirección=$request->dirección;
        $cliente->ciudad=$request->ciudad;
        $cliente->agente_id=$request->agente_id;
        $cliente->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show( $cliente)
    {
        //
        return Cliente::find($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $cliente=Cliente::findOrFail($request->id);
        $cliente->nombre=$request->nombre;
        $cliente->cedula= $request->cedula;
        $cliente->celular=$request->celular;
        $cliente->dirección=$request->dirección;
        $cliente->ciudad=$request->ciudad;
        $cliente->agente_id=$request->agente_id;
        $cliente->save();
        return $cliente;





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
            $cliente=Cliente::destroy($request->id);
        return $cliente;
    }
}
