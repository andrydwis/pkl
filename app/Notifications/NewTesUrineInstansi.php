<?php

namespace App\Notifications;

use App\Mail\TesUrineInstansiMail;
use App\Models\TesUrineInstansi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewTesUrineInstansi extends Notification implements ShouldQueue
{
    use Queueable;

    public $tesUrineInstansi;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(TesUrineInstansi $tesUrineInstansi)
    {
        //
        $this->tesUrineInstansi = $tesUrineInstansi;
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
        return (new TesUrineInstansiMail($this->tesUrineInstansi))->to($notifiable->email);  
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
