<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detservicio_id');
            $table->text('confidencial')->nullable();
            $table->text('dj')->nullable();
            $table->text('drogas')->nullable();
            $table->unsignedTinyInteger('novocaina')->default(2);
            $table->unsignedTinyInteger('dextrometorfano')->default(2);
            $table->unsignedTinyInteger('ibuprofeno')->default(2);
            $table->unsignedTinyInteger('naproxeno')->default(2);
            $table->unsignedTinyInteger('ranitidina')->default(2);
            $table->unsignedTinyInteger('penicilina')->default(2);
            $table->string('otros',100)->nullable();
            $table->text('examenes')->nullable();
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
        Schema::dropIfExists('informes');
    }
}
