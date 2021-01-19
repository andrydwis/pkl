<?php

namespace App\Notifications;

use App\Mail\RehabilitasiPribadiMail;
use App\Models\RehabilitasiPribadi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewRehabilitasiPribadi extends Notification implements ShouldQueue
{
    use Queueable;

    public $rehabilitasiPribadi;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
        $this->rehabilitasiPribadi = $rehabilitasiPribadi;
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
        return (new RehabilitasiPribadiMail($this->rehabilitasiInstansi))->to($notifiable->email);  
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
