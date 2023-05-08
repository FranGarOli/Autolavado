<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class StaticPagesController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function services(){
        return view('front.services');
    }

    public function contact(){
        return view('front.contact');
    }

    public function dateBookings(){
        return view('front.bookings');
    }

    public function cookies(){
        return view('front.cookies');
    }

    public function sendEmail(Request $request){

        //Datos que recibimos del formulario
        $name = $request->get('name');
        $email = $request->get('email');
        $mensaje = $request->get('mensaje');

        //Configuracion del correo
//        $para = 'fran.garciaa22@gmail.com';
//        $titulo = 'Mensaje consulta autolavado';
//
//        $headers = "From: " . $email . "rn";
//        $headers .= "Reply-To: " . $para . "rn";
//
//        ini_set('SMTP', 'smtp.gmail.com');
//        ini_set('smtp_port', 587);
//        ini_set('username', 'fran.garciaa22@gmail.com');
//        ini_set('password', 'lyenkzzacvpazbsr');

        Mail::to('fran.garciaa22@gmail.com')->send(new ContactForm($name, $email, $mensaje));


//        //Enviamos el correo
//        mail($para, $titulo, $mensaje, $headers);

        //Redirigimos a la pagina contacto
        return redirect()->back()->with('mensaje', 'El mensaje se ha mandado. Recibirás una respuesta por email.');
    }
}
