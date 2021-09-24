<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaekgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exaekgs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->string('ritmo',100)->default('SINUSAL');
            $table->string('frecuencia',8)->nullable();
            $table->string('pr',8)->nullable();
            $table->string('qrs',8)->nullable();
            $table->string('qt',8)->nullable();
            $table->string('eje',8)->nullable();
            $table->string('conclusion',100)->default('MORFOLOGÍA NORMAL');
            $table->string('comentario')->default('NINGUNO');
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
        Schema::dropIfExists('exaekgs');
    }
}
