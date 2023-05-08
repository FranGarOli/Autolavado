<?php

namespace App\Http\Controllers;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $mensaje;

    public function __construct($name, $email, $mensaje)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this->from($this->email)
            ->subject('Mensaje de: '.$this->name)
            ->view('front.gmailSent', ['mensaje' => $this->mensaje, 'email' => $this->email]);
    }
}
