<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToDataDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_desa', function (Blueprint $table) {
            $table->unsignedBigInteger('datakecamatan_id')->after('id');
            $table->foreign('datakecamatan_id')->references('id')->on('data_kecamatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_desa', function (Blueprint $table) {
            //
        });
    }
}
