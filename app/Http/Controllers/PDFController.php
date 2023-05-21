<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use PDF;


class PDFController extends Controller
{
    public function getPDF(Register $register){
        $pdf = PDF::loadView('back.registers.pdf', compact('register'));

        //visualiza con el nombre que le indicamos
        return $pdf->stream($register->client->name.'_'.$register->created_at.'.pdf');

        //para descargar
        //return $pdf-> download ('prueba.pdf');
    }
}
