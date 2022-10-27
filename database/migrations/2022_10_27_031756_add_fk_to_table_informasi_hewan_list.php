<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToTableInformasiHewanList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informasi_hewan_list', function (Blueprint $table) {
            $table->unsignedBigInteger('informasihewan_id')->after('id');
            $table->foreign('informasihewan_id')->references('id')->on('informasi_hewan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informasi_hewan_list', function (Blueprint $table) {
            //
        });
    }
}
