<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $fillable = [
        'nombre', 'user'
    ];
}
