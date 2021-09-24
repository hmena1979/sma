<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHemogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemogramas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');// FECHA	Date	8
            $table->string('gb',10)->nullable(); // GB	Character	10
            $table->string('gr',10)->nullable();// GR	Character	10
            //$table->string('hb',10)->nullable();// HB	Character	10
            $table->string('hematocrioto',10)->nullable();// HTO	Character	10
            $table->string('vcm',10)->nullable();// VCM	Character	10
            $table->string('hcm',10)->nullable();// HCM	Character	10
            $table->string('chcm',10)->nullable();// CHCM	Character	10
            $table->string('abastonados',10)->nullable();// ABAST	Character	10
            $table->string('segmentados',10)->nullable();// SEGMENT	Character	10
            $table->string('eosinofilos',10)->nullable();// EOSIN	Character	10
            $table->string('basofilos',10)->nullable();// BASO	Character	10
            $table->string('monocitos',10)->nullable();// MONO	Character	10
            $table->string('linfocitos',10)->nullable();// LINFO	Character	10
            $table->string('metamielocitos',10)->nullable();// METAMI	Character	10
            $table->string('mielocitos',10)->nullable();// MIELOCITOS	Character	10
            $table->string('plaquetas',10)->nullable();// PLAQUETAS	Character	10
            $table->unsignedTinyInteger('observa01')->default(1);// OBS_1	Character	2
            $table->string('obscruz01',3)->nullable();// OBS1_CRUZ	Character	3
            $table->unsignedTinyInteger('observa02')->default(1);// OBS_2	Character	2
            $table->string('obscruz02',3)->nullable();// OBS2_CRUZ	Character	3
            $table->unsignedTinyInteger('observa03')->default(1);// OBS_3	Character	2
            $table->string('obscruz03',3)->nullable();// OBS3_CRUZ	Character	3
            $table->unsignedTinyInteger('observa04')->default(1);// OBS_4	Character	2
            $table->string('obscruz04',3)->nullable();// OBS4_CRUZ	Character	3
            $table->unsignedTinyInteger('observa05')->default(1);// OBS_5	Character	2
            $table->string('obscruz05',3)->nullable();// OBS5_CRUZ	Character	3
            $table->unsignedTinyInteger('otro01')->default(1);// OTR1	Character	2
            $table->string('otrdescrip01',20)->nullable();// OTR1_DES	Character	10
            $table->unsignedTinyInteger('otro02')->default(1);// OTR2	Character	2
            $table->string('otrdescrip02',20)->nullable();// OTR2_DES	Character	10
            $table->unsignedTinyInteger('otro03')->default(1);// OTR3	Character	2
            $table->string('otrdescrip03',20)->nullable();// OTR3_DES	Character	10
            $table->unsignedTinyInteger('otro04')->default(1);// OTR4	Character	2
            $table->string('otrdescrip04',20)->nullable();// OTR4_DES	Character	10
            $table->unsignedTinyInteger('otro05')->default(1);// OTR5	Character	2
            $table->string('otrdescrip05',20)->nullable();// OTR5_DES	Character	10
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
        Schema::dropIfExists('hemogramas');
    }
}
