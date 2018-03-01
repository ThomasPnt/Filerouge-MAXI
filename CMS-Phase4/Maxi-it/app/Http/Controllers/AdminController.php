<?php

namespace App\Http\Controllers;

use App\Refugee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;

class AdminController extends Controller
{
    public function addToList(Request $request)
    {
        $data = Input::all();
        $refugee = Refugee::create($data);

        /*$request->validate( [
            'contactName' => 'required',
            'nbAdult' => 'required|integer',
            'nbChild' => 'required|integer',
            'accomodation' => 'required|boolean',
        ]);*/

        echo $refugee->contactName;
    }

    public function removeFromList()
    {
        return "5";
    }

    public function editInfos()
    {
        return "3";
    }

    public function index()
    {
        return "4";
    }
}
