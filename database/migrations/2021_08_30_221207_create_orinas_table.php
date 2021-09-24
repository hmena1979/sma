<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->string('reaccion',5)->nullable();// REACCION	Character	30
            $table->string('color',15)->default('AMARILLO');// COLOR	Character	30
            $table->unsignedTinyInteger('aspecto_id')->default(1);// ASPECTO	Character	2
            $table->string('densidad',10)->nullable();// DENSIDAD	Character	10
            $table->string('olor',15)->default('SUIGENERIS');// OLOR	Character	30
            $table->unsignedTinyInteger('glucosa')->default(2);// GLUCOSA	Character	10
            $table->unsignedTinyInteger('proteinas')->default(2);// PROTEINAS	Character	10
            $table->unsignedTinyInteger('nitritos')->default(2);// NITRITOS	Character	10
            $table->unsignedTinyInteger('pbiliares')->default(2);// PBILIARES	Character	10
            $table->unsignedTinyInteger('thevenon')->default(2);// THEVENON	Character	10
            $table->unsignedTinyInteger('urobilinogeno')->default(2);// UROBILINOGEN..	Character	10
            $table->unsignedTinyInteger('cetonas')->default(2);// CETONAS	Character	10
            $table->string('leucocitos',10)->nullable();// LEUCOCITOS	Character	30
            $table->unsignedTinyInteger('piocitos')->default(2);// PIOCITOS	Character	10
            $table->string('hematies',10)->nullable();// HEMATIES	Character	30
            $table->unsignedTinyInteger('bacteria_id')->default(1);// BACTERIAS	Character	2
            $table->string('epiteliales',15)->default('ESCASAS');// EPITELIALES	Character	10
            $table->unsignedTinyInteger('cristales_id')->default(1);// CRISTALES	Character	2
            $table->unsignedTinyInteger('ccristales_id')->default(1);// CANT_CRIS	Character	2
            $table->string('otrcristal',50)->nullable();// OTR_CRIS	Character	50
            $table->unsignedTinyInteger('otr1_id')->default(1);// OTR1	Character	2
            $table->string('otrdet1',15)->nullable();// OTR1_DET	Character	10
            $table->unsignedTinyInteger('otrcant1_id')->default(1);// OTR1_CAN	Character	2
            $table->unsignedTinyInteger('otr2_id')->default(1);// OTR2	Character	2
            $table->string('otrdet2',15)->nullable();// OTR2_DET	Character	10
            $table->unsignedTinyInteger('otrcant2_id')->default(1);// OTR2_CAN	Character	2
            $table->unsignedTinyInteger('otr3_id')->default(1);// OTR3	Character	2
            $table->string('otrdet3',15)->nullable();// OTR3_DET	Character	10
            $table->unsignedTinyInteger('otrcant3_id')->default(1);// OTR3_CAN	Character	2
            $table->string('observaciones')->default('NINGUNA');// OBSERVA	Character	250            
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
        Schema::dropIfExists('orinas');
    }
}
