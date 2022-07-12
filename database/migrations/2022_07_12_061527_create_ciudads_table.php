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
        Schema::create('ciudads', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("departamento");

        //------------relacion con cliente
            $table->unsignedBigInteger('cliente_id')->nullable()->unique();
            $table->foreign('cliente_id')
            ->references('id')->on('clientes')
            ->onDelete('set null') ;//borra en ambos modelos
            //  ->onUpdate('cascade')







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
        Schema::dropIfExists('ciudads');
    }
};
