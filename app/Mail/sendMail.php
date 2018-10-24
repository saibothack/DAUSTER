<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {

        return $this->view($this->data['view'])
            ->from($this->data['mail'], $this->data['name'])
            ->cc($this->data['mail'], $this->data['name'])
            ->bcc($this->data['mail'], $this->data['name'])
            ->replyTo($this->data['mail'], $this->data['name'])
            ->subject($this->data['subject'])
            ->with([ 'data' => $this->data ]);


    }
}
