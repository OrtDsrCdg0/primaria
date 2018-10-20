<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumno', function (Blueprint $table) {
            $table->increments('rfc_alum');
			$table->string('nombre',40);
			$table->string('apellidopaterno',50);
			$table->string('apellidomaterno',50);
            $table->boolean('edad',18);
            $table->boolean('sexo',18);
            $table->integer('id_municipio')->unsigned();
            $table->foreign('id_municipio')->references('id_municipio')->on('Municipio');
            $table->integer('id_grado')->unsigned();
            $table->foreign('id_grado')->references('id_grado')->on('Grado');
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
        Schema::drop('Alumno');
    }
}
