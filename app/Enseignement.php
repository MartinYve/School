<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignement extends Model
{

    protected $fillable = [
        'option_id',
        'name',
    ];
    public function option()
    {
        return $this->belongsTo(\App\Option::class);
    }
    public function enseignant()
    {
        return $this->belongsTo(\App\Enseignant::class);
    }
}
