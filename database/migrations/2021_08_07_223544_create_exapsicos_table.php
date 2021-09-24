<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExapsicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exapsicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->string('motivo')->default('EVALUACIÓN PSICOLÓGICA OCUPACIONAL');
            $table->string('hisfamiliar')->nullable();
            $table->string('accidentes')->nullable();
            $table->string('habitos')->nullable();
            $table->string('otros')->nullable();
            $table->unsignedTinyInteger('presentacion')->default(1);
            $table->unsignedTinyInteger('postura')->default(1);
            $table->unsignedTinyInteger('disc_ritmo')->default(3);
            $table->unsignedTinyInteger('disc_tono')->default(2);
            $table->unsignedTinyInteger('disc_articula')->default(2);
            $table->unsignedTinyInteger('ori_tiempo')->default(1);
            $table->unsignedTinyInteger('ori_espacio')->default(1);
            $table->unsignedTinyInteger('ori_persona')->default(1);
            $table->string('lucido',50)->default('ADECUADO');
            $table->string('pensamiento',50)->default('COHERENTE');
            $table->string('percepcion',50)->default('ADECUADO');
            $table->unsignedTinyInteger('memoria')->default('3');
            $table->unsignedTinyInteger('inteligencia')->default('4');
            $table->string('visomotriz',50)->default('ADECUADO');
            $table->string('apetito')->default('ADECUADO');
            $table->string('sueño')->default('NO PRESENTA TRANSTORNOS DE SUEÑO');
            $table->string('personalidad')->default('SOCIABLE, ESTABLE, SIN PSICOPATÍAS');
            $table->string('afectividad')->default('ESTABLE');
            $table->string('sexual')->default('NORMAL');
            $table->string('pje_mips',3)->nullable();
            $table->string('pje_mps',3)->nullable();
            $table->string('pje_luria',3)->nullable();
            $table->string('pje_eae',3)->nullable();
            $table->string('pje_bumout',3)->nullable();
            $table->string('pje_clilab',3)->nullable();
            $table->string('pje_conductores',3)->nullable();
            $table->string('pje_wais',3)->nullable();
            $table->string('pje_tbenton',3)->nullable();
            $table->string('pje_tbender',3)->nullable();
            $table->string('pje_iazung',3)->nullable();
            $table->string('pje_idzung',3)->nullable();
            $table->string('pje_wechsler',3)->nullable();
            $table->unsignedTinyInteger('dfinteligencia_ana')->default('1');
            $table->string('dfinteligencia_nivel',20)->default('PROMEDIO');
            $table->text('dfinteligencia_carac')->nullable();
            $table->unsignedTinyInteger('dfpersonalidad_ana')->default('1');
            $table->string('dfpersonalidad_nivel',20)->default('EQUILIBRADA');
            $table->text('dfpersonalidad_carac')->nullable();
            $table->unsignedTinyInteger('dfansiedad_ana')->default('1');
            $table->string('dfansiedad_nivel',20)->default('MEDIA');
            $table->text('dfansiedad_carac')->nullable();
            $table->unsignedTinyInteger('dfpatologias_ana')->default('1');
            $table->string('dfpatologias_nivel',20)->default('AUSENTES');
            $table->text('dfpatologias_carac')->nullable();
            $table->text('conc_congnitiva')->nullable();
            $table->text('conc_emocional')->default('ESTABLE');
            $table->string('recomendaciones')->nullable();
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
        Schema::dropIfExists('exapsicos');
    }
}
