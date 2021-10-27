<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVariosToExaradiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exaradios', function (Blueprint $table) {
            $table->string('calidad',30)->default('BUENA')->after('conclusion');
            $table->string('simbolos',50)->nullable()->after('calidad');
            $table->string('vertice',50)->default('SIN ALTERACIONES')->after('simbolos');
            $table->string('cphilios',50)->default('SIN ALTERACIONES')->after('vertice');
            $table->string('cpsenos',50)->default('LIBRES')->after('cphilios');
            $table->string('cpmedia',50)->default('CONSERVADOS')->after('cpsenos');
            $table->string('silcardio',50)->default('DIAMETROS NORMALES')->after('cpmedia');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exaradios', function (Blueprint $table) {
            $table->dropColumn('calidad');
            $table->dropColumn('simbolos');
            $table->dropColumn('vertice');
            $table->dropColumn('cphilios');
            $table->dropColumn('cpsenos');
            $table->dropColumn('cpmedia');
            $table->dropColumn('silcardio');
        });
    }
}
