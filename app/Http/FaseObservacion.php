<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaseObservacion extends Model
{
    protected $fillable = [
        'fase_id', 'obervacion','user'
    ];
}
