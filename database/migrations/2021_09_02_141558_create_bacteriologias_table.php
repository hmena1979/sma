<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacteriologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacteriologias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->unsignedTinyInteger('muestra_id')->default(5);
            $table->unsignedTinyInteger('cultivo')->default(2);// CULTIVO	Numeric	1
            $table->string('colonias',20)->nullable();// REC_COL	Character	10
            $table->unsignedTinyInteger('germen_id')->default(1);// GER_AIS	Character	2
            $table->string('exadirecto',20)->default('PRUEBA DE KHO');// EXA_DIR	Character	200
            $table->string('gram',20)->nullable();// COL_GRAM	Character	200
            $table->string('ziehl',20)->nullable();// COL_ZIEHL	Character	200
            $table->unsignedTinyInteger('antbio01')->nullable();// ANTBIO01	Character	1
            $table->unsignedTinyInteger('antbio02')->nullable();// ANTBIO02	Character	1
            $table->unsignedTinyInteger('antbio03')->nullable();// ANTBIO03	Character	1
            $table->unsignedTinyInteger('antbio04')->nullable();// ANTBIO04	Character	1
            $table->unsignedTinyInteger('antbio05')->nullable();// ANTBIO05	Character	1
            $table->unsignedTinyInteger('antbio06')->nullable();// ANTBIO06	Character	1
            $table->unsignedTinyInteger('antbio07')->nullable();// ANTBIO07	Character	1
            $table->unsignedTinyInteger('antbio08')->nullable();// ANTBIO08	Character	1
            $table->unsignedTinyInteger('antbio09')->nullable();// ANTBIO09	Character	1
            $table->unsignedTinyInteger('antbio10')->nullable();// ANTBIO10	Character	1
            $table->unsignedTinyInteger('antbio11')->nullable();// ANTBIO11	Character	1
            $table->unsignedTinyInteger('antbio12')->nullable();// ANTBIO12	Character	1
            $table->unsignedTinyInteger('antbio13')->nullable();// ANTBIO13	Character	1
            $table->unsignedTinyInteger('antbio14')->nullable();// ANTBIO14	Character	1
            $table->unsignedTinyInteger('antbio15')->nullable();// ANTBIO15	Character	1
            $table->unsignedTinyInteger('antbio16')->nullable();// ANTBIO16	Character	1
            $table->unsignedTinyInteger('antbio17')->nullable();// ANTBIO17	Character	1
            $table->unsignedTinyInteger('antbio18')->nullable();// ANTBIO18	Character	1
            $table->unsignedTinyInteger('antbio19')->nullable();// ANTBIO19	Character	1
            $table->unsignedTinyInteger('antbio20')->nullable();// ANTBIO20	Character	1
            $table->unsignedTinyInteger('antbio21')->nullable();// ANTBIO21	Character	1
            $table->unsignedTinyInteger('antbio22')->nullable();// ANTBIO22	Character	1
            $table->unsignedTinyInteger('antbio23')->nullable();// ANTBIO23	Character	1
            $table->unsignedTinyInteger('antbio24')->nullable();// ANTBIO24	Character	1
            $table->unsignedTinyInteger('antbio25')->nullable();// ANTBIO25	Character	1
            $table->unsignedTinyInteger('antbio26')->nullable();// ANTBIO26	Character	1
            $table->unsignedTinyInteger('antbio27')->nullable();// ANTBIO27	Character	1
            $table->unsignedTinyInteger('antbio28')->nullable();// ANTBIO28	Character	1
            $table->unsignedTinyInteger('antbio29')->nullable();// ANTBIO29	Character	1
            $table->unsignedTinyInteger('antbio30')->nullable();// ANTBIO30	Character	1
            $table->unsignedTinyInteger('antbio31')->nullable();// ANTBIO31	Character	1
            $table->unsignedTinyInteger('antbio32')->nullable();// ANTBIO32	Character	1
            $table->unsignedTinyInteger('antbio33')->nullable();// ANTBIO33	Character	1
            $table->unsignedTinyInteger('antbio34')->nullable();// ANTBIO34	Character	1
            $table->unsignedTinyInteger('antbio35')->nullable();// ANTBIO35	Character	1
            $table->unsignedTinyInteger('antbio36')->nullable();// ANTBIO36	Character	1
            $table->unsignedTinyInteger('antbio37')->nullable();// ANTBIO37	Character	1
            $table->unsignedTinyInteger('antbio38')->nullable();// ANTBIO38	Character	1            
            $table->string('observaciones')->default('NINGUNA');
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
        Schema::dropIfExists('bacteriologias');
    }
}
