<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    protected $fillable = [
        'predio_id', 'tramite_id','fecha','user'
    ];
}
