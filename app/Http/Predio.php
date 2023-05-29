<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $fillable = [
        'propiedad_id', 'departamento_id','provincia_id','municipio_id','codigo','nombre','d2','d3','tipoPredio','direccion','saneado','observacion','user'
    ];
}
