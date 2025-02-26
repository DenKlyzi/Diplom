<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactFormMail extends Mailable
{
    public $name;
    public $phone;
    public $email;
    public $subject;
    public $text;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->text = $data['text'];
    }

    public function build()
    {
        return $this->subject($this->subject)->view('emails.contact_form');
    }
}
