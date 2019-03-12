<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $emailDetail;
   

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailDetail)
    {
        //
         $this->emailDetail = $emailDetail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.client_email_view');

    }
}
