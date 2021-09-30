<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColantfamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colantfamiliars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colaborador_id');
            // $table->foreignId('colaborador_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('padre',20)->default('SANO');//PADRE	Character	15
            $table->string('madre',20)->default('SANO');//MADRE	Character	15
            $table->string('hermano',20)->default('SANO');//HERMANO	Character	15
            $table->string('esposo',20)->default('SANO');//ESPOSO	Character	15
            $table->string('hijo_viv',2)->nullable();//HIJO_VIV	Numeric	2
            $table->string('hijo_fall',2)->nullable();//HIJO_FALL	Numeric	2
            $table->string('enfact1',30)->nullable();//EA01	Character	30
            $table->unsignedTinyInteger('asoctrab1')->default(2);//EA_ASOC01	Numeric	1
            $table->string('anio1',4)->nullable();//EA_AÑO01	Character	4
            $table->string('diasdesc1',20)->nullable();//EA_DIADES01	Character	20
            $table->string('enfact2',30)->nullable();//EA01	Character	30
            $table->unsignedTinyInteger('asoctrab2')->default(2);//EA_ASOC01	Numeric	1
            $table->string('anio2',4)->nullable();//EA_AÑO01	Character	4
            $table->string('diasdesc2',20)->nullable();//EA_DIADES01	Character	20
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
        Schema::dropIfExists('colantfamiliars');
    }
}
