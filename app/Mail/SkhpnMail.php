<?php

namespace App\Mail;

use App\Models\Skhpn;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SkhpnMail extends Mailable
{
    use Queueable, SerializesModels;

    public $skhpn;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Skhpn $skhpn)
    {
        $this->skhpn = $skhpn;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.template')->priority(1)->with([
            'type' => 'SKHPN',
            'nama_lengkap' => $this->skhpn->nama_lengkap
        ]);;
    }
}
