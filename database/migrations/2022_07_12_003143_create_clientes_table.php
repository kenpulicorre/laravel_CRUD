<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("cedula");
            $table->string("celular");
            $table->string("dirección");
            $table->string("ciudad");

            //$table->unsignedBigInteger('agente_id')->unique()->nullable//para eliminar uno y se conserve otro
            $table->unsignedBigInteger('agente_id')->unique() ;
            $table->foreign('agente_id')
            ->references('id')
            ->on('agentes')
            //->onDelete('set null') //poen en nullo el bloque ide en el otro lado, es decir se elimina uno pero se conserva el otro
             ->onDelete('cascade') //borra en ambos modelos
             ->onUpdate('cascade');




            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
