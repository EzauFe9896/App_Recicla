<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroVoluntarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroVoluntario', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->string('name');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('distrito');
            $table->string('canton');
            $table->string('provincia');
            $table->string('celular');
            $table->string('email')->index();
            $table->string('sexo');
            $table->string('comentario');
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
        Schema::dropIfExists('registroVoluntario');
    }
}
