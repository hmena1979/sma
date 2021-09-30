<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedTinyInteger('principal')->default(2);
            $table->string('direccion')->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('celular',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('aud_marca',30)->nullable();
            $table->string('aud_modelo',20)->nullable();
            $table->string('aud_calibra',20)->nullable();
            $table->string('departamento',2)->nullable();//DEPARTAMENTO	Character	20
            $table->string('provincia',4)->nullable();//PROVINCIA	Character	20
            $table->string('ubigeo',6)->nullable();//DISTRITO	Character	20            
            $table->unsignedTinyInteger('activo')->default(1);
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
        Schema::dropIfExists('sedes');
    }
}
