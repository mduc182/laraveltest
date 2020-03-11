<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function register()
    {
        return $this->hasOne('App\Model\Register');
    }
}
