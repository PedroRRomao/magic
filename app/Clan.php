<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $fillable = [
        'name', 'description'
    ];


    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
