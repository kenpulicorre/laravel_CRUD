<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $ciudades=Ciudad::all();
        return $ciudades;


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
            $ciudad=new Ciudad();
        $ciudad->nombre=$request->nombre;
        $ciudad->departamento= $request->departamento;
        $ciudad->cliente_id=$request->cliente_id;
        $ciudad->save();
        return $ciudad;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show($ciudad)
    {
        //
        return Ciudad::find($ciudad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ciudad=Ciudad::findOrFail($request->id);
       $ciudad->nombre=$request->nombre;
        $ciudad->departamento= $request->departamento;
         $ciudad->cliente_id=$request->cliente_id;
        $ciudad->save();
        return $ciudad;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $ciudad=Ciudad::destroy($request->id);
        return $ciudad;
    }
}
