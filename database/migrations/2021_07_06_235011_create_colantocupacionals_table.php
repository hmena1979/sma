<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColantocupacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colantocupacionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('colaborador_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('empresa',50)->nullable();
            $table->integer('area_id')->nullable();//AREA01
            $table->integer('puesto_id')->nullable();//OCU01
            $table->string('fecha',20)->nullable();//FCH01
            $table->string('tiempo',20)->nullable();//TIE01
            $table->integer('exposicion')->nullable();//EXPO01
            $table->integer('epp')->nullable();//EPP01
            $table->string('cretiro',20)->nullable();//CRETIRO01
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
        Schema::dropIfExists('colantocupacionals');
    }
}
