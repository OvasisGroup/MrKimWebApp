<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApplicationAwarded extends Notification
{
    use Queueable;

    protected $posted_job;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        $this->posted_job = posted_job;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'broadcast', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new \Illuminate\Notifications\Messages\MailMessage)
                    ->subject('Congratulations! You have been awarded a job!')
                    ->line('You have been awarded the job: {$this->posted_job->title}')
                    ->action('View Job', url('/jobs/' . $this->posted_job->id))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray($notifiable)
    {
        return [
            'posted_job_id' => $this->posted_job->id,
            'title' => $this->posted_job->title,
            'message' => 'You have been awarded the job! {$this->posted_job->title}',
        ];
    }
}
