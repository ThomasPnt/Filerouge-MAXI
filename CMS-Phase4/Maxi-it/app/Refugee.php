<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refugee extends Model
{
    protected $fillable = ['contactName','nbAdult','nbChild','accommodation'];

    public function house()
    {
        return $this->hasOne('App\House');
    }
}
