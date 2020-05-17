<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('tahun');
            $table->bigInteger('jumlah_karyawan');
            $table->unsignedBigInteger('jenjang_id');
            $table->unsignedBigInteger('bidang_pekerjaan_id');
            $table->unsignedBigInteger('dudi_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
