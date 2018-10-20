<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creatprofesortable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->increments('id_profesor');
			$table->string('nombre',40);
			$table->string('apellidopaterno',50);
			$table->string('apellidomaterno',50);
            $table->boolean('sexo',18);
            $table->string('edad',10);
			$table->string('cp_profesor',40);
            $table->string('Tel_Profesor',40);
            $table->string('Correo_profesor',40);
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupo');
            $table->integer('id_municipio')->unsigned();
            $table->foreign('id_municipio')->references('id_municipio')->on('municipio');
            $table->integer('id_grado')->unsigned();
            $table->foreign('id_grado')->references('id_grado')->on('grado');
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
        Schema::dropIfExists('profesor');
    }
}
