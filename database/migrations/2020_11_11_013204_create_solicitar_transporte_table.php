<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitarTransporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitarTransporte', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->string('name');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('tipo');
            $table->string('cantidad');
            $table->string('ubicacion');
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
        Schema::dropIfExists('solicitarTransporte');
    }
}
