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
        Schema::create('EntreegableAlumno', function (Blueprint $table) {
            $table->increments('id_entregablealumno');
            $table->integer('id_entregable')->unsigned();
            $table->foreign('id_entregable')->references('id_entregable')->on('Entregable');
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('Grupo');
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_profesor')->references('id_profesor')->on('Profesor');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references('id_materia')->on('Materia');
            $table->string('Descripción_Entregable',100);
            $table->string('Archivo_Adjunto',50);
            $table->Date('En_Fecha',100);
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
        Schema::drop('EntregableAlumno');
    }
}
