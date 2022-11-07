<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToDataKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_kecamatan', function (Blueprint $table) {
            $table->unsignedBigInteger('datakota_id')->after('id');
            $table->foreign('datakota_id')->references('id')->on('data_kota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_kecamatan', function (Blueprint $table) {
            //
        });
    }
}
