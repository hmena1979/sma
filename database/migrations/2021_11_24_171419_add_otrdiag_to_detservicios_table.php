<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtrdiagToDetserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detservicios', function (Blueprint $table) {
            $table->string('otrdiagocu4',100)->nullable()->after('otrdiagcie3');
            $table->unsignedTinyInteger('otrdiagpdr4')->default(1)->after('otrdiagocu4');
            $table->string('otrdiagcie4',4)->nullable()->after('otrdiagpdr4');
            $table->string('otrdiagocu5',100)->nullable()->after('otrdiagcie4');
            $table->unsignedTinyInteger('otrdiagpdr5')->default(1)->after('otrdiagocu5');
            $table->string('otrdiagcie5',4)->nullable()->after('otrdiagpdr5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detservicios', function (Blueprint $table) {
            $table->dropColumn('otrdiagocu4');
            $table->dropColumn('otrdiagpdr4');
            $table->dropColumn('otrdiagcie4');
            $table->dropColumn('otrdiagocu5');
            $table->dropColumn('otrdiagpdr5');
            $table->dropColumn('otrdiagcie5');
        });
    }
}
