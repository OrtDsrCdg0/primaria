<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asignaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Padre', function (Blueprint $table) {
            $table->increments('id_padre');
            $table->integer('rfc_alumno')->unsigned();
            $table->foreign('rfc_alumno')->references('rfc_alumno')->on('Alumno');
			$table->string('nombre',40);
			$table->string('apellidopaterno',50);
			$table->string('apellidomaterno',50);
            $table->boolean('edad',18);
            $table->boolean('sexo',18);
            $table->string('Tel_Padre',50);
            $table->integer('id_municipio')->unsigned();
            $table->foreign('id_municipio')->references('id_municipio')->on('Municipio');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('Usuario');
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('Grupo');
            $table->string('email');
            $table->string('Usuario');
            $table->string('Contraseña');
			$table->rememberToken();
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
        Schema::drop('Padre');
    }
}
