<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSosialisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosialisasis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sosialisasi');
            $table->string('nama_penyelenggara');
            $table->string('tanggal');
            $table->string('jam_pukul');
            $table->text('tempat');
            $table->string('nama_penanggung_jawab');
            $table->string('no_hp_penanggung_jawab');
            $table->integer('jumlah_peserta');
            $table->text('keterangan');
            $table->string('lampiran_surat_undangan');
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
        Schema::dropIfExists('sosialisasis');
    }
}
