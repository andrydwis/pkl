<?php

namespace App\Mail;

use App\Models\RehabilitasiInstansi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RehabilitasiInstansiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $rehabilitasiInstansi;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
        $this->rehabilitasiInstansi = $rehabilitasiInstansi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.template')->with([
            'type' => 'Rehabilitasi Instansis',
            'nama_lengkap' => $this->rehabilitasiInstansi->nama_lengkap
        ]);;
    }
}
