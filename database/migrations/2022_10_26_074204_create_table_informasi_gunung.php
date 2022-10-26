<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInformasiGunung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_gunung', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bentuk')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('letusan_terakhir')->nullable();
            $table->string('geolokasi')->nullable();
            $table->string('negara');
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
        Schema::dropIfExists('informasi_gunung');
    }
}
