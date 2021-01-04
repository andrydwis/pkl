<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->string('lampiran_identitas');
            $table->string('pekerjaan');
            $table->string('alamat_instansi');
            $table->string('telepon_instansi');
            $table->string('tanggal_kejadian');
            $table->string('waktu_kejadian');
            $table->text('keterangan')->nullable();
            $table->string('lampiran_pendukung')->nullable();
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
        Schema::dropIfExists('pengaduans');
    }
}
