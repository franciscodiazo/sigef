<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('clientes', function(Blueprint $table){
        $table->increments('id');
        $table->string('apellidos');
        $table->string('nombres');
        $table->string('nuid');
        $table->date('fecha_nacimiento');
        $table->string('direccion');
        $table->string('ciudad');
        $table->string('barrio');
        $table->string('telefono');
        $table->string('celular');
        $table->timestamps();
       }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
        //
    }
}
