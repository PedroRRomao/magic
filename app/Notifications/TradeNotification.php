<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TradeNotification extends Notification
{
    use Queueable;

    private $details;
    protected $card_user;
    protected $card_trader;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct($details, $card_user, $card_trader)
    {
        $this->details = $details;
        $this->card_user = $card_user;
        $this->card_trader = $card_trader;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      $image_trade = $this->details['image_trader']->src;
      $image_user = $this->details['image_user']->src;

        return (new MailMessage)
                    ->line($this->details['greeting'])
                    ->line('Trade this card:')
                    ->line("http://127.0.0.1:8000/".$image_trade)
                    ->line('With this card:')
                    ->line("http://127.0.0.1:8000/".$image_user)
                    ->action('Join Trade', $this->details['actionURL'])
                    ->line('Thank you for using our application!');
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

        ];
    }

    public function toDatabase($notifiable)
    {
        return [
            'image_trade' => $this->card_trader->id,
            'image_user' => $this->card_user->id,
            'order_id' => $this->details['order_id']
        ];
    }

}
