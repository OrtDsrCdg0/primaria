<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profesor', function (Blueprint $table) {
            $table->increments('id_prof');
			$table->string('nombre',40);
			$table->string('apellidopaterno',50);
			$table->string('apellidomaterno',50);
            $table->boolean('sexo',18);
            $table->string('edad',10);
			$table->string('cp_profesor',40);
            $table->string('Tel_Profesor',40);
            $table->string('Correo_profesor',40);
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('Grupo');
            $table->integer('id_municipio')->unsigned();
            $table->foreign('id_munnicipio')->references('id_municipio')->on('Municipio');
            $table->integer('id_grado')->unsigned();
            $table->foreign('id_grado')->references('id_grado')->on('Grado');
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
        Schema::drop('Profesor');
    }
}
