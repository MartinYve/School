<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devoirs extends Model
{
    public function enseignant()
    {
        return $this->belongsTo(\App\Enseignant::class);
    }
}
