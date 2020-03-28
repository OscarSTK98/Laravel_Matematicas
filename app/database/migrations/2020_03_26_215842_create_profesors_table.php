<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->increments('idProfesor');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Username');
            $table->string('Contraseña');
            $table->string('Tipo');
            $table->string('ClaveSubida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesors');
    }
}
