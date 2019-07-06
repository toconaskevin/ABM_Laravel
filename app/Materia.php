<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    protected $fillable = [
        'nombre',
        'codigo'
    ];
}
