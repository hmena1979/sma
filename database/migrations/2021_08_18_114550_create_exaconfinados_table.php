<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaconfinadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exaconfinados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->unsignedTinyInteger('ant1')->default(2);
            $table->unsignedTinyInteger('ant2')->default(2);
            $table->unsignedTinyInteger('ant3')->default(2);
            $table->unsignedTinyInteger('ant4')->default(2);
            $table->unsignedTinyInteger('ant5')->default(2);
            $table->unsignedTinyInteger('ant6')->default(2);
            $table->unsignedTinyInteger('ant7')->default(2);
            $table->unsignedTinyInteger('ant8')->default(2);
            $table->unsignedTinyInteger('ant9')->default(2);
            $table->string('observaciones',100)->default('NINGUNA');
            $table->string('electro',100)->default('NORMAL');
            $table->string('radio',100)->default('NORMAL');
            $table->string('espiro',100)->default('NORMAL');
            $table->string('recomendaciones',100)->default('NINGUNA');
            $table->string('restriccion',100)->default('NINGUNA');
            $table->string('conclusion',100)->default('EL EVALUADO CUMPLE CON EL PERFIL A DESEMPEÑAR');
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
        Schema::dropIfExists('exaconfinados');
    }
}
