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
            $table->unsignedTinyInteger('alergias')->default(2);//ALERGIAS	Character	20
            $table->string('descalergias',40)->nullable();//ALERGIAS	Character	20
            $table->unsignedTinyInteger('diabetes')->default(2);//DIABETES	Character	20
            $table->unsignedTinyInteger('tbc')->default(2);//TBC	Character	20
            $table->unsignedTinyInteger('hepatitis')->default(2);//HEPATITISB	Character	20
            $table->unsignedTinyInteger('asma')->default(2);//ASMA	Character	20
            $table->unsignedTinyInteger('its')->default(2);//ITS	Character	20
            $table->unsignedTinyInteger('tifoidea')->default(2);//TIFOIDEA	Character	20
            $table->unsignedTinyInteger('bronquitis')->default(2);//BRONQUITIS	Character	20
            $table->unsignedTinyInteger('neoplasia')->default(2);//NEOPLASIA	Character	20
            $table->unsignedTinyInteger('convulsion')->default(2);//CONVULSIONES	Character	20
            $table->unsignedTinyInteger('intoxicacion')->default(2);//INTOXICACION..	Character	20
            $table->string('medicamento',100)->default('NIEGA');//MEDIC_TPO	Character	50
            $table->string('quemadura',100)->default('NIEGA');//QUEMADURAS	Character	100
            $table->string('cirugia',100)->default('NIEGA');//CIRUGIAS	Character	100
            $table->string('otros',100)->default('NIEGA');//OTROS	Character	100
            $table->string('alcohol',50)->default('NIEGA');//ALCOH_FREC	Character	20
            $table->string('tabaco',50)->default('NIEGA');//TABAC_FREC	Character	20
            $table->string('droga',50)->default('NIEGA');//DROGA_FREC	Character	20
            $table->string('antfamiliar')->default('NINGUNO');//ANT_FAM	Character	250
            $table->string('antpersonal')->default('NINGUNO');//ANT_PER	Character	250

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
