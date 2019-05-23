<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $casts = [
        'profiles_array' => 'array'
    ];

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
