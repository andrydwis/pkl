<?php

namespace App\Mail;

use App\Models\TesUrineInstansi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TesUrineInstansiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $tesUrineInstansi;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(TesUrineInstansi $tesUrineInstansi)
    {
        //
        $this->tesUrineInstansi = $tesUrineInstansi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.template')->with([
            'type' => 'Tes Urine Instansi',
            'nama_lengkap' => $this->tesUrineInstansi->nama_lengkap
        ]);;
    }
}
