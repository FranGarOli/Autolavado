<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterService extends Model
{
    //cambiamos el nombre de la tabla intermedia porque no lo asocia bien
    protected $table = 'register_service';
}
