<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{

    protected $fillable = [
        'name',
        'cour',
        'enseignants_id'
    ];
    public function enseignant()
    {
        return $this->belongsTo(\App\Enseignant::class);
    }
}
