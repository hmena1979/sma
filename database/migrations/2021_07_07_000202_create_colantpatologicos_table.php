<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColantpatologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colantpatologicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('colaborador_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('alergias',20)->nullable();//ALERGIAS	Character	20
            $table->string('diabetes',20)->nullable();//DIABETES	Character	20
            $table->string('tbc',20)->nullable();//TBC	Character	20
            $table->string('hepatitis',20)->nullable();//HEPATITISB	Character	20
            $table->string('asma',20)->nullable();//ASMA	Character	20
            $table->string('hta',20)->nullable();//HTA	Character	20
            $table->string('its',20)->nullable();//ITS	Character	20
            $table->string('tifoidea',20)->nullable();//TIFOIDEA	Character	20
            $table->string('bronquitis',20)->nullable();//BRONQUITIS	Character	20
            $table->string('neoplasia',20)->nullable();//NEOPLASIA	Character	20
            $table->string('convulsion',20)->nullable();//CONVULSIONES	Character	20
            $table->string('intoxicacion',20)->nullable();//INTOXICACION..	Character	20
            $table->string('quemadura',100)->nullable();//QUEMADURAS	Character	100
            $table->string('cirujia',100)->nullable();//CIRUGIAS	Character	100
            $table->string('otros',100)->nullable();//OTROS	Character	100
            $table->string('alcoh_tipo',20)->nullable();//ALCOH_TPO	Character	20
            $table->string('alcoh_cant',20)->nullable();//ALCOH_CANT	Character	20
            $table->string('alcoh_frec',20)->nullable();//ALCOH_FREC	Character	20
            $table->string('tabac_tipo',20)->nullable();//TABAC_TPO	Character	20
            $table->string('tabac_cant',20)->nullable();//TABAC_CANT	Character	20
            $table->string('tabac_frec',20)->nullable();//TABAC_FREC	Character	20
            $table->string('droga_tipo',20)->nullable();//DROGA_TPO	Character	20
            $table->string('droga_cant',20)->nullable();//DROGA_CANT	Character	20
            $table->string('droga_frec',20)->nullable();//DROGA_FREC	Character	20
            $table->string('medic_tipo',20)->nullable();//MEDIC_TPO	Character	50
            $table->string('medic_cant',20)->nullable();//MEDIC_CANT	Character	20
            $table->string('medic_frec',20)->nullable();//MEDIC_FREC	Character	20

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
        Schema::dropIfExists('colantpatologicos');
    }
}
