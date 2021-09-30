<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrocultivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urocultivos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->string('leucocitos',10)->nullable();
            $table->string('hematies',10)->nullable();
            $table->unsignedTinyInteger('cepiteliales')->default(1);
            $table->unsignedTinyInteger('germenes')->default(1);
            $table->string('cristales',20)->default('Urato amorfo');
            $table->unsignedTinyInteger('ccristales')->default(1);
            $table->unsignedTinyInteger('otros01')->default(1);
            $table->unsignedTinyInteger('otrcantidad01')->default(1);
            $table->unsignedTinyInteger('otros02')->default(1);
            $table->unsignedTinyInteger('otrcantidad02')->default(1);
            $table->unsignedTinyInteger('otros03')->default(1);
            $table->unsignedTinyInteger('otrcantidad03')->default(1);
            $table->unsignedTinyInteger('c')->default(2);
            $table->unsignedTinyInteger('germen_id')->default(1);// GER_AIS	Character	2
            $table->string('rcolonias',20)->default(90000);
            $table->unsignedTinyInteger('ant01')->default(1);
            $table->unsignedTinyInteger('ant02')->default(1);
            $table->unsignedTinyInteger('ant03')->default(1);
            $table->unsignedTinyInteger('ant04')->default(1);
            $table->unsignedTinyInteger('ant05')->default(1);
            $table->unsignedTinyInteger('ant06')->default(1);
            $table->unsignedTinyInteger('ant07')->default(1);
            $table->unsignedTinyInteger('ant08')->default(1);
            $table->unsignedTinyInteger('ant09')->default(1);
            $table->unsignedTinyInteger('ant11')->default(1);
            $table->unsignedTinyInteger('ant10')->default(1);
            $table->unsignedTinyInteger('ant12')->default(1);
            $table->unsignedTinyInteger('ant13')->default(1);
            $table->unsignedTinyInteger('ant14')->default(1);
            $table->unsignedTinyInteger('ant15')->default(1);
            $table->unsignedTinyInteger('ant16')->default(1);
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
        Schema::dropIfExists('urocultivos');
    }
}
