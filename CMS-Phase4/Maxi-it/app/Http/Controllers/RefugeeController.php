<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefugeeController extends Controller
{
    public function addToList(Request $request)
    {
        var_dump($request);
        return "1";
    }

    public function removeFromList()
    {
        return "2";
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
