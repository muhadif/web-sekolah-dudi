<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDudiKompetensiPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dudi_kompetensi_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedBigInteger('dudi_id');
            $table->unsignedBigInteger('bidang_pekerjaan');
            $table->longText('spesifikasi');
            $table->unsignedBigInteger('jenjang_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dudi_kompetensi_pekerjaan');
    }
}
