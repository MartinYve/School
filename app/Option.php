<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function niveau()
    {
        return $this->belongsTo(\App\Niveau::class);
    }
    public function users()
    {
        return $this->hasMany(\App\User::class);
    }
    public function enseignements()
    {
        return $this->hasMany(\App\Enseignement::class);
    }
}
