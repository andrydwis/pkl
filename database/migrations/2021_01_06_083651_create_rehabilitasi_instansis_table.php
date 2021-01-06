<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRehabilitasiInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rehabilitasi_instansis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap_pelapor');
            $table->string('nama_instansi');
            $table->text('alamat_instansi');
            $table->string('nomor_telepon');
            $table->integer('jumlah_yang_dicurigai');
            $table->text('jenis_penyalahgunaan');
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
        Schema::dropIfExists('rehabilitasi_instansis');
    }
}
