<?php

namespace App\Http\Controllers;

use App\Host;
use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class HouseController extends Controller
{
    public function AddHouse(Request $request)
    {
        $this->validate($request, [
            "address" => 'required',
            "nbRoom" => 'required|integer',
            "free" => 'required|boolean',
            "type" => 'required'
        ]);
        $house = new House();
        $house->host_id = session('id');
        $house->refugee_id = null;
        $house->address = $request['address'];
        $house->nbRoom = $request['nbRoom'];
        $house->free = $request['free'];
        $house->type = $request['type'];
        try{
            $house->save();
        } catch(\Exception $e) {
            return redirect("/");
        }
    }

    public function getAll(){
        $allHouse = House::all();
        return $allHouse;
    }

    public function Delete(){
        $host = Host::find(session('id'));
        $host->house()->delete();
    }

    public function Update(){
        $house = House::where('host_id', session('id'));
        $house->free = !$house->free;
        $house->save();
    }
}
