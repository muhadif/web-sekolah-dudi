<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSiswaKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa_lulus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date("tahun");
            $table->unsignedBigInteger("sekolah_id");
            $table->unsignedBigInteger("bidang_studi_id");
            $table->bigInteger("jumlah");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
