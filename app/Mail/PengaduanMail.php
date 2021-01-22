<?php

namespace App\Mail;

use App\Models\Pengaduan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PengaduanMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pengaduan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pengaduan $pengaduan)
    {
        //
        $this->pengaduan = $pengaduan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.template')->priority(1)->with([
            'type' => 'Pengaduan',
            'nama_lengkap' => $this->pengaduan->nama_lengkap
        ]);
    }
    
}
