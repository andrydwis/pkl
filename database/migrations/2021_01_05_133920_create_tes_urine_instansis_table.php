<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesUrineInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tes_urine_instansis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('nama_pemohon');
            $table->text('alamat_instansi');
            $table->string('tanggal_pelaksanaan_pemeriksaan');
            $table->string('waktu_pelaksanaan_pemeriksaan');
            $table->string('contact_person');
            $table->integer('jumlah_peserta_laki');
            $table->integer('jumlah_peserta_perempuan');
            $table->text('lokasi_pemeriksaan');
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
        Schema::dropIfExists('tes_urine_instansis');
    }
}
