<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInformasiHewanList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_hewan_list', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_latin')->nullable();
            $table->string('slug');
            $table->text('keterangan');
            $table->text('gambar');
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
        Schema::dropIfExists('informasi_hewan_list');
    }
}
