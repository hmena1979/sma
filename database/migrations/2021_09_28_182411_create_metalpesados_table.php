<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetalpesadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metalpesados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->string('cobre_met',20)->nullable();
            $table->string('cobre_res',10)->nullable();
            $table->string('plomo_met',20)->nullable();
            $table->string('plomo_res',10)->nullable();
            $table->string('cadmio_met',20)->nullable();
            $table->string('cadmio_res',10)->nullable();
            $table->string('zinc_met',20)->nullable();
            $table->string('zinc_res',10)->nullable();
            $table->string('mercurio_met',20)->nullable();
            $table->string('mercurio_res',10)->nullable();
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
        Schema::dropIfExists('metalpesados');
    }
}
