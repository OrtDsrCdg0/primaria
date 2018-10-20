<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Generaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entregable', function (Blueprint $table) {
            $table->increments('id_entregable');
            $table->string('Entregable',100);
            $table->Date('En_Fecha',50);
            $table->Date('En_FechaFin',50);
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('Grupo');
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_profesor')->references('id_profesor')->on('Profesor');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references('id_materia')->on('Materia');
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
        Schema::drop('Entreegable');
    }
}
