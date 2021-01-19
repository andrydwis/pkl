<?php

namespace App\Notifications;

use App\Mail\SosialisasiMail;
use App\Models\Sosialisasi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewSosialisasi extends Notification implements ShouldQueue
{
    use Queueable;

    public $sosialisasi;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Sosialisasi $sosialisasi)
    {
        //
        $this->sosialisasi = $sosialisasi;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new SosialisasiMail($this->sosialisasi))->to($notifiable->email);  
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
