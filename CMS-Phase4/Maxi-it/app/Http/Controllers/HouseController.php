<?php

namespace App\Http\Controllers;

use App\Host;
use App\House;
use App\Refugee;
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
            "type" => 'required'
        ]);
        $house = new House();
        $house->host_id = session('id');
        $house->refugee_id = null;
        $house->address = $request['address'];
        $house->nbRoom = $request['nbRoom'];
        $house->free = 1;
        $house->type = $request['type'];
        try {
            $house->save();
        } catch (\Exception $e) {
            return redirect("/");
        }
    }

    public function getAll()
    {
        $allHouse = House::all();
        return $allHouse;
    }

    public function Delete()
    {
        $host = Host::find(session('id'));
        $host->house()->delete();
    }

    public function Update(Request $request,House $houseGet)
    {
        if (!session('isAdmin')) {
            $house = House::where('host_id', session('id'));
            $house->free = !$house->free;
            $house->save();
        }
        elseif (session('isAdmin')){
            if ($request->isMethod('post')) {
                echo "tyest";
            }
            elseif($request->isMethod('get')) {
                return view('houses.editAdmin', ['house' => $houseGet]);
            }

        }
        $house = House::find($request->houseId);
        $house->fill($request->except('_token','houseId'))->save();
        return redirect("dashboard");

    }

    public function link(Request $request, House $house)
    {
        if ($request->isMethod('post')) {
            $rid = $request->input('refugeeId');

            $refugee = Refugee::find($rid);
            $refugee->accommodation = !$refugee->accommodation;
            $refugee->save();

            $house = House::find($request->input('houseId'));
            $house->refugee_id = $rid;
            $house->free = !$house->free;
            $house->save();
            return redirect("dashboard");


        } else if ($request->isMethod('get')) {
            $refugeeList = DB::table('refugees')->where('accommodation', 0)->get();
            return view('houses.link', [
                'house' => $house,
                'refugeeList' => $refugeeList]);
        }
    }

    public function unlink(House $house)
    {
        $refugee = Refugee::find($house->refugee_id);
        $refugee->accommodation = !$refugee->accommodation;
        $refugee->save();

        $house->free = !$house->free;
        $house->refugee_id = null;
        $house->save();
        return redirect("dashboard");

    }
}
