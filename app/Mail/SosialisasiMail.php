<?php

namespace App\Mail;

use App\Models\Sosialisasi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SosialisasiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sosialisasi;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Sosialisasi $sosialisasi)
    {
        //
        $this->sosialisasi = $sosialisasi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.template')->with([
            'type' => 'Sosialisasi',
            'nama_lengkap' => $this->sosialisasi->nama_pemohon
        ]);;
    }
}
