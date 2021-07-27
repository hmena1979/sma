<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detservicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicio_id');
            $table->unsignedBigInteger('colaborador_id');
            $table->integer('area_id')->nullable();
            $table->integer('puesto_id')->nullable();
            $table->string('ocuactual',30)->nullable();
            $table->integer('lugar')->default(1);
            $table->string('tielabor',30)->nullable();
            $table->string('riesgos',100)->nullable();
            $table->string('seguridad',100)->nullable();
            $table->string('diagocu',100)->default('EXAMEN MÉDICO OCUPACIONAL');
            $table->unsignedTinyInteger('diagpdr')->default(1);
            $table->string('diagcie',4)->default('Z100');
            $table->string('otrdiagocu1',100)->nullable();
            $table->unsignedTinyInteger('otrdiagpdr1')->default(1);
            $table->string('otrdiagcie1',4)->nullable();
            $table->string('otrdiagocu2',100)->nullable();
            $table->unsignedTinyInteger('otrdiagpdr2')->default(1);
            $table->string('otrdiagcie2',4)->nullable();
            $table->string('otrdiagocu3',100)->nullable();
            $table->unsignedTinyInteger('otrdiagpdr3')->default(1);
            $table->string('otrdiagcie3',4)->nullable();
            $table->string('resultado',1)->default('0');
            $table->string('conclusion')->nullable();
            $table->text('recomendaciones')->nullable();
            $table->string('restricciones')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->unsignedTinyInteger('finalizado')->default(2);


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
        Schema::dropIfExists('detservicios');
    }
}
