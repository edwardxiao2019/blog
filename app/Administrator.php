<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
    protected $connection = 'mysql';

    protected $guarded = [];

    //article list
    public function posts()
    {
        return $this->hasMany('\App\Post','user_id', 'id');
    }

}
