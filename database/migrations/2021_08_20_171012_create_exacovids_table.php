<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExacovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exacovids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha_tm')->nullable();
            $table->time('hora_tm')->nullable();
            $table->date('fecha_rec')->nullable();
            $table->time('hora_rec')->nullable();
            $table->date('fecha_val')->nullable();
            $table->time('hora_val')->nullable();
            $table->unsignedTinyInteger('examen');
            $table->unsignedTinyInteger('antigeno')->nullable();
            $table->unsignedTinyInteger('igg')->nullable();
            $table->unsignedTinyInteger('igm')->nullable();
            $table->unsignedTinyInteger('pcr')->nullable();
            $table->unsignedBigInteger('biologo_id')->nullable();
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
        Schema::dropIfExists('exacovids');
    }
}
