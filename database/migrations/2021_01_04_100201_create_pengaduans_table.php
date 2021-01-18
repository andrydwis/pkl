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
            $table->string('nomer_ktp');
            $table->string('nama_lengkap');
            $table->string('ttl');
            $table->text('alamat');
            $table->string('telepon');
            $table->string('pekerjaan');
            $table->string('tanggal_kejadian');
            $table->string('waktu_kejadian');
            $table->string('kategori');
            $table->text('isi_pengaduan');
            $table->string('foto_bukti_kejadian')->nullable();
            $table->enum('status', ['diajukan', 'diterima', 'ditolak']);
            $table->string('keterangan')->nullable();
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
