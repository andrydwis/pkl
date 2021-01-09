<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkhpnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skhpns', function (Blueprint $table) {
            $table->id();
            $table->string('nomer_ktp');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('ttl');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->text('alamat');
            $table->string('telepon');
            $table->string('pekerjaan');
            $table->string('tanggal_permohonan');
            $table->text('keperluan');
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
        Schema::dropIfExists('skhpns');
    }
}
