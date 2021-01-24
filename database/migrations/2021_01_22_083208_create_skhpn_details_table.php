<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkhpnDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skhpn_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skhpn_id')->constrained('skhpns')->onDelete('cascade');
            $table->integer('nomer');
            $table->integer('tahun');
            $table->string('nomer_surat')->unique();
            $table->string('hasil_tes');
            $table->string('dast_10');
            $table->date('tanggal_terbit');
            $table->foreignId('kepala_bnn_id')->nullable()->constrained('kepala_bnn_users')->onDelete('set null');
            $table->foreignId('dokter_pemeriksa_id')->nullable()->constrained('dokter_pemeriksa_users')->onDelete('set null');
            $table->foreignId('petugas_pemeriksa_id')->nullable()->constrained('petugas_pemeriksa_users')->onDelete('set null');
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
        Schema::dropIfExists('skhpn_details');
    }
}
