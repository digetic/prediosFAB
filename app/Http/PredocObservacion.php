<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PredocObservacion extends Model
{
    protected $fillable = [
        'prediodoc_id', 'documento_id','archivo','user'
    ];
}
