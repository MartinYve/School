<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function options()
    {
        return $this->hasMany(\App\Option::class);
    }
}
