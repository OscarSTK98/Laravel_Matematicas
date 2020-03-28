<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idMaterial');
            $table->string('Nombre');
            $table->string('Asignatura');
            $table->string('Grupo');
            $table->string('Contraseña');
            $table->integer('Acceso');
            
            $table->integer('Profesorid')->unsigned();
            $table->foreign('Profesorid')->references('idProfesor')->on('Profesors');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
