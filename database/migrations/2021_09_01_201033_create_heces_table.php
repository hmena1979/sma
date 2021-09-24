<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->unsignedTinyInteger('muestra_id')->default(2);// 4	MUESTRA	Character	2
            $table->string('examen')->default('HECES FUNCIONAL');// 4	MUESTRA	Character	2
            $table->string('consistencia',20)->nullable();// 5	CONSISTENCIA	Character	30
            $table->string('color',20)->nullable();// 6	COLOR	Character	30
            $table->string('olor',20)->nullable();// 7	OLOR	Character	30
            $table->string('mucus',20)->nullable();// 8	MUCUS	Character	30
            $table->string('reaccion',20)->nullable();// 9	REACCION	Character	30
            $table->string('sangre',20)->default('NEGATIVO');// 10	SANGRE	Character	30
            $table->string('thevenon',20)->default('NEGATIVO');// 11	THEVENON	Character	30
            $table->string('sreductoras',20)->default('NEGATIVO');// 12	SUS_REDUC	Character	30
            $table->string('cepiteliales',20)->default('NEGATIVO');// 13	CEL_EPIT	Character	30
            $table->string('hematies',20)->default('NEGATIVO');// 14	HEMATIES	Character	30
            $table->string('leucocitos',20)->default('NEGATIVO');// 15	LEUCOCITOS	Character	30
            $table->string('fond',20)->default('NEGATIVO');// 16	FIB_ORG	Character	30
            $table->string('mond',20)->default('NEGATIVO');// 17	MAT_ORG	Character	30
            $table->string('vlipidas',20)->default('NEGATIVO');// 18	VES_LIP	Character	30
            $table->string('levaduras',20)->default('NEGATIVO');// 19	LEVADURAS	Character	30
            $table->unsignedTinyInteger('parasito1')->default(1);// 20	PARAS1	Character	2
            $table->unsignedTinyInteger('dparasito1')->default(1);// 21	DPARA1	Character	2
            $table->unsignedTinyInteger('parasito2')->default(1);// 22	PARAS2	Character	2
            $table->unsignedTinyInteger('dparasito2')->default(1);// 23	DPARA2	Character	2
            $table->unsignedTinyInteger('parasito3')->default(1);// 24	PARAS3	Character	2
            $table->unsignedTinyInteger('dparasito3')->default(1);// 25	DPARA3	Character	2
            $table->unsignedTinyInteger('parasito4')->default(1);// 26	PARAS4	Character	2
            $table->unsignedTinyInteger('dparasito4')->default(1);// 27	DPARA4	Character	2
            $table->unsignedTinyInteger('parasito5')->default(1);// 28	PARAS5	Character	2
            $table->unsignedTinyInteger('dparasito5')->default(1);// 29	DPARA5	Character	2            
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
        Schema::dropIfExists('heces');
    }
}
