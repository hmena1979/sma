<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sede_id');
            $table->string('periodo',6);
            $table->date('fecha');
            $table->string('evaluacion',1)->default('2');
            $table->unsignedBigInteger('cliente_id');
            $table->string('departamento',2)->nullable();
            $table->string('provincia',4)->nullable();
            $table->string('ubigeo',6)->nullable();
            $table->string('ubicacion',100)->nullable();
            $table->string('glosa',100)->nullable();
            $table->text('examenes')->nullable();
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
        Schema::dropIfExists('servicios');
    }
}
