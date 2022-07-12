<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

     public function cliente(){
        // $cliente=Cliente::find($this->id);
        // return $cliente;

        //otra forma mas resumeida:
           return $this->belongsTo('App\Models\Cliente');

           //-------para hacer los llamados
           //$agente=Agente::Find(1);
           //$agente->cliente
    }


}
