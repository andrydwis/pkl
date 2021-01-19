<?php

namespace App\Notifications;

use App\Mail\SkhpnMail;
use App\Models\Skhpn;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewSkhpn extends Notification implements ShouldQueue
{
    use Queueable;

    public $skhpn;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Skhpn $skhpn)
    {
        //
        $this->skhpn = $skhpn;
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
        return (new SkhpnMail($this->skhpn))->to($notifiable->email);          
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
