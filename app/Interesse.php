<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{
    protected $fillable = [
        'usuario_id', 'evento_id'
    ];
}
