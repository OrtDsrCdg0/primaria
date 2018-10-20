<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creatusuariotable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('Usuario',50);
            $table->integer('id_padre')->unsigned();
            $table->foreign('id_padre')->references('id_padre')->on('padre');
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_profesor')->references('id_profesor')->on('profesor');
            $table->integer('rfc_alumno')->unsigned();
            $table->foreign('rfc_alumno')->references('rfc_alumno')->on('alumno');
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
        Schema::dropIfExists('usuario');
    }
}
