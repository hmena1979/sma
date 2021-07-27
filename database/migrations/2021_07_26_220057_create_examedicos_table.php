<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examedicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');//FECHA	Date
            $table->string('anamnesis')->nullable();// ANAMNESIS	Character
            $table->string('talla',5)->nullable();// TALLA	Character
            $table->string('peso',5)->nullable();// PESO	Character
            $table->string('imc',6)->nullable();// IMC	Character
            $table->string('pabdominal',3)->nullable();// PER_ABD	Character
            $table->string('fresp',3)->nullable();// FRESP	Character
            $table->string('fcard',3)->nullable();// FCARD	Character
            $table->string('pa',7)->nullable();// PA	Character
            $table->string('pasisto',3)->nullable();// PA_SISTO	Character
            $table->string('padisto',3)->nullable();// PA_DISI	Character
            $table->string('temperatura',5)->nullable();// TEMPERATURA	Character
            $table->string('cintura',3)->nullable();// CINTURA	Character
            $table->string('cadera',3)->nullable();// CADERA	Character
            $table->string('torax',3)->nullable();// TORAX	Character
            $table->string('toraxesp',3)->nullable();// TORAX_ESP	Character
            $table->string('sato2',2)->nullable();// SAT_02	Character
            $table->string('otros')->nullable();// OTROS	Character
            $table->string('ectoscopia')->nullable();// ECTOSCOPIA	Character
            $table->string('estmental')->nullable();// EST_MENTAL	Character
            $table->text('hallazgos')->nullable();
            $table->unsignedTinyInteger('manicarga')->default(1);
            $table->unsignedTinyInteger('postura')->default(1);
            $table->text('movrep')->nullable();
            $table->string('pertiempo',20)->default('8 HORAS');
            $table->text('cuestionario')->nullable();



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
        Schema::dropIfExists('examedicos');
    }
}
