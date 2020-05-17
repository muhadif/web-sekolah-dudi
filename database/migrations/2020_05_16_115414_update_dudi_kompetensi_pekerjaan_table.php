<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDudiKompetensiPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dudi_kompetensi_pekerjaan', function (Blueprint $table) {
            $table->renameColumn('bidang_pekerjaan', 'bidang_pekerjaan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dudi_kompetensi_pekerjaan', function (Blueprint $table) {
            $table->renameColumn('bidang_pekerjaan_id', 'bidang_pekerjaan');
        });
    }
}
