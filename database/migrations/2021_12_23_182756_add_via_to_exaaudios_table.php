<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddViaToExaaudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exaaudios', function (Blueprint $table) {
            $table->string('va500',5)->nullable()->after('oi8000');
            $table->string('va1000',5)->nullable()->after('va500');
            $table->string('va2000',5)->nullable()->after('va1000');
            $table->string('va3000',5)->nullable()->after('va2000');
            $table->string('va4000',5)->nullable()->after('va3000');
            $table->string('va6000',5)->nullable()->after('va4000');
            $table->string('va8000',5)->nullable()->after('va6000');
            $table->string('vo500',5)->nullable()->after('va8000');
            $table->string('vo1000',5)->nullable()->after('vo500');
            $table->string('vo2000',5)->nullable()->after('vo1000');
            $table->string('vo3000',5)->nullable()->after('vo2000');
            $table->string('vo4000',5)->nullable()->after('vo3000');
            $table->string('vo6000',5)->nullable()->after('vo4000');
            $table->string('vo8000',5)->nullable()->after('vo6000');
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
            $table->dropColumn('va500');
            $table->dropColumn('va1000');
            $table->dropColumn('va2000');
            $table->dropColumn('va3000');
            $table->dropColumn('va4000');
            $table->dropColumn('va6000');
            $table->dropColumn('va8000');
            $table->dropColumn('vo500');
            $table->dropColumn('vo1000');
            $table->dropColumn('vo2000');
            $table->dropColumn('vo3000');
            $table->dropColumn('vo4000');
            $table->dropColumn('vo6000');
            $table->dropColumn('vo8000');
        });
    }
}
