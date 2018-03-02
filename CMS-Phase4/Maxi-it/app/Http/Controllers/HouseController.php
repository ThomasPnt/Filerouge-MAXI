<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HouseController extends Controller
{
    public function AddHouse(){
        $addHouseForm = input::all();
        $house = House::create($addHouseForm);
    }
}
