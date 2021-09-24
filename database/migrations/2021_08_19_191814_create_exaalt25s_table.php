<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaalt25sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exaalt25s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->unsignedTinyInteger('ant01')->default(2);
            $table->unsignedTinyInteger('ant02')->default(2);
            $table->unsignedTinyInteger('ant03')->default(2);
            $table->unsignedTinyInteger('ant04')->default(2);
            $table->unsignedTinyInteger('ant05')->default(2);
            $table->unsignedTinyInteger('ant06')->default(2);
            $table->unsignedTinyInteger('ant07')->default(2);
            $table->unsignedTinyInteger('ant08')->default(2);
            $table->unsignedTinyInteger('ant09')->default(2);
            $table->unsignedTinyInteger('ant10')->default(2);
            $table->unsignedTinyInteger('ant11')->default(2);
            $table->unsignedTinyInteger('ant12')->default(2);
            $table->unsignedTinyInteger('ant13')->default(2);
            $table->unsignedTinyInteger('ant14')->default(2);
            $table->unsignedTinyInteger('ant15')->default(2);
            $table->unsignedTinyInteger('ant16')->default(2);
            $table->string('medicamento',100)->nullable();
            $table->string('conclusion',100)->default('APTO PARA ASCENDER A GRANDES ALTITUDES');
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
        Schema::dropIfExists('exaalt25s');
    }
}
