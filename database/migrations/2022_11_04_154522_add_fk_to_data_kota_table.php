<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToDataKotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_kota', function (Blueprint $table) {
            $table->unsignedBigInteger('dataprovinsi_id')->after('id');
            $table->foreign('dataprovinsi_id')->references('id')->on('data_provinsi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_kota', function (Blueprint $table) {
            //
        });
    }
}
