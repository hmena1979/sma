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
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('puesto_id')->nullable();
            $table->string('ocuactual',30)->nullable();
            $table->unsignedTinyInteger('lugar')->default(1);
            $table->unsignedTinyInteger('altitud')->default(1);
            $table->unsignedTinyInteger('reubicacion')->default(2);
            $table->string('tielabor',30)->nullable();
            $table->text('riesgos')->nullable();
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
            $table->date('fecha_bio')->nullable();
            $table->string('hemoglobina',10)->nullable();
            $table->integer('doctor_bio')->nullable();
            $table->unsignedTinyInteger('orinap')->default(2);
            $table->string('resultado',1)->default('0');
            $table->string('conclusion')->default('DENTRO DE LIMITES NORMALES');
            $table->text('recomendaciones')->default('CONTROL MEDICO ANUAL');
            $table->string('restricciones')->default('NINGUNA');
            $table->integer('doctor_id')->nullable();
            $table->unsignedTinyInteger('finalizado')->default(2);
            $table->text('foto')->nullable();
            $table->text('firma')->nullable();
            $table->text('huella')->nullable();
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
