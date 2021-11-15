<?php

namespace App\Notifications;

use App\Models\publicites;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

class PubliciteHasExpiredNotification extends Notification
{
    use Queueable;

    /**
     * @var publicites[]
     */
    private $publicites;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Collection $publicites)
    {
        //
        $this->publicites = $publicites;
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
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->line('Des publications on expirées.')
                ->from('contact@application.com')
            ;
    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $ids = [];
        foreach ($this->publicites as $p) {
            $ids[] = $p->idabonnement;
        }
        return [
            'ids' => $ids,
            'datedebut' => $this->publicites[0]->datedebut
        ];
    }
}
