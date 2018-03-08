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
            return redirect("/");
        } catch (\Exception $e) {
            return redirect("/");
        }
    }

    public function getAll()
    {
        $allHouse = House::all();
        return $allHouse;
    }

    public function Delete(House $houseGet)
    {
        if (session('id')) {
            $host = Host::find(session('id'));
            $host->house()->delete();
            return redirect("/profile");
        } elseif (session('isAdmin')) {
            $houseGet->delete();
            return redirect("/dashboard");
        }
    }

    public function UpdateHouse(Request $request, House $houseGet)
    {
        if (session('id')) {
            $house = House::where('host_id', session('id'));
            $house->update($request->except('_token'));
            return redirect("/house");
        } elseif (session('isAdmin')) {
            if ($request->isMethod('post')) {
                $house = House::find($request->houseId);
                $house->update($request->except('_token', 'houseId'));
                return redirect("dashboard");
            } elseif ($request->isMethod('get')) {
                return view('houses.editHouseAdmin', ['house' => $houseGet]);
            }
        }
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

