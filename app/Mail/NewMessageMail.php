<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message_user = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new_message', ['name'=>$this->name, 'email'=>$this->email,'message_user'=>$this->message_user] )->subject('Nuevo mensaje en lipocero');
    }
}
