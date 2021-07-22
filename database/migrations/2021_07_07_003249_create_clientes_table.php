<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',3)->nullable();
            $table->integer('tipo')->default(1);// 1 - Empresa / 2- Particular
            $table->string('numdoc',15)->nullable();
            $table->string('razsoc',100);
            $table->string('contacto',100)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('celular',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('actividad',100)->nullable();
            $table->string('clave',10)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('clientes');
    }
}
