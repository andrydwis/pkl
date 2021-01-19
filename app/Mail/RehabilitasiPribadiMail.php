<?php

namespace App\Mail;

use App\Models\RehabilitasiPribadi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RehabilitasiPribadiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $rehabilitasiPribadi;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
        $this->rehabilitasiPribadi = $rehabilitasiPribadi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.template')->with([
            'type' => 'Rehabilitasi Pribadi',
            'nama_lengkap' => $this->rehabilitasiPribadi->nama_lengkap
        ]);;
    }
}
