<?php

namespace SON\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{
    use Queueable;

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
        $appName = config('app.name');
        return (new MailMessage)
            ->subject("Sua conta no $appName foi criada")
            ->greeting("Olá {$notifiable->name}, seja bem-vindo ao $appName")
            ->line("Seu número de matricula é {$notifiable->enrolment}")
            ->line("Obrigado por usar nossa aplicação!")
            ->salutation('');
    }

}
