<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    protected $fillable = ['firstname','lastname','email', 'password', 'id'];

    public function house()
    {
        return $this->hasOne('App\House');
    }
}
