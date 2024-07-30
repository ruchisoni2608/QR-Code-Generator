<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobInquiryNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Career Notification from : '. $this->contact['name'] )
                    ->line('You have received Inquiry from '. $this->contact['name'] )
                    ->line('Name : '. $this->contact['name'] )
                    ->line('Email : '. $this->contact['email'] )
                    ->line('Phone : '. $this->contact['phone'] )
                    ->line('City : '. $this->contact['city'] )
                    ->line('Job Post : '. $this->contact['job_post'] )
                    ->line('Cover Letter : '. $this->contact['cover_letter'] )
                    ->line('Thank you for using our application!')
                    ->attach(storage_path() . "/app/public/resume/".$this->contact['resume']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
