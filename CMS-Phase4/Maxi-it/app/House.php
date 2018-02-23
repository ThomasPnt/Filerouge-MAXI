<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public function refugee()
    {
        return $this->hasOne('App\Refugee');
    }

    public function host()
    {
        return $this->hasOne('App\Host');
    }
}
