<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('medida',20)->nullable();
            $table->unsignedTinyInteger('tipo')->default(1);
            $table->string('valorref01',30)->nullable();
            $table->string('valorref02',30)->nullable();
            $table->string('metodo',20)->default('BIOQUIMICA');
            $table->unsignedTinyInteger('toxicologico')->default(1);
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
        Schema::dropIfExists('pruebas');
    }
}
