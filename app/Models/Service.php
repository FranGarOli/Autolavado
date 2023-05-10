<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function registers(){
        return $this->belongsToMany(Register::class, 'register_service');
    }
}
