<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParasitologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parasitologias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->unsignedTinyInteger('muestra_id')->default(2);// 4	MUESTRA	Character	2
            $table->string('examen')->default('HECES PARASITARIAS');// 4	MUESTRA	Character	2
            $table->unsignedTinyInteger('numero')->nullable();
            $table->unsignedTinyInteger('hp1')->default(1);
            $table->unsignedTinyInteger('dhp1')->default(1);
            $table->unsignedTinyInteger('hp2')->default(1);
            $table->unsignedTinyInteger('dhp2')->default(1);
            $table->unsignedTinyInteger('hp3')->default(1);
            $table->unsignedTinyInteger('dhp3')->default(1);
            $table->unsignedTinyInteger('ri1')->default(1);
            $table->unsignedTinyInteger('dri1')->default(1);
            $table->unsignedTinyInteger('ri2')->default(1);
            $table->unsignedTinyInteger('dri2')->default(1);
            $table->unsignedTinyInteger('ri3')->default(1);
            $table->unsignedTinyInteger('dri3')->default(1);
            $table->unsignedTinyInteger('ri4')->default(1);
            $table->unsignedTinyInteger('dri4')->default(1);
            $table->unsignedTinyInteger('ri5')->default(1);
            $table->unsignedTinyInteger('dri5')->default(1);
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
        Schema::dropIfExists('parasitologias');
    }
}
