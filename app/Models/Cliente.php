<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\models\Agente; //se coloca al inicio oc

class Cliente extends Model
{
    use HasFactory;
//relacion uno a uno
    public function agente(){
        // $agente=Agente::where('cliente_id',$this->id)->first();
        // return $agente;

        //otra forma mas resumeida:
             return $this->hasOne('App\Models\Agente');

        //otra forma mas resumeidab:
            //use App\models\Agente; //se coloca al inicio oc linea 7
            // return $this->hasOne(Agente::class);
    }

}
