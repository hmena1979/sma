<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaaudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exaaudios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->string('aud_marca',30)->nullable();
            $table->string('aud_modelo',20)->nullable();
            $table->string('aud_calibra',20)->nullable();
            $table->string('tie_expo',10)->nullable();
            $table->unsignedTinyInteger('epp')->default('1');
            $table->unsignedTinyInteger('apre_ruido')->default('3');
            $table->string('tabaco',30)->nullable();
            $table->string('sermil',30)->nullable();
            $table->string('hobbies',30)->nullable();
            $table->string('expoquimico',30)->nullable();
            $table->string('infecoido',30)->nullable();
            $table->string('ototoxico',30)->nullable();
            $table->string('discoteca',30)->nullable();
            $table->string('audifono',30)->nullable();
            $table->string('arma',30)->nullable();
            $table->string('deporte',30)->nullable();
            $table->string('submarino',30)->nullable();
            $table->string('tec',30)->nullable();
            $table->string('meningitis',30)->nullable();
            $table->string('parotiditis',30)->nullable();
            $table->string('sarampion',30)->nullable();
            $table->string('otros',50)->nullable();
            $table->unsignedTinyInteger('disminucion')->default(2);
            $table->unsignedTinyInteger('otalgia')->default(2);
            $table->unsignedTinyInteger('acufenos')->default(2);
            $table->unsignedTinyInteger('mareos')->default(2);
            $table->unsignedTinyInteger('vertigos')->default(2);
            $table->unsignedTinyInteger('infeccion')->default(2);
            $table->string('otrsintomas',50)->nullable();
            $table->string('oidoder',100)->default('NORMAL');
            $table->string('oidoizq',100)->default('NORMAL');
            $table->string('au_interpreta',100)->nullable();
            $table->string('au_recomendacion',100)->default('CONTROL AUDIOMETRICO ANUAL, USO DE EPP SI EXPOSICION A RUIDO ES > 85 DB');
            $table->string('conclusion',100)->default('NORMOACUSIA BILATERAL');
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
        Schema::dropIfExists('exaaudios');
    }
}
