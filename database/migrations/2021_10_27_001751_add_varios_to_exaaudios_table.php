<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVariosToExaaudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exaaudios', function (Blueprint $table) {
            $table->string('od500',5)->nullable()->after('conclusion');
            $table->string('od1000',5)->nullable()->after('od500');
            $table->string('od2000',5)->nullable()->after('od1000');
            $table->string('od3000',5)->nullable()->after('od2000');
            $table->string('od4000',5)->nullable()->after('od3000');
            $table->string('od6000',5)->nullable()->after('od4000');
            $table->string('od8000',5)->nullable()->after('od6000');
            $table->string('oi500',5)->nullable()->after('od8000');
            $table->string('oi1000',5)->nullable()->after('oi500');
            $table->string('oi2000',5)->nullable()->after('oi1000');
            $table->string('oi3000',5)->nullable()->after('oi2000');
            $table->string('oi4000',5)->nullable()->after('oi3000');
            $table->string('oi6000',5)->nullable()->after('oi4000');
            $table->string('oi8000',5)->nullable()->after('oi6000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exaaudios', function (Blueprint $table) {
            $table->dropColumn('od500');
            $table->dropColumn('od1000');
            $table->dropColumn('od2000');
            $table->dropColumn('od3000');
            $table->dropColumn('od4000');
            $table->dropColumn('od6000');
            $table->dropColumn('od8000');
            $table->dropColumn('oi500');
            $table->dropColumn('oi1000');
            $table->dropColumn('oi2000');
            $table->dropColumn('oi3000');
            $table->dropColumn('oi4000');
            $table->dropColumn('oi6000');
            $table->dropColumn('oi8000');
        });
    }
}
