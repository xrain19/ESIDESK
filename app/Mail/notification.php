<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notification extends Mailable
{
    use Queueable, SerializesModels;

    public $notification;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('notification@esidesk.fr')->view('email.notification');
    }
}
