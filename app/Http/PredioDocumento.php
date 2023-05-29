<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PredioDocumento extends Model
{
    protected $fillable = [
        'predio_id', 'documento_id','archivo','user'
    ];
}
