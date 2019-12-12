<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    //

    public function playerdetail()
    {
        return $this->hasMany('App\User');
    }

}
