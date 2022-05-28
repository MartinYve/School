<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    protected $fillable = [
        'name',
        'cour',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(\App\user::class);
    }
}
