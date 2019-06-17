<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $fillable = [
        'nota1',
        'nota2',
        'final'
    ];
}
