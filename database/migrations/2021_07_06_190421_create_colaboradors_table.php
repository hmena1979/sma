<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradors', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',5)->nullable();//
            $table->string('apellido',50);//APELLIDO	Character	50
            $table->string('nombre',50);//NOMBRE	Character	50
            $table->string('nombres');//NOMBRES	Character	100
            $table->date('fecnac')->nullable();//FEC_NAC	Date	8
            $table->string('sexo_id',1)->default('M');
            $table->string('tipdoc_id',1)->default('1');//TIP_DOC	Character	2
            $table->string('numdoc',15);//NUM_DOC	Character	10
            $table->string('domicilio')->nullable();//DOMICILIO	Character	100
            $table->string('departamento',2)->nullable();//DEPARTAMENTO	Character	20
            $table->string('provincia',4)->nullable();//PROVINCIA	Character	20
            $table->string('ubigeo',6)->nullable();//DISTRITO	Character	20
            $table->integer('residencia')->default(1);//RESIDENCIA	Numeric	1
            $table->string('lugnac',50)->nullable();//LUG_NAC	Character	100
            $table->string('tieresi',10)->nullable();//TIE_RESI	Character	10
            $table->string('nacionalidad',30)->nullable();//NACIONALIDAD	Character	30
            $table->string('email',50)->nullable();//CORREO	Character	30
            $table->string('telefono',30)->nullable();//TELEFONO	Character	20
            $table->string('estciv_id',1)->nullable();//EST_CIV	Character	1
            $table->string('gradinst_id',2)->default('01');//GRAD_INST	Character	2
            $table->string('numhijos',2)->nullable(); //NUM_HIJOS	Numeric	2
            $table->string('numdepend',2)->nullable();//NUM_DEP	Numeric	2
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
        Schema::dropIfExists('colaboradors');
    }
}
