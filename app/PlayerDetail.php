<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerDetail extends Model
{
    //
    public function teams()
    {
        return $this->hasOne('App\Teams');
    }
}
