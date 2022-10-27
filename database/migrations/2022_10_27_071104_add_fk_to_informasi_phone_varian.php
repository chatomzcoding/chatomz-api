<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToInformasiPhoneVarian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informasi_phone_varian', function (Blueprint $table) {
            $table->unsignedBigInteger('informasiphone_id')->after('id');
            $table->foreign('informasiphone_id')->references('id')->on('informasi_phone')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informasi_phone_varian', function (Blueprint $table) {
            //
        });
    }
}
