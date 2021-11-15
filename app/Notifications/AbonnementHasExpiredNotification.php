<?php

namespace App\Notifications;

use App\Models\abonnements;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

class AbonnementHasExpiredNotification extends Notification
{
    use Queueable;

    /**
     * @var abonnements[]
     */
    private $abonnements;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Collection $abonnements)
    {
        $this->abonnements = $abonnements;
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
        return (new MailMessage)
                    ->line('Des notifications ont expirées')

            ->from('contact@application.com');
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
        foreach ($this->abonnements as $p) {
            $ids[] = $p->idabonnement;
        }
        return [
            'ids' => $ids,
            'datedebut' => $this->abonnements[0]->datedebut
        ];
    }
}
