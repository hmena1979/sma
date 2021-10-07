<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRestriccionesToExaoftalmosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exaoftalmos', function (Blueprint $table) {
            $table->string('restricciones',100)->default('NINGUNA')->after('recomendaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exaoftalmos', function (Blueprint $table) {
            $table->dropColumn('restricciones');
        });
    }
}
