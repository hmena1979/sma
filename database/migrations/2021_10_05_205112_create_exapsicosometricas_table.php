<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExapsicosometricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exapsicosometricas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->string('clase',5)->nullable();
            $table->string('tpunt_aciertos',6)->nullable();
            $table->string('tpunt_errores',6)->nullable();
            $table->string('tpunt_aprobado',1)->default('0');
            $table->string('tpalan_permanencia',6)->nullable();
            $table->string('tpalan_tiempo',6)->nullable();
            $table->string('tpalan_aprobado',1)->default('0');
            $table->string('treac_intentos',6)->nullable();
            $table->string('treac_tiempo',6)->nullable();
            $table->string('treac_aprobado',1)->default('0');
            $table->string('observaciones')->default('NINGUNA');
            $table->string('aprobado',1)->default('0');
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
        Schema::dropIfExists('exapsicosometricas');
    }
}
