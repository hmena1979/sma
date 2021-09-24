<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaoftalmosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exaoftalmos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');//FECHA	Date
            $table->string('antpersonal',50)->default('NINGUNO');
            $table->string('antfamiliar',50)->default('NINGUNO');
            $table->string('vc_sc_od',10)->nullable();
            $table->string('vc_sc_oi',10)->nullable();
            $table->string('vc_cc_od',10)->nullable();
            $table->string('vc_cc_oi',10)->nullable();
            $table->string('vl_sc_od',10)->nullable();
            $table->string('vl_sc_oi',10)->nullable();
            $table->string('vl_cc_od',10)->nullable();
            $table->string('vl_cc_oi',10)->nullable();
            $table->string('parpados',50)->default('NORMAL');
            $table->string('conjuntivas',50)->default('NORMAL');
            $table->string('cristalino',50)->default('NORMAL');
            $table->string('percol_od',50)->default('NORMAL');
            $table->string('percol_oi',50)->default('NORMAL');
            $table->string('fondojo_od',50)->default('N.A');
            $table->string('fondojo_oi',50)->default('N.A');
            $table->string('estereopsis_od',50)->default('N.A');
            $table->string('estereopsis_oi',50)->default('N.A');
            $table->string('tonometria_od',50)->default('N.A');
            $table->string('tonometria_oi',50)->default('N.A');
            $table->string('campimetria_od',50)->default('N.A');
            $table->string('campimetria_oi',50)->default('N.A');
            $table->unsignedTinyInteger('nictometria_od')->default(1);
            $table->unsignedTinyInteger('nictometria_oi')->default(1);
            $table->unsignedTinyInteger('deslumbramiento_od')->default(1);
            $table->unsignedTinyInteger('deslumbramiento_oi')->default(1);
            $table->unsignedTinyInteger('encandilamiento')->default('1');
            $table->string('diagnostico',100)->default('EMETROPE');
            $table->string('recomendaciones',100)->default('CONTROL OFTALMOLOGICO ANUAL');
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
        Schema::dropIfExists('exaoftalmos');
    }
}
