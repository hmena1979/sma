<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaespirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exaespiros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->unsignedTinyInteger('covid19')->default(2);// PE01	Numeric	1
            $table->unsignedTinyInteger('pe01')->default(2);// PE01	Numeric	1
            $table->unsignedTinyInteger('pe02')->default(2);// PE02	Numeric	1
            $table->unsignedTinyInteger('pe03')->default(2);// PE03	Numeric	1
            $table->unsignedTinyInteger('pe04')->default(2);// PE04	Numeric	1
            $table->unsignedTinyInteger('pe05')->default(2);// PE05	Numeric	1
            $table->unsignedTinyInteger('pe06')->default(2);// PE06	Numeric	1
            $table->unsignedTinyInteger('pe07')->default(2);// PE07	Numeric	1
            $table->unsignedTinyInteger('pe08')->default(2);// PE08	Numeric	1
            $table->unsignedTinyInteger('pe09')->default(2);// PE09	Numeric	1
            $table->unsignedTinyInteger('pe10')->default(2);// PE10	Numeric	1
            $table->unsignedTinyInteger('pe11')->default(2);// PE11	Numeric	1
            $table->unsignedTinyInteger('pe12')->default(2);// PE12	Numeric	1
            $table->unsignedTinyInteger('pe13')->default(2);// PE13	Numeric	1
            $table->unsignedTinyInteger('pe14')->default(2);// PE14	Numeric	1
            $table->unsignedTinyInteger('pe15')->default(2);// PE15	Numeric	1
            $table->unsignedTinyInteger('pe16')->default(2);// PE16	Numeric	1
            $table->unsignedTinyInteger('pne1')->default(2);// PNE01	Numeric	1
            $table->unsignedTinyInteger('pne2')->default(2);// PNE02	Numeric	1
            $table->unsignedTinyInteger('pne3')->default(2);// PNE03	Numeric	1
            $table->unsignedTinyInteger('pne4')->default(2);// PNE04	Numeric	1
            $table->unsignedTinyInteger('pne5')->default(2);// PNE05	Numeric	1
            $table->unsignedTinyInteger('pne6')->default(2);// PNE06	Numeric	1
            $table->unsignedTinyInteger('pne7')->default(2);// PNE07	Numeric	1
            $table->unsignedTinyInteger('cantcig')->nullable();// CANT_CIG	Numeric	2
            $table->unsignedTinyInteger('etnico')->default(2);// ORI_ETNI	Numeric	1
            $table->unsignedTinyInteger('fumador')->default(2);// FUMADOR	Numeric	1
            $table->string('ultespiro',10)->nullable();
            $table->date('ultfecha')->nullable();
            $table->time('ulthora')->nullable();
            $table->string('fvc_pred',6)->nullable();// FVC_PRED	Character	3
            $table->string('fvc_edad',50)->nullable();// FVC_EDPUL	Character	100
            $table->string('fev1_pred',6)->nullable();// FEV_PRED	Character	3
            $table->string('fev1_edad',50)->nullable();// FEV_EDPUL	Character	100
            $table->string('pef_pred',6)->nullable();// PEF_PRED	Character	3
            $table->string('pef_edad',50)->nullable();// PEF_EDPUL	Character	100
            $table->string('fer_pred',6)->nullable(); // FER_PRED	Character	3
            $table->string('fer_edad',50)->nullable();// FER_EDPUL	Character	100
            $table->string('f25_pred',6)->nullable();// F25_PRED	Character	3
            $table->string('f25_edad',50)->nullable();// F25_EDPUL	Character	100
            $table->string('f50_pred',6)->nullable();// F50_PRED	Character	3
            $table->string('f50_edad',50)->nullable();// F50_EDPUL	Character	100
            $table->string('mef_pred',6)->nullable();// MEF_PRED	Character	35
            $table->string('mef_edad',50)->nullable();// MEF_EDPUL	Character	100
            $table->string('r50_pred',6)->nullable();// R50_PRED	Character	3
            $table->string('r50_edad',50)->nullable();// R50_EDPUL	Character	100
            $table->string('mvv_pred',6)->nullable();// MVV_PRED	Character	3
            $table->string('mvv_edad',50)->nullable();// MVV_EDPUL	Character	100
            $table->unsignedTinyInteger('res_espiro')->default(1);// RES_ESPIRO	Numeric	1
            $table->string('observacion')->default('NINGUNA');
            $table->string('conclusion')->default('DENTRO DE LIMITES NORMALES');
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
        Schema::dropIfExists('exaespiros');
    }
}
