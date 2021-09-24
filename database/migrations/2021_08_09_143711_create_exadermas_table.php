<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExadermasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exadermas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->unsignedTinyInteger('elasticidad')->default('1');// ELAS_PIEL	Numeric	1
            $table->string('elasticidadp',100)->nullable();// EPIEL_D	Character	100
            $table->unsignedTinyInteger('textura')->default('1');// TEXT_PIEL	Numeric	1
            $table->string('texturap',100)->nullable();// TPIEL_D	Character	100
            $table->unsignedTinyInteger('dolor')->default('1');// DOL_PAL	Numeric	1
            $table->unsignedTinyInteger('coloracion')->default('1');// COL_PIEL	Numeric	1
            $table->string('coloracionotr',100)->nullable();// CPIELD	Character	100
            $table->unsignedTinyInteger('cicatrices')->default('1');// CICA_PIEL	Numeric	1
            $table->string('cicatricesotr',100)->nullable();// CIPIELD	Character	100
            $table->unsignedTinyInteger('tatuajes')->default('2');// TATU_PIEL	Numeric	1
            $table->string('tatuajesd',100)->nullable();// TPIELD	Character	100
            $table->unsignedTinyInteger('tumor')->default('1');// TUMOR	Numeric	1
            $table->string('tumorotr',100)->nullable();// TUM_OTR	Character	100
            $table->unsignedTinyInteger('edema')->default('1');// EDEMA	Numeric	1
            $table->string('edemaotr',100)->nullable();// OEDEMA	Character	100
            $table->unsignedTinyInteger('nikolski')->default('2');// NIKOLSKI	Numeric	1
            $table->unsignedTinyInteger('wood')->default('3');// WOOD	Numeric	1
            $table->unsignedTinyInteger('dermatofitos')->default('3');// DERMATOFITOS	Numeric	1
            $table->string('recomendaciones')->default('CONTROL DERMATOLÓGICO ANUAL');
            $table->string('conclusion')->default('NO PRESENTA ENFERMEDADES DERMATOLÓGICAS');
            $table->string('resultado',1)->default('0');
            $table->unsignedBigInteger('doctor_id')->nullable();
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
        Schema::dropIfExists('exadermas');
    }
}
