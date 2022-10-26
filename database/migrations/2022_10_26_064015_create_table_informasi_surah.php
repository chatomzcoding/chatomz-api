<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInformasiSurah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_surah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('arti');
            $table->string('asma');
            $table->string('type');
            $table->string('audio');
            $table->integer('ayat');
            $table->integer('nomor');
            $table->integer('rukuk');
            $table->integer('urut');
            $table->text('keterangan');
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
        Schema::dropIfExists('informasi_surah');
    }
}
