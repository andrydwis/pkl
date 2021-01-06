<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRehabilitasiPribadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rehabilitasi_pribadis', function (Blueprint $table) {
            $table->id();
            $table->string('nomer_ktp');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('jenis_penyalahgunaan');
            $table->string('hubungan_dengan_penyalahguna');
            $table->string('rencana_kedatangan_ke_klinik');
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
        Schema::dropIfExists('rehabilitasi_pribadis');
    }
}
