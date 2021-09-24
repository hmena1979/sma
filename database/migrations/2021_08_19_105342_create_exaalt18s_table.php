<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaalt18sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exaalt18s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->unsignedTinyInteger('arm01')->default(2);// FOB_MIE	Numeric
            $table->unsignedTinyInteger('arm02')->default(2);// EPI_ENFER	Numeric
            $table->unsignedTinyInteger('arm03')->default(2);// ALCOHOL	Numeric
            $table->unsignedTinyInteger('arm04')->default(2);// ENF_PSI	Numeric
            $table->unsignedTinyInteger('arm05')->default(2);// DIAB_MELI	Numeric
            $table->unsignedTinyInteger('arm06')->default(2);// MIGRAÑA	Numeric
            $table->unsignedTinyInteger('arm07')->default(2);// INS_CARD	Numeric
            $table->unsignedTinyInteger('arm08')->default(2);// CRIS_ASM	Numeric
            $table->unsignedTinyInteger('arm09')->default(2);// HIP_ART	Numeric
            $table->unsignedTinyInteger('arm10')->default(2);// HIPO_ACU	Numeric
            $table->unsignedTinyInteger('arm11')->default(2);// ALT_VISUAL	Numeric
            $table->unsignedTinyInteger('arm12')->default(2);// DECL_INAPTO	Numeric
            $table->unsignedTinyInteger('aep01')->default(2);// RESFRIO	Numeric
            $table->unsignedTinyInteger('aep02')->default(2);// VERTIGOS	Numeric
            $table->unsignedTinyInteger('aep03')->default(2);// LICOR24	Numeric
            $table->unsignedTinyInteger('aep04')->default(2);// CEFALEAS	Numeric
            $table->unsignedTinyInteger('ef01')->default(2);// LIM_FUER	Numeric
            $table->unsignedTinyInteger('ef02')->default(2);// ALT_EQUI	Numeric
            $table->unsignedTinyInteger('ef03')->default(2);// ANOR_MARCHA	Numeric
            $table->unsignedTinyInteger('ef04')->default(2);// ANOR_FUER	Numeric
            $table->unsignedTinyInteger('ef05')->default(2);// LENG_ANORM	Numeric
            $table->unsignedTinyInteger('ef06')->default(2);// ALT_COOR	Numeric
            $table->unsignedTinyInteger('ef07')->default(2);// PRES_NIST	Numeric
            $table->unsignedTinyInteger('ef08')->default(2);// ANOR_OCU	Numeric
            $table->unsignedTinyInteger('ef09')->default(2);// PUP_CIRLA	Numeric
            $table->unsignedTinyInteger('ef10')->default(2);// ASI_FACIAL	Numeric
            $table->string('conclusion',100)->default('APTO PARA TRABAJAR ENCIMA DE LOS 1.8 METROS');// CONCLUSION	Character
            $table->string('desde',20)->nullable();// DESDE	Character
            $table->string('hasta',20)->nullable();// HASTA	Character
            $table->string('para',50)->nullable();// PARAC	Character
            $table->string('restriccion',100)->default('NINGUNA');// RESTRICCION	Character
            $table->unsignedTinyInteger('lente')->default(2);// USO_LENTE	Numeric
            $table->unsignedTinyInteger('audifono')->default(2);// USO_AUDIF	Numeric
            $table->string('observacion',100)->default('NINGUNA');
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
        Schema::dropIfExists('exaalt18s');
    }
}
